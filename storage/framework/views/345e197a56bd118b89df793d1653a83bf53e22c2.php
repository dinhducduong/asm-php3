<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link href="<?php echo e(asset('/assets/css/mystyle.css')); ?>" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <?php if( Session::has('success') ): ?>
                <div class="px-3" role="alert">
                    <strong class="text-success"><?php echo e(Session::get('success')); ?></strong>
                    </button>
                </div>
                <?php endif; ?>
                <div class="card-body">
                    <form method="post">
                        <?php echo csrf_field(); ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email">

                        </div>
                        <?php if($errors->has('email')): ?>
                        <span class="text-danger"> <?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        <?php if($errors->has('password')): ?>
                        <span class="text-danger"> <?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnSub" class="btn float-right login_btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="<?php echo e(route('register')); ?>">Sign Up</a>
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
<?php /**PATH C:\xampp\htdocs\Laravel\asm_php3\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>