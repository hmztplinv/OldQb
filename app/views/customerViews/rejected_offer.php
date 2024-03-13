<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Rejected Offer</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link  " aria-current="page" href="all_orders"><p class="text-dark"><b>All Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="order"><p class="text-dark"><b>Pending Approval Orders</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="complated_orders"><p class="text-dark"><b>Active Order</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="deleted_orders"><p class="text-dark"><b>Deleted Order</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="delivered_orders"><p class="text-dark"><b>Delivered Order</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link   " aria-current="page" href="order_offers"><p class="text-dark"><b>Order Offers</b></p></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active  " aria-current="page" href="rejected_offer"><p class="text-dark"><b>Rejected Offer</b></p></a>
                                    </li>
                                </ul>
                                <div class="row mt-3">
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true  title="Product Name" class="selectpicker" id="productNameSearch">
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true title="Size" class="selectpicker"  id="productSizeSearch">
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true title="Genus" class="selectpicker" id="productAreaSearch">
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">
                                        <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center"></th>
                                            <th class="text-custom text-center">Order Name</th>
                                            <th class="text-custom text-center">Size</th>
                                            <th class="text-custom text-center">Surface</th>
                                            <th class="text-custom text-center">Color</th>
                                            <th class="text-custom text-center">Number</th>
                                            <th class="text-custom text-center">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        for($i=0;$i<count($approvedorders);$i++):
                                            ?>
                                            <tr>
                                                <td class="details-control"><?=$i+1?></td>
                                                <td><?= $approvedorders[$i]['collection']?></td>
                                                <td><?= $approvedorders[$i]['size']==NULL ? 'no info':$approvedorders[$i]['size']  ?></td>
                                                <td><?= $approvedorders[$i]['surface']==NULL ? 'no info':$approvedorders[$i]['surface']  ?></td>
                                                <td><?= $approvedorders[$i]['color']==NULL ? 'no info':$approvedorders[$i]['color']  ?></td>
                                                <td><?= $approvedorders[$i]['quantity']  ?></td>
                                                <td><?= $approvedorders[$i]['offer']  ?></td>
                                            </tr>
                                        <?php endfor;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>


                    <?php require 'mainPageCustomer/footer_customer.php'; ?>
                    <script>

                        var example=  $('#example').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                {

                                    extend: 'excelHtml5',
                                    title: 'Rejected Offers'
                                },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'Rejected Offers'}, 'copy', 'print'
                            ],
                            responsive: {
                                details: false
                            }
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
                            $("#productNameSearch").val([]);//select option değerlerini sıfırlar
                            $("#productSizeSearch").val([]);
                            $("#productAreaSearch").val([]);
                            example.columns(1).search("").draw();
                            example.columns(3).search("").draw();
                            example.columns(2).search("").draw();
                            setsearchvalues('productNameSearch',1,example);
                            setsearchvalues('productSizeSearch',3,example);
                            setsearchvalues('productAreaSearch',2,example);
                            matchingsinglesearch('productNameSearch',1,example);
                            matchingsinglesearch('productSizeSearch',3,example);
                            matchingsinglesearch('productAreaSearch',2,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>

                    </body>
                    </html>
