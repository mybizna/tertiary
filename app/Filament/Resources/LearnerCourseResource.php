<?php

namespace Modules\Tertiary\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Models\LearnerCourse;

class LearnerCourseResource extends BaseResource
{
    protected static ?string $model = LearnerCourse::class;

    protected static ?string $slug = 'tertiary/learner/course';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
