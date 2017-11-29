<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'auth' => [
        'register' => [
            'email' => [
                'subject' => 'Welcome on Gomedo'
            ]
        ],
        'login' => [
            'failed' => 'These credentials do not match our records.',
            'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
        ],
        'forgot' => [
            'reset_link_failed' => 'No User found',
            'email' => [
                'subject' => 'Reset your password'
            ]
        ],
        'verify' => [
            'expired' => 'Verification link has been expired',
            'success' => 'Your account has been verified',
            'email' => [
                'subject' => 'Verify your account'
            ]
        ],
    ],

];
