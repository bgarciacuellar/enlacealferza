<?php

namespace App\Http\Controllers;

use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\TicketFileHistory;
use App\Models\User;
use App\Traits\helpers;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    use helpers;
    function __construct()
    {
        $this->middleware(['auth', 'roles:cliente,capturista,validador']);
    }

    public function tiketsList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $tickets = Ticket::where('company', $companyID)->where('status', '!=', 5)->get();
        foreach ($tickets as $ticket) {
            $ticket->statusString = $this->statusConvert($ticket->status);
        }

        return view('employee.ticket.list', compact('tickets', 'company'));
    }

    public function archivedTicketsList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $tickets = Ticket::where('company', $companyID)->where('status', 5)->get();
        foreach ($tickets as $ticket) {
            $ticket->statusString = $this->statusConvert($ticket->status);
        }

        return view('employee.ticket.list', compact('tickets', 'company'));
    }

    public function details($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->statusString = $this->statusConvert($ticket->status);
        $company = Company::findOrFail($ticket->company);

        $ticketFileHistory = TicketFileHistory::where('ticket_id', $ticketId)->orderBy('id', 'DESC')->first();
        if ($ticketFileHistory) {
            $ticketFileUser = User::where('id', $ticketFileHistory->user_id)->first();
        } else {
            $ticketFileUser = false;
        }

        $ticketCommentsArray = TicketComment::where('ticket_id', $ticket->id)->orderBy('id', 'DESC')->get()->toArray();
        $ticketCommentsMap = function ($ticketCommentItem) {
            $user = User::where('id', $ticketCommentItem['user_id'])->first();
            $createdAt = Carbon::parse($ticketCommentItem['created_at']);
            return array(
                "id" => $ticketCommentItem['id'],
                "user_name" => $user ? $user->name : "Usuario",
                "comment" => $ticketCommentItem['comment'],
                "created_at" => $createdAt->format('d/m/Y'),
            );
        };
        $ticketComments = array_map($ticketCommentsMap, $ticketCommentsArray);

        $ticketowner = User::where('id', $ticket->user_id)->first();
        $ticketownerAdditionalInfo = AdditionalUserInfo::where('user_id', $ticket->user_id)->first();

        return view('employee.ticket.details', compact('ticket', 'ticketComments', 'ticketFileHistory', 'ticketFileUser', 'ticketowner', 'ticketownerAdditionalInfo', 'company'));
    }
}
