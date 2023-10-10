<?php

namespace App\Console\Commands;

use App\Mail\TicketReminderMail;
use App\Models\CompanyEmployee;
use App\Models\Ticket;
use App\Models\TicketFileHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
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
    protected $description = 'Enviar correo de recordatorio (desde 5,4,3,2 días antes) si no se ha cargado ningun archivo a la nómina';

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
        /* $message = new TicketReminderMail('name', 'ticket', 'company');
        Mail::to("alammduran@gmail.com")->send($message); */
        $today = Carbon::now();
        $tickets = Ticket::where('status', 1)->get();

        foreach ($tickets as $ticket) {
            $isFileUploaded = TicketFileHistory::where('ticket_id', $ticket->id)->first('id');
            if (!$isFileUploaded) {
                if ($today < $ticket->limit_date) {
                    $daysDifference = intval(date_diff($today, $ticket->limit_date)->format('%R%a')) + 1;
                    Log::debug($daysDifference);
                    $message = new TicketReminderMail('name', 'ticket', 'company');
                    $emails = [];
                    $companyEmployees = CompanyEmployee::where('company_id',  $ticket->company)->get();
                    Log::debug($companyEmployees);
                    foreach ($companyEmployees as $companyEmployee) {
                        if ($daysDifference == 3) {
                            $employeeData = User::where('id', $companyEmployee->user_id)->whereIn('role', ['capturista', 'cliente'])->first();
                            if ($employeeData) {
                                $employeeEmail = $employeeData->email;
                            }else {
                                $employeeEmail = '';
                            }
                        }elseif ($daysDifference == 2) {
                            $employeeData = User::where('id', $companyEmployee->user_id)->whereIn('role', ['capturista', 'cliente'])->first();
                            if ($employeeData) {
                                $employeeEmail = $employeeData->email;
                            }else {
                                $employeeEmail = '';
                            }
                        } elseif ($daysDifference == 1) {
                            $employeeData = User::where('id', $companyEmployee->user_id)->whereIn('role', ['capturista', 'validador', 'cliente'])->first();
                            if ($employeeData) {
                                $employeeEmail = $employeeData->email;
                            }else {
                                $employeeEmail = '';
                            }
                        }
                        if ($employeeEmail) {
                            $emails[] = $employeeEmail;
                        }
                    }
                    Mail::to($emails)->send($message);
                }
            }
        }
        return Command::SUCCESS;
    }
}
