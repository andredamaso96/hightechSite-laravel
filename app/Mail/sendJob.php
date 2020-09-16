<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendJob extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('andredamaso96@gmail.com')->subject('CANDIDATURA')
        ->view('pages.jobForm')
        ->with('data', $this->data)
        ->attach($this->data['file']->getRealPath(), array(
            'as' => $this->data['file']->getClientOriginalName())
        );
    }
}
