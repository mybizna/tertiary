<?php

namespace Modules\Tertiary\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Base\Filament\Resources\BaseResource;
use Modules\Tertiary\Filament\Resources\QualificationResource\Pages;
use Modules\Tertiary\Models\Qualification;

class QualificationResource extends BaseResource
{
    protected static ?string $model = Qualification::class;

    protected static ?string $slug = 'tertiary/qualification';

    protected static ?string $navigationGroup = 'Tertiary';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
