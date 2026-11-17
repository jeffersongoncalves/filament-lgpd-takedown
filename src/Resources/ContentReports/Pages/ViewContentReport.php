<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\Pages;

use Filament\Resources\Pages\ViewRecord;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\ContentReportActions;
use JeffersonGoncalves\Filament\LgpdTakedown\Resources\ContentReports\ContentReportResource;

class ViewContentReport extends ViewRecord
{
    protected static string $resource = ContentReportResource::class;

    protected function getHeaderActions(): array
    {
        return ContentReportActions::all();
    }
}
