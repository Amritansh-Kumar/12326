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
    <style>
        li{
            font-size: 20px;

        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/graph_analysis.css') }}">
    <script src="{{ asset('js/chart.js') }}"></script>
</head>

<body>


<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Teacher Section</h3>
        </div>

        <ul class="list-unstyled components">
            <p>{{ Auth::user()->name }}</p>

            <li>
                <a href="./question">Questionnaire</a>

            </li>
            <li>
                <a href="./home">Student Information</a>
            </li>
            <li>
                <a href="./feedback">Feedback</a>
            </li>
        </ul>

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
                            <a href="{{ route('logout') }}" class="btn  "
                               onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Student Information</h3>
            </div>
        </div>
        <div class="wrap">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="row row-eq-height">
                        <div class="col-md-12 left">
                            <div class="box">
                                <table class="table table-bordered table-striped table-hover ">
                                    <tbody>
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td>{{ $data->Name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Student Number</td>
                                        <td>{{ $data->student_no }}</td>

                                    </tr>
                                    <tr>

                                    </tr>
                                    <tr>
                                        <td>Branch</td>
                                        <td>{{ $data->branch }}</td>

                                    </tr>
                                    <tr>
                                        <td>Roll Number</td>
                                        <td>{{ $data->roll_no }}</td>

                                    </tr>
                                    <tr>
                                        <td>Btech %</td>
                                        <td>{{ $data->B_tech }}</td>

                                    </tr>
                                    <tr>
                                        <td>Phone No.</td>
                                        <td>{{ $data->contact }}</td>

                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>{{ $data->email }}</td>

                                    </tr>

                                    <tr>
                                        <td>Attendence this Sem</td>
                                        <td>{{ $data->sem_6_attendance }}</td>

                                    </tr>
                                    <tr>
                                        @if(Schema::hasTable('predictions'))
                                            <td><strong>Predication of DropOut</strong></td>
                                            <td style="font-weight: 500;">
                                                @if($predicated->predicted_drop==1)
                                                    <strong>
                                                        <span style="color: red">Very Near to Drop Out !!!</span>
                                                    </strong>
                                                @else
                                                    <span style="color: #3c763d">
                                                Student is in Safe Zone.
                                            </span>
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                    </tbody>
                                </table>
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
                        <div class="box">
                            <div style="padding:50px; height:280px !important">
                                <ul>
                                    <li style="margin-bottom: 10px;">Shown here is your aggregate B.Tech %.</li>
                                    <li style="margin-bottom: 10px;">The grading is absolute, irrespective of the grade
                                        of other students in the class.
                                    </li>
                                    <br>
                                    <li >Marks and rank are based on your performance in last semester examinamtion.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 30px;">
                        <div class="box">
                            <canvas style="height: 270px !important;  " id="canvas"></canvas>
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
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <div class="row bottom-graph">
                    <div class="col-md-6">
                        <div class="box">
                            <canvas id="canvas-Attendence"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="box">
                            <div style="padding:50px; height:280px !important">
                                <ul>
                                    <li style="margin-bottom: 20px;">Minimum attendance required to appear in University Examination is 75%.</li>
                                    <li>College gives cash reward to students whose attendance 90% and above.</li>
                                    <br>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function initializeBarChart() {
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [
                @for($i=1;$i<$data->current_sem; $i++)
                    'Semester {{ $i }}',
                @endfor
            ],
            datasets: [{
                label: 'Student',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    {{ $data->sem_1_marks }},{{ $data->sem_2_marks }},{{ $data->sem_3_marks }},{{ $data->sem_4_marks }},{{ $data->sem_5_marks }},{{ $data->sem_6_marks }},{{ $data->sem_7_marks }},{{ $data->sem_8_marks }}
                ]
            },]
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

                @for($i=1;$i<=$data->current_sem; $i++)
                    'Semester {{ $i }}',
                @endfor
            ],
            datasets: [{
                label: 'Student',
                borderColor: window.chartColors.blue,
                backgroundColor: window.chartColors.blue,
                fill: false,
                data: [
                    {{ $data->sem_1_attendance }},{{ $data->sem_2_attendance }},{{ $data->sem_3_attendance }},{{ $data->sem_4_attendance }},{{ $data->sem_5_attendance }},{{ $data->sem_6_attendance }},{{ $data->sem_7_attendance }},{{ $data->sem_8_attendance }}
                ],
                yAxisID: 'y-axis-1'
            },]
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

    window.onload = function () {

        initializeBarChart();
        initializeLineChart();
//           initializeDoughnut();
//           barchart();

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
