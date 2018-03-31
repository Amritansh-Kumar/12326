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
    <link rel="stylesheet" href="{{ asset('css/student_welcome.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
</head>

<body>
<div id="content">
    <header class="cd-main-header">
        <div class="container-fluid">
            <nav class="navbar navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand cd-logo" href="#">Student Section</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"></a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle Teacher" data-toggle="dropdown" href="#">
                                {{ Auth::user()->Name }}<span class="caret"></span></a>
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

        <div class="col-md-offset-2 col-md-9 heading">
            Welcome {{ Auth::user()->Name }}, to the Student Portal
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-2 col-md-3 image1">
                        <a href="./index"><img src="{{ asset('img/Dashboard.jpg') }}" alt="Dashboard"></a>
                    </div>
                    <div class="col-md-3 image2">
                        <a href="./questions1"><img src="{{ asset('img/questionaire.jpg') }}" alt="Questionaire"></a>
                    </div>
                    <div class="col-md-3 image3">
                        <a href="./portfolio"><img src="{{ asset('img/view_your%20_portfolio.jpg') }}" alt="View your information"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>