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
                        <h2 class="main-content-title tx-24 mg-b-5">All Orders.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Orders</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto overflow-hidden">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">All Orders</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="row mt-3 mb-3">
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                        <select data-live-search=true title="Product No"  class="selectpicker" id="productNameSearch">
                                        </select>
                                    </div>
                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                                        <select data-live-search=true title="Company Name" class="selectpicker" id="companyNameSearch">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                        <select data-live-search=true title="Status"  class="selectpicker" id="statusSearch">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <button onclick="reset()" class="btn ripple btn-primary">Reset</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover key-buttons text-nowrap"
                                            >
                                        <thead class="text-center">
                                        <tr>
                                            <th>PRODUCT NO</th>
                                            <th>COMPANY NAME</th>
                                            <th>PRODUCT NAME</th>
                                            <th>SİZE</th>
                                            <th>Thickness</th>

                                            <th>QUALİTY</th>
                                            <th>PRİCE</th>
                                            <th>PALLET QUANTİTY</th>
                                            <th>ORDER STATUS</th>
                                            <th>CREATED DATE </th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <?php foreach($approvedorders as $approvedorder):?>
                                            <tr class="border-bottom">
                                                <td align="center"><?=$approvedorder['productId']?></td>
                                                <td align="center"><?=trim($approvedorder['companyName'])?></td>
                                                <td align="center"><a href="<?= seller_url('product_detail?id=').$approvedorder["productId"].'&currency='.$approvedorder["currency"].'&origin='.$approvedorder["product_origin"]?>"><b><?=$approvedorder['collection']?></b></a></td>
                                                <td align="center"><?=$approvedorder['size']==Null?'no info':$approvedorder['size']?></td>
                                                <td align="center"><?=$approvedorder['thickness']==Null?'no info':$approvedorder['thickness']?></td>
                                                 <td align="center"><?=$approvedorder['quality']==Null?'no info':$approvedorder['quality']?></td>
                                                <td align="center"><?=$approvedorder['soldPrice']?></td>
                                                <td align="center"><?=$approvedorder['orderQuantity']?></td>
                                                <td align="center"><?php
                                                    if($approvedorder['status']==1){
                                                        echo "Order has been created, the quotation is pending";
                                                    }
                                                    else if($approvedorder['status']==2  && $approvedorder['offerStatus']==1 ){
                                                        echo "Offer sent, waiting for freight offer";
                                                    }
                                                    else if($approvedorder['status']==3){
                                                        echo "Offer sent, customer rejected and waiting for new offer";
                                                    }
                                                    else if($approvedorder['status']==2 && $approvedorder['offerStatus']==3){
                                                        echo "Offer sent, customer rejected and waiting for new offer";
                                                    }
                                                    else if($approvedorder['status']==4){
                                                        echo "Commertional and proformam sent to customer";
                                                    }
                                                    else if($approvedorder['status']==5){
                                                        echo "Freight established, awaiting approval";
                                                    }
                                                    else if($approvedorder['status']==6){
                                                        echo "Freight Offer Confirmed by customer Waiting for Booking No";
                                                    }
                                                    else if($approvedorder['status']==7){
                                                        echo "Freight Offer Rejected";
                                                    }
                                                    else if($approvedorder['status']==8){
                                                        echo "Booking No entered";
                                                    }
                                                    else if($approvedorder['status']==9){
                                                        echo "Not on the road yet";
                                                    }
                                                    else if($approvedorder['status']==10){
                                                        echo "On the Road";
                                                    }
                                                    else if($approvedorder['status']==11){
                                                        echo "Reached Port";
                                                    }
                                                    else if($approvedorder['status']==12){
                                                        echo "Invoice Issued";
                                                    }
                                                    ?></td>
                                                <td align="center"><?= (new DateTime($approvedorder['created_at']))->format('Y-m-d H:i') ?></td>

                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End Main Content-->

<?php require 'mainPageSeller/footer_seller.php'; ?>

    <script>
        var example=$('#example').DataTable( {
            dom: 'Bfrtip',

            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'All_receivables'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'All_receivables'}, 'copy', 'print'
            ],
            responsive: {
                details: false
            }
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
        function standartmultiplesearch(id,index,table) {//not match! for match you need to make value "^"+value+"$"
            document.getElementById(id).onchange = function () {
                var selected = [];
                for (var option of document.getElementById(id).options) {
                    if (option.selected) {
                        selected.push(option.value);
                    }
                }
                selected=selected.join("|");
                table.columns(index).search(selected, true, false).draw();
            }
        }

        function reset(){
            $('#example').dataTable().fnFilter('');//global searching
            $("#productNameSearch").val([]);//select option değerlerini sıfırlar
            $("#companyNameSearch").val([]);
            $("#statusSearch").val([]);
            example.columns(0).search("").draw();
            example.columns(1).search("").draw();
            example.columns(8).search("").draw();
            setsearchvalues('productNameSearch',0,example);
            setsearchvalues('companyNameSearch',1,example);
            setsearchvalues('statusSearch',8,example);
            matchingsinglesearch('productNameSearch',0,example);
            matchingsinglesearch('companyNameSearch',1,example);
            matchingsinglesearch('statusSearch',8,example);
            $('.selectpicker').selectpicker('refresh');
        }
    </script>