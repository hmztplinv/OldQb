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

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">QBDgitals'a Hoş Geldiniz.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item " aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row opened -->
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <i class="mdi mdi-account-outline text-primary mr-4" style="font-size: 35px;"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label
                                                class="main-content-label tx-13 font-weight-bold mb-1"
                                        >Total Customer</label
                                        >
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold"><?=$customerscount?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <i class="mdi mdi-shopping text-warning mr-4" style="font-size: 35px;"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label
                                                class="main-content-label tx-13 font-weight-bold mb-1"
                                        >Total Order</label
                                        >
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold"><?=$totalorderscount?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <i class="mdi mdi-clock text-danger mr-4" style="font-size: 35px;"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label
                                                class="main-content-label tx-13 font-weight-bold mb-1"
                                        >Orders in Progress</label
                                        >
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold"><?=$totalactiveorderscount?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <i class="mdi mdi-briefcase-check text-success mr-4" style="font-size: 35px;"></i>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label class="main-content-label tx-13 font-weight-bold mb-1">Orders Completed</label>
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold"><?=$totaldeliveredorderscount?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">SQM</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="Gainfulness"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Orders</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="Goals"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-5">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Unexpired Receivables</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                           id="Unexpired">
                                        <thead class="text-center">
                                        <tr>
                                            <th>Company</th>
                                            <th>Date</th>
                                            <th>Explanation</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                Lorem İmpus
                                            </td>
                                            <td>03/12/2020</td>
                                            <td>Olive Yew</td>
                                            <td>Peg Legge</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-7">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Production Program</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover key-buttons text-nowrap w-100" id="Production">
                                        <thead class="text-center">
                                        <tr>
                                            <th>Başlangıç Tarihi</th>
                                            <th>Bitiş Tarihi</th>
                                            <th>Kod</th>
                                            <th>Açıklama</th>
                                            <th>İHR</th>
                                            <th>Ürün Kodu</th>
                                            <th>Ürün İsmi</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <?php foreach($productionprogram as $program): ?>
                                            <tr class="border-bottom">
                                                <td align="center"><?= date("d-m-Y", strtotime($program['start_date'])) ?></td>
                                                <td align="center"><?= date("d-m-Y", strtotime($program['finish_date'])) ?></td>
                                                <td align="center"><?= $program['production_code'] ?></td>
                                                <td align="center"><?= $program['description'] ?></td>
                                                <td align="center"><?= $program['ihr'] ?></td>
                                                <td align="center"><?= $program['product_code'] ?></td>
                                                <td align="center"><?= $program['product_name'] ?></td>
                                            </tr>
                                        <? endforeach; ?>
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

    <?php require 'mainPageSeller/footer_seller.php'; ?>
<script>
    var ctx = document.getElementById("Gainfulness").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
            datasets: [
                {
                    label: "Total SQM",
                    data: [<?=$resultString?>],
                    borderWidth: 2,
                    backgroundColor: "#9877f9",
                    borderColor: "#9877f9",
                    borderWidth: 2.0,
                    pointBackgroundColor: "#ffffff",
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: true,
            },
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true,
                            stepSize: 150,
                            fontColor: "#77778e",
                        },
                        gridLines: {
                            color: "rgba(119, 119, 142, 0.2)",
                        },
                    },
                ],
                xAxes: [
                    {
                        ticks: {
                            display: true,
                            fontColor: "#77778e",
                        },
                        gridLines: {
                            display: false,
                            color: "rgba(119, 119, 142, 0.2)",
                        },
                    },
                ],
            },
            legend: {
                labels: {
                    fontColor: "#77778e",
                },
            },
        },
    });
</script>
    <script>
        var ctx = document.getElementById("Goals").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
                datasets: [
                    {
                        label: "Total Orders",
                        data: [<?=$totalordermontly?>],
                        borderWidth: 2,
                        backgroundColor: "transparent",
                        borderColor: "#6259ca",
                        borderWidth: 3,
                        pointBackgroundColor: "#ffffff",
                        pointRadius: 2,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                fontColor: "#77778e",
                            },
                            display: true,
                            gridLines: {
                                color: "rgba(119, 119, 142, 0.2)",
                            },
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                fontColor: "#77778e",
                            },
                            display: true,
                            gridLines: {
                                color: "rgba(119, 119, 142, 0.2)",
                            },
                            scaleLabel: {
                                display: false,
                                labelString: "Thousands",
                                fontColor: "rgba(119, 119, 142, 0.2)",
                            },
                        },
                    ],
                },
                legend: {
                    labels: {
                        fontColor: "#77778e",
                    },
                },
            },
        });
    </script>