@extends('master')

@section('content')
<p>Here is the bike data: </p>
    @foreach($stations as $station)
    <div>
        <ul>
            <li>ID &amp; Name: {{ $station->id }} &amp; {{ $station->featurename }} </li>
            <li>Coord: {{ $station->latitude }}, {{ $station->longtitude }} </li>
            <li>Bikes Avail: {{ $station->nbbikes }} </li>
            <li>Bikes in Use: {{ $station->nbemptydoc }} </li>
            <li>Snapshotted at: {{ $station->uploaddate }} </li>
        </ul>
    </div>
    @endforeach
@stop
