<?php require 'mainPageAdmin/header_admin.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Price Offers</h2>
                            </div>
                            <div class="   mt-1">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link     " aria-current="page" href="orders"><p class="text-dark"><b>Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="priceoffer"><p class="text-dark"><b>Price Offer</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link   " aria-current="page" href="all_customers"><p class="text-dark"><b>All Customers</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="stock_list"><p class="text-dark"><b>Stock List</b></p></a>
                                    </li>
                                </ul>
                                <div class="p-5 mt-1">
                                    <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true  title="Product Name" class="selectpicker" id="orderCompanySearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Size" class="selectpicker" id="orderSizeSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Surface" class="selectpicker" id="orderSurfaceSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2"></div>


                                        <div class="col-sm-6 mb-8">
                                            <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>

                                        </div>
                                    </div>
                                <form action="<?=admin_url('order_offers')?>" method="post" >
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th class="text-custom text-center"></th>
                                                <th class="text-custom text-center">Product Name</th>
                                                <th class="text-custom text-center">Size</th>
                                                <th class="text-custom text-center">Color</th>
                                                <th class="text-custom text-center">Surface</th>
                                                <th class="text-custom text-center">Quantity</th>
                                                <th class="text-custom text-center">Offer Price</th>
                                                <th class="text-custom text-center">Approve/Reject</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            for($i=0;$i<count($orders);$i++):
                                                ?>
                                                <tr>
                                                    <td class="details-control"><?=$i+1?></td>
                                                    <td><?= $orders[$i]['collection']?></td>
                                                    <td><?= $orders[$i]['size']  ?></td>
                                                    <td><?= $orders[$i]['color']  ?></td>
                                                    <td><?= $orders[$i]['surface']  ?></td>
                                                    <td><?= $orders[$i]['quantity']  ?></td>
                                                    <td><?= $orders[$i]['offer']  ?></td>
                                                    <td>
                                                        <button name="approve" type="submit" value="<?=$orders[$i]['orderId']?>" id="1">Approve</button>
                                                        <button name="reject" type="submit" value="<?=$orders[$i]['orderId']?>" id="1">Reject</button>
                                                    </td>

                                                </tr>
                                            <?php endfor;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>


                    <?php require 'mainPageAdmin/footer_admin.php'; ?>
                    <script>
                            var example = $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [{

                                    extend: 'excelHtml5',
                                    title: 'Price_Offers'
                                },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'Price_Offers',
                                },
                                    'copy', 'print'
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
                        function reset(){
                            $('#example').dataTable().fnFilter('');//global searching
                            $("#orderSurfaceSearch").val([]);//select option değerlerini sıfırlar
                            $("#orderSizeSearch").val([]);
                            $("#orderSurfaceSearch").val([]);
                            example.columns(1).search("").draw();
                            example.columns(2).search("").draw();
                            example.columns(4).search("").draw();
                            setsearchvalues('orderCompanySearch',1,example);
                            setsearchvalues('orderSizeSearch',2,example);
                            setsearchvalues('orderSurfaceSearch',4,example);
                            matchingsinglesearch('orderCompanySearch',1,example);
                            matchingsinglesearch('orderSizeSearch',2,example);
                            matchingsinglesearch('orderSurfaceSearch',4,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>
                    </body>
                    </html>
