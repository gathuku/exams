<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PaymentController extends Controller
{

    public function mpesaExpress(Request $request)
    {
       $validateData=$request->validate([
         'phone' => 'required|regex:/^2547\d{8}$/'
       ]);

      $phone=$request->input('phone');
      $expressResponse=Mpesa::express(1,$phone,'24242524','Testing Payment');

      dd($expressResponse);
    }

    public function lnmocallback(Request $request)
    {

      $data=format_lmno($request->getContent());
      

    }

    function format_lmno($data){
         //$data is the json encoded pqyload from mpesa.
        	$data = json_decode($data);
        	$tmp = $data->Body->stkCallback;
        	$master = array();
        	foreach($data->Body->stkCallback->CallbackMetadata->Item as $item){
        		$item = (array) $item;
        		$master[$item['Name']] = ((isset($item['Value'])) ? $item['Value'] : NULL);

        	}
        	$master = (object) $master;
        	$master->ResultCode = $tmp->ResultCode;
        	$master->MerchantRequestID = $tmp->MerchantRequestID;
        	$master->CheckoutRequestID = $tmp->CheckoutRequestID;
        	$master->ResultDesc = $tmp->ResultDesc;

        	//Returns an object
        	return $master;
}
}
