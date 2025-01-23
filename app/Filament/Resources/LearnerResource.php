<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\Learner;

class LearnerResource extends BaseResource
{
    protected static ?string $model = Learner::class;

    protected static ?string $slug = 'tertiary/learner';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
