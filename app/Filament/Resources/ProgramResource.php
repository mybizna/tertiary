<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\Program;

class ProgramResource extends BaseResource
{
    protected static ?string $model = Program::class;

    protected static ?string $slug = 'tertiary/program';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
