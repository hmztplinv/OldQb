<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Active Orders</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link  " aria-current="page" href="all_orders"><p class="text-dark"><b>All Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="order"><p class="text-dark"><b>Pending Approval Orders</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="complated_orders"><p class="text-dark"><b>Active Order</b></p></a>
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
                                        <a class="nav-link   " aria-current="page" href="rejected_offer"><p class="text-dark"><b>Rejected Offer</b></p></a>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true  title="Product Name" class="selectpicker" id="productNameSearch">
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true title="Color" class="selectpicker"  id="productSizeSearch">
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true title="Price" class="selectpicker" id="productPriceSearch">
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
                                            <th class="text-custom text-center">Genus</th>
                                            <th class="text-custom text-center">Deminsions</th>
                                            <th class="text-custom text-center">Surface</th>
                                            <th class="text-custom text-center">Color</th>
                                            <th class="text-custom text-center">Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        for($i=0;$i<count($approvedorders);$i++):
                                            ?>
                                            <tr>
                                                <td class="details-control"><?=$i+1?></td>
                                                <td><?= $approvedorders[$i]['collection']?></td>
                                                <td><?= $approvedorders[$i]['applicationarea']  ?></td>
                                                <td><?= $approvedorders[$i]['size']  ?></td>
                                                <td><?= $approvedorders[$i]['surface']  ?></td>
                                                <td><?= $approvedorders[$i]['color']  ?></td>
                                                <td><?= $approvedorders[$i]['quantity']  ?></td>
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
                    <script
                    <script>

                    var example=  $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [
                                    {

                                        extend: 'excelHtml5',
                                        title: 'Active_Orders'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'Active_Orders'}, 'copy', 'print',
                                ],
                                responsive: {
                                    details: false
                                }
                            });

                    </script>
                    <script>
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
                            $("#productNameSearch").val([]);//select option değerlerini sıfırlar
                            $("#productSizeSearch").val([]);
                            $("#productPriceSearch").val([]);
                            example.columns(1).search("").draw();
                            example.columns(3).search("").draw();
                            example.columns(2).search("").draw();
                            setsearchvalues('productNameSearch',1,example);
                            setsearchvalues('productSizeSearch',3,example);
                            setsearchvalues('productPriceSearch',2,example);
                            matchingsinglesearch('productNameSearch',1,example);
                            matchingsinglesearch('productSizeSearch',3,example);
                            matchingsinglesearch('productPriceSearch',,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>

                    </body>
                    </html>
