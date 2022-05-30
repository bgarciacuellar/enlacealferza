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
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $ticket, $company)
    {
        $this->name = $name;
        $this->ticket = $ticket;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
