<?php require 'mainPageSeller/header_seller.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?= @returned($message); ?>

    <body class="ltr main-body leftmenu">


    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= public_url('images/brand/qbdigitals.png') ?>" height="200px" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->


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
                        <h2 class="main-content-title tx-24 mg-b-5">DHL Detail.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">DHL</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DHL Detail</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Row -->
                <form action="<?= seller_url('dhl_detail') . '?dhlnumber=' . get('dhlnumber') ?>" method="post">
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">DHL Detail</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">DHL No</label>
                                            <input value="<?= get('dhlnumber') ?>" class="form-control" disabled
                                                   placeholder="DHL No" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Last Location</label>
                                            <input value="<?= $dhl['lastUpdatedLocation'] ?>" class="form-control"
                                                   disabled placeholder="Last Location" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Piece ID</label>
                                            <input value="<?= $dhl['pieceIds'][0] ?>" class="form-control" disabled
                                                   placeholder="Piece ID" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Description</label>
                                            <input required value="<?= $dhl['lastUpdatedDescription'] ?>"
                                                   class="form-control" disabled placeholder="Description" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Total Number Of Pieces</label>
                                            <input value="<?= count($dhl['pieceIds']) ?>" class="form-control" disabled
                                                   placeholder="Total Number Of Pieces" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Add Description</label>
                                            <textarea rows="3"
                                                      value="<?= $exist['description'] ?>"
                                                      class="form-control" name="description"
                                                      placeholder=""><?= $exist['description'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Origin Address</label>
                                            <input value=" <?= $dhl['originAddress'] ?>" class="form-control" disabled
                                                   placeholder="Origin Address" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Destination Address</label>
                                            <input value=" <?= $dhl['destinationAddress'] ?>" class="form-control"
                                                   disabled placeholder="Destination Address" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Estimated Time Of Delivery</label>
                                            <input value=" <?= $dhl['estimatedTimeOfDelivery'] ?>" class="form-control"
                                                   disabled placeholder="Estimated Time Of Delivery" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Estimated Time Of Delivery
                                                Remark</label>
                                            <input value=" <?= $dhl['estimatedTimeOfDeliveryRemark'] ?>"
                                                   class="form-control" disabled
                                                   placeholder="Estimated Time Of Delivery Remark" type="text">
                                        </div>
                                        <div class="col-sm-12 mb-4">
                                            <label class="text-custom mb-0" for="">Customer Name</label>
                                            <input required
                                                   value="<?=$exist['customerName']?>"
                                                   class="form-control" placeholder="" name="customer_name"
                                                   type="text">
                                        </div>

                                        <div class="d-flex row p-3">
                                            <div class="col-lg-6 mt-3">
                                                <button type="submit" name="save"
                                                        class="btn btn-primary ripple save w-100" value="1">Save
                                                </button>
                                            </div>
                                            <div class="col-lg-6 mt-3">
                                                <a href="<?= site_url('seller/dhl') ?>">
                                                    <button type="button" class="w-100 ripple btn btn-secondary"
                                                            value="1">Back
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End Main Content-->

<?php require 'mainPageSeller/footer_seller.php'; ?>
