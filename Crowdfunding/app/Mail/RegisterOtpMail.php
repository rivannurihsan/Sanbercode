<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class RegisterOtpMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('rivannurihsan@gmail.com')
                    ->subject('Registrasi berhasil ! ')
                    ->view('send_email_user_registered')
                    ->with([
                        'name'  => $this->user->name,
                        'email' => $this->user->email,
                        'otp'   => $this->user->otp->otp
                    ]);
    }
}
