<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $fillable=[
      'course_id',
      'unit_id',
      'lecturer_id',
      'semester_id',
    ];
}
