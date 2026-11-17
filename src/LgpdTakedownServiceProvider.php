<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdTakedownServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd-takedown')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
