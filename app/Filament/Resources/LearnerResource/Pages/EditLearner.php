<?php

namespace Modules\Tertiary\Filament\Resources\LearnerResource\Pages;

use Modules\Tertiary\Filament\Resources\LearnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearner extends EditRecord
{
    protected static string $resource = LearnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
