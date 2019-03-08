<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
  protected $fillable=[
    'faculty_id',
    'name',
    'type'
  ];


}
