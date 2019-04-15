<?php

return [

     //Specify the environment mpesa is running, sandbox or production
    'mpesa_env' => 'sandbox',
    /*-----------------------------------------
    |The App consumer key
    |------------------------------------------
    */
    'consumer_key'   => 'aR7R09zePq0OSfOttvuQDrfdM4n37i0C',

    /*-----------------------------------------
    |The App consumer Secret
    |------------------------------------------
    */
    'consumer_secret' => 'F9AebI6azDlRjLiR',

    /*-----------------------------------------
    |The paybill number
    |------------------------------------------
    */
    'paybill'         =>600577,

    /*-----------------------------------------
    |The Lipa Na Mpesa Paybill Number SGA key
    |------------------------------------------
    */
    'lipa_na_mpesa'  => '174379',

    /*-----------------------------------------
    |Lipa Na Mpesa online checkout password
    |------------------------------------------
    */
    'lipa_na_mpesa_passkey' => 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',

    /*-----------------------------------------
    |Initiator Username.
    |------------------------------------------
    */
    'initiator_username' => 'testapi',

    /*-----------------------------------------
    |Initiator Password
    |------------------------------------------
    */
    'initiator_password' => 'Safaricom577!',

    /*-----------------------------------------
    |Test phone Number
    |------------------------------------------
    */
    'test_msisdn ' => '254708374149',

    /*-----------------------------------------
    |Lipa na Mpesa Online callback url
    |------------------------------------------
    */
    'lnmocallback' => 'https://920fc1db.ngrok.io/api/lnmocallback?key=8339938339383',

     /*-----------------------------------------
    |C2B  Validation url
    |------------------------------------------
    */
    'c2b_validate_callback' => '',

    /*-----------------------------------------
    |C2B confirmation url
    |------------------------------------------
    */
    'c2b_confirm_callback' => '',

    /*-----------------------------------------
    |B2C timeout url
    |------------------------------------------
    */
    'b2c_timeout' => '',

    /*-----------------------------------------
    |B2C results url
    |------------------------------------------
    */
    'b2c_result' => ''


];
