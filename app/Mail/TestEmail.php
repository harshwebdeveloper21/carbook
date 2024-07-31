<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $message;
    public $price;
    public $direction;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
     
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('from@example.com') 
                    ->subject('Test Email') 
                    ->view('basic') 
                    ->with([
                        'details' => $this->details,
                    ]); 
    }
}
