<?php

namespace Modules\Tertiary\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Filament\Resources\CourseResource\Pages;
use Modules\Tertiary\Models\Course;

class CourseResource extends BaseResource
{
    protected static ?string $model = Course::class;

    protected static ?string $slug = 'tertiary/course';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
