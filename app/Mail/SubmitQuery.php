<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmitQuery extends Mailable
{
    use Queueable, SerializesModels;

    public $queryDetails;

    /**
     * Create a new message instance.
     *
     * @param $queryDetails
     */
    public function __construct($queryDetails)
    {
        $this->queryDetails = $queryDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.submit_query');
    }
}
