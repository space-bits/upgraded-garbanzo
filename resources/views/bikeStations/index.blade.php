@extends('pageflow.master')

@section('content')

<div>
    <ul>
    @foreach ($bikeStations as $bikeStation)
        <li>
            <a href="/bikeStations/{{ $bikeStation->id }}">
                {{ $bikeStation->terminalname }}
            </a>
        </li>
     @endforeach
    </ul>
</div>

@stop
