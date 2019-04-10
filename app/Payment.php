<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
      'amount',
      'receipt_number',
      'phone',
      'paid_for',
      'paid_at'
    ];
}
