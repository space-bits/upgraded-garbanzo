@extends('pageflow.master')

@section('content')

<div>
    <ul>
    @foreach ($stations as $station)
        <li>
            <a href="/stations/{{ $station->id }}">
                {{ $station->featurename }}
            </a>
        </li>
     @endforeach
    </ul>
</div>

@stop
