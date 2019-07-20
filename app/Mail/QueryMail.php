<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QueryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $mobile, $query;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $mobile, $query)
    {
        //
        $this->name =$name;
        $this->email =$email;
        $this->mobile =$mobile;
        $this->query =$query;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('query@squarecard.in')->view('email.query-mail');
    }
}
