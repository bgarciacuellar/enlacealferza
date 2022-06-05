<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PayrollDenied extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Re-ajuste de incidencia";
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
        return $this->view('emails.payroll_denied');
    }
}
