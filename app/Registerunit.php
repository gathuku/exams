<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registerunit extends Model
{
    protected $fillable=[
      'regno',
      'unit_id',
      'semester_id',
    ];

    public function unit()
    {
      return $this->belongsTo('App\Unit');
    }
}
