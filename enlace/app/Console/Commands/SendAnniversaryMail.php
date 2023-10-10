<?php

namespace App\Console\Commands;

use App\Mail\Anniversary;
use App\Mail\Announcement;
use App\Models\AdditionalUserInfo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendAnniversaryMail extends Command
{
    public $usersRoles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:anniversary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email when the empoyee anniversary is';

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
        $currentYear = Carbon::now()->format('Y');
        foreach ($users as $user) {
            $userAdditionalInfo = AdditionalUserInfo::where('user_id', $user->id)->first();
            if ($userAdditionalInfo) {
                if ($userAdditionalInfo->entry_date) {
                    $entryDate = Carbon::parse($userAdditionalInfo->entry_date)->format('d-m');
                    if ($today == $entryDate) {
                        $entryYear = Carbon::parse($userAdditionalInfo->entry_date)->format('Y');
                        $anniversaryAmount = $entryYear < $currentYear ? $currentYear - $entryYear : 0;
                        $message = new Anniversary($user->name, $userAdditionalInfo->position, $anniversaryAmount, $gift);
                        Mail::to($user->email)->send($message);
                    }
                }
            }
        }
    }
}
