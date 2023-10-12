<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $tickets = Ticket::paginate($request->input('size'));
        return response()->json($tickets);
    }

    public function show($id)
    {
        try {

            $ticket = Ticket::find($id);

            if (!$ticket) {
                return response()->json(['message' => 'Ticket no encontrado'], 404);
            }

        return response()->json($ticket);

        } catch (\Throwable $th) {
            return response()->json(['msg' => 'Error al obtener la informacion'], 500);
        }

        
    }

    public function store(Request $request)
    {
        try {
            $ticket = new Ticket;
            $ticket->usuario = $request->input('usuario');
            $ticket->estatus = $request->input('estatus');
            $ticket->save();
    
            return response()->json($ticket, 201);

        } catch (\Throwable $th) {
            return response()->json(['msg' => 'Error al crear el ticket'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {

            $ticket = Ticket::find($id);

            if (!$ticket) {
                return response()->json(['msg' => 'Ticket no encontrado'], 404);
            }

            $ticket->usuario = $request->input('usuario');
            $ticket->estatus = $request->input('estatus');
            $ticket->save();

            return response()->json($ticket);

        } catch (\Throwable $th) {
            return response()->json(['msg' => 'Error al obtener la informacion'], 500);
        }
        
    }

    public function destroy($id)
    {
        try {
            $ticket = Ticket::find($id);

            if (!$ticket) {
                return response()->json(['message' => 'Ticket no encontrado'], 404);
            }

            $ticket->delete();

            return response()->json(['message' => 'Ticket eliminado']);
        } catch (\Throwable $th) {
            return response()->json(['msg' => 'Error al obtener la informacion'], 500);
        }
        
    }
}
