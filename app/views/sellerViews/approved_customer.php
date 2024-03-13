<?php global $approvedorders;
require 'mainPageSeller/header_seller.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Approved Orders</h2>
                            </div>
                            <div class="p-1 ">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link   " aria-current="page" href="all_orders"><p class="text-dark">
                                            <b>All Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="approval_customer"><p
                                                    class="text-dark"><b>Pending Approval Orders</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="approved_customer"><p
                                                    class="text-dark"><b>Approved Orders</b></p></a>
                                    </li>
                                </ul>
                            </div>
                    <div style="  border: 1px;
                                      border-style: solid;
                                      border-radius: 5px;
                                      margin-bottom: 5px;
                                      border-color: #00000026;" class="row">
                        <div class="col-sm-2">
                            <select data-live-search=true  title="Product Name" class="selectpicker" id="productNameSearch">
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select data-live-search=true  title="Company Name" class="selectpicker" id="companyNameSearch">
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary" ><b>Reset</b></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th class="text-custom text-center">Product No</th>
                                <th class="text-custom text-center">Product Name</th>
                                <th class="text-custom text-center">Company Name</th>
                                <th class="text-custom text-center">Size</th>
                                <th class="text-custom text-center">Thickness</th>
                                <th class="text-custom text-center">Surface</th>
                                <th class="text-custom text-center">Color</th>
                                <th class="text-custom text-center">Quality</th>
                                <th class="text-custom text-center">Unit</th>
                                <th class="text-custom text-center">Price</th>
                                <th class="text-custom text-center">Quantity</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($approvedorders as $approvedorder): ?>

                                <tr>
                                    <td align="center"><?= $approvedorder['productId'] ?></td>
                                    <td align="center"><?= $approvedorder['collection'] ?></td>
                                    <td align="center"><?= $approvedorder['companyName'] ?></td>
                                    <td align="center"><?= $approvedorder['size'] ?></td>
                                    <td align="center"><?= $approvedorder['thickness'] ?></td>
                                    <td align="center"><?= $approvedorder['surface'] ?></td>
                                    <td align="center"><?= $approvedorder['color'] ?></td>
                                    <td align="center"><?= $approvedorder['quality'] ?></td>
                                    <td align="center"><?= $approvedorder['iunit'] ?></td>
                                    <td align="center"><?= $approvedorder['soldPrice'] ?></td>
                                    <td align="center"><?= $approvedorder['orderQuantity'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>
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
            example.columns(1).search("").draw();
            example.columns(2).search("").draw();
            setsearchvalues('productNameSearch',1,example);
            setsearchvalues('companyNameSearch',2,example);
            matchingsinglesearch('productNameSearch',1,example);
            matchingsinglesearch('companyNameSearch',2,example);
            $('.selectpicker').selectpicker('refresh');
        }
    </script>


