<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;
public $title;
public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$subject)
    {
        $this->title = $title;
        $this->subject=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ahmad-400s@windowslive.com')
        ->view('email.mymail');
    }
}
