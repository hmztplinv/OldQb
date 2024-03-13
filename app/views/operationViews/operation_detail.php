<?php require 'mainPageOperation/header_operation.php' ?>

<body class="ltr main-body leftmenu">

<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('img/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
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
                        <h2 class="main-content-title tx-24 mg-b-5">My Account.</h2>
                    </div>
                </div>
                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <form action="<?= !isset($operation) ? operation_url('operation_detail') : ''  ?>" method="POST">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">My Account
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p for="Ad" class="mg-b-0 text-primary fw-bold">Name & Surname</p>
                                            <input class="form-control input-lg" id="name" value="<?php
                                            if(isset($operation)){
                                                echo $operation['uname'].'" disabled ';
                                            }
                                            ?>"
                                                   name="name" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">E-Mail</p>
                                            <input class="form-control input-lg" id="email" name="email" type="text"
                                                   disabled value="<?php
                                            if(isset($operation)){
                                                echo $operation['email'].'" disabled ';
                                            }
                                            ?>">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Phone</p>
                                            <input class="form-control input-lg" id="phone" name="phone" type="text"
                                                   data-mask="(999) 999-9999" autocomplete="off" maxlength="14" value="<?php
                                            if(isset($user['phone'])){
                                                echo $user['phone'];
                                            }
                                            ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mg-t-15">
                                            <button type="submit" name="save"
                                                    class="btn btn-primary btn-lg w-50 ripple">
                                                <i class="ti ti-reload"></i> Update Phone Number</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Row End -->

            </div>
        </div>
    </div>
    <!-- End Main Content-->

    <?php require 'mainPageOperation/footer_operation.php' ?></html>