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
            'title' => 'Create an account!',
            'submit' => 'Register',
            'form' => [
                'name' => 'Name',
                'email' => 'Email address',
                'password' => 'Password',
                'password_confirmation' => 'Repeat password'
            ],
            'success' => [
              'title' => 'Account created!',

            ],
        ],
        'login' => [
            'title' => 'Welcome back!',
            'submit' => 'Login',
            'forgot' => 'Forgot your password?',
            'form' => [
                'email' => 'Email address',
                'password' => 'Password',
            ],
            'errors' => [
                'failed' => 'These credentials do not match our records.',
                'inactive' => 'This account is inactive.',
                'verifaction' => "This account hasn't been verificated",
                'banned' => 'This account has been banned',
                'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
            ],
        ],
        'forgot' => [
            'reset_link_failed' => 'No User found',
        ],
        'verify' => [
            'expired' => 'Verification link has been expired',
            'success' => 'Your account has been verified',
        ],
    ],

];
