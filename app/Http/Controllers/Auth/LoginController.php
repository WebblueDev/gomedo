<?php

namespace Gomedo\Http\Controllers\Auth;

use Gomedo\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your index screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->redirectTo = URL::previous();
    }

    public function showLoginForm(Request $request)
    {
        if ( ! $request->ajax())
            return back();

        return $this->getJsonSuccess(
            view('frontend.auth.login', [])->render()
        );

        return view('auth.login');
    }

    protected function getCredentials(Request $request) {
        return [
            'email' => Request::input('email'),
            'password' => Request::input('password'),
            'is_active' => true,
            'is_verified' => true,
            'is_banned' => false
        ];
    }
}
