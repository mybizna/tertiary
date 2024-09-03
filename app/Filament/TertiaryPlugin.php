<?php

namespace Modules\Tertiary\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class TertiaryPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Tertiary';
    }

    public function getId(): string
    {
        return 'tertiary';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
