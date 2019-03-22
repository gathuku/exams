<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PaymentController extends Controller
{

    public function mpesaExpress()
    {
      $expressResponse=Mpesa::express(100,'254705112855','24242524','Testing Payment');
    }

    public function lnmocallback(Request $request)
    {
       \Log::info($request->getContent());
    }
}
