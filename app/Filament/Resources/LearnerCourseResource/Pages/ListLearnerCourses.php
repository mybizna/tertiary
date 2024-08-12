<?php

namespace Modules\Tertiary\Filament\Resources\LearnerCourseResource\Pages;

use Modules\Tertiary\Filament\Resources\LearnerCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearnerCourses extends ListRecords
{
    protected static string $resource = LearnerCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
