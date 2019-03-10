<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable=[
      'year_id',
      'name',
      'exam_date',
      'current',
    ];

    public function year()
    {
      return $this->belongsTo('App\Year');
    }

}
