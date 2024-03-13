<?php require 'mainPageSeller/header_seller.php'; ?>
<style>
    .buttons-excel, .buttons-pdf, .buttons-copy, .buttons-print {
        background-color: #0E0E23 !important;
    }
</style>
<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?= public_url('images/brand/qbdigitals.png') ?>" height="200px" class="loader-img" alt="Loader">
</div

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
                        <h2 class="main-content-title tx-24 mg-b-5"><?= @$companyname ?>'s Orders.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= @$companyname ?>'s Orders</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">

                            <?php if (!empty($orders)): ?>

                                <div class="card-header custom-card-header">
                                    <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Approval
                                        Orders</h5>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                    class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="myForm" action="<?= seller_url('order_details?id=') . get('id') ?>"
                                          method="POST">
                                        <input hidden name="offercount" value="<?= $offercount ?>">
                                        <input hidden name="id" value="<?= get('id') ?>">
                                        <div class="table">
                                            <input hidden value="<?= get('id') ?>" name="customerId">
                                            <table id="approvalorders" class="display" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th hidden>Orderid</th>
                                                    <th class="text-custom text-center">Product Id</th>
                                                    <th class="text-custom text-center">Product Name</th>
                                                    <th class="text-custom text-center">Product Origin</th>
                                                    <th class="text-custom text-center">Color</th>
                                                    <th class="text-custom text-center">Size</th>
                                                    <th class="text-custom text-center">Pallet Sqm</th>
                                                    <th class="text-custom text-center">Pallet Pcs</th>
                                                    <th class="text-custom text-center">Base Price</th>
                                                    <th class="text-custom text-center">Customer Price</th>
                                                    <th class="text-custom text-center">Currency</th>
                                                    <th class="text-custom text-center">Total SQM</th>
                                                    <th class="text-custom text-center">Total Price</th>
                                                    <th class="text-custom text-center">Remove</th>
                                                    <th hidden="" class="text-custom text-center">Quantity</th>
                                                    <th hidden="" class="text-custom text-center">Sqm</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($orders as $order): ?>
                                                    <tr>
                                                        <?php


                                                        $price = Order::get_product_by_api($order['productId'], $order['currency'], $order['product_origin']);
                                                        ?>

                                                        <td hidden><input value="<?= $order['orderId'] ?>"
                                                                          name="orderId[]"></td>
                                                        <td><?= $order['productId'] ?><input hidden
                                                                                             value="<?= $order['productId'] ?>"
                                                                                             name="id[]" ></td>
                                                        <td><?= $order['collection'] ?><input hidden
                                                                                              value="<?= $order['collection'] ?>"
                                                                                              name="collection[]"></td>
                                                        <td><?= $order['product_origin'] == 1 ? 'QUA' : 'BIEN' ?></td>
                                                        <td><?= $order['color'] == NULL ? 'no info' : $order['color'] ?>
                                                            <input hidden value="<?= $order['color'] ?>" name="color[]">
                                                        </td>
                                                        <td><?= $order['size'] == NULL ? 'no info' : $order['size'] ?>
                                                            <input hidden value="<?= $order['size'] ?>" name="size[]">
                                                        </td>
                                                        <td><?= number_format($price['totalquan'], 2) . ' m2' ?></td>
                                                        <td><input class="form-control quantity" style="color: black"
                                                                   data-sqm="<?= number_format($price['totalquan'], 2) ?>"
                                                                   data-cprime="<?= number_format($order['productPrice'], 2) ?>"
                                                                   value="<?= $order['quantity'] ?>" name="quantity[]">
                                                        </td>
                                                        <!--                                                    <td>-->
                                                        <?php //=number_format($order['price'],2)?><!--</td>-->
                                                        <td><?= number_format($price['price1'], 2) ?></td>
                                                        <td>
                                                            <input
                                                                    data-sqm="<?= number_format($order['totalquan'], 2, '.', '') ?>"
                                                                    data-quantity="<?= $order['quantity'] ?>"
                                                                    value="<?= number_format($order['productPrice'], 2, '.', '') ?>"
                                                                    name="productPrice[]"
                                                                    min="0"
                                                                    type="text"
                                                                    style="color: black"
                                                                    class="form-control sugprice"
                                                            >
                                                        </td>

                                                        <td><?= $order['currency'] ?></td>
                                                        <td><input class="   totalsqm" readonly
                                                                   style="border:0; background-color: white; color: black;text-align: center"
                                                                   type="input" min="0"
                                                                   data-totalsqm="<?= $price['totalquan'] ?>"
                                                                   data-quantity="<?= $order['quantity'] ?>"
                                                                   value="<?= number_format(($order['quantity'] * number_format($order['totalquan'], 2)), 2) ?>">
                                                        </td>
                                                        <td>
                                                            <input class="   netprice" readonly
                                                                   style="border:0; background-color: white; color: black:text-align: center"
                                                                   type="input" min="0" name="price[]"
                                                                   value="<?= number_format(($order['quantity'] * number_format($price['totalquan'], 2)) * $order['productPrice'], 2) ?>">
                                                        </td>
                                                        <td>
                                                            <form action="<?= seller_url('order_details') ?>"
                                                                  method="post">
                                                                <button class="btn btn-danger"
                                                                        value="<?= get('id') . ',' . get('date') . ',' . $order['orderId'] ?>"
                                                                        name="removeorder"> X
                                                                </button>
                                                            </form>
                                                        </td>

                                                        <td hidden><?= $order['quantity'] ?></td>
                                                        <td hidden><?= $price['totalquan'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <div class="row mt-2">
                                                <div class="col-lg-9">
                                                    <table class="display table-bordered">
                                                        <tr>
                                                            <td>Total Price:</td>
                                                            <td class="text-danger"><span
                                                                        id="totalPrice"></span> <?= $customer['currency'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Sqm:</td>
                                                            <td class="text-warning"><span id="totalSqm"></span> M2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Pallet Pcs:</td>
                                                            <td class="text-apple"><span id="totalPcs"></span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-lg-3">
                                                    <button id="confirmBtn" class="btn bg-primary ripple w-100 h-50"
                                                            type="button" value="1" name="offer">Offer
                                                    </button>
                                                    <button hidden name="offer" value="1" id="confirmBtn"
                                                            type="submit"></button>
                                                </div>

                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <div class="input-group mb-3">

                                                        <input type="text" class="form-control" placeholder="Comment" aria-label=""
                                                               aria-describedby="basic-addon1" name="comment">
                                                    </div>
                                                </div>
                                            </div>
                                            <input hidden value="<?=get('id')?>" name="getid">
                                            <input hidden value="<?=get('date')?>" name="getdate">
                                    </form>

                                </div>
                            <?php endif; ?>
                            <?php if (!empty($reviseorders)): ?>

                                <div class="card-header custom-card-header">
                                    <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Revise
                                        Orders</h5>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                    class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="myForm" action="<?= seller_url('order_details?id=') . get('id') ?>"
                                          method="POST">
                                        <input hidden value="<?= get('id') ?>" name="customerId">
                                        <div class="table">
                                            <input hidden value="<?= get('id') ?>" name="customerId">
                                            <table id="approvalorders" class="display" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th hidden>Orderid</th>
                                                    <th class="text-custom text-center">Product Id</th>
                                                    <th class="text-custom text-center">Product Name</th>
                                                    <th class="text-custom text-center">Product Origin</th>
                                                    <th class="text-custom text-center">Color</th>
                                                    <th class="text-custom text-center">Size</th>
                                                    <th class="text-custom text-center">Sqm</th>
                                                    <th class="text-custom text-center">Pallet Pcs</th>
                                                    <th class="text-custom text-center">Base Price</th>
                                                    <th class="text-custom text-center">Customer Price</th>
                                                    <th class="text-custom text-center">Currency</th>
                                                    <th class="text-custom text-center">Pallet Price</th>
                                                    <th class="text-custom text-center">Total Price</th>

                                                    <th hidden="" class="text-custom text-center">Quantity</th>
                                                    <th hidden="" class="text-custom text-center">Sqm</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($reviseorders as $order): ?>
                                                    <?php
                                                    $profit = Customer::get_profit($customer['userId']);
                                                    $product = Products::get_product_detail($order['productId'], $order['currency'], $order['product_origin']);
                                                    $newprofit = [];

                                                    foreach ($profit as $item) {
                                                        if ($product['cins'] == $item['genus_name']) {

                                                            array_push($newprofit, $item);

                                                        }

                                                    }
                                                    $price = Order::get_product_by_api($order['productId'], $order['currency'], $order['product_origin']);
                                                    ?>
                                                    <tr>
                                                        <td hidden><input value="<?= $order['orderId'] ?>"
                                                                          name="orderId[]"></td>
                                                        <td><?= $order['productId'] ?><input hidden
                                                                                             value="<?= $order['productId'] ?>"
                                                                                             name="id[]"></td>
                                                        <td><?= $order['collection'] ?><input hidden
                                                                                              value="<?= $order['collection'] ?>"
                                                                                              name="collection[]"></td>
                                                        <td><?= $order['product_origin'] == 1 ? 'QUA' : 'BIEN' ?></td>
                                                        <td><?= $order['color'] == NULL ? 'no info' : $order['color'] ?>
                                                            <input hidden value="<?= $order['color'] ?>" name="color[]">
                                                        </td>
                                                        <td><?= $order['size'] == NULL ? 'no info' : $order['size'] ?>
                                                            <input hidden value="<?= $order['size'] ?>" name="size[]">
                                                        </td>
                                                        <td><?= number_format($price['totalquan'], 2) . ' m2' ?></td>
                                                        <td><input class="form-control quantity" style="color: black"
                                                                   data-sqm="<?= number_format($price['totalquan'], 2) ?>"
                                                                   data-cprime="<?= number_format($order['productPrice']) ?>"
                                                                   value="<?= $order['quantity'] ?>" name="quantity[]">
                                                        </td>
                                                        <td><?= number_format($price['price1'], 2) ?></td>
                                                        <td>
                                                            <input
                                                                    data-sqm="<?= number_format($price['totalquan'], 2, '.', '') ?>"
                                                                    data-quantity="<?= $order['quantity'] ?>"
                                                                    value="<?= number_format($order['productPrice'], 2, '.', '') ?>"
                                                                    name="productPrice[]"
                                                                    min="0"
                                                                    type="text"
                                                                    style="color: black"
                                                                    class="form-control sugprice"
                                                            >
                                                        </td>
                                                        <td><?= $order['currency'] ?></td>
                                                        <td><input class="form-control totalsqm"
                                                                   style="border:0; background-color: white; color: black"
                                                                   type="input" min="0"
                                                                   data-totalsqm="<?= $price['totalquan'] ?>"
                                                                   data-quantity="<?= $order['quantity'] ?>"
                                                                   value="<?= number_format($order['productPrice'] * number_format($price['totalquan'], 2), 2) ?>">
                                                        </td>
                                                        <td>
                                                            <input class="form-control netprice"
                                                                   style="border:0; background-color: white; color: black"
                                                                   type="input" min="0" name="price[]"
                                                                   value="<?= number_format($order['productPrice'] * number_format($order['quantity'], 2) * number_format($price['totalquan'], 2), 2) ?>">
                                                        </td>

                                                        <td hidden><?= $order['quantity'] ?></td>
                                                        <td hidden><?= $price['totalquan'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <div class="row mt-2">
                                                <div class="col-lg-9">
                                                    <table class="display table-bordered">
                                                        <tr>
                                                            <td>Total Price:</td>
                                                            <td class="text-danger"><span
                                                                        id="totalPrice"></span> <?= $customer['currency'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Sqm:</td>
                                                            <td class="text-warning"><span id="totalSqm"></span> M2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Pallet Pcs:</td>
                                                            <td class="text-apple"><span id="totalPcs"></span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-lg-3">
                                                    <button id="confirmBtn" class="btn bg-primary ripple w-100 h-50"
                                                            type="button" value="1" name="reoffer">ReOffer
                                                    </button>
                                                    <button hidden name="reoffer" value="1" id="confirmBtn"
                                                            type="submit"></button>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <div class="input-group mb-3">

                                                        <input type="text" class="form-control" placeholder="Comment" aria-label=""
                                                               aria-describedby="basic-addon1" name="comment">
                                                    </div>
                                                </div>
                                            </div>
                                            <input hidden value="<?=get('id')?>" name="getid">
                                            <input hidden value="<?=get('date')?>" name="getdate">
                                    </form>

                                </div>
                                <div class="col-6">
                                    <div class="form-group rounded">
                                        <label>Reason for Rejection </label>
                                        <br>
                                        <div class="input-group input-group-sm mb-3">
                                            <input style="font-size: 14px" type="text" class="form-control"
                                                   aria-describedby="inputGroup-sizing-sm" disabled
                                                   value="<?= Navlun::get_reason_of_rejection_by_id($order['rejected']) ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>





                    </div>

                    <?php if (!empty($comment)):?>
                    <div class="row row-sm">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-3">Comments</h6>
                                    </div>
                                    <?php foreach ($comment as $item):
                                          ?>
                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="d-sm-flex comment-section">
                                                <div class="d-flex me-3">
                                                    <a href="#"><img class="main-avatar avatar" alt="img"
                                                                     src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1 font-weight-semibold"><?=$item['senderName']?>
                                                        <span class="tx-14 ms-0"><i
                                                                    class="fe fe-check-circle text-success tx-12"></i></span>
                                                        <span class="tx-12 text-muted ms-2"> <?=$item['created']?></span>
                                                    </h5>
                                                    <p class="font-13  mb-2 mt-2"><?=$item['message']?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'mainPageSeller/footer_seller.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('confirmBtn').addEventListener('click', function () {
        var totalprice = $('#totalPrice').text() + "<?=$customer['currency']?>";
        var totalSqm = $('#totalSqm').text() + " M2";
        var totalPcs = $('#totalPcs').text();
        Swal.fire({
            title: 'Are you sure? ',
            html: 'Total Price: ' + totalprice + '<br>' + 'Total Sqm: ' + totalSqm + '<br>' + 'Pallet Pcs: ' + totalPcs,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            // Kullanıcı evet butonuna tıklarsa
            if (result.isConfirmed) {
                // Formu submit etmek için gizli submit düğmesine tıklama işlemi
                document.querySelector('#myForm button[type="submit"]').click();
            }
        });
    });
    $(document).ready(function () {
        var total = 0;
        var totalSqm = 0;
        var totalPcs = 0;

        $("#approvalorders tbody tr").each(function () {
            var quantity = parseFloat($(this).find("td:eq(14)").text().replace(/[^0-9.-]+/g, ""));
            var sqm = parseFloat($(this).find("td:eq(6)").text().replace(/[^0-9.-]+/g, ""));
            var price = parseFloat($(this).find("td:eq(12) input[name='price[]']").val().replace(/[^0-9.-]+/g, ""));
            totalPcs += isNaN(quantity) ? 0 : quantity;
            totalSqm += (isNaN(quantity) ? 0 : quantity) * (isNaN(sqm) ? 0 : sqm.toFixed(2));

            total += isNaN(price) ? 0 : price;
        });

        $("#totalPrice").text(total.toFixed(2));
        $("#totalSqm").text(totalSqm.toFixed(2));

        $("#totalPcs").text(totalPcs);
    });

    function updateTotalPrice() {
        var total = 0;
        var count = 0;
        var sqm = 0;
        $("#approvalorders tbody tr").each(function () {
            if (!(this.classList.contains('child'))) {
                var price = parseFloat($(this).find("td:eq(12) input[name='price[]']").val().replace(/[^0-9.-]+/g, ""));
                count += parseFloat($(this).find("td:eq(7) input[name='quantity[]']").val().replace(/[^0-9.-]+/g, ""));
                sqm = parseFloat($(this).find("td:eq(6)").text().replace(/[^0-9.-]+/g, ""));
                total += isNaN(price) ? 0 : price;
                $("#totalPrice").text(total.toFixed(2));
                $("#totalPcs").text(count);
                $("#totalSqm").text((sqm.toFixed((2)) * count).toFixed(2));

            }
        });
    }

    $(document).on('click', '.dtr-control', function () {
        if (this.parentNode.nextElementSibling.classList.contains('child')) {
            var quantity = this;
            var sugprice = this;
            var singleprice = 0;

            if (this.parentNode.nextElementSibling.querySelector('.singleprice')) {
                if (this.parentNode.nextElementSibling.querySelector('.sugprice')) {
                    this.parentNode.nextElementSibling.querySelector('.sugprice').value = this.parentNode.querySelector('.sugprice').value;
                    sugprice = this.parentNode.nextElementSibling.querySelector('.sugprice');
                    var dataSqm = sugprice.getAttribute('data-sqm');
                } else {
                    sugprice = this.parentNode.querySelector('.sugprice');
                    var dataSqm = sugprice.getAttribute('data-sqm');
                }
                if (this.parentNode.nextElementSibling.querySelector('.quantity')) {
                    this.parentNode.nextElementSibling.querySelector('.quantity').value = this.parentNode.querySelector('.quantity').value;
                    quantity = this.parentNode.nextElementSibling.querySelector('.quantity');
                } else {
                    quantity = this.parentNode.querySelector('.quantity');
                }
                singleprice = (parseFloat(sugprice.value) * parseFloat(dataSqm)).toFixed(2);
                this.parentNode.nextElementSibling.querySelector('.singleprice').value = singleprice;
            } else {
                singleprice = (this.parentNode.querySelector('.singleprice').value).toFixed(2);
            }
            this.parentNode.nextElementSibling.querySelector('.netprice').value = parseInt(quantity.value) * singleprice;

            $(sugprice).on('change', function () {
                singleprice = (parseFloat(this.value) * parseFloat(this.getAttribute('data-sqm'))).toFixed(2);
                this.parentNode.parentNode.parentNode.querySelector('.singleprice').value = singleprice;
                this.parentNode.parentNode.parentNode.querySelector('.netprice').value = (parseInt(quantity.value) * singleprice).toFixed(2);

                this.parentNode.parentNode.parentNode.parentNode.parentNode.previousElementSibling.querySelector('.singleprice').value = singleprice;
                this.parentNode.parentNode.parentNode.parentNode.parentNode.previousElementSibling.querySelector('.netprice').value = (parseInt(quantity.value) * singleprice).toFixed(2);
                this.parentNode.parentNode.parentNode.parentNode.parentNode.previousElementSibling.querySelector('.sugprice').value = this.value;

                updateTotalPrice();
            });
            $(quantity).on('change', function () {

                singleprice = this.parentNode.parentNode.parentNode.querySelector('.singleprice').value;
                this.parentNode.parentNode.parentNode.querySelector('.netprice').value = (parseInt(this.value) * singleprice).toFixed(2);
                this.parentNode.parentNode.parentNode.parentNode.parentNode.previousElementSibling.querySelector('.singleprice').value = singleprice;
                this.parentNode.parentNode.parentNode.parentNode.parentNode.previousElementSibling.querySelector('.quantity').value = this.value;
                updateTotalPrice();
            });
        }
    });

    var Quantity = document.getElementsByClassName('quantity');
    for (var i = 0; i < Quantity.length; i++) {
        var dataQuantity = 0;
        Quantity[i].addEventListener('change', function () {

            dataQuantity = parseFloat(this.value);
            var sugPriceValue = parseFloat(this.getAttribute('data-cprime'));
            var dataSqm = parseFloat(this.getAttribute('data-sqm'));
            var totalsqm = dataQuantity * dataSqm;
            var netPriceValue = sugPriceValue * dataSqm * dataQuantity;
            var netPriceInput = this.parentNode.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('.netprice');
            var sugPriceInput = this.parentNode.nextElementSibling.nextElementSibling.querySelector('.sugprice');
            var totalsqmInput = this.parentNode.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('.totalsqm');


            if (this.parentNode.parentNode.classList.contains('parent')) {
                netPriceInput = this.parentNode.parentNode.nextElementSibling.nextElementSibling.querySelector('.netprice');
                sugPriceInput = this.parentNode.parentNode.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('.sugprice');
            }
            totalsqmInput.value = totalsqm.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            netPriceInput.value = netPriceValue.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            sugPriceInput.setAttribute('data-quantity', dataQuantity.toFixed());
            totalsqmInput.setAttribute('data-totalsqm', totalsqm.toFixed());
            updateTotalPrice();
        });
    }


    // `sugprice` class'ına sahip inputları seç
    var sugPriceInputs = document.getElementsByClassName('sugprice');
    // Her bir input için olay dinleyicisi ekle
    for (var i = 0; i < sugPriceInputs.length; i++) {
        sugPriceInputs[i].addEventListener('change', function () {
            // Değer ve veri miktarını al
            var sugPriceValue = parseFloat(this.value);

            var dataQuantity = parseFloat(this.getAttribute('data-quantity'));
            var dataSqm = parseFloat(this.getAttribute('data-sqm'));
            // Çarpımı hesapla
            var netPriceValue = sugPriceValue * dataSqm;


            var QuantityInput = this.parentNode.previousElementSibling.previousElementSibling.querySelector('.quantity');
            QuantityInput.setAttribute('data-cprime', sugPriceValue.toFixed(2));

            netPriceValue *= dataQuantity;
            var netPriceInput = this.parentNode.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('.netprice');
            netPriceInput.value = netPriceValue.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            updateTotalPrice();
        });
    }


    $(document).ready(function () {
        var table = $('#approvalorders').DataTable({


            dom: 'Bfrtip',
            info: false,
            buttons: [
                'excel', 'pdf', 'copy', 'print'
            ],
            scrollX:true,


            bLengthChange: false,
        });

        table.on('responsive-display', function (e, datatable, row, showHide, update) {
            if (showHide) {
                // Çocuk satır açılıyorsa, input alanlarının değerlerini sakla
                var rowData = table.row(row.index()).data();
                var childInputs = $(rowData[0]).find('input'); // Çocuk satırdaki input alanlarını seçer
                var inputValues = [];

                childInputs.each(function () {
                    inputValues.push($(this).val());
                });

                childRowData[row.index()] = inputValues;
            } else {
                // Çocuk satır kapanıyorsa, input alanlarının değerlerini geri yükle
                var inputValues = childRowData[row.index()];
                var childInputs = $(table.row(row.index()).node()).find('input'); // Çocuk satırdaki input alanlarını seçer

                childInputs.each(function (index) {
                    $(this).val(inputValues[index]);
                });
            }
        });
    });

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?= @returned($message) ?>
<script>
    $(document).ready(function () {
        $(".quantity").on("input", function () {
            // Yalnızca sayıları bırak
            $(this).val(function (_, value) {
                return value.replace(/[^\d]/g, '');
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".sugprice").on("input", function () {
            // Yalnızca sayıları ve en fazla bir noktayı bırak
            $(this).val(function (_, value) {
                return value.replace(/[^\d.]/g, '');
            });
        });
    });
</script>
</body>
</html>
