<?php

namespace Modules\Tertiary\Filament\Resources\ClassYearResource\Pages;

use Modules\Tertiary\Filament\Resources\ClassYearResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassYear extends EditRecord
{
    protected static string $resource = ClassYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
