<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Remember Period
    |--------------------------------------------------------------------------
    |
    | This value liste her are the cookie duration time in seconds.
    | This value is used to set the duration time.
    | When remember me is selected (remember) cookie duration is 7 days (60*60*24*7 = 604800 secs).
    | When remember me is not selected (no-remember) cookie duration is (60 * 60  = 3600) 60 minutes.
    |
    */

    'duration' => [
      'remember' => 604800,
      'no_remember' => 3600,
    ],


    /*
    |--------------------------------------------------------------------------
    | API URL
    |--------------------------------------------------------------------------
    |
    | This URL value is the AIPT Web api url.
    | This value is used by guzzle to set the base url where other
    | endpoints will be concatenated.
    |
    */
                                           
    'aipt_api_url' => env('AIPT_API_URL', 'https://cloud-afrihow-api-server.herokuapp.com/v1/'),

];
