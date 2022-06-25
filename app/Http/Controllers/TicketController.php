<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function index()
    {

        $my_tickets = Ticket::where([
            ['user_id', auth()->user()->id]
        ])->get();

        return view('profile.my-ticket', [
            'active' => 'Flight',
            'tittle' => 'My Ticket',
            'my_tickets' => $my_tickets
        ]);
    }

    public function show(Ticket $ticket)
    {
        return view('profile.my-ticket-detail', [
            'active' => 'Flight',
            'tittle' => 'My Ticket',
            'ticket' => $ticket
        ]);
    }

    public function destroy($id)
    {
        Ticket::find($id)->delete();

        return redirect('/my-ticket')->with('delete', 'Your ticket has been successfully deleted!');
    }
}
