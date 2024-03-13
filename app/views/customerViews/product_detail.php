<?php require 'mainPageCustomer/header_customer.php'; ?>
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

    <?php require 'mainPageCustomer/sidebar_customer.php'; ?>

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
                                                        <div class="mt-4 mb-4 btn-list d-flex justify-content-between align-items-center">
                                                            <a href="<?=site_url('customer/cart')?>">
                                                                <button type="button" href="" data-sqm="<?=number_format($price['totalquan'],2)?>" data-id="<?=$product['id']?>" data-origin="<?=$product['product_origin']?>" data-currency="<?=$product['currency']?>" data-collection="<?=$product["collection"]?>" data-price="<?= number_format($newprice, 2) ?>" class="btn ripple btn-primary shopping_cart addcart mr-2">
                                                                    <i class="fe fe-shopping-cart"></i> Add to cart
                                                                </button>
                                                            </a>
                                                            <button   type="button" id="confirmBtn" class="mt-3 btn-primary btn  " onclick="goBack()">Keep Shopping</button>
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
                                            <span class="text-black"><b class="mb-2">Material Code :</b> <?=$newproduct['id']?></span><br>
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
                                            <span class="text-black"><b class="mb-2">PRICE :</b> <?= number_format($newprice, 2) ?></span> <span><?= $newproduct['currency'] ?></span><br>
                                            <!--  <span class="text-black"><b class="mb-2">PRICE :</b> <?=number_format(( ( $price['price1'] * ( 1 + ($newprofit[0]['profit']/100) ) ) ),2)?></span><br>
                                                                               -->  </div>

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



                                                <button type="button" href="" data-id="<?=$newproduct['id']?>" data-origin="<?=$newproduct['product_origin']?>" data-currency="<?=$newproduct['currency']?>" data-collection="<?=$newproduct["collection"]?>" data-price="<?= number_format($newprice, 2) ?>" class="btn ripple btn-primary     ">
                                                    <i class="ti-package detail-ti"></i> Technical Report
                                                </button>

                                            </a>
                                            <a href="<?=public_url("docs/package.xlsx")?>" target="_blank">
                                                <button type="button" href="" data-id="<?=$newproduct['id']?>" data-origin="<?=$newproduct['product_origin']?>" data-currency="<?=$newproduct['currency']?>" data-collection="<?=$newproduct["collection"]?>" data-price="<?= number_format($newprice, 2) ?>" class="btn ripple btn-primary     ">
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

                                                <?php foreach ($stocks as $item): ?>
                                                    <?php
                                                    $order = Order::get_box_with_api(substr($item['batchnum'], 4, 2), $newproduct['product_origin']);
                                                    $orders = Order::get_boxname_with_api(substr($item['batchnum'], 6, 2), $newproduct['product_origin']);

                                                    // Hesaplamaları burada yapın
                                                    $availableStock = $item['totalstock'] - $item['reservestock'];
                                                    ?>

                                                    <tr>
                                                        <td><?= $price['mtext'] ?></td>
                                                        <td><?= $item['batchnum'] ?></td>
                                                        <td><?= $order['stext'] ?></td>
                                                        <td><?= $orders['stext'] ?></td>
                                                        <td class="available-stock"><?= $availableStock ?></td>
                                                        <td class="reserve-stock"><?= $item['reservestock'] ?></td>
                                                        <td class="total-stock"><?= $item['totalstock'] ?></td>
                                                    </tr>

                                                <?php endforeach; ?>

                                                </tbody>

                                                <!-- Tablo Altı -->
                                                <tfoot>
                                                <tr>
                                                    <th colspan="4">Total:</th>
                                                    <th class="text-center" id="totalAvailableStock">0</th>
                                                    <th class="text-center" id="totalReserveStock">0</th>
                                                    <th class="text-center" id="totalTotalStock">0</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center">Available Stock(sqm)</th>
                                                    <th class="text-center">Reserve Stock</th>
                                                    <th class="text-center">Total Stock</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function () {
                                                    updateTotals();
                                                });

                                                function updateTotals() {
                                                    var totalAvailableStock = totalReserveStock = totalTotalStock = 0;

                                                    var rows = document.querySelectorAll("#productDetail tbody tr");
                                                    rows.forEach(function (row) {
                                                        var availableStock = parseInt(row.querySelector(".available-stock").textContent);
                                                        var reserveStock = parseInt(row.querySelector(".reserve-stock").textContent);
                                                        var totalStock = parseInt(row.querySelector(".total-stock").textContent);

                                                        totalAvailableStock += availableStock;
                                                        totalReserveStock += reserveStock;
                                                        totalTotalStock += totalStock;
                                                    });

                                                    document.getElementById("totalAvailableStock").textContent = totalAvailableStock;
                                                    document.getElementById("totalReserveStock").textContent = totalReserveStock;
                                                    document.getElementById("totalTotalStock").textContent = totalTotalStock;
                                                }
                                            </script>
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

<?php require 'mainPageCustomer/footer_customer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        var example=$('#productDetail').DataTable({
            pageLength: 1,
            paging:false,
            dom: 'Bfrtip',
            fixedHeader: {
                header: true,
                footer: true
            },
            buttons: [],
            info:false,
            searching: false
        });
        $('.shopping_cart').click(function (e) {
            var id =$(this).data('id');
            var price = $(this).data('price');
            var sqm = $(this).data('sqm');
            var dataToSend = { new_cart: id + ',' + price + ',' + sqm};

            $.post("<?= customer_url('new_order') ?>", dataToSend, function (result) {
                alert(result)
            });
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
    <script>
        function goBack() {
            // Önceki sayfanın URL'sini al
            const previousPage = document.referrer;

            // Eğer önceki sayfa new_order ise, o sayfaya yönlendir
            if (previousPage && previousPage.includes("/customer/new_order")) {
                window.location.href = previousPage;
            } else {
                // Eğer önceki sayfa new_order değilse, normal geri git
                window.location.href="https://www.qbdigitals.com/customer/new_order?page=1";
            }
        }
    </script>