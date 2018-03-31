<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Portal</title>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Our Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/student-entry-page.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        blink {
            color: red;
            -webkit-animation: blink 1s step-end infinite;
            animation: blink 1s step-end infinite
        }

        /*  @-webkit-keyframes blink {
         67% { opacity: 0 }
                  } */

        @keyframes blink {
            67% {
                opacity: 0.5
            }
        }
    </style>

</head>


<body>

<div id="content">
    <header class="cd-main-header">
        <div class="container-fluid">
            <nav class="navbar navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand cd-logo" href="#">Teacher Section</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle Teacher" data-toggle="dropdown" href="#">
                                {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="row">
        <div class="col-md-offset-4 col-md-4 heading">
            Welcome to Teacher Portal
        </div>
    </div>
    @if(Schema::hasTable('predictions'))
        <div class="row">
            <div class="col-md-12">
                <div class="row padd">
                    <div class="col-md-offset-4 col-md-2">
                        <h2></h2>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-warning btn-lg btn-lg1" data-toggle="modal"
                                data-target="#myModal">Potential Achievers
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Potential Achievers</h4>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            @for($i=0;$i<5;$i++)
                                                <li>{{ $topper[$i]->Name }}->({{ $topper[$i]->student_no }})</li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-2">

                        <h2></h2>
                        <!-- Trigger the modal with a button -->
                        <blink>
                            <button type="button" class="btn btn-danger btn-lg btn-lg2" data-toggle="modal"
                                    data-target="#myModal1">Need Concern
                            </button>
                        </blink>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">


                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title1">Need Concern</h4>
                                    </div>
                                    <div class="modal-body">
                                        <ol>
                                            @for($i=0;$i<$prediction_drop2;$i++)
                                                <li>{{ $prediction_drop[$i]->name }} =>
                                                    ({{ $prediction_drop[$i]->student_no }})&nbsp;&nbsp;&nbsp;<span
                                                            style="color: red">Drop Out Zone!!</span></li>
                                            @endfor
                                            @for($i=0;$i<$student_drop2;$i++)
                                                <li>{{ $student_drop[$i]->Name }} =>
                                                    ({{ $student_drop[$i]->student_no }})&nbsp;&nbsp;&nbsp;<span
                                                            style="color: steelblue">In Warning Zone !!</span></li>
                                            @endfor
                                        </ol>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div class="box">
                        <form action="find_student" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="usr"><font size="5"> Student Number</font></label>
                                <input type="text" class="form-control" id="" placeholder="ex : 1234567" name="st_id">
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label for="pwd"><font size="5">Branch</font></label>--}}
                            {{--<input type="password" class="form-control" id="" placeholder="ex : CS">--}}
                            {{--</div>--}}
                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</body>

</html>
{{--<!DOCTYPE html>--}}

{{--<html>--}}

{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}

{{--<title>Student Portal</title>--}}


{{--<!-- Bootstrap CSS CDN -->--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<!-- Our Custom CSS -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">--}}
{{--<link rel="stylesheet" href="{{ asset('css/student-entry-page.css') }}">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">--}}

{{--</head>--}}

{{--<body>--}}
{{--<div id="content">--}}
{{--<header class="cd-main-header">--}}
{{--<div class="container-fluid">--}}
{{--<nav class="navbar navbar">--}}
{{--<div class="container-fluid">--}}
{{--<div class="navbar-header">--}}
{{--<a class="navbar-brand cd-logo" href="#">Teacher Section</a>--}}
{{--</div>--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li class="active"><a href="#"></a></li>--}}

{{--<li class="dropdown">--}}
{{--<a class="dropdown-toggle Teacher" data-toggle="dropdown" href="#">--}}
{{--Teacher Name <span class="caret"></span></a>--}}
{{--<ul class="dropdown-menu">--}}
{{--<li>--}}
{{--<a href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</nav>--}}
{{--</div>--}}
{{--</header>--}}

{{--<div class="row">--}}

{{--<div class="col-md-offset-4 col-md-4 heading">--}}
{{--Welcome to Teacher Portal--}}
{{--</div>--}}

{{--</div>--}}

{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<div class="row">--}}
{{--<div class="col-md-offset-4 col-md-4">--}}
{{--<div class="box">--}}
{{--<form action="./find_student" method="post">--}}
{{--{{ csrf_field() }}--}}
{{--<div class="form-group">--}}
{{--<label for="usr"><font size="5"> Student Number</font></label>--}}
{{--<input type="text" class="form-control" id="" placeholder="ex : 1234567" name="st_id" required="">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="pwd"><font size="5">Branch</font></label>--}}
{{--<input type="text" class="form-control" id="" placeholder="ex : CS" required="">--}}
{{--</div>--}}
{{--<input type="submit" class="btn btn-success">--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</body>--}}

{{--</html>--}}