<?php

namespace App\Listeners;

use App\Events\PaymentMade;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SavePayment
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PaymentMade  $event
     * @return void
     */
    public function handle(PaymentMade $event)
    {
      $paymentData=$event->data;
      \Log::info($paymentData);
      //save to database
      Payment::create([

      ]);
    }
}
