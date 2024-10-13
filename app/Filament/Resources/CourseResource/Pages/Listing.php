<?php

namespace Modules\Tertiary\Filament\Resources\CourseResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Tertiary\Filament\Resources\CourseResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = CourseResource::class;
}
