<?php

namespace App\Http\Controllers;

use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\TicketFileHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class EmployeeController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth', 'roles:cliente,capturista,validador']);
    }

    public function tiketsList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id');
        $company = Company::findOrFail($companyID->company_id);
        $tickets = Ticket::where('company', $companyID->company_id)->get();

        return view('employee.ticket.list', compact('tickets', 'company'));
    }

    public function details($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $company = Company::findOrFail($ticket->company);

        $ticketFileHistory = TicketFileHistory::where('ticket_id', $ticketId)->orderBy('id', 'DESC')->first();
        $ticketFileUser = User::where('id', $ticketFileHistory->user_id)->first();

        $ticketCommentsArray = TicketComment::where('ticket_id', $ticket->id)->orderBy('id', 'DESC')->get()->toArray();
        $ticketCommentsMap = function ($ticketCommentItem) {
            $user = User::where('id', $ticketCommentItem['user_id'])->first();
            $createdAt = Carbon::parse($ticketCommentItem['created_at']);
            return array(
                "id" => $ticketCommentItem['id'],
                "user_name" => $user->name,
                "comment" => $ticketCommentItem['comment'],
                "created_at" => $createdAt->format('d/m/Y'),
            );
        };
        $ticketComments = array_map($ticketCommentsMap, $ticketCommentsArray);

        $ticketowner = User::where('id', $ticket->user_id)->first();
        $ticketownerAdditionalInfo = AdditionalUserInfo::where('id', $ticket->user_id)->first();

        return view('employee.ticket.details', compact('ticket', 'ticketComments', 'ticketFileHistory', 'ticketFileUser', 'ticketowner', 'ticketownerAdditionalInfo', 'company'));
    }
}
