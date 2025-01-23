<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\Department;

class DepartmentResource extends BaseResource
{
    protected static ?string $model = Department::class;

    protected static ?string $slug = 'tertiary/department';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
