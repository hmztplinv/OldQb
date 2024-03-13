<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">
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
    </style>

    <!-- Favicon -->
    <link rel="icon" href="public/img/brand/apple-icon-180x180.png" type="image/x-icon" />
    <!-- Title -->
    <title>QBDigitals | Satış</title>

    <!-- Bootstrap css-->
    <link id="style" href="public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="public/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="public/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="public/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="public/css/style.css" rel="stylesheet">

</head>

<body class="ltr main-body leftmenu error-1">


<!-- Page -->
<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center mx-auto">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="main-container container-fluid">
                        <div class="row row-sm pd-20">
                            <div class="card-body mt-2 mb-2">
                                <img src="public/img/brand/qbdigitals.png"
                                     class=" d-lg-none header-brand-img text-start float-start mb-4" alt="logo">
                                <div class="clearfix"></div>
                                <form action="<?=site_url('reset_password')?>" method="post">
                                        <input hidden name="userid" value="<?=get('userid')?>" >
                                        <input hidden name="validator" value="<?=get('validator')?>" >
                                        <input hidden name="expires" value="<?=get('expires')?>" >
                                        <input hidden name="email" value="<?=$email?>" >
                                        <input hidden name="token" value="<?=$token?>" >
                                    <h5 class="text-start mb-2">Reset Password</h5>
                                    <p class="mb-4 text-muted tx-13 ms-0 text-start">We'll reset your password.</p>
                                    <div class="form-group text-start">
                                        <label>New Password</label>
                                        <input name="pass" type="password" id="pass" class="form-control" required autofocus>
                                        <label>New Password Again</label>
                                        <input name="repass" type="password" id="repass" class="form-control" required autofocus>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <button type="submit" name="save" value="1" id="save"  class="btn ripple btn-main-primary">Reset Password</button>
                                    </div>
                                </form>
                                <div class="text-start mt-5 ms-0">
                                    <div class="mb-1"><a href="login">Return to Sign in</a></div>
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
<script src="public/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="public/plugins/bootstrap/js/popper.min.js"></script>
<script src="public/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 js-->
<script src="public/plugins/select2/js/select2.min.js"></script>
<script src="public/js/select2.js"></script>

<!-- Perfect-scrollbar js -->
<script src="public/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Color Theme js -->
<script src="public/js/themeColors.js"></script>

<!-- Custom js -->
<script src="public/js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?= @returned($message) ?>


</body>

</html>