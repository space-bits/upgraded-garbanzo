@extends('layouts.master')

@section('content')
<hr>
    <ul>
    <em>Stations :</em>
    <!-- Error as this is not accessing the array correctly -->
    <?php print_r($bikeStations); ?>
    </ul>
<hr>
@stop
