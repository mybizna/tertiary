<?php

namespace Modules\Tertiary\Filament\Resources\LearningResource\Pages;

use Modules\Tertiary\Filament\Resources\LearningResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearning extends EditRecord
{
    protected static string $resource = LearningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
