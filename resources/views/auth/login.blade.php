<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <h3>Welcome to IN+</h3>
        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>


        <form class="m-t" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <input id="email" type="email" class="form-control" placeholder="Username"
                   name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
            @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password"  placeholder="Password"
                       class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                @endif
            </div>

            <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                        </label>
                    </div>
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="{{ url('/password/reset') }}"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>

        </form>



        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

</body>

</html>

