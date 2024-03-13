<?php require 'mainPageOperation/header_operation.php'?>


<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->


<!-- Page -->
<div class="page">

    <?php require 'mainPageOperation/sidebar_operation.php'?>
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Delivered Shipping.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Delivered Shipping</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Delivered
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
                                            <select data-live-search=true  title="Company Name" class="selectpicker" id="orderCompanySearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select data-live-search=true title="Document Type" class="selectpicker" id="orderSizeSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select data-live-search=true title="Document No" class="selectpicker" id="orderSurfaceSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" name="reset" onclick="reset()" value=""
                                                class="btn btn-primary ripple">
                                            <i class="ti ti-back-left"></i> Reset</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                           id="deliveredshipping">
                                        <thead class="text-center">
                                        <tr>
                                            <th class="text-primary text-center">Company</th>
                                            <th class="text-primary text-center">Document Type</th>
                                            <th class="text-primary text-center">Document No</th>
                                            <th class="text-primary text-center">Customer Name</th>
                                            <th class="text-primary text-center">Net Amount(Kdv'siz)</th>
                                            <th class="text-primary text-center">Net Amount(Kdv'li)</th>
                                            <th class="text-primary text-center">Currency</th>
                                            <th class="text-primary text-center">Goods Buyer</th>
                                            <th class="text-primary text-center">Created Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($shippings as $item): ?>
                                            <tr>
                                                <td style="text-align: left"><?=$item['companyName']?></td>
                                                <td style="text-align: left"><?=$item['documentType']?></td>
                                                <td style="text-align: left"><?=$item['documentNo']?></td>
                                                <td style="text-align: left"><?=$item['uname']?></td>
                                                <td style="text-align: left"><?=$item['navlunProfit']?></td>
                                                <td style="text-align: left"><?=$item['navlunSoldPrice']?></td>
                                                <td style="text-align: left"><?=$item['currency']?></td>
                                                <td style="text-align: left"><?=$item['goods_buyer']?></td>
                                                <td style="text-align: left"><?=$item['createdDate']?></td>
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
                <!-- Row End -->

            </div>
        </div>
    </div>
                    <?php require 'mainPageOperation/footer_operation.php'?>

                    <script>

                            var example=$('#deliveredshipping').DataTable({
                            scrollX: '200px',
                            scrollY: '500px',
                            scrollCollapse: true,
                                paging: false,
                                order: [8, 'desc'],
                            dom: 'Bfrtip',
                            buttons: [{
                                extend: 'excelHtml5',
                            title: 'Unapproved_Shipping'
                        },
                        {
                            extend: 'pdfHtml5',
                                title: 'Unapproved_Shipping',},
                                'copy',   'print'
                            ]
                        });
                        $(document).ready(function () {
                            reset();
                        });
                        function setsearchvalues(id,index,table) {
                            var values = table.column(index, {search: 'applied'}).data().toArray();
                            //insert to array currently values done

                            //clear select opitons
                            var itemSelectorOption = $('#'+id+' option');
                            itemSelectorOption.remove();
                            $('#'+id).selectpicker('refresh');
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
                            $.each(values, function(key, value) {
                                $('#'+id).append($('<option>', { value : value }).text(value));
                            });
                        }
                        function matchingsinglesearch(id,index,table) {
                            document.getElementById(id).onchange = function () {
                                table.columns(index).search("^"+document.getElementById(id).value+'$',true).draw();
                            }
                        }
                        function reset(){
                            $('#example').dataTable().fnFilter('');//global searching
                            $("#orderSurfaceSearch").val([]);//select option değerlerini sıfırlar
                            $("#orderSizeSearch").val([]);
                            $("#orderSurfaceSearch").val([]);
                            example.columns(0).search("").draw();
                            example.columns(1).search("").draw();
                            example.columns(2).search("").draw();
                            setsearchvalues('orderCompanySearch',0,example);
                            setsearchvalues('orderSizeSearch',1,example);
                            setsearchvalues('orderSurfaceSearch',2,example);
                            matchingsinglesearch('orderCompanySearch',0,example);
                            matchingsinglesearch('orderSizeSearch',1,example);
                            matchingsinglesearch('orderSurfaceSearch',2,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>

                    </body>
                    </html>
