<?php

namespace Modules\Tertiary\Filament\Resources\LearnerCourseResource\Pages;

use Modules\Tertiary\Filament\Resources\LearnerCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearnerCourse extends EditRecord
{
    protected static string $resource = LearnerCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
