<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendResume extends Mailable
{
    use Queueable, SerializesModels;
    private $request;
    private $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $file)
    {
        //
        $this->request = $request;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sendResume')
            ->from('info@s14advisory.com','S14Advisory Bot')
            ->subject('New prospective employee for S14Advisory')
            ->with([
            'data' => $this->request,
            'file' => $this->file
        ]);
    }
}
