<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Spatie\MailTemplates\TemplateMailable;


class ContactMail extends TemplateMailable
{
    use Queueable, SerializesModels;

    public $FULL_NAME, $LAST_NAME, $USER, $PHONE_NO, $MESSAGE;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->FULL_NAME = $params['fname'];
        $this->LAST_NAME = $params['lname'];
        $this->USER = $params['email'];
        $this->PHONE_NO = $params['phone'];
        $this->MESSAGE = $params['message'];
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
        $cc = config('constants.CONTACT_FORM.CC');
        $to = config('constants.CONTACT_FORM.TO');
        $email = $this->to($to)->cc($cc)->from(config('mail.from.address'));
        
        return $email;
    }
}
