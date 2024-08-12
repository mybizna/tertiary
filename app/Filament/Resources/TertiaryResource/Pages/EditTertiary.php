<?php

namespace Modules\Tertiary\Filament\Resources\TertiaryResource\Pages;

use Modules\Tertiary\Filament\Resources\TertiaryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTertiary extends EditRecord
{
    protected static string $resource = TertiaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
