<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WinnersEmail extends Mailable
{
    use Queueable, SerializesModels;

    //public $winner_email;
    public $email;
    public $place;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($winner_place)
    {
        //
        //$this->winner_email = $winner_email;
        //$this->email = $winner_email;

        $this->place = $winner_place;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.winners');
    }
}
