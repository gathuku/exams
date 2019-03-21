<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function mpesaExpress()
    {
      $expressResponse=Mpesa::express(100,'2547112855','24242524','Testing Payment');
    }

    public function lnmocallback(Request $request)
    {
       \Log::info($request->getContent());
    }
}
