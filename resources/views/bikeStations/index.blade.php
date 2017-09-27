@extends('pageflow.master')

@section('content')

<div>
    <ul>
    @foreach ($bikeStations as $bikeStation)
        <li>
            <a href="/bikeStations/{{ $bikeStation->id }}">
                {{ $bikeStation->featurename }}
            </a>
        </li>
     @endforeach
    </ul>
</div>

@stop
