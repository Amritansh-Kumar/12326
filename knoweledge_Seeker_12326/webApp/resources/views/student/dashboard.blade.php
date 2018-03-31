<!DOCTYPE html>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
        </div>
    </div>
</div>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Portal</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/graph_analysis.css') }}">
    <script src="{{ asset('js/chart.js') }}"></script>
</head>

<body>


<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Student Section</h3>
        </div>

        <ul class="list-unstyled components">
            <p><strong>{{ $student_id->Name }}</strong></p>
            <li class="active">
                <a href="./index">Home</a>

            </li>
            <li>
                <!--                        <a href="#">About</a>-->
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Questionnaire</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="./questions1">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
            </li>
            <li>
                <a href="./portfolio">Portfolio</a>
            </li>
            @if(Schema::hasTable('predictions'))
            <li>
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">More About Yourself</a>
                <ul class="collapse list-unstyled" id="pageSubmenu1">
                    <li class="active"><a href="./best-after">Best after Graduation</a></li>
                    <li><a href="./questions2">Discover Yourself</a></li>
                </ul>
            </li>
                @endif
        </ul>

        <!--
            <ul class="list-unstyled CTAs">
                <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
            </ul>
-->
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <header class="cd-main-header">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/student/logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/student/logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </header>
    </div>
    <div class="container">
        {{--<div class="row header-btn">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-offset-1 col-md-2 header-btn-1">--}}
                        {{--<a href="#">Vital Statics </a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-offset-1 col-md-3 header-btn-1">--}}
                        {{--<a href="#">Semester Wise Result </a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-offset-1 col-md-3 header-btn-1">--}}
                        {{--<a href="#">Attendence Chart </a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Vital-Stats</h3>
            </div>
        </div>
        <div class="wrap">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="row row-eq-height">
                        <div class="col-md-6  left">
                            <div class="box">
                                <table class="table table-bordered table-striped table-hover ">


                                    <tbody>
                                    <tr>
                                        <td>B.Tech %</td>
                                        <td>{{ $student_id->B_tech }}</td>

                                    </tr>
                                    <tr>
                                        <td>Grade</td>
                                        <td>{{ $grade[0] }}</td>

                                    </tr>
                                    <tr>
                                        <td>Average Marks</td>
                                        <td>{{ $avg2}}</td>

                                    </tr>
                                    <tr>
                                        <td>Your Percentile</td>
                                        <td>{{ $percentile[0] }}%</td>

                                    </tr>
                                    <tr>
                                        <td>Current Rank</td>
                                        <td>{{ $rank[0] }}</td>

                                    </tr>
                                    <tr>
                                        <td>Attendence of this Sem</td>
                                        <td>{{ $attendance[0] }}</td>

                                    </tr>
                                    <tr>
                                        <td>Number of student <br>in your Branch</td>
                                        <td>{{ $strength }}</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6  ">
                            <div class="box-2" style="padding-right: 9px; ">
                                <div style= " height:270px; !important">
                                    <br>
                                    <ul style="font-weight: 500; font-size: 20px;">
                                        <li style="margin-bottom: 10px;">Shown here is your aggregate B.Tech %.</li>
                                        <li style="margin-bottom: 10px;">The grading is absolute, irrespective of the grade of other students in the class.</li>
                                        <li style="margin-bottom: 10px;">Average marks, rank, percentile are calculated branch wise.</li>
                                        <li >Marks and rank are based on your performance in last semester examinamtion.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 top-box">
                <h3 class="heading">Semester Wise Result</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box" style="height:270px; !important; padding-top: 10px;">
                            <img src="{{ asset('img/scholar.jpg') }}" class="img-responsive" style="height: 250px; margin-left: 30px; margin-top: 10px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <canvas style="height: 270px !important" id="canvas"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Attendence Chart</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <canvas id="canvas-Attendence"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box" style="height:277px; !important ">
                            <br>
                            <ul style="font-weight: 500; font-size: 18px;">
                                <li style="margin-bottom:20px; ">Your attendance in the current sem is
                                    <u style="color: red">
                                    @if($student_id->sem_6_attendance>75)
                                        more than
                                    @elseif($student_id->sem_6_attendance<75)
                                        less than
                                    @else
                                        equals to
                                            @endif
                                    </u>
                                        minimum criteria.</li>
                                <li style="margin-bottom: 20px;">Minimum attendance required to appear in University Examination is 75%.</li>
                                <li>College gives cash reward to students whose attendance 90% and above.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Comparative Analysis</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box" style="height:285px;!important;">
                            <ul style=" font-size: 20px; height:270px; !important">
                                <br>
                                <li style="margin-bottom: 10px;">Analysis shows the ratio of different grades of students in a class</li>
                                <li style="margin-bottom: 10px;">The grading is absolute, irrespective of the grade of other students in the class.</li>
                                <li>Results are based on prediction and actual result may vary.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <canvas id="chart-area" style="height: 290px; width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(Schema::hasTable('predictions'))
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Prediction For this Semester</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="box">
                            <table class="table table-bordered table-striped table-hover ">


                                <tbody>
                                <tr>
                                    <td>Marks</td>
                                    @php
                                        $premarks=round($prediction->predicted_marks,2);
                                            @endphp
                                    <td>{{ $premarks }}</td>

                                </tr>
                                <tr>
                                    <td>Grade</td>
                                    <td>{{ $grade[1] }}</td>

                                </tr>
                                <tr>
                                    <td>Difference From Aggregate</td>
                                    <td>{{ $diff }}</td>

                                </tr>
                                <tr>
                                    <td>Predicted Rank</td>
                                    <td>{{ $rank[1] }}</td>

                                </tr>
                                <tr>
                                    <td>Predicted Percentile</td>
                                    <td>{{ $percentile[1] }}%</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div style=" height:190px !important">
                                <ul style=" font-size: 18px; height:180px; !important">
                                    <br>
                                    <li style="">Shown result are based on your previous performances and responses in the questionnaire.</li>
                                    <li style="">The grading is absolute, irrespective of the grade of other students in the class.</li>
                                    <li>Results are based on prediction and actual result may vary.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box2">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading" id="Comparative">Comparative Analysis For Prediction</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <canvas id="barchart" style="height: 280px; width:100%; margin-bottom: 50px"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box" style="height: 277px;">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Last Semester</th>
                                    <th>This Semester</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><b>Average</b></td>
                                    <td>{{ $avg_marks[0] }}</td>
                                    <td>{{ $avg_marks[1] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Grade</b></td>
                                    <td>{{ $grade[0] }}</td>
                                    <td>{{ $grade[1] }}</td>
                                </tr>
                                <tr>
                                    <td><b>Rank</b></td>
                                    <td>{{ $rank[0] }}</td>
                                    <td>{{ $rank[1] }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            @endif
    </div>
</div>
<script>
    function initializeBarChart() {
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [
                @for($i=1;$i<$student_id->current_sem; $i++)
                    'Semester {{ $i }}',
                @endfor
            ],
            datasets: [{
                label: 'Topper',
                backgroundColor: color(window.chartColors.fuchsia).alpha(0.5).rgbString(),
                borderColor: window.chartColors.fuchsia,
                borderWidth: 1,
                data: [
                    {{$max[0]->sem_1_marks}},{{$max[0]->sem_2_marks}},{{$max[0]->sem_3_marks}},{{$max[0]->sem_4_marks}},{{$max[0]->sem_5_marks}},{{$max[0]->sem_6_marks}},{{$max[0]->sem_7_marks}},{{$max[0]->sem_8_marks}}
                ]
            }, {
                label: "Your's",
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    {{ $student_id->sem_1_marks }},{{ $student_id->sem_2_marks }},{{ $student_id->sem_3_marks }},{{ $student_id->sem_4_marks }},{{ $student_id->sem_5_marks }},{{ $student_id->sem_6_marks }},{{ $student_id->sem_7_marks }},{{ $student_id->sem_8_marks }}
                ]
            }, {
                label: 'Average',
                backgroundColor: color(window.chartColors.orange).alpha(0.5).rgbString(),
                borderColor: window.chartColors.orange,
                borderWidth: 1,
                data: [
                    @for($i=1;$i<=$student_id->current_sem;$i++)
                    {{ $avg[$i] }},
                    @endfor
                ]
            }]
        };

        var ctx = document.getElementById('canvas').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Semester Wise Result'
                }
            }
        });

    }

    function initializeLineChart() {
        var lineChartData = {
            labels: [
                @for($i=1;$i<=$student_id->current_sem; $i++)
                    'Semester {{ $i }}',
                @endfor
            ],
            datasets: [{
                label: 'Toppers',
                borderColor: window.chartColors.fuchsia,
                backgroundColor: window.chartColors.fuchsia,
                fill: false,
                data: [
                    {{$max[0]->sem_1_attendance}},{{$max[0]->sem_2_attendance}},{{$max[0]->sem_3_attendance}},{{$max[0]->sem_4_attendance}},{{$max[0]->sem_5_attendance}},{{$max[0]->sem_6_attendance}},{{$max[0]->sem_7_attendance}},{{$max[0]->sem_8_attendance}}
                ],
                yAxisID: 'y-axis-1',
            }, {
                label: "Your's",
                borderColor: window.chartColors.blue,
                backgroundColor: window.chartColors.blue,
                fill: false,
                data: [
                    {{ $student_id->sem_1_attendance }},{{ $student_id->sem_2_attendance }},{{ $student_id->sem_3_attendance }},{{ $student_id->sem_4_attendance }},{{ $student_id->sem_5_attendance }},{{ $student_id->sem_6_attendance }},{{ $student_id->sem_7_attendance }},{{ $student_id->sem_8_attendance }}
                ],
                yAxisID: 'y-axis-1',
            }, {
                label: 'Average',
                borderColor: window.chartColors.orange,
                backgroundColor: window.chartColors.orange,
                fill: false,
                data: [
                    @for($i=1;$i<=$student_id->current_sem;$i++)
                    {{ $avg_att[$i] }},
                    @endfor
                ],
                yAxisID: 'y-axis-1',
            }]
        };

        var ctx = document.getElementById('canvas-Attendence').getContext('2d');
        window.myLine = Chart.Line(ctx, {
            data: lineChartData,
            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title: {
                    display: true,
                    text: 'Attendence Chart'
                },
                scales: {
                    yAxes: [{
                        type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: 'left',
                        id: 'y-axis-1',
                    }, {
                        type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: 'right',
                        id: 'y-axis-2',
                        // grid line settings
                        gridLines: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    }],
                }
            }
        });
    }

    function initializeDoughnut() {
        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        @for($i=0;$i<4;$i++)
                        {{ $grade2[$i] }},
                        @endfor
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    'A+ Grade',
                    'A Grade',
                    'B Grade',
                    'C Grade'

                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Comparative Analysis'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };

        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myDoughnut = new Chart(ctx, config);

    }

    function barchart() {
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['Average of Branch', 'Your Marks', 'Percentile', 'Attendance', ],
            datasets: [{
                label: 'Last Semester',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    {{ $avg_marks[0] }},{{ $student_id->sem_5_marks }}, {{ $percentile[0] }},{{ $attendance[1] }}
                ]
            }, {
                label: 'This Semester',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    {{ $avg_marks[1] }}, @if(Schema::hasTable('predications')){{ $premarks }}
                        @else
                        35
                    @endif
                    , {{ $percentile[1] }}, {{ $attendance[0] }}
                ]
            } ]
        };

        var ctx = document.getElementById('barchart').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Semester Wise Result'
                }
            }
        });

    }

    window.onload = function () {

        initializeBarChart();
        initializeLineChart();
        initializeDoughnut();
        @if(Schema::hasTable('predictions')) {
            barchart();
        }
        @endif
    };

</script>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

</script>
</body>

</html>
