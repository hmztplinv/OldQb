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
    <link rel="icon" href="<?=public_url('img/brand/apple-icon-180x180.png')?>" type="image/x-icon" />
    <!-- Title -->
    <title>QBDigitals | Sign Up</title>

    <!-- Bootstrap css-->
    <link id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet" />

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
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                        <div class="mt-5 pt-5 p-2 pos-absolute">
                            <img src="<?=public_url('images/brand/qbdigitals.png')?>" class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <h5 class="mt-4 text-white">Create Your Account</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Or</span>
                            <p class="mt-2"><a class="text-white" href="login">Sign In</a>

                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
                        <div class="main-container container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="<?=public_url('images/brand/qbdigitals.png')?>"
                                         class=" d-lg-none header-brand-img text-start mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-center mb-2">Signup</h5>
                                    <form  action="<?= site_url('signup') ?>" method="POST">
                                        <div class="form-group text-start">
                                            <label>Email</label>
                                            <input name="email" id="inputEmail" class="form-control" required autofocus placeholder="Enter your email" type="email">
                                        </div>
                                        <div class="form-group text-start">
                                            <label>Name Surname</label>
                                            <input name="username" id="inputUser" required class="form-control" placeholder="Enter your name and surname" type="text">
                                        </div>
                                        <div class="form-group text-start">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Enter your password"  type="password" name="password" id="inputPassword" class="form-control"  required="">
                                        </div>
                                        <button  name="signup" value="1" type="submit" id="signup" class="btn ripple btn-main-primary btn-block">Create Account</button>

                                    <button id="alreadyCustomer" type="button" class="btn mt-4">Are you already our customer?</button>
                                    <div id="supplier-selection" style="display: none" class="text-start mt-2 ms-0" >
                                        <h5 class="mb-2 lead text-center mt-3">Pick your supplier</h5>
                                        <div class="d-flex justify-content-center">
                                            <label class="radiobox me-2 text-center">
                                                <input id="option1" name="selection" value="1" type="radio">
                                                <span>QUA</span>
                                            </label>

                                            <label class="rdiobox me-2 text-center">
                                                <input id="option2" name="selection" value="2" type="radio">
                                                <span>BIEN</span>
                                            </label>

                                            <label class="rdiobox me-2 text-center">
                                                <input id="option3" name="selection" value="3" type="radio">
                                                <span>QUA &amp; BIEN</span>
                                            </label>
                                        </div>



                                        <div class="form-group text-start mt-2">
                                            <input name="customerNo" id="customerNo"  class="form-control" placeholder="QUA Customer No" type="input">
                                        </div>
                                        <div class="form-group text-start">
                                            <input  name="customerNoBien" id="customerNoBien" class="form-control" placeholder="BIEN Customer No" type="input">
                                        </div>

                                    </div>
                                    </form>

                                    </p>
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
<script src="<?=public_url('js/select2.js"')?>" ></script>

<script src="<?=public_url('plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>

<!-- Color Theme js -->
<script src="<?=public_url('js/themeColors.js')?>"></script>

<!-- Custom js -->
<script src="<?=public_url('js/custom.js')?>"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>

<script>
    $(document).ready(function() {
        $('#alreadyCustomer').click(function() {
            $(this).hide();
            $('#supplier-selection').show();
        });
        $('#customerNoBien').hide();
        $('#customerNo').hide();
    });
    $('#option1').change(function() {
        if ($(this).is(':checked')) {
            $('#customerNo').show();
            $('#customerNo').val('');
            $('#customerNoBien').hide();
            $('#customerNoBien').val('');
        }
    });

    $('#option2').change(function() {
        if ($(this).is(':checked')) {
            $('#customerNo').hide();
            $('#customerNoBien').show();
            $('#customerNoBien').val('');
            $('#customerNo').val('');
        }
    });

    $('#option3').change(function() {
        if ($(this).is(':checked')) {
            $('#customerNo').show();
            $('#customerNoBien').show();
            $('#customerNoBien').val('');
            $('#customerNo').val('');
        }
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= @returned($message) ?>

</body>

</html>