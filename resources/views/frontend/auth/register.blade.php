<!DOCTYPE html>
<html>

<head>
    <title>Register Account</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link href="{{ asset('/assets/css/mystyle.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        @if ($errors->has('name'))
                        <span class="text-danger"> {{ $errors->first('name') }}</span>
                        @endif
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-exclamation-circle"
                                        aria-hidden="true"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email">

                        </div>
                        @if ($errors->has('email'))
                        <span class="text-danger"> {{ $errors->first('email') }}</span>
                        @endif
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger"> {{ $errors->first('password') }}</span>
                        @endif
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnSub" class="btn float-right login_btn">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="{{route('login')}}">Sign In</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
