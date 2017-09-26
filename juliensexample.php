// EX 1
// Controller
public function store(Request $request)
{

...

return redirect()->route('admin.index')
-> with('success', 'Ticket updated successfully');
}
// Blade
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


// EX 2
// Controller
public function create()
{
    $response = new TicketResponse;
    return view('ticket.admin', ['response' => $response ])
        ->with('tickets', Ticket::all());
}

<div class="modal-body">
@isset ($ticket)
    {!! Form::model($ticket, ['action' => 'ResponseController@store']) !!}
    ...
    ...
</div>
