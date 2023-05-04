<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PayrollReceiptEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "🧾 Los recibos de nómina están listos | Enlace Alferza";
    public $name;
    public $ticket;
    public $company;
    public $category;

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
        return $this->view('emails.payment-receipt');
    }
}
