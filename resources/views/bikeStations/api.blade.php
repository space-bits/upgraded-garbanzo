@extends('layouts.master')

@section('content')

<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
        	animationEnabled: false,
        	title: {
        		text: "Bikes Statistics"
        	},
        	data: [{
        		type: "pie",
        		startAngle: 240,
        		yValueFormatString: "##0.00\"%\"",
        		indexLabel: "{label} {y}",
        		dataPoints: [
        			{y: <?php echo json_encode(($totals[1] / ( $totals[0] + $totals[1] )), JSON_HEX_TAG); ?>, label: "In Use"},
        			{y: <?php echo json_encode(($totals[1] / ( $totals[0] + $totals[1] )), JSON_HEX_TAG); ?>, label: "Available"}
        		]
        	}]
        });
        chart.render();
    }
</script>

<div class="container-fluid">

    <div class="row">
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1>Bike Stations</h1>
            <!-- Day selector -->
            <!-- <div class="form formSpacing">
                 Form::open(['url' => '/bikes/api', 'method' => 'post']) !!}
                     Form::input('text', 'datepicker', null, ['class'=>'datepicker']) !!}

                     Form::select('mdate',
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
                        ), ['class'=>'dateTimeSelect'])
                    !!}
                     Form::select('month',
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
                        ), ['class'=>'dateTimeSelect'])
                    !!}
                     Form::selectYear('year', 2012, 2017, 2017, ['class'=>'dateTimeSelect']) !!}


                     Form::submit('Choose!',['class'=>'dateTimeSelectButton']) !!}
                 Form::close() !!}

            </div> -->
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Terminal Name</th>
                            <th>Available Bikes</th>
                            <th>Bikes in use</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stations as $station)
                        <tr>
                            <td>{{ $station['id'] }}</td>
                            <td><a href="https://www.google.com/maps/search/?api=1&query={{$station['latitude']}},{{$station['longitude']}}">{{ $station['featurename'] }}</a></td>
                            <td>{{ $station['nbbikes'] }}</td>
                            <td>{{ $station['nbemptydoc'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection
