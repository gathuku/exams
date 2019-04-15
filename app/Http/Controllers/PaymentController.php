<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Events\PaymentMade;
use Mpesa;
use App\Payment;
use App\Registerunit;

class PaymentController extends Controller
{

   public $unitID;

   public function index(){
      $payments=Payment::all();
    // dd($payments);
     return view('payment.index',compact('payments'));
   }
    public function mpesaExpress(Request $request)
    {
       $validateData=$request->validate([
         'phone' => 'required|regex:/^2547\d{8}$/'
       ]);

      $phone=$request->input('phone');
      $this->unitID=$request->input('unitID');
    //  dd($this->unitID);

      $expressResponse=Mpesa::express(1,$phone,'24242524','Testing Payment');

    flash('Request sent, Kindly Check your phone and Enter pin')->success();
    return back();
    }

    public function lnmocallback(Request $request)
    {

    $data=$this->format_lmno($request->getContent());
    \Log::info($this->unitID);
     //save to database
    Payment::create([
      'amount' =>$data->Amount,
      'receipt_number'=>$data->MpesaReceiptNumber,
      'phone'=>$data->PhoneNumber,
      'paid_for'=>$this->unitID,
      'paid_at'=>$data->TransactionDate,
    ]);

   //Update Paid to true
    Registerunit::where('id',$this->unitID)->update([
      'paid'=>1,
    ]);

    }

       public  function format_lmno($data){
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

        	return $master;

}
}
