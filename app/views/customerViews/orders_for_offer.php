<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid mb-5">
                <section id="main-content">
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card  ">
                                <div class="card-header card-header-border-bottom bg-white">
                                    <h2>All My Orders</h2>
                                </div>
                                <div class="card-header card-header-border-bottom bg-white">
                                    <div class="col-md-6  " style="text-align: left">
                                        <div class=" ">
                                            <img class="" src="<?= public_url('images/bienlogo.png') ?>"
                                                 style="width: 100px;">
                                        </div>
                                    </div>
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
                                            <a class="nav-link  active " aria-current="page" href="orders_for_offer"><p class="text-dark"><b>Assessment</b></p></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link   " aria-current="page" href="rejected_offer"><p class="text-dark"><b>Rejected Offer</b></p></a>
                                        </li>
                                    </ul>
                                    <div class="table ">
                                        <table class="display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Collection Name</th>
                                                <th scope="col">Color</th>
                                                <th scope="col">Price</th>
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
                                                <td><?= $orders[$i]['color'] ?> </td>
                                                <td><?= $orders[$i]['price'] ?></td>
                                                <td>
                                                    <button value="<?= $orders[$i]['productId'] ?>" name="reduce" id="1"
                                                            data-id="<?= $orders[$i]['productId'] ?>" type="submit"
                                                            CLASS="btn-danger px-2 subtractorder"
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
                                    <!-- /# column -->
                                </div>
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
        $.post("<?= customer_url('orders_for_offer') ?>", {
            addorder: id,
        }, function (result) {
        })
    });
    $('.subtractorder').click(function (e) {
        var $row = $(this).parents('tr');
        var id = $row.find('input[name="id"]').val();
        var quantity=$row.find('input[name="quantity"]').val();
        $row.find('input[name="quantity"]').val(parseInt(quantity)-1);
        $.post("<?= customer_url('orders_for_offer') ?>", {
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
        $.post("<?= customer_url('orders_for_offer') ?>", {
            deleteorder: id,
        }, function () {
                $row.remove();
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('#rejectedcostlist').DataTable({
            searching: false;
            paging: false;
        });
    });
</script>

</body>
</html>



