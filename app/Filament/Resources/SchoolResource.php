<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\School;

class SchoolResource extends BaseResource
{
    protected static ?string $model = School::class;

    protected static ?string $slug = 'tertiary/school';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
