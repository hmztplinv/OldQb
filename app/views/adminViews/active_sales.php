<?php require 'mainPageAdmin/header_admin.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>All Orders</h2>
                            </div>
                            <div class="p-5 mt-2">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link  active   " aria-current="page" href="active_sales"><p class="text-dark"><b>Active Sales</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="all_receivables"><p class="text-dark"><b>All Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link    " aria-current="page" href="overdue"><p class="text-dark"><b>Overdue</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="unexpired"><p class="text-dark"><b>Unexpired</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="paid_receivables"><p class="text-dark"><b>Paid Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="dhl"><p class="text-dark"><b>DHL</b></p></a>
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
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Product No</th>
                                            <th class="text-custom text-center">Product Name</th>
                                            <th class="text-custom text-center">Size</th>
                                            <th class="text-custom text-center">Thickness</th>
                                            <th class="text-custom text-center">Surface</th>
                                            <th class="text-custom text-center">Color</th>
                                            <th class="text-custom text-center">Quality</th>
                                            <th class="text-custom text-center">Unit</th>
                                            <th class="text-custom text-center">Price</th>
                                            <th class="text-custom text-center">Quantity</th>
                                            <th class="text-custom text-center">Order Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($approvedorders as $approvedorder):?>
                                            <tr>
                                                <td align="center"><?=$approvedorder['productId']?></td>
                                                <td align="center"><?=$approvedorder['collection']?></td>
                                                <td align="center"><?=$approvedorder['size']==NULL?'no info':$approvedorder['size']?></td>
                                                <td align="center"><?=$approvedorder['thickness']==NULL?'no info':$approvedorder['thickness']?></td>
                                                <td align="center"><?=$approvedorder['surface']==NULL?'no info':$approvedorder['surface']?></td>
                                                <td align="center"><?=$approvedorder['color']==NULL?'no info':$approvedorder['color']?></td>
                                                <td align="center"><?=$approvedorder['quality']==NULL?'no info':$approvedorder['quality']?></td>
                                                <td align="center"><?=$approvedorder['iunit']==NULL?'no info':$approvedorder['iunit']?></td>
                                                <td align="center"><?=$approvedorder['soldPrice']?></td>
                                                <td align="center"><?=$approvedorder['orderQuantity']?></td>
                                                <td align="center"><?php
                                                    if($approvedorder['status']==1){
                                                        echo 'Müşteriden Onay Bekleniyor';
                                                    }
                                                    elseif($approvedorder['status']==0){
                                                        echo 'Müşteri Onaylandı';
                                                    }
                                                    else{
                                                        echo 'Sipariş Tamamlandı';
                                                    }
                                                    ?></td>

                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <?php require 'mainPageAdmin/footer_admin.php'; ?>

                    <script>

                        var example=$('#example').DataTable({
                            scrollX: '200px',
                            scrollY: '500px',
                            scrollCollapse: true,
                            paging: false,
                            dom: 'Bfrtip',
                            buttons: [{

                                extend: 'excelHtml5',
                                title: 'All_Orders'

                            },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'All_Orders',
                                    orientation: 'landscape'

                                },
                                'copy' , 'print'
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
                            example.columns(1).search("").draw();
                            example.columns(3).search("").draw();
                            example.columns(5).search("").draw();
                            setsearchvalues('orderCompanySearch',1,example);
                            setsearchvalues('orderSizeSearch',3,example);
                            setsearchvalues('orderSurfaceSearch',5,example);
                            matchingsinglesearch('orderCompanySearch',1,example);
                            matchingsinglesearch('orderSizeSearch',3,example);
                            matchingsinglesearch('orderSurfaceSearch',5,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>
                    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

