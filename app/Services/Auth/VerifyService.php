<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 16:08
 */

namespace Gomedo\Services\Auth;

use Gomedo\Repositories\UserRepository;
use Gomedo\Events\UserHasVerified;

class VerifyService
{
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function verify($user) {
        $this->users->update($user->id, [
           'email_verification_token' => Null,
            'is_verified' => true
        ]);
        event(new UserHasVerified($user));
    }

    public function proof($token) {
        return $this->users->findOneBy('email_verification_token', $token);
    }

    public static function getEmailVerificationUrl($user)
    {
        return route('user.verify', ['token' => $user->email_verification_token]);
    }

}