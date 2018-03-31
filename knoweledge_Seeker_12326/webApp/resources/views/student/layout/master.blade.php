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
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Student Section</h3>
        </div>

        <ul class="list-unstyled components">
            <p><h4> &nbsp;&nbsp;&nbsp;{{ Auth::user()->Name}}</h4></p>
            <li>
                <a href="./index">Home</a>
            </li>
            <li>
                <!--                        <a href="#">About</a>-->
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Questionnaire</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li class="active"><a href="./questions1">Page 1</a></li>
                    <li><a href="./questions2">Page 2</a></li>
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
                    <li><a href="./discover">Discover Yourself</a></li>
                </ul>
            </li>
                @endif
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <header class="cd-main-header">
            <div class="container-fluid">

                {{--<div class="navbar-header">--}}
                    {{--<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn ">--}}
                        {{--<i class="glyphicon glyphicon-align-left"></i>--}}
                        {{--<span><strong>Student Portal</strong></span>--}}
                    {{--</button>--}}
                {{--</div>--}}

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>