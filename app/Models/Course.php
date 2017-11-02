<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function courseCategory_id() {
        return $this->hasOne('App\Models\CourseCategory', 'foreign_key');
    }
}
