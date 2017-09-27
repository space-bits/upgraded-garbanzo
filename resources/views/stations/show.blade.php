@extends('pageflow.master')

@section('content')
<p>Data for Station {{ $station->id }}: </p>
    <div>
        <ul>
            <li>ID &amp; Name: {{ $station->id }} &amp; {{ $station->featurename }} </li>
            <li>Coord: {{ $station->latitude }}, {{ $station->longtitude }} </li>
            <li>Bikes Avail: {{ $station->nbbikes }} </li>
            <li>Bikes in Use: {{ $station->nbemptydoc }} </li>
            <li>Snapshotted at: {{ $station->uploaddate }} </li>
        </ul>
    </div>
@stop
