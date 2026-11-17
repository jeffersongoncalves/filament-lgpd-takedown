<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports;

use BackedEnum;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\LgpdTakedown\LgpdTakedownPlugin;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\Pages\ListContentReports;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\Pages\ViewContentReport;
use JeffersonGoncalves\LgpdTakedown\Enums\ReportCategory;
use JeffersonGoncalves\LgpdTakedown\Enums\ReporterRole;
use JeffersonGoncalves\LgpdTakedown\Enums\ReportStatus;
use JeffersonGoncalves\LgpdTakedown\Models\ContentReport;

class ContentReportResource extends Resource
{
    protected static ?string $model = ContentReport::class;

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(2)
            ->schema([
                Section::make(static::label('sections.notice'))
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('content_id')
                            ->label(static::label('fields.content'))
                            ->formatStateUsing(fn (ContentReport $record): string => class_basename($record->content_type).' #'.$record->content_id),
                        TextEntry::make('category')
                            ->label(static::label('fields.category'))
                            ->formatStateUsing(fn (ReportCategory $state): string => static::label("categories.{$state->value}"))
                            ->color(fn (ReportCategory $state): string => $state->isGrave() ? 'danger' : 'gray')
                            ->badge(),
                        TextEntry::make('reporter_name')
                            ->label(static::label('fields.reporter')),
                        TextEntry::make('reporter_email')
                            ->label(static::label('fields.reporter_email')),
                        TextEntry::make('reporter_role')
                            ->label(static::label('fields.reporter_role'))
                            ->formatStateUsing(fn (ReporterRole $state): string => static::label("roles.{$state->value}")),
                        IconEntry::make('reporter_flagged')
                            ->label(static::label('fields.reporter_flagged'))
                            ->boolean(),
                        TextEntry::make('description')
                            ->label(static::label('fields.description'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('created_at')
                            ->label(static::label('fields.reported_at'))
                            ->dateTime(),
                    ]),
                Section::make(static::label('sections.decision'))
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('status')
                            ->label(static::label('fields.status'))
                            ->formatStateUsing(fn (ReportStatus $state): string => static::label("status.{$state->value}"))
                            ->color(fn (ReportStatus $state): string => static::statusColor($state))
                            ->badge(),
                        IconEntry::make('automated')
                            ->label(static::label('fields.automated'))
                            ->boolean(),
                        TextEntry::make('decision')
                            ->label(static::label('fields.decision'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('decided_at')
                            ->label(static::label('fields.decided_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('retain_until')
                            ->label(static::label('fields.retain_until'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('authority_reported_at')
                            ->label(static::label('fields.authority_reported_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('authority_protocol')
                            ->label(static::label('fields.authority_protocol'))
                            ->placeholder('-'),
                        TextEntry::make('author_notified_at')
                            ->label(static::label('fields.author_notified_at'))
                            ->dateTime()
                            ->placeholder('-'),
                    ]),
                Section::make(static::label('sections.appeal'))
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('appeal_until')
                            ->label(static::label('fields.appeal_until'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('appealed_at')
                            ->label(static::label('fields.appealed_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('appeal')
                            ->label(static::label('fields.appeal'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('appeal_decision')
                            ->label(static::label('fields.appeal_decision'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('restored_at')
                            ->label(static::label('fields.restored_at'))
                            ->dateTime()
                            ->placeholder('-'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label(static::label('fields.reported_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('category')
                    ->label(static::label('fields.category'))
                    ->formatStateUsing(fn (ReportCategory $state): string => static::label("categories.{$state->value}"))
                    ->color(fn (ReportCategory $state): string => $state->isGrave() ? 'danger' : 'gray')
                    ->badge(),
                TextColumn::make('content_id')
                    ->label(static::label('fields.content'))
                    ->formatStateUsing(fn (ContentReport $record): string => class_basename($record->content_type).' #'.$record->content_id),
                TextColumn::make('reporter_role')
                    ->label(static::label('fields.reporter_role'))
                    ->formatStateUsing(fn (ReporterRole $state): string => static::label("roles.{$state->value}"))
                    ->description(fn (ContentReport $record): string => $record->reporter_email),
                IconColumn::make('reporter_flagged')
                    ->label(static::label('fields.reporter_flagged'))
                    ->boolean()
                    ->trueColor('danger')
                    ->falseIcon(null),
                TextColumn::make('status')
                    ->label(static::label('fields.status'))
                    ->formatStateUsing(fn (ReportStatus $state): string => static::label("status.{$state->value}"))
                    ->color(fn (ReportStatus $state): string => static::statusColor($state))
                    ->badge(),
                TextColumn::make('pending')
                    ->label(static::label('fields.pending'))
                    ->state(fn (ContentReport $record): array => array_values(array_filter([
                        $record->owesAuthorityReport() ? static::label('pending.authority') : null,
                        $record->awaitsAppealDecision() ? static::label('pending.appeal') : null,
                    ])))
                    ->badge()
                    ->color('warning')
                    ->placeholder('-'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label(static::label('fields.status'))
                    ->options(static::options(ReportStatus::cases(), 'status'))
                    ->default(ReportStatus::Open->value),
                SelectFilter::make('category')
                    ->label(static::label('fields.category'))
                    ->options(static::options(ReportCategory::cases(), 'categories')),
                TernaryFilter::make('reporter_flagged')
                    ->label(static::label('fields.reporter_flagged')),
                TernaryFilter::make('needs_action')
                    ->label(static::label('filters.needs_action'))
                    ->queries(
                        true: fn (Builder $query): Builder => $query->where(fn (Builder $q) => $q
                            ->where('status', ReportStatus::Open->value)
                            ->orWhere(fn (Builder $q) => $q->scopes('owingAuthorityReport'))
                            ->orWhere(fn (Builder $q) => $q->scopes('awaitingAppealDecision'))),
                        false: fn (Builder $query): Builder => $query,
                    ),
            ])
            ->actions([
                ViewAction::make(),
                ActionGroup::make(ContentReportActions::all(TableAction::class)),
            ]);
    }

    public static function statusColor(ReportStatus $status): string
    {
        return match ($status) {
            ReportStatus::Open => 'warning',
            ReportStatus::Removed => 'danger',
            ReportStatus::Rejected => 'gray',
        };
    }

    /**
     * @param  list<\UnitEnum&BackedEnum>  $cases
     * @return array<string, string>
     */
    public static function options(array $cases, string $group): array
    {
        return collect($cases)
            ->mapWithKeys(fn (BackedEnum $case): array => [(string) $case->value => static::label("{$group}.{$case->value}")])
            ->all();
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContentReports::route('/'),
            'view' => ViewContentReport::route('/{record}'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $count = ContentReport::query()->scopes('open')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function label(string $key): string
    {
        return __("filament-lgpd-takedown::filament-lgpd-takedown.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return LgpdTakedownPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return LgpdTakedownPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return LgpdTakedownPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return LgpdTakedownPlugin::get()->getSlug();
    }
}
