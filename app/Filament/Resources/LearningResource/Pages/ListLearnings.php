<?php

namespace Modules\Tertiary\Filament\Resources\LearningResource\Pages;

use Modules\Tertiary\Filament\Resources\LearningResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearnings extends ListRecords
{
    protected static string $resource = LearningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
