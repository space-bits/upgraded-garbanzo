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

                    {!! Form::select('mdate',
                        array(
                            '01' => '1',
                            '02' => '2',
                            '03' => '3',
                            '04' => '4',
                            '05' => '5',
                            '06' => '6',
                            '07' => '7',
                            '08' => '8',
                            '09' => '9',
                            '10' => '10',
                            '11' => '11',
                            '12' => '12',
                            '13' => '13',
                            '14' => '14',
                            '15' => '15',
                            '16' => '16',
                            '17' => '17',
                            '18' => '18',
                            '19' => '19',
                            '20' => '20',
                            '21' => '21',
                            '22' => '22',
                            '23' => '23',
                            '24' => '24',
                            '25' => '25',
                            '26' => '26',
                            '27' => '27',
                            '28' => '28',
                            '29' => '29',
                            '30' => '30',
                            '31' => '31'
                        ))
                    !!}
                    {!! Form::select('month',
                        array(
                            '01' => 'Jan',
                            '02' => 'Feb',
                            '03' => 'Mar',
                            '04' => 'Apr',
                            '05' => 'May',
                            '06' => 'Jun',
                            '07' => 'Jul',
                            '08' => 'Aug',
                            '09' => 'Sep',
                            '10' => 'Oct',
                            '11' => 'Nov',
                            '12' => 'Dec'
                        ))
                    !!}
                    {!! Form::selectYear('year', 2012, 2017) !!}

                    {!! Form::submit('Choose!') !!}
                {!! Form::close() !!}

            </div>

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
