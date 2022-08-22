<?php

namespace App\Console\Commands;

use App\Mail\TicketReminderMail;
use App\Models\CompanyEmployee;
use App\Models\Ticket;
use App\Models\TicketFileHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTicketReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar correo de recordatorio (desde 5,4,3,2 días antes) si no se ha cargado ningun archivo a la incidencia';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $message = new TicketReminderMail('name', 'ticket', 'company');
        Mail::to("alammduran@gmail.com")->send($message);
        // $today = Carbon::now();
        // $tickets = Ticket::where('status', 1)->get();

        // foreach ($tickets as $ticket) {
        //     $isFileUploaded = TicketFileHistory::where('ticket_id', $ticket->id)->first('id');
        //     if (!$isFileUploaded) {
        //         if ($today < $ticket->limit_date) {
        //             $daysDifference = intval(date_diff($today, $ticket->limit_date)->format('%R%a'));
        //             $message = new TicketReminderMail('name', 'ticket', 'company');
        //         }
        // $emails = [];
        //         $companyEmployees = CompanyEmployee::where('company_id',  $ticket->company)->get();
        //         foreach ($companyEmployees as $companyEmployee) {
        // if ($daysDifference >= 2) {
        //     //             $employeeEmail = User::where('id', $companyEmployee->user_id)->where('role', 'capturista')->first('email)->email;
        // }elseif ($daysDifference == 1) {
        //     //             $employeeEmail = User::where('id', $companyEmployee->user_id)->whereIn('role', ['cliente', 'validador'])->first('email)->email;
        // }
        // $emails[] = $employeeEmail;
        //         }
        //             Mail::to($emails)->send($message);
        //     }
        // }
        return Command::SUCCESS;
    }
}
