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
                <div class="col-md-8 col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Register Account</h5>

                            </div>
                            <div class="p-2 mt-4">
                                <form action="<?php echo base_url('auth/register') ?>" method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" <?= validation_errors('email') ? 'is-invalid' : null; ?> id="email" placeholder="Enter email" value="<?= set_value('email'); ?>">
                                        <?= validation_errors('email', '<span class="bg-danger">', '</span>'); ?>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" name="username" class="form-control" <?= validation_errors('username') ? 'is-invalid' : null; ?> id="username" placeholder="Enter username" value="<?= set_value('username'); ?>">
                                        <?= validation_errors('username', '<span class="bg-danger">', '</span>'); ?>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" <?= validation_errors('password') ? 'is-invalid' : null; ?> id="password" placeholder="Enter password" value="<?= set_value('password'); ?>">
                                            <?= validation_errors('password', '<span class="bg-danger">', '</span>'); ?>
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label" for="password2">Verify Password</label>
                                            <input type="password" class="form-control" <?= validation_errors('password2') ? 'is-invalid' : null; ?> id="password2" name="password2" placeholder="Verify password" value="<?= set_value('password2'); ?>">
                                            <?= validation_errors('password2', '<span class="bg-danger">', '</span>'); ?>
                                        </div>
                                    </div>
                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" id="submit" name="submit">Register</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-0">Already have an account ? <a href="<?php echo base_url('auth'); ?>" class="fw-medium text-primary"> Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Minible. Crafted with <i class="mdi mdi-heart bg-danger"></i> by Themesbrand
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