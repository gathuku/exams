<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable=[
      'program_id',
      'name',
      'code',
      'hours'
    ];
}
