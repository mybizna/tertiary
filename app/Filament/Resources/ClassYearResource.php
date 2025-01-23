<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\ClassYear;

class ClassYearResource extends BaseResource
{
    protected static ?string $model = ClassYear::class;

    protected static ?string $slug = 'tertiary/class/year';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
