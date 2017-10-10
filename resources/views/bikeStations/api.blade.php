@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        @include('layouts.nav')
<!--
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href='{!! url('/'); !!}'>Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='{!! url('/'); !!}'>Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Export</a>
                </li>
            </ul>
        </nav> -->

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1>Bike Stations</h1>

            <section class="row text-center placeholders">
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <div class="text-muted">Something else</div>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </section>

            <!-- Day selector -->
            <div class="form">
            {!! Form::open(['url' => '/bikes/api', 'method' => 'get']) !!}
                {!! Form::select('day', array(
                    'Monday' => 'Monday',
                    'Tuesday' => 'Tuesday',
                    'Wednesday' => 'Wednesday',
                    'Thursday' => 'Thursday',
                    'Friday' => 'Friday',
                    'Saturday' => 'Saturday',
                    'Sunday' => 'Sunday',
                    ),
                    'Monday')
                !!}
                    <!-- Default Value is Monday -->
                {!! Form::submit('Choose Day') !!}
            {!! Form::close() !!}
            </div>

            <!-- Year selector: !!NOTE!! Thise needs work -->
            <div class="form">
            {!! Form::open(['url' => '/bikes/api', 'method' => 'get']) !!}
                {!! Form::select('year', array(
                    '2013' => '2013',
                    '2014' => '2014',
                    '2015' => '2015',
                    '2016' => '2016',
                    '2017' => '2017',
                    ),
                    '2017')
                !!}
                    <!-- Default Value is Monday -->
                {!! Form::submit('Choose Year') !!}
            {!! Form::close() !!}
            </div>

            {{ $_GET['day'] }}

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Terminal Name</th>
                            <th>Available Bikes</th>
                            <th>Bikes in use</th>
                            <th>Last update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stations as $station)
                        <tr>
                            <td>{{ $station['id'] }}</td>
                            <td>{{ $station['featurename'] }}</td>
                            <td>{{ $station['nbbikes'] }}</td>
                            <td>{{ $station['nbemptydoc'] }}</td>
                            <td>{{ $station['uploaddate'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

@endsection
