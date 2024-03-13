<?php require 'mainPageOperation/header_operation.php' ?>

<body class="ltr main-body leftmenu" xmlns="http://www.w3.org/1999/html">


<!-- Loader -->
<div id="global-loader">
    <img src="../public/img/brand/qbdigitals.png" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">
<?php require 'mainPageOperation/sidebar_operation.php' ?>


    <!-- Main Content-->
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Shipping Add.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shipping Add</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <form action="<?= operation_url('shipping_add?id=') . get('id') ?>" method="post" class="ml-5 mt-3">
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Shipping
                                    Add</h5>
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
                                            <input type="text" name="date" id="date" class="form-control input-lg" value="<?= date('Y-m-d H:i:s', strtotime($navlun['createdDate'])) ?>"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Booking No</p>
                                            <input value="<?= $navlun['bookingNo']?>" class="form-control input-lg" name="bookingNo" id="bookingNo"
                                                   type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Document Type</p>
                                            <input value="" class="form-control input-lg" name="documentType"
                                                   id="documentType" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Departure Date</p>
                                            <input type="date" name="departureDate" class="form-control input-lg"
                                                   >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Arrival Date</p>
                                            <input class="form-control input-lg" name="arrivalDate" id="arrivalDate"
                                                   type="date" >
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
                                            <input value="<?= $navlun['currency'] ?>" class="form-control input-lg" name="currencyUnit"
                                                   id="currencyUnit" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Document No</p>
                                            <input value="" type="text" name="documentNo" id="documentNo"
                                                   class="form-control input-lg" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Document Date</p>
                                            <input class="form-control input-lg" name="documentDate"
                                                   id="documentDate" type="date">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Goods Buyer</p>
                                            <input class="form-control input-lg" name="goodsBuyer" id="goodsBuyer"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Matbuu No</p>
                                            <input class="form-control input-lg" name="matbuuNumber"
                                                   id="matbuuNumber" type="text">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="mg-t-15">
                                            <button type="submit" name="addnewshipping" value="1"
                                                    class="btn btn-primary btn-lg w-50 ripple">
                                                Add New Shipping</button>
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
    </div>
    <!-- End Main Content-->

</form>
<?php require 'mainPageOperation/footer_operation.php' ?>

