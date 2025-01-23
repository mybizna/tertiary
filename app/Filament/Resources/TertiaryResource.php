<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\Tertiary;

class TertiaryResource extends BaseResource
{
    protected static ?string $model = Tertiary::class;

    protected static ?string $slug = 'tertiary/tertiary';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
