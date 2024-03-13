<?php require 'mainPageCustomer/header_customer.php' ?>
<style>
    .cardcollor {
        background-color: #FFFFFF;
    }
</style>
<!-- Main Content-->
<div class="main-content side-content pt-0" xmlns="http://www.w3.org/1999/html">
    <form id="myForm" action="<?= customer_url('freight_detail') . '?id=' . get('id') ?>" method="post"
    ">
    <input hidden name="companyId" value="<?= get('id') ?>">
    <div class="main-container container-fluid">
        <div class="inner-body">
            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Product List</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Freights</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Freight Details</li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12 col-xl-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Product List</h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="example_wrapper"
                                 class="dataTables_wrapper no-footer">
                                <table
                                        id="example"
                                        class="display dataTable no-footer"
                                        style="width: 100%"
                                        aria-describedby="example_info"
                                >
                                    <thead>
                                    <tr>
                                        <th
                                                class="text-custom text-center sorting sorting_asc"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-sort="ascending"
                                                aria-label="Order Id: activate to sort column descending"
                                                style="width: 51px"
                                        >
                                            Order Id
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Product Name: activate to sort column ascending"
                                                style="width: 91px"
                                        >
                                            Product Name
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Size: activate to sort column ascending"
                                                style="width: 27px"
                                        >
                                            Size
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Color: activate to sort column ascending"
                                                style="width: 34px"
                                        >
                                            Color
                                        </th>
                                        <!--                                            <th-->
                                        <!--                                                    class="text-custom text-center sorting"-->
                                        <!--                                                    tabindex="0"-->
                                        <!--                                                    aria-controls="example"-->
                                        <!--                                                    rowspan="1"-->
                                        <!--                                                    colspan="1"-->
                                        <!--                                                    aria-label="Surface: activate to sort column ascending"-->
                                        <!--                                                    style="width: 50px"-->
                                        <!--                                            >-->
                                        <!--                                                Surface-->
                                        <!--                                            </th>-->
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Thickness: activate to sort column ascending"
                                                style="width: 65px"
                                        >
                                            Thickness
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Quality: activate to sort column ascending"
                                                style="width: 45px"
                                        >
                                            Quality
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Product Price"
                                                style="width: 45px"
                                        >
                                            Product Price
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Pallet/m2: activate to sort column ascending"
                                                style="width: 62px"
                                        >
                                            Pallet/m2
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Pallet/Pcs: activate to sort column ascending"
                                                style="width: 65px"
                                        >
                                            Pallet/Pcs
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Total m2: activate to sort column ascending"
                                                style="width: 55px"
                                        >
                                            Total m2
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Pallet Price"
                                                style="width: 55px"
                                        >
                                            Pallet Price
                                        </th>
                                        <th
                                                class="text-custom text-center sorting"
                                                tabindex="0"
                                                aria-controls="example"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Price: activate to sort column ascending"
                                                style="width: 33px"
                                        >
                                            Total Price
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $totalprice = 0;
                                    $totalm2 = 0;
                                    $palletpcs = 0; ?>
                                    <?php foreach ($orders as $order): ?>
                                        <?php $price = Order::get_product_by_api($order['productId'], $order['currency'], $order['product_origin']);
                                        ?>
                                        <tr>
                                            <td align="center"><?= $order['orderId'] ?> <input hidden
                                                                                               value="<?= $order['orderId'] ?>"
                                                                                               name="orderId[]"></td>
                                            <td align="center"><?= $order['collection'] ?></td>
                                            <td align="center"><?= $order['size'] == NULL ? 'no info' : $order['size'] ?></td>
                                            <td align="center"><?= $order['color'] == NULL ? 'no info' : $order['color'] ?></td>
                                            <!--                                                <td align="center">-->
                                            <?php //=$order['surface']==NULL ? 'no info': $order['surface']?><!--</td>-->
                                            <td align="center"><?= $order['thickness'] == NULL ? 'no info' : $order['thickness'] ?></td>
                                            <td align="center"><?= $order['quality'] == NULL ? 'no info' : $order['quality'] ?></td>
                                            <td align="center">
                                                <?= $order['ProductPrice'] === NULL ? 'no info' : number_format(round($order['ProductPrice'], 2), 2) ?>
                                            </td>

                                            <td align="center"><?= $price['totalquan'] == NULL ? 'no info' : number_format($price['totalquan'], 2) ?></td>

                                            <td align="center"><?= $order['quantity'] ?></td>
                                            <td align="center"><?= number_format(number_format($order['quantity'], 2) * number_format($price['totalquan'], 2), 2) . ' m2' ?></td>
                                            <td align="center"><?= number_format(number_format($order['ProductPrice'], 2) * number_format($price['totalquan'], 2), 2) ?></td>
                                            <?php $totalm2 = $totalm2 + number_format(number_format($order['quantity'], 2) * number_format($price['totalquan'], 2), 2);
                                            $palletpcs = +$palletpcs + $order['quantity'] ?>
                                            <?php
                                            $totalprice = $totalprice + ($order['ProductPrice'] *$price['totalquan']) * $order['quantity'];

                                            ?>
                                            <td align="center"><?= number_format(($order['ProductPrice']*$price['totalquan'])*$order['quantity'],2) . ' ' . $navlun['currency'] ?></td>


                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <div class="card custom-card cardcollor" style="height: 155px">
                                    <h2 class="text-dark text-center mt-1">Total m2</h2>
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-title mb-2">
                                                <p id="totalSqm"
                                                   style="font-size: 1.3em"
                                                   class="text-center text-dark">
                                                    <?= $totalm2 ?> m2
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <div class="card custom-card cardcollor" style="height: 155px">
                                    <h2 class="text-dark text-center mt-1">Pallet Pcs</h2>
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-title mb-2">
                                                <p
                                                        id="totalPcs"
                                                        style="font-size: 1.3em"
                                                        class="text-center text-dark"
                                                >
                                                    <?= $palletpcs ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <div class="card custom-card cardcollor" style="height: 155px">
                                    <h2 class="text-dark text-center mt-1">Container Pcs</h2>
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-title mb-2">
                                                <p
                                                        id="containerPcs"
                                                        style="font-size: 1.3em"
                                                        class="text-center text-dark"
                                                >
                                                    <?= $navlun['containerQuantity'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <div class="card custom-card cardcollor" style="height: 155px">
                                    <h2 class="text-dark text-center mt-1">Product Price</h2>
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-title mb-2">
                                                <p
                                                        id="priceProduct"
                                                        style="font-size: 1.3em"
                                                        class="text-center text-dark"
                                                >
                                                    <?= number_format($totalprice,2) ?> <?= $navlun['currency'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <div class="card custom-card cardcollor" style="height: 155px">
                                    <h2 class="text-dark text-center mt-1">Freight Price</h2>
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-title mb-2">
                                                <p
                                                        id="priceFreight"
                                                        style="font-size: 1.3em"
                                                        class="text-center text-dark"
                                                >
                                                    <?= $navlun['navlunSoldPrice'] ?> <?= $navlun['currency'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <div class="card custom-card cardcollor" style="height: 155px">
                                    <h2 class="text-dark text-center mt-1">General Total Price</h2>
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-title mb-2">
                                                <p
                                                        id="price"
                                                        style="font-size: 1.3em"
                                                        class="text-center text-dark"
                                                >
                                                    <?= floatval($navlun['navlunSoldPrice']) + floatval($totalprice) ?> <?= $navlun['currency'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card body p-3 mb-2">
                        <div class="row ">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Operation Consultant</p>
                                    <input value="<?= $navlun['executiveName'] ?>"
                                           disabled=""
                                           name="fieldManagerName"
                                           type="text"
                                           class="form-control"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>


                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Logistic Company</p>
                                    <input id="logisticCompany"
                                           value="<?= $navlun['realFirm'] ?>"
                                           disabled=""
                                           name="realFirm"
                                           type="text"
                                           class="form-control"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>


                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Container Pcs</p>
                                    <input value="<?= $navlun['containerQuantity'] ?>"
                                           disabled=""
                                           name="containerQuantity"
                                           type="text"
                                           class="form-control"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>

                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Total Price</p>
                                    <input value="<?= $navlun['navlunSoldPrice'] + $totalprice ?>"
                                           disabled=""
                                           type="text"
                                           class="form-control color-danger"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>

                                <div class="form-group rounded" style="margin-top: 55px">
                                    <button
                                            id="confirmBtn"
                                            type="button"
                                            value="1"
                                            class="btn btn-primary btn-rounded"
                                            style="width: 100px">
                                        ACCEPT
                                    </button>
                                    <button
                                            hidden=""
                                            id="confirmBtn"
                                            type="submit"
                                            name="accept"
                                            value="1"
                                            class="btn btn-primary btn-rounded"
                                            style="width: 100px">
                                        ACCEPT
                                    </button>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Booking No.</p>
                                    <input value="To be notified after proforma approval"
                                           disabled=""
                                           name="bookingNo"
                                           type="text"
                                           class="form-control"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>

                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Shipping Type</p>
                                    <input id="shippingType"
                                           value="<?= $navlun['shippingType'] ?>"
                                           disabled=""
                                           name="shippingtype"
                                           type="text"
                                           class="form-control navlun"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>

                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Freight Price</p>
                                    <div class="input-group-prepend"></div>
                                    <input value="<?= $navlun['navlunSoldPrice'] ?>"
                                           disabled=""
                                           id="navlunsoldprice"
                                           name="navlunSoldPrice"
                                           type="text"
                                           class="form-control navlun"
                                           aria-label="Small"
                                           aria-describedby="inputGroup-sizing-sm"/>
                                </div>

                                <div class="form-group rounded">
                                    <p class="mg-b-0 text-primary fw-bold">Currency</p>
                                    <input
                                            value="<?= $navlun['currency'] ?>"
                                            disabled=""
                                            id="currency"
                                            name="currency"
                                            type="text"
                                            class="form-control navlun"
                                            aria-label="Small"
                                            aria-describedby="inputGroup-sizing-sm"/>
                                </div>
                                <div class="form-group rounded row">
                                    <div class="col-lg-9">
                                        <select
                                                id="rejectionselection"
                                                name="rejectionselection"
                                                class="form-control select2">
                                            <option value="0" selected>Pick a Rejection Reason or Enter Yours</option>
                                            <?php foreach ($reason_of_rejection as $item): ?>
                                                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <textarea rows="5"
                                                  name="rejected"
                                                  id="rejected"
                                                  class="form-control navlun"
                                                  value=""
                                                  maxlength="255"
                                                  aria-describedby="inputGroup-sizing-sm"
                                                  style="display: none;">
                                            </textarea>
                                    </div>
                                    <div class="form-group input-group-sm col-lg-3">
                                        <button
                                                type="submit"
                                                name="reject"
                                                value="1"
                                                class="btn btn-danger"
                                                style="border-radius: 20px; width: 100px">
                                            REJECT
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

        <!-- card  -->

        <!-- card -->


    </div>
</div>
</form>
</div>
<!-- End Main Content-->
<?php require 'mainPageCustomer/footer_customer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('confirmBtn').addEventListener('click', function () {
        var logisticCompany = $('#logisticCompany').val();
        var shippingType = $('#shippingType').val();
        var totalPcs = $('#totalPcs').text();
        var totalSqm = $('#totalSqm').text();
        var containerPcs = $('#containerPcs').text();
        var price = $('#price').text();
        var priceProduct = $('#priceProduct').text();

        var priceFreight = $('#priceFreight').text();
        Swal.fire({
            title: 'Are you sure? ',
            html: 'Logistic Company: ' + logisticCompany + '<br>' + 'Shipping Type: ' + shippingType + '<br>' + 'Total Sqm: ' + totalSqm + '<br>' + 'Total Pcs: ' + totalPcs + '<br>' + 'Container Pcs: ' + containerPcs + '<br>' + 'Total Price: ' + price + '<br>' + 'Product Price: ' + priceProduct + '<br>' + 'Freight Price: ' + priceFreight,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            // Kullanıcı evet butonuna tıklarsa
            if (result.isConfirmed) {
                // Formu submit etmek için gizli submit düğmesine tıklama işlemi
                document.querySelector('#myForm button[name="accept"]').click();
                var newTab = window.open("<?=customer_url('index')?>", "_blank");
                newTab.focus();
            }
        });
    });
</script>


<script>
    $('#example').DataTable({
        paging: false,
        info: false,
        buttons: [
            'excel', 'pdf', 'copy', 'print'
        ],
        responsive: {
            details: true
        },
        searching: false
    });
</script>

<script>
    $('.navlun').on('input', function (e) {
        $('#navlunprofit').val($('#navlunsoldprice').val() - $('#navlunprice').val());
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $("#rejectionselection").change(function () {
        checkSelection();
    });

    function checkSelection() {
        var selectedValue = $("#rejectionselection").val();

        if (selectedValue === "6") {
            $("#rejected").show();
        } else {
            $("#rejected").val('');
            // Değilse, input'u gizle
            $("#rejected").hide();
        }
    }
</script>


</body>
</html>


