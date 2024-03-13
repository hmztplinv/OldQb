<?php require 'mainPageSeller/header_seller.php'; ?>

<body class="ltr main-body leftmenu">
<!-- Loader -->
<div id="global-loader">
    <img src="../public/images/brand/qbdigitals.png" height="200px" class="loader-img" alt="Loader">
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
                        <h2 class="main-content-title tx-24 mg-b-5">Profile</h2>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <form action="<?= !isset($exist) ? seller_url('seller_detail') : ''  ?>" method="POST">
                        <div class="card custom-card main-content-body-profile">

                            <div
                                    class="main-content-body tab-pane p-4 border-top-0"
                                    id="edit"
                            >
                                <div class="card-body border">
                                    <div class="mb-4 main-content-label">
                                        Personal Information
                                    </div>
                                    <form class="form-horizontal">
                                        <div class="mb-4 main-content-label">Name</div>
                                        <!-- ********* -->
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label for="Ad"" class="form-label">Name Surname:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                            required
                                                            class="form-control"
                                                            aria-label
                                                            type="text"
                                                            id="uname"
                                                            name="uname"
                                                            value="<?php
                                                            if(isset($exist)){
                                                                echo $sellers['uname'].'" disabled ';
                                                            }
                                                            ?>"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************ -->
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label for="E-Posta" class="form-label"
                                                    >E-Mail:</label
                                                    >
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            class="form-control"
                                                            id="email"
                                                            name="email"
                                                            value="<?php
                                                            if(isset($exist)){
                                                                echo $sellers['email'].'" disabled ';
                                                            }
                                                            ?>"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************ -->
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label for="Telefon" class="form-label"
                                                    >Phone No:</label
                                                    >
                                                </div>
                                                <div class="col-md-9">
                                                    <input
                                                            value="<?php
                                                            if(isset($user['phone'])){
                                                                echo $user['phone'];
                                                            }
                                                            ?>"
                                                            type="text"
                                                            id="phone"
                                                            class="form-control"
                                                            autocomplete="off"
                                                            name="phone"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group w-100">
                                                <button name="save" value="1" type="submit" class="btn btn-primary btn-default btn-md ripple">Update Phone Number</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End Main Content-->

    <?php require 'mainPageSeller/footer_seller.php'; ?>
