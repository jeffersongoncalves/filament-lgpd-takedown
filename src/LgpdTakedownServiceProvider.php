<?php

namespace JeffersonGoncalves\Filament\LgpdTakedown;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdTakedownServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-takedown';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
