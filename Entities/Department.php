<?php

namespace Modules\Tertiary\Entities;

use Modules\Base\Entities\BaseModel;

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

}
