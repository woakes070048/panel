<?php

return [

    /*
    * This string is used the to generate a signature. You should
    * keep this value secret.
    */
    'signatureKey' => config('app.key'),

    /*
     * The default expiration time of a URL in days.
     */
    'default_expiration_time_in_days' => 1,

    /*
     * These strings are used a parameter names in a signed url.
     */
    'parameters' => [
        'expires' => 'e',
        'signature' => 's',
    ],

];
