<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/parentlogin.css') }}">
    <title>Teacher login</title>
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
                        Teacher Login
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 image-padding ">
                        <img class= "img-responsive" src="{{ asset('img/pic.png') }}" alt="">
                    </div>
                </div>

                <form method="post" action="{{ url('/teacher/login') }}">
                    {{ csrf_field() }}
                    <div class="row in-between">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="text" class="form-control input-lg" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row in-between">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password" value="{{ old('password') }}">
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