<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
   protected $table='session';

   protected $fillable=[
     'regno',
     'year_id',
     'semester_id',
     'status'
   ];

   public function year(){
    return $this->belongsTo('App\Year');

   }

   public function semester(){
    return $this->belongsTo('App\Semester');
   }
}
