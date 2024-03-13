<?php require 'mainPageSeller/header_seller.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>My Sales</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link   " aria-current="page" href="all_orders"><p class="text-dark"><b>All Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="approval_customer"><p class="text-dark"><b>Pending Approval Orders</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="approved_customer"><p class="text-dark"><b>Approved Orders</b></p></a>
                                    </li>      <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="sales"><p class="text-dark"><b>Past Sales</b></p></a>
                                    </li>
                                </ul>
                                <div class="row mt-3 mb-3">
                                    <div class="col-lg-3 col-sm-3">
                                        <select data-live-search=true title="Product Name" id="productNameSearch" class="selectpicker">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3"">
                                    <select id="surfaceSearch" title="Surface" class="selectpicker" data-live-search=true>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-3"">
                                <select id="dimensionSearch" title="Dimensions" class="selectpicker" data-live-search=true>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-3"">
                            <button onclick="reset()"  class="btn btn-outline-secondary btn-sm"><b>Reset</b></button>
                        </div>
                    </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-custom text-center">Product No</th>
                                                <th class="text-custom text-center">Product Name </th>
                                                <th class="text-custom text-center">Size </th>
                                                <th class="text-custom text-center">Thickness </th>
                                                <th class="text-custom text-center">Surface</th>
                                                <th class="text-custom text-center">Color</th>
                                                <th class="text-custom text-center">Quality</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($approvedorders as $approvedorder):?>
                                            <tr>
                                                <td align="center"><?=$approvedorder['productId']?></td>
                                                <td align="center"><?=$approvedorder['collection']?></td>
                                                <td align="center"><?=$approvedorder['size']?></td>
                                                <td align="center"><?=$approvedorder['thickness']?></td>
                                                <td align="center"><?=$approvedorder['surface']?></td>
                                                <td align="center"><?=$approvedorder['color']?></td>
                                                <td align="center"><?=$approvedorder['quality']?></td>
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
                    <!-- /# row -->
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
                            $("#surfaceSearch").val([]);
                            $("#dimensionSearch").val([]);
                            example.columns(1).search("").draw();
                            example.columns(3).search("").draw();
                            example.columns(5).search("").draw();
                            setsearchvalues('productNameSearch',1,example);
                            setsearchvalues('surfaceSearch',5,example);
                            setsearchvalues('dimensionSearch',3,example);
                            matchingsinglesearch('productNameSearch',1,example);
                            matchingsinglesearch('surfaceSearch',5,example);
                            matchingsinglesearch('dimensionSearch',3,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>



                    </body>

                    </html>
