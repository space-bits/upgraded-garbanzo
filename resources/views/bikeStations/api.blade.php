@extends('layouts.master')

@section('content')
<hr>
<ul>
    <em>Stations :</em>
    <!-- Error as this is not accessing the array correctly -->
    @foreach ($bikeStations as $station)
        <?php #print_r($station->featurename) ?>
    @endforeach

</ul>
<hr>
<pre>
    <?php print_r($bikeStations); ?>
</pre>
<hr>
@stop
