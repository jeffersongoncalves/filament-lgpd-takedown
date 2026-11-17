<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports;

use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use JeffersonGoncalves\LgpdTakedown\Enums\ReportStatus;
use JeffersonGoncalves\LgpdTakedown\Models\ContentReport;
use JeffersonGoncalves\LgpdTakedown\TakedownManager;

class ContentReportActions
{
    /**
     * @return list<Action>
     */
    public static function all(): array
    {
        return [static::remove(), static::reject(), static::reportedToAuthority(), static::decideAppeal()];
    }

    public static function remove(): Action
    {
        return Action::make('remove')
            ->label(ContentReportResource::label('actions.remove'))
            ->icon('heroicon-o-eye-slash')
            ->color('danger')
            ->modalDescription(ContentReportResource::label('help.remove'))
            ->visible(fn (ContentReport $record): bool => $record->status === ReportStatus::Open)
            ->schema([
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

    public static function reject(): Action
    {
        return Action::make('reject')
            ->label(ContentReportResource::label('actions.reject'))
            ->icon('heroicon-o-x-circle')
            ->color('gray')
            ->visible(fn (ContentReport $record): bool => $record->status === ReportStatus::Open)
            ->schema([
                Textarea::make('decision')
                    ->label(ContentReportResource::label('fields.decision'))
                    ->required(),
            ])
            ->action(function (ContentReport $record, array $data): void {
                app(TakedownManager::class)->reject($record, $data['decision']);
                static::done('rejected');
            });
    }

    public static function reportedToAuthority(): Action
    {
        return Action::make('reportedToAuthority')
            ->label(ContentReportResource::label('actions.reported_to_authority'))
            ->icon('heroicon-o-building-library')
            ->color('warning')
            ->modalDescription(ContentReportResource::label('help.authority'))
            ->visible(fn (ContentReport $record): bool => $record->owesAuthorityReport())
            ->schema([
                TextInput::make('protocol')
                    ->label(ContentReportResource::label('fields.authority_protocol'))
                    ->maxLength(255),
            ])
            ->action(function (ContentReport $record, array $data): void {
                app(TakedownManager::class)->reportedToAuthority($record, filled($data['protocol'] ?? null) ? $data['protocol'] : null);
                static::done('reported');
            });
    }

    public static function decideAppeal(): Action
    {
        return Action::make('decideAppeal')
            ->label(ContentReportResource::label('actions.decide_appeal'))
            ->icon('heroicon-o-scale')
            ->color('info')
            ->visible(fn (ContentReport $record): bool => $record->awaitsAppealDecision())
            ->modalDescription(fn (ContentReport $record): string => ContentReportResource::label('fields.appeal').': '.$record->appeal)
            ->schema([
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
