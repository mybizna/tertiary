<?php

namespace Modules\Tertiary\Models;

use Modules\Base\Models\BaseModel;

class LearnerCourse extends BaseModel
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
    protected $table = "tertiary_learner_course";

}
