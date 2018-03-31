<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Portal</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_3.css')}}">
</head>
<body>


<div class="wrapper">

    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Teacher Section</h3>
        </div>

        <ul class="list-unstyled components">
            <p>
            <h3> &nbsp;&nbsp;&nbsp;{{ Auth::user()->name}}</h3></p>
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
    <div id="content">
        <header class="cd-main-header">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div>
            @yield('content')
        </div>

    </div>
</div>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

//        $("#sidebar").mCustomScrollbar({
//            theme: "minimal"
//        });

        $('#sidebarCollapse').on('click', function () {
            // open or close navbar
            $('#sidebar').toggleClass('active');

        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>