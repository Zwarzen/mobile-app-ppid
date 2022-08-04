<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- Le styles -->
    <!-- <link href="https://ppid.banyuwangikab.go.id/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        /* Override some defaults */
        html,
        body {
            background-color: #eee;
        }

        body {
            padding-top: 40px;
        }

        .container {
            width: 380px;
        }

        /* The white background content wrapper */
        .container>.content {
            background-color: #fff;
            padding: 20px;
            -webkit-border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
        }

        .headlogin {
            background: url(https://ppid.banyuwangikab.go.id/assets/img/hlogin.jpg);
            height: 112px;
            margin-top: -20px;
            margin-right: -20px;
            margin-bottom: 20px;

            -webkit-border-radius: 10px 10px 0px 0px;
            -moz-border-radius: 10px 10px 0px 0px;
            border-radius: 10px 10px 0px 0px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .15);

        }

        .pojok {
            border-radius: 30px;
            background-clip: padding-box;
        }

        .login-form {
            margin-left: 65px;
            margin-right: 45px;
        }

        legend {
            margin-right: -50px;
            font-weight: bold;
            color: #404040;
        }
    </style>
    <script src="https://ppid.banyuwangikab.go.id/assets/js/vendor/jquery-1.9.1.min.js" type="d30458133b5aecaab97c75c2-text/javascript"></script>
</head> -->
<!-- 
<body>
    <div class="container">
        <div class="content" style="background-color:#21e273; font-weight:bold; border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-left-radius: 0.8px; border-bottom-right-radius: 0.8px;">
            <div class="row">
                <center>
                    PPID KABUPATEN BANYUWANGI
                </center>
            </div>
        </div>
        <div class="content" style="border-top-right-radius: 0.8px; border-top-left-radius: 0.8px;">
            <div class="row">
                <div class="login-form">

                    <form action="login" method="post" accept-charset="utf-8">
                        <fieldset>
                            <div class="clearfix">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-envelope"></i></span>
                                    <input type="text" name="identity" value="" id="identity" placeholder="Username">
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-lock"></i></span>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <button class="btn btn-info" type="submit"><i class="icon icon-user icon-white"></i>&nbsp; Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div> -->
    <!-- </div>  -->
    <!-- /container -->

    <!-- <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e736d57525dc99b6135f4776-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"733585e5f8149e32","token":"067fc07fd7884bf98dd4b4bd2dae1d55","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
<script src="https://ppid.banyuwangikab.go.id/assets/js/vendor/bootstrap.min.js" type="e736d57525dc99b6135f4776-text/javascript"></script>

</html> -->

@extends('products.layout')

@section('content')

<main class="login-form" style="margin-left: 40%; margin-top:15%; margin-bottom: 15%;">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    @if ($message = Session::get('errors'))

                    <div class="alert alert-danger">

                        <p>{{ $message }}</p>

                    </div>

                    @endif
                    <h3 class="card-header text-center">Login Admin PPID</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                autofocus>
                                @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
 
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
 
                            <!-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div> -->
 
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection