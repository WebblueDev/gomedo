<?php

namespace Gomedo\Http\Controllers\Auth;

use Gomedo\Events\UserHasRegistered;
use Gomedo\Models\User;
use Gomedo\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function showRegistrationForm(Request $request)
    {
        if ( ! $request->ajax())
            return back();

        return $this->getJsonSuccess(
            view('frontend.auth.register.register', [])->render()
        );

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_verification_token' => str_random(60)
        ]);
    }

    public function register(Request $request)
    {
        if ( ! $request->ajax())
            return back();

        $validator = $this->validator($request->all());
        if ($validator->fails())
            return $this->getJsonError($validator->messages()->first());

        $user = $this->create($request->all());
        event(new UserHasRegistered($user));

        return $this->getJsonSuccess(
            view('frontend.auth.register.success', [
                'user' => $user,
            ])->render()
        );
    }
}
