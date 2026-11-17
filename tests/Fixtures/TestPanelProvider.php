<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\LgpdTakedown\LgpdTakedownPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                LgpdTakedownPlugin::make(),
            ]);
    }
}
