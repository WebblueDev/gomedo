<?php

namespace Gomedo\Mail\User;

use Gomedo\Models\User;
use Gomedo\Services\Auth\VerifyService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Verify extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->token = VerifyService::getEmailVerificationUrl($user);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(trans('email.auth.verify.title'))
            ->view('email.auth.verify');
    }
}
