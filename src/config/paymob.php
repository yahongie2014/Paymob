<?php
return [
    /*
    |--------------------------------------------------------------------------
    | PayMob Default Order Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default Order model.
    |
    */
    'order' => [
        'model' => 'App\Order'
    ],
    /*
    |--------------------------------------------------------------------------
    | PayMob username and password
    |--------------------------------------------------------------------------
    |
    | This is your PayMob username and password to make auth request.
    |
    */
    'username' => env('PAYMOB_USER',''),
    'password' => env('PAYMOB_PASSWORD',''),
    /*
    |--------------------------------------------------------------------------
    | PayMob integration id and iframe id
    |--------------------------------------------------------------------------
    |
    | This is your PayMob integration id and iframe id.
    |
    */
    'integration_id' =>  env('PAYMOB_INTEGRATION_ID',''),
    'currency' =>  env('PAYMOB_CURRENCY',''),
    'iframe_id' =>  env('PAYMOB_IFRAME_ID',''),
];
