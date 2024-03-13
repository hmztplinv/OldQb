<?php require 'mainPageOperation/header_operation.php'?>
<style>
    td {

    }
</style>
<body class="ltr main-body leftmenu">


    <!-- Loader -->
    <div id="global-loader">
        <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->
<!-- Page -->
<div class="page">
    <?php require 'mainPageOperation/sidebar_operation.php'?>
    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Offer
                            Freights.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Freight</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Offer Freights</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Offer Freights
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select title="Customer Name" id="customerNameSearch" class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select title="Email" id="emailSearch"
                                                    class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="reset" onclick="reset()"
                                                class="btn btn-primary ripple">Reset</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover dataTable key-buttons text-nowrap w-100"
                                           id="example">
                                        <thead class="text-center">
                                        <tr>
                                            <th >#</th>
                                            <th >Customer Name</th>
                                            <th >Phone</th>
                                            <th >E-mail</th>
                                            <th >Address</th>
                                            <th >Tax Number</th>
                                            <th >Country</th>
                                            <th >Order Date</th>

                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <?php foreach ($customers as $customer):?>
                                        <tr>
                                            <td>
                                                <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                    <a href="<?=site_url('operation/freight_detail') ?>?customerId<?= http_build_query([
                                                        '' => $customer['customerId'],
                                                        'date' => $customer['created_at']
                                                    ]) ?>">
                                                        <i class="ti ti-search text-primary"></i>
                                                    </a>
                                                </span>
                                            </td>
                                            <td ><?= wordwrap($customer['companyName'], 20, "<br />", true); ?></td>


                                            <td ><?= wordwrap($customer['phone'], 20, "<br />", true); ?></td>
                                            <td ><?= wordwrap($customer['email'], 23, "<br />", true); ?></td>
                                            <td ><?= wordwrap($customer['address'], 20, "<br />", true); ?></td>
                                            <td ><?= wordwrap($customer['taxNumber'], 20, "<br />", true); ?></td>
                                            <td ><?= wordwrap($customer['countryName'], 20, "<br />", true); ?></td>
                                            <td><?php echo date('Y-m-d H:i', strtotime($customer['created_at'])); ?></td>
                                        </tr>
                                        <?php endforeach;?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Rlow End -->

            </div>
        </div>
    </div>
    <!-- End Main Content-->

    <?php require 'mainPageOperation/footer_operation.php'?>


    <script>
        $(document).ready(function () {
            reset();
        });
            var example = $('#example').DataTable( {
                dom: 'Bfrtip',
                pageLength: 1000,

    order: [7, 'desc'],
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Offer_Freights'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Offer_Freights',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    'copy', 'print',
                ]
            } );


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
        function standartsinglesearch(id, index, table) {
            document.getElementById(id).onchange = function () {
                table.columns(index).search(document.getElementById(id).value, true).draw();
            }
        }

        function standartmultiplesearch(id, index, table) {//not match! for match you need to make value "^"+value+"$"
            document.getElementById(id).onchange = function () {
                var selected = [];
                for (var option of document.getElementById(id).options) {
                    if (option.selected) {
                        selected.push(option.value);
                    }
                }
                selected = selected.join("|");
                table.columns(index).search(selected, true, false).draw();
            }
        }


        function reset() {
            $('#example').dataTable().fnFilter('');//global searching
            $("#customerNameSearch").val([]);//select option değerlerini sıfırlar
            $("#emailSearch").val([]);
            example.columns(1).search("").draw();
            example.columns(3).search("").draw();
            setsearchvalues('customerNameSearch', 1, example);
            setsearchvalues('emailSearch', 3, example);
            standartsinglesearch('customerNameSearch', 1, example);
            standartsinglesearch('emailSearch', 3, example);
            $('.selectpicker').selectpicker('refresh');
        }

    </script>