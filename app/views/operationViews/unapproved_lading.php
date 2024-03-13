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
    <!-- Main Content-->
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Unapproved Shipping.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Unapproved Shipping</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Unapproved
                                    Shipping</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
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
                                            <select data-live-search=true title="Currency" class="selectpicker" id="orderSizeSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select data-live-search=true title="Real Firm" class="selectpicker" id="orderSurfaceSearch">
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
                                           id="UnApprovedshipping">
                                        <thead class="text-center">
                                        <tr>
                                            <th class="text-primary text-center">Company</th>
                                            <th class="text-primary text-center">Currency</th>
                                            <th class="text-primary text-center">Real Firm</th>
                                            <th class="text-primary text-center">Shipping</th>

                                            <th class="text-primary text-center">Created Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($navluns as $item):?>
                                            <tr>

                                                <td align="center"><?=$item['companyName']?></td>
                                                <td align="center"><?=$item['currency']?></td>
                                                <td align="center"><?=$item['realFirm']?></td>
                                                <td align="center">
                                                    <?php if(empty(Navlun::shipping_exist($item['id'])['id'])):?>
                                                        <a href="shipping_add?id=<?=$item['id']?> "><button class="btn btn-primary btn-sm btn-flat btn-addon" style="background-color: #0a4966"><i class="ti-truck"></i>Shipping</button></a>
                                                    <?php endif;?>

                                                </td>

                                                <td align="center"><?=$item['createdDate']?></td>
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

                        var example=$('#UnApprovedshipping').DataTable({
                            scrollX: '200px',
                            scrollY: '500px',
                            scrollCollapse: true,
                            paging: false,
                                 order: [4, 'desc'],
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
                    <script>

                    </script>
                    <script>
                        document.querySelector("#sweet").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet2").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet3").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet4").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet5").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet6").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet7").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet8").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet9").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet10").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet11").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet12").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet13").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet14").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet15").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet16").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet17").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet18").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet19").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                    </script>
                    </body>
                    </html>
