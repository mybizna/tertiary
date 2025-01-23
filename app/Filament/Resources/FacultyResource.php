<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\Faculty;

class FacultyResource extends BaseResource
{
    protected static ?string $model = Faculty::class;

    protected static ?string $slug = 'tertiary/faculty';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
