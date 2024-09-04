<?php

namespace Modules\Tertiary\Models;

use Modules\Base\Models\BaseModel;

class ClassYear extends BaseModel
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
    protected $table = "tertiary_class_year";

}