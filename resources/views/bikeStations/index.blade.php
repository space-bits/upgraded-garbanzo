@extends('layouts.master')

@section('content')

<ul>
@foreach ($bikeStations as $bikeStation)
    <li>
        <a href="/bikeStations/{{ $bikeStation->id }}">
            {{ $bikeStation->terminalname }}
        </a>
    </li>
@endforeach
</ul>

@stop
