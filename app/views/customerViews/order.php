<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Pending Approvel Orders</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link  " aria-current="page" href="all_orders"><p class="text-dark"><b>All Orders</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="order"><p class="text-dark"><b>Pending Approval Orders</b></p></a>
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
                                <div class="table ">
                                    <table class="display" style="width:100%" id="example">
                                        <thead>
                                        <tr>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Collection Name</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Count</th>
                                        </tr>
                                        </thead>
                                        <?php for ($i = 0;
                                        $i < count($orders);
                                        $i++): ?>
                                        <tbody>
                                        <tr>
                                            <td><input name="delete" class="delete" value="Delete" type="submit">
                                            </td>
                                            <td><input name="id" value="<?= $orders[$i]['orderId'] ?>"
                                                       hidden> <?= $orders[$i]['orderId'] ?></td>
                                            <td><?= $orders[$i]['collection'] ?></td>
                                            <td><?= $orders[$i]['color']==NULL ? 'no info': $orders[$i]['color']?> </td>
                                            <td>
                                                <button value="<?= $orders[$i]['productId'] ?>" name="reduce" id="1"
                                                        data-id="<?= $orders[$i]['productId'] ?>" type="submit"
                                                        class="btn-danger px-2 subtractorder"
                                                        style="border-radius: 10px">
                                                    -
                                                </button>
                                                <input style="border-width:0; width: 20px" readonly name="quantity"
                                                       id="1" class="mx-2" value="<?= $orders[$i]['quantity'] ?>">
                                                <button value="<?= $orders[$i]['productId'] ?>" name="add" id="2"
                                                        data-id="<?= $orders[$i]['productId'] ?>" type="submit"
                                                        CLASS="btn-success px-2 addorder"
                                                        style="border-radius: 10px">
                                                    +
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                        </tbody>

                                    </table>
                                    <!-- /# card -->
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>


                    <?php require 'mainPageCustomer/footer_customer.php'; ?>
                    <script>
                        $('.addorder').click(function (e) {
                            var $row = $(this).parents('tr');
                            var id = $row.find('input[name="id"]').val();
                            var quantity=$row.find('input[name="quantity"]').val();
                            $row.find('input[name="quantity"]').val(parseInt(quantity)+1);
                            $.post("<?= customer_url('order') ?>", {
                                addorder: id,
                            }, function (result) {
                            })
                        });
                        $('.subtractorder').click(function (e) {
                            var $row = $(this).parents('tr');
                            var id = $row.find('input[name="id"]').val();
                            var quantity=$row.find('input[name="quantity"]').val();
                            $row.find('input[name="quantity"]').val(parseInt(quantity)-1);
                            $.post("<?= customer_url('order') ?>", {
                                subtractorder: id,
                            }, function (result) {
                                if (result=='0'){
                                    $row.remove();
                                }
                            })
                        });
                        $('.delete').click(function (e) {
                            var $row = $(this).parents('tr');
                            var id = $row.find('input[name="id"]').val();
                            $.post("<?= customer_url('order') ?>", {
                                deleteorder: id,
                            }, function () {
                                $row.remove();
                            })
                        });
                    </script>
                    <script>
                          var  example= $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: ['pdf','excel', 'copy', 'print',
                                ]
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
                            example.columns(2).search("").draw();
                            example.columns(3).search("").draw();
                            example.columns(4).search("").draw();
                            setsearchvalues('productNameSearch',2,example);
                            setsearchvalues('productSizeSearch',3,example);
                            setsearchvalues('productPriceSearch',4,example);
                            matchingsinglesearch('productNameSearch',2,example);
                            matchingsinglesearch('productSizeSearch',3,example);
                            matchingsinglesearch('productPriceSearch',4,example);
                            $('.selectpicker').selectpicker('refresh');
                        }
                    </script>

                    </body>
                    </html>
