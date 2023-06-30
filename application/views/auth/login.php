<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>soengsouy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url() ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url() ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages pt-sm-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Minible.</p>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="<?php echo base_url('auth/login') ?>" method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Username</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <div class="float-end"> <a href="auth-recoverpw.html" class="text-muted">Forgot password?</a> </div>
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                    </div>
                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" name="login" id="login">Log In</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Don't have an account ? <a href="<?php echo base_url('auth/register') ?>" class="fw-medium text-primary"> Signup now </a> </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 text-center">
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url() ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url() ?>assets/admin/js/app.js"></script>
</body>

</html>