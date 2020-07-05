<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!-- HEAD -->
<!-- icon -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/node_modules/@fortawesome/fontawesome-free/css/all.min.css'); ?>">

<!-- plugins -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">

<!-- admin lte FRAMEWORK STYLES -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/node_modules/admin-lte/dist/css/adminlte.min.css'); ?>">
<!-- custom styles -->
<link rel="stylesheet" href="<?= base_url('assets/css/backend/login_styles.css'); ?>">
<!-- font -->
<link rel="stylesheet" href="<?= base_url('assets/fonts/font-face.css'); ?>">
<!-- /HEAD -->
</head>
<body class="hold-transition login-page">
    <div class="wrapper w-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-4 d-flex justify-content-center align-self-center">
                    <div class="login-box">
                        <div class="login-logo">
                            <a href="../../index2.html"><img src="assets/img/_main/egrow_text_logo.svg" alt="Egrow Private"></a>
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Sign in to manage your site.</p>
                                
                                <form action="<?= base_url('login/logmein'); ?>" method="post">
                                    <div class="input-group mb-3">
                                        <input type="username" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <!-- <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                    Remember Me
                                                </label>
                                            </div> -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                
                                <hr>
                                <p class="text-center mb-0"><small><strong>&copy; <?= date('Y'); ?> <a href="">Egrow Private</a>.</strong> All rights reserved.</small>
                                </p>
                                <!-- <p class="mb-1">
                                    <a href="forgot-password.html">I forgot my password</a>
                                </p> -->
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div><!-- /.login-box -->
                </div>
            </div>
        </div>
    </div>

<!-- SCRIPT -->
<script src="assets/vendor/node_modules/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/node_modules/admin-lte/dist/js/adminlte.min.js"></script>
<script src="assets/vendor/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/vendor/node_modules/jquery-validation/dist/additional-methods.min.js"></script>
<!-- /SCRIPT -->
</body>
</html>