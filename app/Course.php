<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    function trainees() {
        return $this->belongsTo('App\Trainee');
    }
}
