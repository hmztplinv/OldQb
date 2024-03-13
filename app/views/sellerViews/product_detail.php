<?php require 'mainPageSeller/header_seller.php'; ?>
<body class="ltr main-body leftmenu">
<style>
    .detail-ti{
        margin: 8px 10px 0px 0px;
        font-size: 20px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<!-- Page -->
<div class="page">

    <?php require 'mainPageSeller/sidebar_seller.php'; ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5"> Welcome To QBdigitals</h2>
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12">
                                        <div class="mt-4 mb-4">
                                            <h4 class="mt-1 mb-3"><?=$newproduct['name']?></h4>
                                            <?php  $price = Order::get_product_by_api(get('id'), $newproduct['currency'], $newproduct['product_origin']);

                                            ?>
                                            <span class="text-black"><b class="mb-2">COLLECTION :</b> <?=$newproduct['collection']?></span><br>
                                            <span class="text-black"><b class="mb-2">STOCK :</b> <?=$price["totalStock"]!=null && $price["totalStock"]!=''? number_format($price["totalStock"],2,',','.'): '0,00' ?></span><br>
                                            <span class="text-black"><b class="mb-2">TYPE :</b> <?=$newproduct['cins']?></span><br>
                                            <span class="text-black"><b class="mb-2">SIZE :</b> <?=$newproduct['size']?></span><br>
                                            <span class="text-black"><b class="mb-2">THICKNESS :</b> <?=$newproduct['thickness']?></span><br>
                                            <span class="text-black"><b class="mb-2">QUALITY :</b> <?=$newproduct['quality']?></span><br>
                                            <span class="text-black"><b class="mb-2">PROCESS :</b> <?php if ($price['reclap']=='Rec Var'){echo 'Rectified';}elseif($price['reclap']=='İSLEMSİZ'){echo 'Pressed';}elseif($price['reclap']=='REKTIFIYE'){echo 'Rectified';}else{echo  $price['reclap'];}?></span><br>

                                            <span class="text-black"><b class="mb-2">FINISH :</b> <?=$newproduct['matParlak']?></span><br>
                                            <?php $prod=Products::check_production_program_by_id($newproduct['id']);?>

                                            <span class="text-black"><b class="mb-2">PRODUCTION DATE :</b> <?php if ($prod=='No Production'){echo 'No Production';}else{echo date('d-m-Y', strtotime($prod));} ?></span><br>
                                            <span class="text-black"><b class="mb-2">PRICE :</b> <?= number_format($price['price1'], 2) ?></span> <span><?= $newproduct['currency'] ?></span><br>
                                                                               </div>

                                        <div class="colors d-flex me-3 mt-2">
                                            <?php if ($newproduct['cins'] == 'Floor Tile' && $newproduct['product_origin'] == 2): ?>
                                            <a href="<?= public_url("technicalreport\Annex H Technical Specifications of Floor Tile-Matte.pdf") ?>" target="_blank" class="me-3">
                                                <?php elseif ($newproduct['thickness'] == '2 CM' && $newproduct['product_origin'] == 2): ?>
                                                <a href="<?= public_url("technicalreport/Annex G Technical Specifications of Glazed Porcelain-2cm.pdf") ?>" target="_blank" class="me-3">
                                                    <?php elseif (($newproduct['thickness'] == '1 Cm' || $newproduct['thickness'] == '0,7 Cm') && $newproduct['product_origin'] == 2 && $newproduct['cins'] == 'Porcelain Tile'): ?>
                                                    <a href="<?= public_url("technicalreport/Annex G Technical Specifications of Glazed Porcelain.pdf") ?>" target="_blank" class="me-3">
                                                        <?php elseif (($newproduct['thickness'] == '1 Cm' || $newproduct['thickness'] == '0,7 Cm') && $newproduct['product_origin'] == 2 && $newproduct['cins'] == 'Wall Tile'): ?>
                                                        <a href="<?= public_url("technicalreport/Annex L Technical Specifications of Wall Tile.pdf") ?>" target="_blank" class="me-3">
                                                            <?php elseif ($newproduct['thickness'] == '2 Cm' && $newproduct['product_origin'] == 1 && $newproduct['cins'] == 'Porcelain Tile'): ?>
                                                            <a href="<?= public_url("technicalreport/2 cm - Technical Specifications of Glazed Porcelain.pdf") ?>" target="_blank" class="me-3">
                                                                <?php elseif (($newproduct['thickness'] == '1 Cm' || $newproduct['thickness'] == '0,7 Cm') && $newproduct['product_origin'] == 1 && $newproduct['cins'] == 'Porcelain Tile'): ?>
                                                                <a href="<?= public_url("technicalreport/Technical Specifications of Glazed Porcelain.pdf") ?>" target="_blank" class="me-3">
                                                                    <?php endif; ?>



                                                                    <button type="button" href="" data-id="<?=$newproduct['id']?>" data-origin="<?=$newproduct['product_origin']?>" data-currency="<?=$newproduct['currency']?>" data-collection="<?=$newproduct["collection"]?>" data-price="<?= number_format($newproduct["price"], 2)?>" class="btn ripple btn-primary     ">
                                                                        <i class="ti-package detail-ti"></i> Technical Report
                                                                    </button>

                                                                </a>
                                                                <a href="<?=public_url("docs/package.xlsx")?>" target="_blank">
                                                                    <button type="button" href="" data-id="<?=$newproduct['id']?>" data-origin="<?=$newproduct['product_origin']?>" data-currency="<?=$newproduct['currency']?>" data-collection="<?=$newproduct["collection"]?>" data-price="<?= number_format($newproduct["price"], 2)?>" class="btn ripple btn-primary     ">
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

                                                <?php foreach ($stocks as $item):?>

                                                    <?php $order=Order::get_box_with_api(substr($item['batchnum'], 4, 2),$newproduct['product_origin'])?>
                                                    <?php $orders=Order::get_boxname_with_api(substr($item['batchnum'], 6, 2),$newproduct['product_origin'])?>

                                                    <tr>
                                                        <td><?=$price['mtext']?></td>
                                                        <td><?=$item['batchnum']?></td>
                                                        <td><?=$order['stext']?></td>
                                                        <td><?=$orders['stext']?></td>
                                                        <td><?=$item['totalstock']-$item['reservestock']?></td>
                                                        <td><?=$item['reservestock']?></td>
                                                        <td><?=$item['totalstock']?></td>


                                                    </tr>
                                                <?php endforeach ;?>




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

    <?php require 'mainPageSeller/footer_seller.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        var example=$('#productDetail').DataTable({
            pageLength: 1,
            paging:false,
            dom: 'Bfrtip',
            buttons: [],
            info:false,
            searching: false
        });

        $('[data-fancybox="photos"]').fancybox({
            buttons : [
                'zoom',
                'slideShow',
                'download',
                'thumbs',
                'fullScreen',
                'close'

            ]
        });

    </script>
