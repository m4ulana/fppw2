<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - RPS</title>

    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>css/main/app.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>/css/main/app-dark.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>/css/pages/auth.css" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/') ?>/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/') ?>   /images/logo/favicon.png" type="image/png" />

    <link rel="stylesheet" href="assets/css/shared/iconly.css" />
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html" class="auth-title">RPS</a>
                    </div>
                    <h3 class="auth mb-5">Log in.</h3>
                    <form action="<?= base_url('/auth') ?>" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="user_name" type="text" class="form-control form-control-xl" placeholder="Username" />
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="user_password" type="password" class="form-control form-control-xl" placeholder="Password" />
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="login">
                            Log in
                        </button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">
                            Belum punya akun ?
                            <a href="<?php echo base_url('/signup') ?>" class="font-bold">Daftar</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>