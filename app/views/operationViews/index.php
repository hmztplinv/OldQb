
<?php require 'mainPageOperation/header_operation.php' ?>

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



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">QBDigitals'a Hoş Geldiniz.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->


                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-order ">
                                    <label class="main-content-label mb-3 pt-1">Completed Shipping</label>
                                    <h2 class="text-end card-item-icon card-icon">
                                        <i
                                                class="mdi mdi-briefcase-check icon-size float-start text-primary"></i><span
                                                class="font-weight-bold">0</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-order">
                                    <label class="main-content-label mb-3 pt-1">Unaproved Shipping</label>
                                    <h2 class="text-end"><i
                                                class="mdi mdi-clipboard-alert icon-size float-start text-primary"></i><span
                                                class="font-weight-bold">0</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-order">
                                    <label class="main-content-label mb-3 pt-1">Pending Freights</label>
                                    <h2 class="text-end"><i
                                                class="icon-size mdi mdi-cart  float-start text-primary"></i><span
                                                class="font-weight-bold">0</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Freight
                                    Gainfulness</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-3">
                                    <div class="mg-b-20">
                                        <select id="profitSearching" name="profitSearching" value="0"
                                                class="form-control select2 selectpicker">
                                            <?php foreach ($countries as $country):?>
                                                <option value="<?=$country['countryId']?>" ><?=$country['countryName']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="chart-wrapper">
                                    <canvas id="revenuechart" class=""></canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="navlun.html">Freight PROFITABILITY REPORT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Shipping
                                    Numbers</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-3">
                                    <div class="mg-b-20">
                                        <select value="0" id="chartSearching" name="chartSearching"
                                                class="form-control select2 selectpicker">
                                            <?php foreach ($countries as $country):?>
                                                <option value="<?=$country['countryId']?>" ><?=$country['countryName']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="chartLine"></canvas>

                            </div>
                            <div class="card-footer">
                                Total Shipping : 0
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Goals</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="goals" style="height: 445px;"></canvas>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Coming
                                    Shippings</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-header border-bottom-0">
                                <div class="main-content-label text-center"></div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover key-buttons text-nowrap w-100"
                                           id="commingshippings">
                                        <thead class="text-center">
                                        <tr>
                                            <th>Order No</th>
                                            <th>Port of Departure</th>
                                            <th>Date of Departure</th>
                                            <th>Port of Destination</th>
                                            <th>Date of Arrival</th>
                                            <th>Customer Name</th>
                                            <th>Director Of Sales</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <tr class="border-bottom">
                                            <td>21</td>
                                            <td>Antalya(TR)</td>
                                            <td>2023/01/02</td>
                                            <td>Shanghai(CN) </td>
                                            <td>2023/05/12</td>
                                            <td>merve önalan</td>
                                            <td>Enes Ağar</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>21</td>
                                            <td>Antalya(TR)</td>
                                            <td>2023/01/02</td>
                                            <td>Shanghai(CN) </td>
                                            <td>2023/05/12</td>
                                            <td>merve önalan</td>
                                            <td>Enes Ağar</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>21</td>
                                            <td>Antalya(TR)</td>
                                            <td>2023/01/02</td>
                                            <td>Shanghai(CN) </td>
                                            <td>2023/05/12</td>
                                            <td>merve önalan</td>
                                            <td>Enes Ağar</td>
                                        </tr>
                                        </tbody>
                                    </table>
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
    <?php require 'mainPageOperation/footer_operation.php' ?>

