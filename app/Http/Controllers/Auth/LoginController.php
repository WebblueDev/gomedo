<?php

namespace Gomedo\Http\Controllers\Auth;

use Gomedo\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;

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
     * Create a new controller instance
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
        return $this->getJsonSuccess(
            view('frontend.auth.login', [])->render()
        );

        return view('auth.login');
    }

    protected function credentials(Request $request)
    {
        return [
            'email' => $request->input($this->username()),
            'password' => $request->input('password'),
            'is_active' => '1',
            'is_verified' => '1',
            'is_banned' => '0',
        ];
        return $request->only($this->username(), 'password');
    }

    protected function sendFailedLoginResponse(Request $request)
    {

        throw ValidationException::withMessages([
            $this->username() => [trans('user.auth.login.errors.failed')]
        ]);
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        throw ValidationException::withMessages([
            $this->username() => [Lang::get('user.auth.login.errors.throttle', ['seconds' => $seconds])],
        ])->status(423);
    }
}
