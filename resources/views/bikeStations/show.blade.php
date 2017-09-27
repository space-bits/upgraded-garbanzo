@extends('pageflow.master')

@section('content')
<p>Data for bikeStation {{ $bikeStation->id }}: </p>
    <div>
        <ul>
            <li>ID, Name: {{ $bikeStation->id }}, {{ $bikeStation->terminalname }} </li>
        </ul>
    </div>
@stop
