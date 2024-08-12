<?php

namespace Modules\Tertiary\Filament\Resources\QualificationResource\Pages;

use Modules\Tertiary\Filament\Resources\QualificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualifications extends ListRecords
{
    protected static string $resource = QualificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
