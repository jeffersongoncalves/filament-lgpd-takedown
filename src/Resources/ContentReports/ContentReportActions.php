<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports;

use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use JeffersonGoncalves\LgpdTakedown\Enums\ReportStatus;
use JeffersonGoncalves\LgpdTakedown\Models\ContentReport;
use JeffersonGoncalves\LgpdTakedown\TakedownManager;

class ContentReportActions
{
    /**
     * @param  class-string<Action|TableAction>  $class
     * @return list<Action|TableAction>
     */
    public static function all(string $class = Action::class): array
    {
        return [static::remove($class), static::reject($class), static::reportedToAuthority($class), static::decideAppeal($class)];
    }

    public static function remove(string $class = Action::class): Action|TableAction
    {
        return $class::make('remove')
            ->label(ContentReportResource::label('actions.remove'))
            ->icon('heroicon-o-eye-slash')
            ->color('danger')
            ->modalDescription(ContentReportResource::label('help.remove'))
            ->visible(fn (ContentReport $record): bool => $record->status === ReportStatus::Open)
            ->form([
                Textarea::make('decision')
                    ->label(ContentReportResource::label('fields.decision'))
                    ->helperText(ContentReportResource::label('help.decision'))
                    ->required(),
            ])
            ->action(function (ContentReport $record, array $data): void {
                app(TakedownManager::class)->remove($record, $data['decision']);
                static::done('removed');
            });
    }

    public static function reject(string $class = Action::class): Action|TableAction
    {
        return $class::make('reject')
            ->label(ContentReportResource::label('actions.reject'))
            ->icon('heroicon-o-x-circle')
            ->color('gray')
            ->visible(fn (ContentReport $record): bool => $record->status === ReportStatus::Open)
            ->form([
                Textarea::make('decision')
                    ->label(ContentReportResource::label('fields.decision'))
                    ->required(),
            ])
            ->action(function (ContentReport $record, array $data): void {
                app(TakedownManager::class)->reject($record, $data['decision']);
                static::done('rejected');
            });
    }

    public static function reportedToAuthority(string $class = Action::class): Action|TableAction
    {
        return $class::make('reportedToAuthority')
            ->label(ContentReportResource::label('actions.reported_to_authority'))
            ->icon('heroicon-o-building-library')
            ->color('warning')
            ->modalDescription(ContentReportResource::label('help.authority'))
            ->visible(fn (ContentReport $record): bool => $record->owesAuthorityReport())
            ->form([
                TextInput::make('protocol')
                    ->label(ContentReportResource::label('fields.authority_protocol'))
                    ->maxLength(255),
            ])
            ->action(function (ContentReport $record, array $data): void {
                app(TakedownManager::class)->reportedToAuthority($record, filled($data['protocol'] ?? null) ? $data['protocol'] : null);
                static::done('reported');
            });
    }

    public static function decideAppeal(string $class = Action::class): Action|TableAction
    {
        return $class::make('decideAppeal')
            ->label(ContentReportResource::label('actions.decide_appeal'))
            ->icon('heroicon-o-scale')
            ->color('info')
            ->visible(fn (ContentReport $record): bool => $record->awaitsAppealDecision())
            ->modalDescription(fn (ContentReport $record): string => ContentReportResource::label('fields.appeal').': '.$record->appeal)
            ->form([
                Toggle::make('restore')
                    ->label(ContentReportResource::label('fields.restore'))
                    ->helperText(ContentReportResource::label('help.restore')),
                Textarea::make('decision')
                    ->label(ContentReportResource::label('fields.appeal_decision'))
                    ->required(),
            ])
            ->action(function (ContentReport $record, array $data): void {
                app(TakedownManager::class)->decideAppeal($record, (bool) ($data['restore'] ?? false), $data['decision']);
                static::done('appeal_decided');
            });
    }

    protected static function done(string $key): void
    {
        Notification::make()->success()->title(ContentReportResource::label("notifications.{$key}"))->send();
    }
}
