<?php require 'mainPageOperation/header_operation.php' ?>


<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?= public_url('images/brand/qbdigitals.png') ?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->


<!-- Page -->
<div class="page">

    <?php require 'mainPageOperation/sidebar_operation.php' ?>

    <div class="main-content side-content pt-0">


        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Active
                            Shipping.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Active Shipping</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Active
                                    Shipping</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-header border-bottom-0">
                                <div class="main-content-label text-center"></div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="orderCompanySearch" name="orderCompanySearch" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Company Name
                                                </option>
                                                <option value="1">...</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="orderSizeSearch" name="orderSizeSearch" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Currency
                                                </option>
                                                <option value="1">...</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="orderSurfaceSearch" name="orderSurfaceSearch" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Shipping Status
                                                </option>
                                                <option value="1">...</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" name="reset" onclick="reset()" value=""
                                                class="btn btn-primary ripple"><i class="ti ti-back-left"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                           id="activeshipping">
                                        <thead class="text-center">
                                        <tr>
                                            <th class="text-custom text-center">Customer ID</th>
                                            <!--                                            <th class="text-custom text-center">Document Type</th>-->
                                            <!--                                            <th class="text-custom text-center">Document No</th>-->
                                            <th class="text-custom text-center">Company Name</th>
                                            <th class="text-custom text-center">User Name</th>
                                            <!--                                            <th class="text-custom text-center">Net Amount (Kdv'li)</th>-->
                                            <!--                                            <th class="text-custom text-center">Net Amount (Kdv'siz)</th>-->
                                            <th class="text-custom text-center">Currency</th>
                                            <th class="text-custom text-center">Expiry Day</th>
                                            <th class="text-custom text-center">Goods Buyer</th>
                                            <th class="text-custom text-center">Created Date</th>
                                            <th style="width: 100%" class="text-custom text-center">Shipping
                                                Status
                                            </th>
                                            <th style="width: 100%" class="text-custom text-center">Update
                                                Status
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($shippings as $shipping): ?>
                                            <tr>
                                                <input hidden name="navlunid" value="<?= $shipping['id'] ?>">
                                                <td align="center"><?= $shipping['companyId'] ?></td>
                                                <!--                                                <td align="center">-->
                                                <?php //=$shipping['documentType']?><!--</td>-->
                                                <!--                                                <td align="center">-->
                                                <?php //=$shipping['documentNo']?><!--</td>-->
                                                <td align="center"><?= $shipping['companyName'] ?></td>
                                                <td align="center"><?= User::get_user_name(Customer::get_userid_by_customer_id($shipping['companyId'])['userId'])['uname'] ?></td>
                                                <!--                                                <td align="center">-->
                                                <?php //=$shipping['priceWithTax']?><!--</td>-->
                                                <!--                                                <td align="center">-->
                                                <?php //=$shipping['navlunSoldPrice']?><!--</td>-->
                                                <td align="center"><?= $shipping['currency'] ?></td>
                                                <td align="center"><?= $shipping['expires'] ?></td>
                                                <td align="center"><?= $shipping['goods_buyer'] ?></td>
                                                <td align="center"><?= $shipping['createdDate'] ?></td>
                                                <td align="center">
                                                    <?php
                                                    if ($shipping['navlunStatus'] == 5) echo 'Not on the road yet'; else if ($shipping['navlunStatus'] == 6) echo 'On the Road'; else if ($shipping['navlunStatus'] == 7) echo 'Reached Port'; else echo 'Invoice Issued';
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($shipping['approved'] == 0): ?>
                                                        <a href="<?= operation_url('shipping_update?status=0&id=') . $shipping['navlunId'] ?>">
                                                            <button class="btn btn-primary btn-sm btn-flat btn-addon"
                                                                    style="background-color: #0a4966"><i
                                                                        class="ti-truck"></i>Update
                                                            </button>
                                                        </a>
                                                        <a href="approved_lading?id=<?= $shipping['id'] ?> ">
                                                            <button class="btn btn-primary btn-sm btn-flat btn-addon"
                                                                    style="background-color: #0a4966"><i
                                                                        class="ti-truck"></i>Approve
                                                            </button>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($shipping['approved'] == 1): ?>
                                                        <a href="<?= operation_url('shipping_update?status=1&id=') . $shipping['navlunId'] ?>">
                                                            <button class="btn btn-primary btn-sm btn-flat btn-addon"
                                                                    style="background-color: #0a4966"><i
                                                                        class="ti-truck"></i>Update
                                                            </button>
                                                        </a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

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

    <?php require 'mainPageOperation/footer_operation.php' ?>
    <script>
        $(document).ready(function () {
            reset();
        });
        var example =
            $('#activeshipping').DataTable({
                dom: 'Bfrtip',
                pageLength: 1000,
                order: [0, 'desc'],
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Active_Shipping'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Active_Shipping',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    'copy', 'print',
                ],
            });


        function setsearchvalues(id, index, table) {
            var values = table.column(index, {search: 'applied'}).data().toArray();
            //insert to array currently values done

            //clear select opitons
            var itemSelectorOption = $('#' + id + ' option');
            itemSelectorOption.remove();
            $('#' + id).selectpicker('refresh');
            //clear done

            //unique current values
            function unique(arr) {
                var i,
                    len = arr.length,
                    out = [],
                    obj = {};
                for (i = 0; i < len; i++) {
                    obj[arr[i]] = 0;
                }
                for (i in obj) {
                    out.push(i);
                }
                return out;
            }

            var values = unique(values);
            //unique done

            //insert values to select options
            $.each(values, function (key, value) {
                $('#' + id).append($('<option>', {value: value}).text(value));
            });
        }

        function matchingsinglesearch(id, index, table) {
            document.getElementById(id).onchange = function () {
                table.columns(index).search("^" + document.getElementById(id).value + '$', true).draw();
            }
        }

        function reset() {
            $('#example').dataTable().fnFilter('');//global searching
            $("#orderSurfaceSearch").val([]);//select option değerlerini sıfırlar
            $("#orderSizeSearch").val([]);
            $("#orderSurfaceSearch").val([]);
            example.columns(1).search("").draw();
            example.columns(2).search("").draw();
            example.columns(7).search("").draw();
            setsearchvalues('orderCompanySearch', 1, example);
            setsearchvalues('orderSizeSearch', 2, example);
            setsearchvalues('orderSurfaceSearch', 7, example);
            matchingsinglesearch('orderCompanySearch', 1, example);
            matchingsinglesearch('orderSizeSearch', 2, example);
            matchingsinglesearch('orderSurfaceSearch', 7, example);
            $('.selectpicker').selectpicker('refresh');
        }
    </script>

</body>
</html>
