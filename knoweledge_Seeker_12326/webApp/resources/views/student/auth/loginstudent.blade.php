{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    {{--<title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--</body>--}}
{{--</html>--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Portal</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/studentlogin.css') }}">
    <title>Student Login</title>
</head>
<body>
<div class ="container ">
    <div class="row logo-padding">
        <div class="col-md-offset-10">
            <img src="{{ asset('img/knowledge-seekers-logo.png') }}" class="img-responsive img-padding" alt="Knowledge Seekers">
        </div>
    </div>
    <div class="row ">
        <div class=" col-md-8 padding-in">
            <div class="box">
                <div class="row">
                    <div class="col-md-12 text">
                        Student Login
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 image-padding ">
                        <img class= "img-responsive" src="{{ asset('img/user.png') }}" alt="">
                    </div>
                </div>

                <form method="POST" action="{{ url('/student/login') }}">
                    {{ csrf_field() }}
                    <div class="row in-between">
                        <div class="col-md-12">
                            <div class="input-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="text" class="form-control input-lg" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row in-between">
                        <div class="col-md-12">
                            <div class="input-group" {{ $errors->has('password') ? ' has-error' : '' }}>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="row in-between-button">
                        <div class="col-md-offset-8 col-md-2">
                            <button type="submit" class="btn btn-default">LOG IN</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
