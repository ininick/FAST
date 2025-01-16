<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $team = DB::table('teams')->where('id', $user->team_id)->first();

        $tickets = DB::table('tickets')
            ->join('ticket_details', 'tickets.ticket_details_id', '=', 'ticket_details.id')
            ->join('escalations', function ($join) {
                $join->on('tickets.id', '=', 'escalations.ticket_id')
                     ->where('escalations.type', '=', 'fulfillment');
            })
            ->select(
                'ticket_details.id as ticket_id',
                'ticket_details.created_time',
                'ticket_details.name',
                'ticket_details.description',
                'ticket_details.fulfillment',
                'tickets.status as status',
                DB::raw('GROUP_CONCAT(escalations.level) as escalation_levels')
            )
            ->groupBy('ticket_details.id', 'ticket_details.created_time', 'ticket_details.name', 'ticket_details.description', 'ticket_details.fulfillment', 'tickets.status')
            ->get()
            ->map(function ($ticket) {
                $ticket->created_time = Carbon::parse($ticket->created_time);
                return $ticket;
            });

        return view('dashboard', compact('tickets', 'user', 'team'));
    }
}