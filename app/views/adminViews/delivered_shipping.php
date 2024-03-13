<?php require 'mainPageAdmin/header_admin.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Delivered Shipping</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link       " aria-current="page" href="freight"><p class="text-dark"><b>Freight</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="aporved_shipping"><p class="text-dark"><b>Aporved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link    " aria-current="page" href="unaporved_shipping"><p class="text-dark"><b>Unaproved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="delivered_shipping"><p class="text-dark"><b>Delivered Shipping</b></p></a>
                                    </li>
                                </ul>
                                <div class="p-5 mt-1">
                                    <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true  title="Company Name" class="selectpicker" id="companySearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Document Type" class="selectpicker" id="documentTypeSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Document No" class="selectpicker" id="documentNoSearch">
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
                                            <th class="text-custom text-center">Company</th>
                                            <th class="text-custom text-center">Document Type</th>
                                            <th class="text-custom text-center">Document No</th>
                                            <th class="text-custom text-center">Customer Name</th>
                                            <th class="text-custom text-center">Net Amount(Kdv'siz)</th>
                                            <th class="text-custom text-center">Net Amount(Kdv'li)</th>
                                            <th class="text-custom text-center">Currency</th>
                                            <th class="text-custom text-center">Goods Buyer</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($shippings as $item): ?>
                                            <tr>
                                                <td align="center"><?=$item['companyName']?></td>
                                                <td align="center"><?=$item['documentType']?></td>
                                                <td align="center"><?=$item['documentNo']?></td>
                                                <td align="center"><?=$item['uname']?></td>
                                                <td align="center"><?=$item['navlunProfit']?></td>
                                                <td align="center"><?=$item['navlunSoldPrice']?></td>
                                                <td align="center"><?=$item['currency']?></td>
                                                <td align="center"><?=$item['goods_buyer']?></td>
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

                        var example= $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [
                                    {

                                        extend: 'excelHtml5',
                                        title: 'Complated_Lading'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'Complated_Lading',
                                        orientation: 'landscape',
                                        pageSize: 'LEGAL'
                                    },
                                    'copy', 'print',
                                ]
                            } );
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
                            $("#companySearch").val([]);//select option değerlerini sıfırlar
                            $("#documentTypeSearch").val([]);
                            $("#documentNoSearch").val([]);
                            example.columns(0).search("").draw();
                            example.columns(1).search("").draw();
                            example.columns(2).search("").draw();
                            setsearchvalues('companySearch',0,example);
                            setsearchvalues('documentTypeSearch',1,example);
                            setsearchvalues('documentNoSearch',2,example);
                            matchingsinglesearch('companySearch',0,example);
                            matchingsinglesearch('documentTypeSearch',1,example);
                            matchingsinglesearch('documentNoSearch',2,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>

                    </body>
                    </html>
