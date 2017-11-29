<?php

namespace Gomedo\Http\Controllers\Auth;

use Gomedo\Http\Controllers\Controller;
use Gomedo\Services\Auth\VerifyService;

class VerifyController extends Controller
{
    private $verify;

    public function __construct(VerifyService $verify)
    {
        $this->verify = $verify;
    }

    public function verify($token) {

        $user = $this->verify->proof($token);

        if (!$user) {
            return redirect('/')->with('message', trans('user.auth.verify.expired'));
        }

        $this->verify->verify($user);

        auth()->login($user);
        return redirect('/')->with('message', trans('user.auth.verify.success'));
    }

}
