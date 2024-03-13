<?php require 'mainPageAdmin/header_admin.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>My Customers</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link     " aria-current="page" href="orders"><p class="text-dark"><b>Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="priceoffer"><p class="text-dark"><b>Price Offer</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  active " aria-current="page" href="all_customers"><p class="text-dark"><b>All Customers</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="stock_list"><p class="text-dark"><b>Stock List</b></p></a>
                                    </li>
                                </ul>
                                <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">

                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true  title="Company Name" class="selectpicker" id="customerNameSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2">
                                            <select data-live-search=true title="Status" class="selectpicker" id="customerStatusSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-3 mb-2"></div>


                                        <div class="col-sm-6 mb-8">
                                            <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>

                                            <th class="text-custom text-center">Company Title</th>
                                            <th class="text-custom text-center">Adress</th>
                                            <th class="text-custom text-center">Phone Number</th>
                                            <th class="text-custom text-center">Tax No / T.C. No</th>
                                            <th class="text-custom text-center">E-Mail</th>
                                            <th class="text-custom text-center">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($customers as $customer):?>
                                            <tr>

                                                <td align="center"><?=$customer['companyName']?></td>
                                                <td align="center"><?=$customer['address']?></td>
                                                <td align="center"><?=$customer['phone']?></td>
                                                <td align="center"><?=$customer['taxNumber']?></td>
                                                <td align="center"><?=$customer['email']?></td>
                                                <td align="center">STANDART</td>
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

                    var example   =    $('#example').DataTable({
                            scrollX: '200px',
                            scrollY: '500px',
                            scrollCollapse: true,
                            paging: false,
                            dom: 'Bfrtip',
                            buttons: [{
                                extend: 'excelHtml5',
                                title: 'My_Customers'
                            },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'My_Customers',},
                                'copy',   'print'
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
                        $("#customerNameSearch").val([]);//select option değerlerini sıfırlar
                        $("#customerStatusSearch").val([]);

                        example.columns(0).search("").draw();
                        example.columns(5).search("").draw();

                        setsearchvalues('customerNameSearch',0,example);
                        setsearchvalues('customerStatusSearch',5,example);

                        matchingsinglesearch('customerNameSearch',0,example);
                        matchingsinglesearch('customerStatusSearch',5,example);

                        $('.selectpicker').selectpicker('refresh');
                    }
                    </script>



                    </body>

                    </html>

