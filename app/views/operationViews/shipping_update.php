
<?php require 'mainPageOperation/header_operation.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">


    <?php require 'mainPageOperation/sidebar_operation.php' ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <form action="<?= operation_url('shipping_update?id=') .get('id')?><?php if(get('status')) echo '&status=1';?>" method="post" class="ml-5 mt-3">
        <div class="main-container container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Shipping Update.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shipping Update</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Shipping
                                    Update</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Field Manager</p>
                                            <input value="<?= $navlun['executiveName'] ?>" class="form-control input-lg" id="fieldManagerName"
                                                   name="fieldManagerName" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Real Firm</p>
                                            <input value="<?= $navlun['realFirm'] ?>" class="form-control input-lg" id="realFirm" name="realFirm"
                                                   type="text" disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Company Name</p>
                                            <input value="<?= $navlun['companyName'] ?>" class="form-control input-lg" id="companyName" name="companyName"
                                                   type="text" disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Date</p>
                                            <input value="<?= date('Y-m-d H:i:s', strtotime($shipping['createdDate'])) ?>" type="text" name="date" id="date" class="form-control input-lg"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Booking No</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= $navlun['bookingNo'] ?>" class="form-control input-lg" name="bookingNo" id="bookingNo"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Document Type</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= $shipping['documentType'] ?>" class="form-control input-lg" name="documentType"
                                                   id="documentType" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Departure Date</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= date("Y-m-d", strtotime($shipping['departureDate'])) ?>" type="text" name="departureDate" class="form-control input-lg">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Arrival Date</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= date("Y-m-d", strtotime($shipping['arrivalDate'])) ?>" class="form-control input-lg" name="arrivalDate" id="arrivalDate"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Container Quantity</p>
                                            <input value="<?= $navlun['containerQuantity'] ?>" class="form-control input-lg" name="containerQuantity"
                                                   id="containerQuantity" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Shipping Type</p>
                                            <input value="<?= $navlun['shippingType'] ?>" type="text" name="shippingType" id="shippingType"
                                                   class="form-control input-lg" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Price</p>
                                            <input value="<?= $navlun['navlunSoldPrice'] ?>" class="form-control input-lg" name="totalProfitability"
                                                   id="totalProfitability" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Currency Unit</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= $navlun['currency'] ?>" class="form-control input-lg" name="currencyUnit"
                                                   id="currencyUnit" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Document No</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= $shipping['documentNo'] ?>" type="text" name="documentNo" id="documentNo"
                                                   class="form-control input-lg" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Document Date</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= date("Y-m-d", strtotime($shipping['documentDate'])) ?>" class="form-control input-lg" name="documentDate"
                                                   id="documentDate" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Goods Buyer</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= $shipping['goods_buyer'] ?>" class="form-control input-lg" name="goodsBuyer" id="goodsBuyer"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Matbuu No</p>
                                            <input <?= get('status') == 1 ? 'disabled' : '' ?> value="<?= $shipping['matbuuNumber'] ?>" class="form-control input-lg" name="matbuuNumber"
                                                   id="matbuuNumber" type="text">
                                        </div>
                                    </div>
                                    <?php if (get('status') == 1): ?>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Status</p>
                                            <div class="form-group select2-lg">
                                                <select id="navlunStatus" name="navlunStatus" aria-label="Default select example" class="form-control select2">
                                                    <option disabled selected value="0">
                                                        Status
                                                    </option>
                                                    <option value="9" <?= $navlun['navlunStatus'] == 5 ? 'selected' : '' ?>>Henüz Yola Çıkmadı</option>
                                                    <option value="10" <?= $navlun['navlunStatus'] == 6 ? 'selected' : '' ?>>Yola Çıktı</option>
                                                    <option value="11" <?= $navlun['navlunStatus'] == 7 ? 'selected' : '' ?>>Limana Ulaştı</option>
                                                    <option value="12" <?= $navlun['navlunStatus'] == 8 ? 'selected' : '' ?>>Fatura Kesildi</option>
                                                </select>
                                            </div>
                                            <input hidden name="isapproved" value="1">
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="col-lg-6">
                                        <div class="mg-t-15">
                                            <button type="submit" name="updateshipping"
                                                value="1"    class="btn btn-primary btn-lg w-50 ripple">
                                                <i class="ti ti-reload"></i> UPDATE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Row End -->

            </div>
        </div>
        </form>
    </div>
    <!-- End Main Content-->

    <?php require 'mainPageOperation/footer_operation.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

