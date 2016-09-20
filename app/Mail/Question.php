<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Question extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('email_question')
                    ->with('request', $request)
                    ->from('info@edaraconsult.com')
                    ->bcc('mkhairul@gmail.com')
                    ->replyTo($request->input('email'), $request->input('name'))
                    ->subject('Edara Consult Website - Question');
    }
}
