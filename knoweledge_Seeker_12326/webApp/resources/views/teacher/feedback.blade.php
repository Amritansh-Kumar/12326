<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Portal</title>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/teacher-feedback.css') }}">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


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
                <!--                        <a href="#">About</a>-->
                <a href="./question" style="text-decoration: none ; color: white">Questionnaire</a>
            </li>
            <li>
                <a href="./home" style="text-decoration: none ; color: white">Student Information</a>

            </li>
            <li>
                <a href="./feedback" style="text-decoration: none; color: white">Feedback</a>
            </li>
        </ul>
    </nav>
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
                        <li><a href="#" style="text-decoration: none ; color: white">Logout</a></li>

                    </ul>
                </div>
            </div>
        </header>
    </div>
    <div class="container ">

        <div class="row">
            <div class="col-md-offset-2 col-md-6 padd">
                Write your feedback here
            </div>
        </div>
        <div class="complete-box">
            <form method="post" action="{{ route('teacher.send') }}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 padd1">
                        <textarea id="summernote" name="editordata" name="msg"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-8 col-md-2">
                        <input type="submit" class="btn btn-info">
                    </div>
                    <div class="col-md-offset- col-md-2">
                        <button type="button" class="btn btn-info">Send to Student</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });
</script>


</body>
</html>