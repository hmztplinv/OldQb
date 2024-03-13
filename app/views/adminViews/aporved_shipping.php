<?php require 'mainPageAdmin/header_admin.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h3>Active Shipping</h3>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link       " aria-current="page" href="freight"><p class="text-dark"><b>Freight</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  active" aria-current="page" href="aporved_shipping"><p class="text-dark"><b>Aporved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link    " aria-current="page" href="unaporved_shipping"><p class="text-dark"><b>Unaproved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="delivered_shipping"><p class="text-dark"><b>Delivered Shipping</b></p></a>
                                    </li>
                                </ul>


                                <div class="p-5 mt-1">
                                    <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true  title="Company  Name" class="selectpicker" id="orderCompanySearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Currency" class="selectpicker" id="orderSizeSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Shipping Status" class="selectpicker" id="orderSurfaceSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2"></div>


                                        <div class="col-sm-6 mb-8">
                                            <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>

                                        </div>
                                    </div>

                                <div  class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Customer ID</th>
                                            <th class="text-custom text-center">Document Type</th>
                                            <th class="text-custom text-center">Document No</th>
                                            <th class="text-custom text-center">Company Name</th>
                                            <th class="text-custom text-center">User Name</th>
                                            <th class="text-custom text-center">Net Amount (Kdv'li)</th>
                                            <th class="text-custom text-center">Net Amount (Kdv'siz)</th>
                                            <th class="text-custom text-center">Currency</th>
                                            <th class="text-custom text-center">Expiry Day</th>
                                            <th class="text-custom text-center">Goods Buyer</th>
                                            <th style="" class="text-custom text-center">Shipping Status</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($shippingsadmin as $shipping): ?>
                                            <tr>
                                                <input hidden name="navlunid" value="<?=$shipping['id']?>">
                                                <td align="center"><?=$shipping['companyId']?></td>
                                                <td align="center"><?=$shipping['documentType']?></td>
                                                <td align="center"><?=$shipping['documentNo']?></td>
                                                <td align="center"><?=$shipping['companyName']?></td>
                                                <td align="center"><?= User::get_user_name(Customer::get_userid_by_customer_id($shipping['companyId'])['userId'])['uname']  ?></td>
                                                <td align="center"><?=$shipping['priceWithTax']?></td>
                                                <td align="center"><?=$shipping['navlunSoldPrice']?></td>
                                                <td align="center"><?=$shipping['currency']?></td>
                                                <td align="center"><?=$shipping['expires']?></td>
                                                <td align="center"><?=$shipping['goods_buyer']?></td>
                                                <td align="center">
                                                    <?php
                                                    if($shipping['navlunStatus']==5) echo 'Henüz Yola Çıkmadı'; else if($shipping['navlunStatus']==6) echo 'Yola Çıktı'; else if($shipping['navlunStatus']==7) echo 'Limana Ulaştı'; else echo 'Fatura Kesildi';
                                                    ?>
                                                </td>

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
                    <?php require 'mainPageAdmin/footer_admin.php'?>
                    <script>

                        var example=$('#example').DataTable({
                            scrollX: '200px',
                            scrollY: '500px',
                            scrollCollapse: true,
                            paging: false,
                            dom: 'Bfrtip',
                            buttons: [{

                                extend: 'excelHtml5',
                                title: 'Approved_Shipping'

                            },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'Approved_Shipping',
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
                            example.columns(3).search("").draw();
                            example.columns(7).search("").draw();
                            example.columns(10).search("").draw();
                            setsearchvalues('orderCompanySearch',3,example);
                            setsearchvalues('orderSizeSearch',7,example);
                            setsearchvalues('orderSurfaceSearch',10,example);
                            matchingsinglesearch('orderCompanySearch',3,example);
                            matchingsinglesearch('orderSizeSearch',7,example);
                            matchingsinglesearch('orderSurfaceSearch',10,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>
                    <script>

                    </script>

                    </body>
                    </html>
