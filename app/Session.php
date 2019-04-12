<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
   protected $fillable=[
     'regno',
     'year_id',
     'semester_id',
     'status'
   ];

   public function year(){
     $this->belongsTo('App\Year');

   }

   public function semester(){
     $this->belongsTo('App\Semester');
   }
}
