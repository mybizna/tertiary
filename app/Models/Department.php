<?php

namespace Modules\Tertiary\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Department extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'description', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "tertiary_department";


    public function migration(Blueprint $table): void
    {


        $table->string('name');
        $table->string('description');
        $table->string('published');

    }
}
