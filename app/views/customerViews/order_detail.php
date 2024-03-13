<?php require 'mainPageCustomer/header_customer.php'?>
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Order Details</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Order</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Order Details
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>

                                            <th class="text-custom text-center">Product ID</th>
                                            <th class="text-custom text-center">Pallet Quantity</th>
                                            <th class="text-custom text-center">Price</th>
                                            <th class="text-custom text-center">Type</th>
                                            <th class="text-custom text-center">Collection</th>
                                            <th class="text-custom text-center">Color</th>
                                            <th class="text-custom text-center">Name</th>
                                            <th class="text-custom text-center">Size</th>

                                            <th class="text-custom text-center">Total M2</th>
                                            <th class="text-custom text-center">Total Price</th>
                                            <th class="text-custom text-center">Status</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($order as $navlun):
                                           $sa= products::get_product_by_just_id($navlun['productId']);
                                            $price=Order::get_product_by_api($navlun['productId'],$sa['currency'],$sa['product_origin']);
                                           ?>



                                            <tr>
                                                  <td align="center"><?=$navlun['productId']?></td>
                                                  <td align="center"><?=$navlun['quantity']?></td>
                                                  <td align="center"><?=number_format($navlun['price'],2)?></td>
                                                  <td align="center"><?=$navlun['cins']?></td>
                                                  <td align="center"><a href="<?= 'product_detail?id='.$navlun["productId"].'&currency='.$navlun["currency"].'&origin='.$sa["product_origin"]?>"><?=$navlun['collection']?></a> </td>
                                                  <td align="center"><?=$navlun['color']?></td>
                                                <td align="center"><?=$navlun['name']?></td>
                                                <td align="center"><?=$navlun['size']?></td>
                                                <td align="center"><?=$navlun['quantity']*number_format($price['totalquan'],2)?></td>
                                                <td align="center"><?=(number_format($price['totalquan'],2)*number_format($navlun['price'],2))*$navlun['quantity']?></td>

                                                <td ><?php if($navlun['orderStatus']==1){
                                                        echo "Order created, waiting for offer";
                                                    }
                                                    else if($navlun['orderStatus']==2  && $navlun['offerStatus']==1 ){
                                                        echo "Proposal is being prepared";
                                                    }
                                                    else if($navlun['orderStatus']==3){
                                                        echo "Offer sent, customer approved";
                                                    }
                                                    else if($navlun['orderStatus']==2 && $navlun['offerStatus']==3){
                                                        echo "Offer sent, customer rejected and waiting for new offer";
                                                    }
                                                    else if($navlun['orderStatus']==4){
                                                        echo "Commertional and proformam sent to customer";
                                                    }
                                                    else if($navlun['orderStatus']==5){
                                                        echo "Freight established, awaiting approval ";
                                                    }
                                                    else if($navlun['orderStatus']==6){
                                                        echo "Freight Offer Confirmed by customer Waiting for Booking No";
                                                    }
                                                    else if($navlun['orderStatus']==7){
                                                        echo "Freight Offer Rejected";
                                                    }
                                                    else if($navlun['orderStatus']==8){
                                                        echo "Booking No entered.";
                                                        echo Order::get_booking_no_by_order_id($navlun['orderId']);
                                                    }
                                                    else if($navlun['orderStatus']==9){
                                                        echo "Order not yet shipped";
                                                    }
                                                    else if($navlun['orderStatus']==10){
                                                        echo "On the Road";
                                                    }
                                                    else if($navlun['orderStatus']==11){
                                                        echo "Reached Port";
                                                    }
                                                    else if($navlun['orderStatus']==12){
                                                        echo "Invoice Issued";
                                                    }
                                                    ?></td>

                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    <form action="<?= customer_url('order_detail') ?>" method="post" target="_blank">
                                        <button class="btn btn-primary" value="<?= get('date') ?>" name="purchase">Purchase Order</button>
                                    </form>

                                </div>
                                <?php if (!empty($order[0]['departureDate'])):?>
                                <div class="row" style="font-size: 24px;font-family: bold">
                                    <div class="col-6">
                                        <label>Deparuter Date</label><br>
                                        <input readonly type="text" class="input-group-text" value="<?php echo date("Y-m-d", strtotime($order[0]['departureDate'])); ?>">
                                        <label>Booking No</label><br>
                                        <input readonly type="text" class="input-group-text" value="<?php echo $order[0]['bookingNo']; ?>">

                                    </div>
                                    <div class="col-6"  >
                                        <label>Arrival Date</label>
                                        <br>
                                        <input readonly type="text" class="input-group-text" value="<?php echo date("Y-m-d", strtotime($order[0]['arrivalDate'])); ?>">
                                    </div>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'mainPageCustomer/footer_customer.php'?>
<script>
    var example=$('#example').DataTable({
        pageLength: 10,
        dom: 'Bfrtip',

        buttons: [{

            extend: 'excelHtml5',
            title: 'All_Orders'
        },
            {
                extend: 'pdfHtml5',
                title: 'All_Orders'},
            'copy',     'print'
        ]
    });
</script>
