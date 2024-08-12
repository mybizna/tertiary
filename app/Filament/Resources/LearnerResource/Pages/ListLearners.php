<?php

namespace Modules\Tertiary\Filament\Resources\LearnerResource\Pages;

use Modules\Tertiary\Filament\Resources\LearnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearners extends ListRecords
{
    protected static string $resource = LearnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
