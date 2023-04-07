<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;

class JobSubmitMail extends TemplateMailable
{
    use Queueable, SerializesModels;
    public $NAME, $PRACTICE_NAME, $USER;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->NAME = $params['user'];
        $this->USER = $params['email'];
        $this->PRACTICE_NAME = config('constants.APP_NAME');
    }

    public function getHtmlLayout(): string
    {
        return view('email.email_layout')->render();
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cc = $bcc = [];
        $to = $this->USER;// array not accepting in to

        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));
        return $email;
    }
}
