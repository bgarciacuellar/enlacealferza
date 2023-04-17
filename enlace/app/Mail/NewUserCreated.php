<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "🔐 Credenciales de enlace | Grupo Alferza";
    public $name;
    public $email;
    public $password;
    public $company;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $password, $company)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new_user');
    }
}
