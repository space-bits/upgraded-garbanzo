@extends('layouts.master')

@section('content')
<hr>
<em>Stations index</em>
<div class="col-lg-6 col-md-6 col-sm-12">
    <ul>
        <!-- Error as this is not accessing the array correctly -->
        @foreach( $stations as $station )
            <a href="/bikestations/{{ $station['id'] }}">
                {{ $station['featurename'] }}
            </a>
            <ul class="station-details">
                <li class="station-detail-list">
                    Bikes Remaining: {{ $station['nbbikes'] }}
                </li>
                <li class="station-detail-list">
                    Bikes In Use: {{ $station['nbemptydoc'] }}
                </li>
                <li class="station-detail-list">
                    Total Docks: {{ $station['nbbikes'] + $station['nbemptydoc'] }}
                </li>
                <li class="station-detail-list">
                    Upload date: {{ $station['uploaddate'] }}
                </li>
            </ul>
        @endforeach
    </ul>
</div>
<hr>
<pre>
    <?php

    #    echo count($stations);
    #    print_r($stations);

    ?>
</pre>
<hr>

@stop
