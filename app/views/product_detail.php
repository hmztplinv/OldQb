<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta name="description" content="Qbdigitals - Customer Panel Dashboard"/>
    <meta name="author" content="Qbdigitals Technologies Private Limited" />
    <meta name="keywords" content="admin,dashboard,panel"/>

    <!-- Multislider css -->
    <link href="<?=public_url('plugins/multislider/multislider.css')?>" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="<?=public_url('images/brand/apple-icon-180x180.png')?>" type="image/x-icon" />
    <!-- Title -->
    <title>QBDigitals | Customer</title>
    <!-- Bootstrap css-->
    <link id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"/>
    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet"/>
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet" />
    <!--- Internal  Notify -->
    <link href="<?=public_url('plugins/notify/css/notifIt.css')?>" rel="stylesheet">
    <!-- DATA TABLE CSS -->
    <link href="<?=public_url('plugins/datatable/css/dataTables.bootstrap5.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/datatable/css/buttons.bootstrap5.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/datatable/css/responsive.bootstrap5.css')?>" rel="stylesheet" />
    <!-- Style css-->
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet" />


    <!-- Owl-carousel css-->
    <link href="<?=public_url('plugins/owl-carousel/owl.carousel.css')?>" rel="stylesheet" />

    <!-- Select2 css-->
    <link href="<?=public_url('plugins/select2/css/select2.min.css')?>" rel="stylesheet" />
    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?=public_url('plugins/multipleselect/multiple-select.css')?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" /> <link rel="icon" href="<?=public_url('images/brand/apple-icon-180x180.png')?>" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
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
        .detail-ti{
            margin: 8px 10px 0px 0px;
            font-size: 20px;
        }
        .detail-ti{
            margin: 8px 10px 0px 0px;
            font-size: 20px;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
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
                        <li class="breadcrumb-item"><a href="#">Product Details</a></li>
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
                                                            <?php $photos=File::get_images_by_product_id(get('id'));
                                                            ?>
                                                            <?php foreach ($photos as $index => $item): ?>
                                                                <div data-bs-target="#carousel" data-bs-slide-to="<?= $index ?>" class="thumb my-2">
                                                                    <img src="<?php echo public_url("product/img/") . $item['fileName'] ?>" alt="img">
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                            <div class="product-carousel">
                                                <div id="carousel" class="carousel slide" data-bs-ride="false">
                                                    <div class="carousel-inner">
                                                        <?php foreach ($photos as $index => $item): ?>
                                                            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                                                <a href="<?php echo public_url("product/img/") . $item['fileName'] ?>" data-fancybox="photos" class="">
                                                                    <img src="<?php echo public_url("product/img/") . $item['fileName'] ?>" alt="img" class="img-fluid mx-auto d-block">
                                                                </a>
                                                            </div>
                                                        <?php endforeach; ?>

                                                    </div>
                                                    <div class="mt-4 mb-4 btn-list d-flex justify-content-between align-items-center">
<!--                                                        <a href="--><?php //=site_url('customer/cart')?><!--">-->
<!--                                                            <button type="button" href="" data-id="--><?php //=$product['id']?><!--" data-origin="--><?php //=$product['product_origin']?><!--" data-currency="--><?php //=$product['currency']?><!--" data-collection="--><?php //=$product["collection"]?><!--" data-price="--><?php //= number_format($newprice, 2) ?><!--" class="btn ripple btn-primary shopping_cart addcart mr-2">-->
<!--                                                                <i class="fe fe-shopping-cart"></i> Add to cart-->
<!--                                                            </button>-->
<!--                                                        </a>-->
                                                        <button <?= empty($carts) ? 'hidden' : ''?> type="button" id="confirmBtn" class="mt-3 btn-primary btn  " onclick="goBack()">Keep Shopping</button>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <div class="mt-4 mb-4">
                                        <h4 class="mt-1 mb-3"><?=$product['name']?></h4>
                                        <?php   $price=Order::get_product_by_api($product['id'],$product['currency'],$product['product_origin']); ?>
                                        <span class="text-black"><b class="mb-2">COLLECTION :</b> <?=$product['collection']?></span><br>
                                        <span class="text-black"><b class="mb-2">STOCK :</b> <?=$price["totalStock"]!=null && $price["totalStock"]!=''? number_format($price["totalStock"],2,',','.'): '0,00' ?></span><br>
                                        <span class="text-black"><b class="mb-2">TYPE :</b> <?=$product['cins']?></span><br>
                                        <span class="text-black"><b class="mb-2">SIZE :</b> <?=$product['size']?></span><br>
                                        <span class="text-black"><b class="mb-2">THICKNESS :</b> <?=$product['thickness']?></span><br>
                                        <span class="text-black"><b class="mb-2">QUALITY :</b> <?=$product['quality']?></span><br>
                                        <span class="text-black"><b class="mb-2">Process :</b> <?=$product['reclap']?></span><br>
                                        <span class="text-black"><b class="mb-2">Finish :</b> <?=$product['matParlak']?></span><br>
                                        <span class="text-black"><b class="mb-2">PRODUCTION DATE :</b> <?php $prod=Products::check_production_program_by_id($product['id']);?>

                                             <?php if ($prod=='No Production'){}else{echo date('d-m-Y', strtotime($prod));} ?></p>
</span><br>
                                    </div>
                                    <div class="colors d-flex me-3 mt-2">
                                        <a href="<?=public_url("docs/report.pdf")?>" target="_blank" class="me-3">
                                            <button type="button" href="" data-id="<?=$product['id']?>" data-origin="<?=$product['product_origin']?>" data-currency="<?=$product['currency']?>" data-collection="<?=$product["collection"]?>" data-price="<?= number_format($product["price"], 2)?>" class="btn ripple btn-primary  shopping_cart addcart">
                                                <i class="ti-package detail-ti"></i> Technical Report
                                            </button>
                                            </button>
                                        </a>
                                        <a href="<?=public_url("docs/package.xlsx")?>" target="_blank">
                                            <button type="button" href="" data-id="<?=$product['id']?>" data-origin="<?=$product['product_origin']?>" data-currency="<?=$product['currency']?>" data-collection="<?=$product["collection"]?>" data-price="<?= number_format($product["price"], 2)?>" class="btn ripple btn-primary  shopping_cart addcart">
                                                <i class="ti-file detail-ti"></i>Packaging
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="productDetail" class="table table-hover dataTable key-buttons text-nowrap w-100">
                                            <thead class="text-center">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Batch</th>
                                                <th>Box</th>
                                                <th>Box Name</th>
                                                <th>Available Stock(sqm)</th>
                                                <th>Reserve Stock</th>
                                                <th>Total Stock</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            <tr>
                                                <td><?=$price['mtext']?></td>
                                                <td><?=$price['paletKodu'].$price['kutukodu'].$price['kutuadikodu'].$price['renkton']?></td>
                                                <td><?=$price['kutuadi']?></td>
                                                <td><?=$price['kutukoduadi']?></td>
                                                <td><?=$price['totalStock']-$price['reservestock']?></td>
                                                <td><?=$price['reservestock']?></td>
                                                <td><?=$price['totalStock']?></td>
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

<?= @returned($message); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

</body>
</html>