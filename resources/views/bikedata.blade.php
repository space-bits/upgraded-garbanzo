@extends('master')

@section('content')
    <p>Here is the bike data: </p>

    <?php
        $bikes=new BikeStationController();
        $bikes::show(1);
    ?>

@stop
