<?php

namespace Modules\Tertiary\Filament\Resources\TertiaryResource\Pages;

use Modules\Tertiary\Filament\Resources\TertiaryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTertiaries extends ListRecords
{
    protected static string $resource = TertiaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
