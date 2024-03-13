<?php require 'mainPageOperation/header_operation.php'?>

<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="../public/img/brand/qbdigitals.png" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->
<!-- <script>
    function not6() {
        alert("Merhaba, sayfa yüklendi!");
    }

    window.onload = function () {
        not6();
    }
</script> -->


<!-- Page -->
<div class="page">


<?php require 'mainPageOperation/sidebar_operation.php'?>
    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        <form action="<?=operation_url('dhl_detail').'?dhlnumber='.get('dhlnumber')?>" method="post">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">DHL Detay.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">DHL</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DHL Detay</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">DHL Detay</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">

                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">DHL No</p>
                                            <input class="form-control input-lg" value="<?=get('dhlnumber')?>" id="dhlno" name="dhlno" type="text"
                                                   readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Last Location</p>
                                            <input class="form-control input-lg" id="lastlocation"
                                                value="<?=$dhl['lastUpdatedLocation']?>"   name="lastlocation" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Piece ID</p>
                                            <input class="form-control input-lg" id="pieceid" name="pieceid"
                                                 value="<?=$dhl['pieceIds'][0]?>"  type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Description</p>
                                            <input class="form-control input-lg" id="description" name="description"
                                                 value="<?=$dhl['lastUpdatedDescription']?>"  type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Total Number Of Pieces</p>
                                            <input class="form-control input-lg" id="totalnumberofpiece"
                                               value="<?=count($dhl['pieceIds'])?>"    name="totalnumberofpiece" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Origin Address</p>
                                            <input class="form-control input-lg" id="originaddress"
                                               value="<?=$dhl['originAddress']?>"    name="originaddress" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Destination Address</p>
                                            <input class="form-control input-lg" id="destinationaddress"
                                                 value="<?=$dhl['destinationAddress']?>"  name="destinationaddress" type="text" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Estimated Time Of Delivery</p>
                                            <input class="form-control input-lg" id="estimateddelivery"
                                                 value="<?=$dhl['estimatedTimeOfDelivery']?>"  name="estimateddelivery" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Estimated Time Of Delivery Remark
                                            </p>
                                            <input class="form-control input-lg" id="estimatedremark"
                                                value="<?=$dhl['estimatedTimeOfDeliveryRemark']?>"   name="estimatedremark" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Customer Name</p>
                                            <input class="form-control input-lg" id="customername"
                                                value="<?= empty($exist['customerName']) ? '':$exist['customerName']?>"   name="customer_name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Add Description</p>
                                            <textarea class="form-control input-lg"
                                                      placeholder="<?=empty($exist['description'])?'':$exist['description']?>" name="description"
                                                 value="<?=empty($exist['description'])?'':$exist['description']?>"     id="adddescription" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 text-center d-flex mg-t-50">
                                        <div class="form-group col-lg-6">
                                            <button type="submit" name="save" value="1"
                                                    class="button btn-success btn-lg rounded w-100">
                                                SAVE
                                            </button>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <button type="button" onclick="window.location.href=''"
                                                    class="button btn-warning rounded w-100 btn-lg">
                                                BACK
                                            </button>
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
<?php require 'mainPageOperation/footer_operation.php'?>
