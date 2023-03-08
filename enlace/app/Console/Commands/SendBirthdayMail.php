<?php

namespace App\Console\Commands;

use App\Mail\Announcement;
use App\Models\AdditionalUserInfo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendBirthdayMail extends Command
{

    public $usersRoles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email when the empoyee birthday is';

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
        $users = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->get();
        $today = Carbon::now()->format('d-m');
        foreach ($users as $user) {
            $userAdditionalInfo = AdditionalUserInfo::where('user_id', $user->id)->first();
            if ($userAdditionalInfo) {
                if ($userAdditionalInfo->birthday) {
                    $birthday = Carbon::parse($userAdditionalInfo->birthday)->format('d-m');
                    if ($today == $birthday) {
                        $message = new Announcement('Feliz cumpleaños');
                        Mail::to($user->email)->send($message);
                    }
                }
            }
        }
    }
}
