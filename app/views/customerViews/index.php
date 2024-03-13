<?php require 'mainPageCustomer/header_customer.php'; ?>
<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">
            <!--Row-->

            <!--Orders start-->
            <div class="row row-sm mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card custom-card">
                        <div class="card-body">
                            <a href="<?= customer_url('all_orders') ?>">
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
                                            <h4 class="font-weight-bold"><?= $totalorder ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <a href="<?=customer_url('all_orders')?>">
                                <div class="card-item-icon card-icon">
                                    <i class="mdi mdi-briefcase-check text-success mr-4" style="font-size: 35px;"></i>
                                </div>
                                <div class="card-item-title mb-2">
                                    <label
                                            class="main-content-label tx-13 font-weight-bold mb-1"
                                    >Delivered Orders</label
                                    >
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-bold"><?= $deliveredorder ?></h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <a href="<?=customer_url('freight_pending')?>">
                                <div class="card-item-icon card-icon">
                                    <i class="mdi mdi-briefcase-upload text-danger mr-4" style="font-size: 35px;"></i>
                                </div>
                                <div class="card-item-title mb-2">
                                    <label
                                            class="main-content-label tx-13 font-weight-bold mb-1"
                                    >Pending Freight</label
                                    >
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-bold"><?= $approvedorder ?></h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="card-item">
                                <div class="card-item-icon card-icon">
                                    <i class="mdi mdi-clock text-danger mr-4" style="font-size: 35px;"></i>
                                </div>
                                <div class="card-item-title mb-2">
                                    <label
                                            class="main-content-label tx-13 font-weight-bold mb-1"
                                    >Order Status</label
                                    >
                                    <div class="progress" style="height: 4px">
                                        <div
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar"
                                                style="width: <?=number_format($succes[0]['percentage_with_status_9'])?>%"
                                        ></div>
                                    </div>
                                </div>
                                <div class="card-item-body">
                                    <div class="card-item-stat">
                                        <h4 class="font-weight-bold">%<?=number_format($succes[0]['percentage_with_status_9'])?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Orders End -->


                <!-- Row -->
<!--                <div class="col-lg-12 col-md-12 d-flex justify-content-between ">-->
<!--                    <div class="col-lg-6 col-md-12 "> <!-- Added justify-content-start -->
<!--                        <div class="card custom-card p-0 m-0">-->
<!--                            <div class="card-header custom-card-header">-->
<!--                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Orders By-->
<!--                                    Payment</h5>-->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <div class="chartjs-wrapper-demo">-->
<!--                                    <canvas id="Gainfulness"></canvas>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="col-lg-12 col-md-12 p-0 m-0"> <!-- Added justify-content-end -->
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Orders By M2</h5>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="Goals"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                </div>-->
                <!-- End Row -->


                <!-- Slider start -->
                <div class="col-lg-12 col-md-12  ">
                    <div class="card custom-card">
                        <div class="card-body h-100">
                            <div>
                                <h6 class="main-content-label mb-1">Popular Orders</h6>
                            </div>
                            <div id="basicSlider">
                                <div class="MS-content">
                                    <?php foreach ($populer as $item): ?>
                                        <?php $photos=File::get_images_by_product_id($item['productId']);  ?>
                                        <div class="item"><label style="text-align: center"><b><?=$item['collection']?></b> </label>
                                            <a href="<?= 'product_detail?id='.$item["productId"].'&currency='.$customer["currency"].'&origin='.$item["product_origin"]?>" target="_blank"> <img
                                                        src="<?php if (empty($photos)){echo public_url("images/quaexample.jpg") ;}
                                                        else{echo public_url("product/img/").$photos[0]['fileName'];}?>"
                                                        alt="" class="  " style="max-width: 500px "/> </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider end -->
            </div>
        </div>
    </div>
</div>
<!-- End Main Content-->


<?php require 'mainPageCustomer/footer_customer.php'; ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= @returned($message) ?>
<script>
    var ctx = document.getElementById("Goals").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
            datasets: [
                {
                    label: "Orders M2",
                    data: [<?php foreach ($montlysqm as $item):?><?=$item['total_sqm'].','?><?php endforeach;?>],
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
<script>
    /* Gainfulness */
    var ctx = document.getElementById("Gainfulness").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
            datasets: [
                {
                    label: "Total Pay",
                    data: [<?php foreach ($montlygain as $item):?><?=$item['total_price'].','?><?php endforeach;?>],
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
                            stepSize: 1000,
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
</body>
</html>
