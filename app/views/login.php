<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">
    <!-- Favicon -->
    <link rel="icon" href="<?=public_url('images/brand/apple-icon-180x180.png')?>" type="image/x-icon" />
    <style>
        .main-signin-wrapper {

            flex: 1;

            display: flex;

            justify-content: center;

            background-image: url(<?=public_url('images/pngs/bck_new.png')?>);

            background-position: center;

            background-size: cover;

        }
        .signpages .details {
            background-color: #343957;
        }
    </style>
    <!-- Favicon -->
    <link rel="icon" href="<?=public_url('/images/brand/images/brand/apple-icon-180x180.png')?>" type="image/x-icon" />
    <!-- Title -->
    <title>QBDigitals | Sign In</title>

    <!-- Bootstrap css-->
    <link  id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"/>

    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet"/>
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet"/>

    <!-- Style css-->
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet">

</head>

<body class="ltr main-body leftmenu error-1">

<!-- Page -->
<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center" style="background-color: #343957">
                        <div class="mt-5 pt-4 p-2 pos-absolute">
                            <img src="<?=public_url('images/brand/qbdigitals.png')?>" class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <h5 class="mt-4 text-white">Login to your account</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signin to purchase new order or you can check or <a
                                        style="color:#2ef5ce" href="product?page=1">Products</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="main-container container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="<?=public_url('images/brand/qbdigitals.png')?>" class=" d-lg-none header-brand-img text-start mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <form class="auth-form" action="<?= site_url('login') ?>" method="post">
                                        <h5 class="text-center mb-2">Signin to Your Account</h5>
                                        <p class="mb-4 text-muted tx-13 ms-0 text-center">Signin to purchase new order.</p>
                                        <div class="form-group text-start">
                                            <label>Username</label>
                                            <input required id="inputUser" name="email" autofocus class="form-control" placeholder="Enter your username" type="text">
                                        </div>
                                        <div class="form-group text-start">
                                            <label>Password</label>
                                            <input required id="inputPassword" name="password" class="form-control" placeholder="Enter your password" type="password">
                                        </div>
                                        <button name="login" value="1" type="submit" id="submit" class="btn ripple btn-main-primary btn-block">Sign In</button>
                                    </form>
                                    <div class="text-start mt-5 ms-0">
                                        <div class="mb-1"><a href="<?=site_url('recovery_password') ?>">Forgot password?</a></div>
                                        <div>Don't have an account? <a href="<?= site_url('signup') ?>">Register Here</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

</div>
<!-- End Page -->

<!-- Jquery js-->
<script src="<?=public_url('plugins/jquery/jquery.min.js')?>"></script>

<!-- Bootstrap js-->
<script src="<?=public_url('plugins/bootstrap/js/popper.min.js')?>"></script>
<script src="<?=public_url('plugins/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Select2 js-->
<script src="<?=public_url('plugins/select2/js/select2.min.js')?>"></script>
<script src="<?=public_url('js/select2.js')?>"></script>

<!-- Perfect-scrollbar js -->
<script src="<?=public_url('plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>

<!-- Color Theme js -->
<script src="<?=public_url('js/themeColors.js')?>"></script>

<!-- Custom js -->
<script src="<?=public_url('js/custom.js')?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?= @returned($message); ?>


</body>
</html>