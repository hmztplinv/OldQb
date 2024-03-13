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
    <title>QBDigitals | Product</title>

    <!-- Bootstrap css-->
    <link  id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"/>

    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet"/>
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet"/>

    <!-- Style css-->
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet">

</head>

<body class="ltr main-body  error-1">

<!-- Main Content-->
<div class="main-content  pt-0">

    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Welcome To QBdigitals</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Catalogs</a></li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card productdesc">
                        <div class="card-body h-100">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="clearfix carousel-slider">
                                                <div id="thumbcarousel" class="carousel slide" data-bs-interval="false">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div data-bs-target="#carousel" data-bs-slide-to="0" class="thumb my-2"><img src="<?php echo public_url("images/exp1.jpg") ?>" alt="img"></div>
                                                            <div data-bs-target="#carousel" data-bs-slide-to="1" class="thumb my-2"><img src="<?php echo public_url("images/exp2.jpg") ?>" alt="img"></div>
                                                            <div data-bs-target="#carousel" data-bs-slide-to="2" class="thumb my-2"><img src="<?php echo public_url("images/exp3.jpg") ?>" alt="img"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                            <div class="product-carousel">
                                                <div id="carousel" class="carousel slide" data-bs-ride="false">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active"><a href="<?php echo public_url("images/exp1.jpg") ?>" data-fancybox="photos" class=""><img  src="<?php echo public_url("images/exp1.jpg") ?>" alt="img" class="img-fluid mx-auto d-block"></a></div>
                                                        <div class="carousel-item"><a href="<?php echo public_url("images/exp2.jpg") ?>" data-fancybox="photos" class=""> <img src="<?php echo public_url("images/exp2.jpg") ?>" alt="img" class="img-fluid mx-auto d-block"></a></div>
                                                        <div class="carousel-item"><a href="<?php echo public_url("images/exp3.jpg") ?>" data-fancybox="photos" class=""> <img src="<?php echo public_url("images/exp3.jpg") ?>" alt="img" class="img-fluid mx-auto d-block"></a></div>
                                                    </div>
                                                    <div class="text-center mt-4 mb-4 btn-list">
                                                        <a href="<?=site_url('signup')?>""><button type="button" class="btn ripple btn-primary" shopping_cart addcart"><i class="fe fe-shopping-cart"> </i> Add to cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productDetail" class="table table-hover dataTable key-buttons text-nowrap w-100">
                                            <thead class="text-center">
                                            <tr>
                                                <th>Download</th>
                                                <th>Origin</th>
                                                <th>Name</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            <tr>
                                                <td><a href="http://test.qbdigitals.com/customer/freight_detail?id=1"><i class="ti ti-search text-primary"></i></a></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->




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


</body>
</html>