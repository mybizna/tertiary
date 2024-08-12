<?php

namespace Modules\Tertiary\Filament\Resources\ProgQualificationResource\Pages;

use Modules\Tertiary\Filament\Resources\ProgQualificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgQualification extends EditRecord
{
    protected static string $resource = ProgQualificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
