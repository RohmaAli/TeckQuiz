<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Login to TeckQuiz</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
    <style>
        .login {
            max-width: 512px;
        }
    </style>

    <div class="container-fluid">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <h5 class="text-center" style="margin-top:50px">Login to Online Quiz System</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Username</label>
                        <input id="usr" name="usr" type="text" value="{{ old('usr') }}" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" required autofocus>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="">Password</label>
                        <input id="password" name="password" type="password" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('usr') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Login</button>       
                    </div>
                    <p class="text-center text-muted">
                        Don't have an account?
                        <a href="/">Register here!</a>
                    </p>
                </form>
            </div>

        </div>
</body>

</html>