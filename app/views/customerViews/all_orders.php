<?php require 'mainPageCustomer/header_customer.php'; ?>

<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">All Orders</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                    </ol>
                </div>
            </div>


            <!-- End Page Header -->


            <!-- Row -->
            <div class="row row-sm">
                <!-- Tab links -->
                <!-- Select Product Section -->


                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">All Orders
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="row select-container card-body ml-3">
                            <div class="col-sm-3 mb-2">
                                <select data-live-search=true title="Product Name"  name="" id="productNameSearch" class="selectpicker form-control">
                                </select>
                            </div>
                            <div class="col-sm-3 mb-2">
                                <select data-live-search=true title="Status" class="selectpicker form-control" name="" id="statusSearch">
                                </select>
                            </div>
                            <div class="col-sm-6 mb-8">
                                <button onclick="reset()" class="btn ripple btn-main-primary">Reset</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="allOrders" class="table table-hover dataTable key-buttons text-nowrap w-100">
                                    <thead class="text-center">
                                    <tr>
                                        <th class="text-custom text-center">#</th>
                                        <th class="wd-1">Order Id</th>
                                        <th>Order Name</th>
                                        <th>Size</th>
                                        <th>Surface</th>
                                        <th>Color</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <?php for($i=0;$i<count($orders);$i++):?>
                                        <tr class="border-bottom">
                                            <td align="center"><a href="<?=customer_url('order_detail?date=').$orders[$i]['created_at']?>"><i class="ti ti-search text-primary"></a></td>

                                            <td><?=$orders[$i]['orderId']?></td>
                                            <td class="font-weight-bold"><?=$orders[$i]['name']?></td>
                                            <td><?=$orders[$i]['size']==NULL ? 'no info':$orders[$i]['size']?></td>
                                            <td><?=$orders[$i]['surface']==NULL ? 'no info':$orders[$i]['surface']?></td>
                                            <td><?=$orders[$i]['color']==NULL ? 'no info':$orders[$i]['color']?></td>
                                            <td><?= $orders[$i]['totalQuantity']/2?></td>
                                            <td ><?php if($orders[$i]['orderStatus']==1){
                                                    echo "Order created, waiting for offer";
                                                }
                                                else if($orders[$i]['orderStatus']==2  && $orders[$i]['offerStatus']==1 ){
                                                    echo "Offer sent, waiting for customer approval";
                                                }
                                                else if($orders[$i]['orderStatus']==3){
                                                    echo "Offer sent, customer approved";
                                                }
                                                else if($orders[$i]['orderStatus']==2 && $orders[$i]['offerStatus']==3){
                                                    echo "offer sent, customer rejected and waiting for new offer";
                                                }
                                                else if($orders[$i]['orderStatus']==4){
                                                    echo "Commertional and proformam sent to customer";
                                                }
                                                else if($orders[$i]['orderStatus']==5){
                                                    echo "Freight established, awaiting approval";
                                                }
                                                else if($orders[$i]['orderStatus']==6){
                                                    echo "Freight Offer Confirmed by customer Waiting for Booking No";
                                                }
                                                else if($orders[$i]['orderStatus']==7){
                                                    echo "Freight Offer Rejected";
                                                }
                                                else if($orders[$i]['orderStatus']==8){
                                                    echo "Booking No has been entered.";
                                                    echo Order::get_booking_no_by_order_id($orders[$i]['orderId']);
                                                }
                                                else if($orders[$i]['orderStatus']==9){
                                                    echo "Order not yet shipped";
                                                }
                                                else if($orders[$i]['orderStatus']==10){
                                                    echo "On the Road";
                                                }
                                                else if($orders[$i]['orderStatus']==11){
                                                    echo "Reached Port";
                                                }
                                                else if($orders[$i]['orderStatus']==12){
                                                    echo "Invoice Issued";
                                                }
                                                ?></td>
                                            <td><?=$orders[$i]['created_at']?></td>
                                        </tr>
                                    <?php endfor;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- End Row -->
            <?php require "mainPageCustomer/footer_customer.php"; ?>
            <script>
                //table-data.js dosyasında her datatable'ı table olarak oluşturuyor. Bence sorun oradan kaynaklanıyor. Her datatable için farklı isim vererek
                //datatable'ı çağırabilirsin
            </script>
            <script>

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


                var example=$('#allOrders').DataTable({
                    pageLength: 10,
                    dom: 'Bfrtip',
                    ordering:false,
                    buttons: [{

                    extend: 'excelHtml5',
                    title: 'All_Orders'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'All_Orders'},
                    'copy',     'print'
                    ]
                });

                function reset(){
                    $('#example').dataTable().fnFilter('');//global searching
                    $("#productNameSearch").val([]);//select option değerlerini sıfırlar
                    example.columns(2).search("").draw();
                    setsearchvalues('productNameSearch',2, example);
                    matchingsinglesearch('productNameSearch',2,example);


                    $("#statusSearch").val([]);//select option değerlerini sıfırlar
                    example.columns(7).search("").draw();
                    setsearchvalues('statusSearch',7,example);
                    matchingsinglesearch('statusSearch',7,example);

                    $('.selectpicker').selectpicker('refresh');
                }

                $( document ).ready(function() {
                    reset();
                });


            </script>

            </body>

            </html>