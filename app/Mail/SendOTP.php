<?php

namespace App\Mail;

use App\WebsiteVisitors;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOTP extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(WebsiteVisitors $visitor)
    {
        $this->visitor = $visitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sendOTP')
            ->subject('OTP for S14Advisory Access')
            ->from('info@s14advisory.com','S14Advisory WebBot')
            ->with([
            'name' => $this->visitor->name,
            'otp' => $this->visitor->otp,
        ]);
    }
}
