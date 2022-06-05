<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UploadedIncident extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Incidencia cargada";
    public $name;
    public $ticket;
    public $company;
    public $category;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $ticket, $company, $category)
    {
        $this->name = $name;
        $this->ticket = $ticket;
        $this->company = $company;
        $this->$category = $category;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.uploaded_incident');
    }
}
