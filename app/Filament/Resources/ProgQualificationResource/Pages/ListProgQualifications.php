<?php

namespace Modules\Tertiary\Filament\Resources\ProgQualificationResource\Pages;

use Modules\Tertiary\Filament\Resources\ProgQualificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgQualifications extends ListRecords
{
    protected static string $resource = ProgQualificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
