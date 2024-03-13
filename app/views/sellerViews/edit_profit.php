<?php require 'mainPageSeller/header_seller.php'; ?>

<body class="ltr main-body leftmenu">

<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">

    <?php require 'mainPageSeller/sidebar_seller.php'; ?>
    <form id="myForm" action="<?=seller_url('edit_profit').'?id='.get('id')?>" method="POST">

        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="main-container container-fluid">
                <div class="inner-body">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Edit Profit</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../../../index.php">Profit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profit</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <!-- First Row -->
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-header custom-card-header">
                                    <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0"><?=$customer['companyName']?> Profit</h5>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php foreach ($profit as $item){?>
                                        <div class="row row-sm">
                                            <div class="col-lx-4 col-lg-6 col-sm-8">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text border-end-0 wd-40p wd-lx-25p wd-lg-35p wd-sm-35p">
                                                        <?=$item["genus_name"]?>
                                                    </span>
                                                    <input value="<?=$item["profit"]?>" name="<?=$item["id"]?>" class="form-control" id="<?=$item["genus_name"]?>" type="number">
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                    <input type="submit" class="btn ripple btn-main-primary wd-25p wd-sm-15p  mt-3" value="SAVE" name="editProfit">
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </form>
    <?php require 'mainPageSeller/footer_seller.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?= @returned($message); ?>



