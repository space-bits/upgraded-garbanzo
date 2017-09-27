@extends('pageflow.master')

@section('content')
<p>Data for bikeStation {{ $bikeStation->id }}: </p>
    <div>
        <ul>
            <li>ID &amp; Name: {{ $bikeStation->id }} &amp; {{ $bikeStation->featurename }} </li>
            <li>Coord: {{ $bikeStation->latitude }}, {{ $bikeStation->longtitude }} </li>
            <li>Bikes Avail: {{ $bikeStation->nbbikes }} </li>
            <li>Bikes in Use: {{ $bikeStation->nbemptydoc }} </li>
            <li>Snapshotted at: {{ $bikeStation->uploaddate }} </li>
        </ul>
    </div>
@stop
