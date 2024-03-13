<?php require 'mainPageOperation/header_operation.php' ?>
<style>
    .offercardcollors {
        background: #FFFFFF;
    }
</style>
<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?= public_url('images/brand/qbdigitals.png') ?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->
<!-- Page -->
<div class="page">

    <?php require 'mainPageOperation/sidebar_operation.php' ?>

    <form id="myForm" action="<?= operation_url('freight_detail') . '?customerId=' . get('customerId') ?>" method="post"
          class="ml-5 mt-3">

        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="main-container container-fluid">
                <div class="inner-body">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Offer
                                Freights Details.</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Offer Freights</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Freight Details</li>
                            </ol>
                        </div>
                    </div>

                    <!-- End Page Header -->


                    <!-- row -->
                    <div class="row row-sm">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="card custom-card transcation-crypto">
                                <div class="card-header custom-card-header">
                                    <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Order List
                                    </h5>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                    class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>

                                <input hidden name="companyId" value="<?= get('customerId') ?>">
                                <div class="table-responsive  ">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th hidden class="text-custom text-center">Order Id</th>
                                            <th class="text-custom text-center">Product Id</th>
                                            <th class="text-custom text-center">Product Name</th>
                                            <th class="text-custom text-center">Size</th>
                                            <th class="text-custom text-center">Color</th>
                                            <!--                                                <th class="text-custom text-center">Surface</th>-->
                                            <th class="text-custom text-center">Thickness</th>
                                            <th class="text-custom text-center">Quality</th>
                                            <th class="text-custom text-center">Product Price</th>
                                            <th class="text-custom text-center">Pallet/m2</th>
                                            <th class="text-custom text-center">Pallet Pcs</th>
                                            <th class="text-custom text-center">Total M2</th>
                                            <th class="text-custom text-center">Total Price</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $total = 0;
                                        $quantity = 0; ?>
                                        <?php foreach ($orders as $order): ?>
                                            <?php $price = Order::get_product_by_api($order['productId'], $order['currency'], $order['product_origin']);
                                            ?>

                                            <tr>
                                                <td hidden align="center"><?= $order['orderId'] ?> <input hidden
                                                                                                          value="<?= $order['orderId'] ?>"
                                                                                                          name="orderId[]">
                                                </td>
                                                <td align="center"><?= $order['productId'] ?></td>
                                                <td align="center"><?= $order['collection'] ?></td>
                                                <td align="center"><?= $order['size'] ?></td>
                                                <td align="center"><?= $order['color'] ?></td>
                                                <!--                                                    <td align="center">-->
                                                <?php //=$order['surface']?><!--</td>-->
                                                <td align="center"><?= $order['thickness'] ?></td>
                                                <td align="center"><?= $order['quality'] ?> </td>
                                                <td align="center"><?= number_format($order['productPrice'], 2) ?></td>

                                                <td align="center"><?= number_format($price['totalquan'], 2) . ' m2' ?></td>
                                                <td><input class="form-control quantity" style="color: black"
                                                           data-sqm="<?= number_format($price['totalquan'], 2) ?>"
                                                           data-cprime="<?= number_format($order['productPrice'], 2) ?>"
                                                           value="<?= $order['quantity'] ?>" name="quantity[]">
                                                </td> <?php $total = $total + number_format($order['quantity'], 2) * number_format($price['totalquan'], 2);
                                                $quantity = $quantity + $order['quantity'] ?>
                                                <td align="center"
                                                    name="total-m2"><?= $order['quantity'] * number_format($price['totalquan'], 2) ?>
                                                    m2
                                                </td>

                                                <td align="center"
                                                    name="price[]"><?= number_format(($price['totalquan'] * $order['productPrice']) * $order['quantity'], 2) ?></td>

                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-around  my-3">
                                    <div class=" col-lg-4 rounded mx-1 offercardcollors">
                                        <h1 class="text-dark text-center">Total M2</h1>
                                        <p id="totalSqm" style="font-size: 2em"
                                           class="text-center text-dark"><?= $total ?> m2</p>
                                    </div>
                                    <div class=" col-lg-4 rounded mx-1 offercardcollors">
                                        <h1 class="text-dark text-center">Pallet Pcs</h1>
                                        <p id="totalPcs" style="font-size: 2em" class="text-center text-dark"> Pcs</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="card custom-card transcation-crypto">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Operation Consultant</p>
                                                    <input value="<?= $executivename ?>" disabled
                                                           name="fieldManagerName" type="text" class="form-control"
                                                           aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Logistic Company</p>
                                                    <input id="logisticCompany" name="realFirm" type="text"
                                                           class="form-control" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>

                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Container Pcs</p>
                                                    <input id="containerPcs" name="containerQuantity" type="number"
                                                           class="form-control" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>

                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Shipping Type</p>
                                                    <select id="shippingType" name="shippingType"
                                                            class="form-control select2" style="height: 40px">
                                                        <option selected disabled>Pick Shipment Method</option>
                                                        <option <?= $company['transportType'] == 'EXW' ? ' selected ' : '' ?>>
                                                            EXW
                                                        </option>
                                                        <option <?= $company['transportType'] == 'FOB' ? ' selected ' : '' ?>>
                                                            FOB
                                                        </option>
                                                        <option <?= $company['transportType'] == 'FOT' ? ' selected ' : '' ?>>
                                                            FOT
                                                        </option>
                                                        <option <?= $company['transportType'] == 'DAP' ? ' selected ' : '' ?>>
                                                            DAP
                                                        </option>
                                                        <option <?= $company['transportType'] == 'DDP' ? ' selected ' : '' ?>>
                                                            DDP
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class=" form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Port</p>
                                                    <select id="portType" required class="form-control select2"
                                                            name="portType" style="height: 40px" autocomplete="off">
                                                        <option value="" disabled>Pick a Port</option>
                                                        <?php foreach ($ports as $port): ?>
                                                            <option value="<?= $port['id'] ?>" <?= isset($company) ? $company['portType'] == $port['id'] ? ' Selected ' : '' : '' ?> ><?= $port['name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class=" form-group rounded" style="margin-top: 55px">
                                                    <button id="confirmBtn" type="button" name="add" value="1"
                                                            class="btn btn-primary ripple btn-rounded "
                                                            style="width: 100px">ADD
                                                    </button>
                                                    <button hidden id="confirmBtn" type="submit" name="add" value="1"
                                                            class="btn btn-primary ripple btn-rounded "
                                                            style="width: 100px">ADD
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6">

                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Company Name</p>
                                                    <input value="<?= $companyname ?>" disabled name="companyName"
                                                           type="text" class="form-control" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>

                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Freight Price</p>
                                                    <input id="navlunprice" name="navlunPrice" type="text"
                                                           class="form-control navlun" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Customer Freight Price</p>
                                                    <input id="navlunsoldprice" name="navlunSoldPrice" type="text"
                                                           class="form-control navlun" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Freight Profit</p>
                                                    <input value="" id="navlunprofit" name="navlunProfit" type="text"
                                                           class="form-control" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Currency Unit</p>
                                                    <select style="height: 40px" value="" name="currencyUnit"
                                                            type="text" class="form-control select2" aria-label="Small"
                                                            aria-describedby="inputGroup-sizing-sm">
                                                        <option <?= $company['currency'] == 'USD' ? ' selected ' : '' ?> >
                                                            USD
                                                        </option>
                                                        <option <?= $company['currency'] == 'EUR' ? ' selected ' : '' ?> >
                                                            EUR
                                                        </option>
                                                        <option <?= $company['currency'] == 'GBP' ? ' selected ' : '' ?> >
                                                            GBP
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group rounded">
                                                    <p class="mg-b-0 text-primary fw-bold">Notify</p>
                                                    <input value="" id="notify" name="notify" type="text"
                                                           class="form-control" aria-label="Small"
                                                           aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php if (!empty($comment)): ?>
                            <div class="row row-sm">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-3">Comments</h6>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <div class="input-group mb-3">

                                                        <input type="text" class="form-control" placeholder="Comment"
                                                               aria-label=""
                                                               aria-describedby="basic-addon1" name="comment">
                                                    </div>
                                                </div>
                                            </div>
                                            <input hidden value="<?= get('customerId') ?>" name="getid">
                                            <input hidden value="<?= get('date') ?>" name="getdate">
                                            <?php foreach ($comment as $item):
                                                if ($item['senderName'] == $_SESSION['user_name']):?>
                                                    <div class="text-wrap">
                                                        <div class="example">
                                                            <div class="d-sm-flex comment-section">
                                                                <div class="media-body text-end">
                                                                    <h5 class="mt-0 mb-1 font-weight-semibold">           <span
                                                                                class="tx-12 text-muted ms-2"> <?= $formattedDate = date('Y-m-d H:i:s', strtotime($item['created'])) ?>
</span><i class="fe fe-check-circle text-success tx-12  "></i><?= $item['senderName'] ?>
                                                                        <span class="tx-14 ms-0 ml-3"> </span>

                                                                    </h5>
                                                                    <p class="font-13 mb-2 mt-2"><?= $item['message'] ?></p>
                                                                </div>
                                                                <div class="d-flex me-3">
                                                                    <a href="#"><img class="main-avatar avatar"
                                                                                     alt="img"
                                                                                     src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php else: ?>
                                                    <div class="text-wrap">
                                                        <div class="example">
                                                            <div class="d-sm-flex comment-section">
                                                                <div class="d-flex me-3">
                                                                    <a href="#"><img class="main-avatar avatar"
                                                                                     alt="img"
                                                                                     src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-1 font-weight-semibold"><?= $item['senderName'] ?>
                                                                        <span class="tx-14 ms-0"><i
                                                                                    class="fe fe-check-circle text-success tx-12"></i></span>
                                                                        <span class="tx-12 text-muted ms-2"> <?= $formattedDate = date('Y-m-d H:i:s', strtotime($item['created'])) ?>
    </span>
                                                                    </h5>
                                                                    <p class="font-13  mb-2 mt-2"><?= $item['message'] ?>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


    </form>

    <?php require 'mainPageOperation/footer_operation.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            updateTotalPcs(); // Sayfa yüklendiğinde toplamı güncelle

            // Her bir input için değişim olayı ekle
            $("tbody tr td input[name='quantity[]']").on('input', function () {
                updateTotalPcs(); // Input değeri değiştiğinde toplamı güncelle
            });

            // Toplamı güncelleyen fonksiyon
            function updateTotalPcs() {
                var totalQuantity = 0;

                // Her bir satır için döngü
                $("tbody tr").each(function () {
                    // Şu anki satırdaki quantity inputunu bul
                    var quantityInput = $(this).find("td input[name='quantity[]']");

                    // Miktar değerini al ve toplama ekle
                    var quantityValue = parseInt(quantityInput.val()) || 0;
                    totalQuantity += quantityValue;
                });

                // Toplam miktarı belirtilen öğeye yazdır
                $("#totalPcs").text(totalQuantity + " Pcs");

            }
        });
    </script>
    <script>
        document.getElementById('confirmBtn').addEventListener('click', function () {
            var logisticCompany = $('#logisticCompany').val();
            var shippingType = $('#shippingType').val();
            var totalPcs = $('#totalPcs').text();
            var totalSqm = $('#totalSqm').text();
            var containerPcs = $('#containerPcs').val();
            var freightPrice = $('#navlunprice').val() + " <?=$company['currency']?>";
            var customerFreightPrice = $('#navlunsoldprice').val() + " <?=$company['currency']?>";
            var freighProfit = $('#navlunprofit').val() + " <?=$company['currency']?>";
            var port = $('#portType option:selected').text();
            Swal.fire({
                title: 'Are you sure? ',
                html: 'Logistic Company: ' + logisticCompany + '<br>' + 'Shipping Type: ' + shippingType + '<br>' + 'Total Sqm: ' + totalSqm + '<br>' + 'Pallet Pcs: ' + totalPcs + '<br>' + 'Container Pcs: ' + containerPcs + '<br>' + 'Freight Price: ' + freightPrice + '<br>' + 'Customer Freight Price: ' + customerFreightPrice + '<br>' + 'Freight Profit: ' + freighProfit + '<br>' + 'Port: ' + port,
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
    </script>
    <script>
        $('#example').DataTable({
            paging: false,
            buttons: [
                'excel', 'pdf', 'copy', 'print'
            ],
            responsive: {
                details: true
            },
        });
    </script>

    <script>
        $('.navlun').on('input', function (e) {
            $('#navlunprofit').val($('#navlunsoldprice').val() - $('#navlunprice').val());
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var rows = document.querySelectorAll('tbody tr');
            var totalSqmElement = document.getElementById('totalSqm');

            rows.forEach(function (row) {
                var quantityInput = row.querySelector('input[name="quantity[]"]');
                var totalM2Cell = row.querySelector('td[name="total-m2"]');
                var priceCell = row.querySelector('td[name="price[]"]');
                var sqmValue = parseFloat(quantityInput.getAttribute('data-sqm'));
                var cprimeValue = parseFloat(quantityInput.getAttribute('data-cprime'));

                quantityInput.addEventListener('input', function () {
                    var quantityValue = parseFloat(this.value);

                    // Total M2 hesaplaması
                    var totalM2 = quantityValue * sqmValue;

                    // Total M2 hücresine değeri güncelle
                    totalM2Cell.innerText = totalM2.toFixed(2) + ' m2';

                    // Price hesaplaması
                    var price = (sqmValue * cprimeValue) * quantityValue;

                    // Price hücresine değeri güncelle
                    priceCell.innerText = price.toFixed(2);

                    // Tüm satırların toplam metrekarelerini hesapla ve göster
                    var totalSqm = 0;
                    rows.forEach(function (row) {
                        var rowTotalM2 = parseFloat(row.querySelector('td[name="total-m2"]').innerText);
                        if (!isNaN(rowTotalM2)) {
                            totalSqm += rowTotalM2;
                        }
                    });

                    // "totalSqm" paragrafını güncelle
                    totalSqmElement.innerText = totalSqm.toFixed(2) + ' m2';
                });
            });
        });
    </script>

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
</body>
</html>


