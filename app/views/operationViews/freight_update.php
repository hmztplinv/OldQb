<?php require 'mainPageOperation/header_operation.php'?>
<style>
    .offercardcollors{
        background: #2D4356;
    }
</style>
<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->
<!-- Page -->
<div class="page">
<?php require 'mainPageOperation/sidebar_operation.php'?>
    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Offer
                            Freights Details.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Freight Update</li>
                        </ol>
                    </div>
                </div>



                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Order List
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="<?=operation_url('freight_update')?>" method="post">
                                    <button class="btn btn-primary" name="accept" value="<?=get('id')?>">Create Proforma</button>
                                </form>
                                <form action="<?=operation_url('freight_update').'?id='.$navlun['id']?><?php if(get('booking')) echo "&booking=1"?>" method="post" class="ml-5 mt-3">
                                    <input hidden name="companyId" value="<?=get('customerId')?>">
                                    <div class="table-responsive  ">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th   class="text-custom text-center">Order Id</th>
                                                <th class="text-custom text-center">Product Id</th>
                                                <th class="text-custom text-center">Product Name</th>
                                                <th class="text-custom text-center">Size</th>

                                                <th class="text-custom text-center">Thickness</th>
                                                <th class="text-custom text-center">Quality</th>
                                                <th class="text-custom text-center">Product Price</th>
                                                <th class="text-custom text-center">Pallet/m2</th>
                                                <th class="text-custom text-center" style="width: 13%">Pallet Pcs</th>
                                                <th class="text-custom text-center">Total M2</th>

                                                <th class="text-custom text-center">Total Price</th>
                                            </tr>
                                            </thead>
                                            <?php  $totalm2=0;
                                            $containercount=0;?>
                                            <?php foreach ($orders as $order): ?>

                                                <?php   $price=Order::get_product_by_api($order['productId'],$order['currency'],$order['product_origin']);
                                                ?>

                                                <tr>
                                                    <td align="center"><?=$order['orderId']?> <input hidden value="<?=$order['orderId']?>" name="orderId[]"></td>
                                                    <td align="center"><?=$order['productId']?></td>
                                                    <td align="center"><?=$order['collection']?></td>
                                                    <td align="center"><?=$order['size']?></td>

                                                    <td align="center"><?=$order['thickness']?></td>
                                                    <td align="center"><?=$order['quality']?></td>
                                                    <td align="center"><?= number_format(round($order['productPrice'], 2), 2) ?></td>

                                                    <td align="center"><?= number_format(round($price['totalquan'], 2), 2) . ' m2' ?></td>

                                                    <td align="center">
                                                        <input value="<?=$order['quantity']?>" type="text" class="form-control quantity" style="" name="quantity">
                                                    </td>  <?php $totalm2=$totalm2+number_format(number_format($order['quantity'],2)*number_format($order['totalquan'],2),2)?>
                                                    <?php $containercount=$containercount+$order['quantity']?>
                                                    <td align="center"><?=number_format($order['quantity'],2)*number_format($order['totalquan'],2).' m2'?></td>
                                                      <td align="center"><?=number_format(number_format(number_format($order['totalquan'], 2)*number_format($order['productPrice'], 2),2)*$order['quantity'],2)?></td>

                                                </tr>
                                            <?php endforeach;?>
                                        </table>
                                    </div>

                                    <div class="d-flex justify-content-around  my-3">
                                        <div  class=" col-lg-4 rounded mx-1 offercardcollors">
                                            <h1 class="text-white text-center">Total M2</h1>
                                            <p id="totalSqm" style="font-size: 2em" class="text-center text-white"><?=$totalm2?> m2</p>
                                        </div>

                                        <div class="col-lg-4 rounded mx-1 offercardcollors">
                                            <h1 class="text-white text-center">Container</h1>
                                            <p id="totalPcs" style="font-size: 2em" class="text-center text-white"><?= $navlun['containerQuantity'] ?> </p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">

                                        </div>
                                    </div>

        <div class="row mt-3">

            <div class="col-6 col-md-6">
                <div class="form-group rounded">
                    <label >Field Manager</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input value="<?= $navlun['executiveName'] ?>" disabled name="fieldManagerName" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Real Firm</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">

                        <input value="<?= $navlun['realFirm'] ?>"  name="realFirm" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Company Name</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input value="<?= $navlun['companyName'] ?>" disabled  name="companyName" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>

                <?php if(get('booking')):?>
                <div class="form-group rounded">
                    <label >Booking No</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input  value="<?= $navlun['bookingNo'] ?>" name="bookingNo" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <?php endif;?>

                <div class="form-group rounded">
                    <label >Currency Unit</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <select style="height: 40px" value="" name="currency" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <option <?php if($navlun['shippingType']=='USD') echo ' selected '; ?>>USD</option>
                            <option <?php if($navlun['shippingType']=='EUR') echo ' selected '; ?>>EUR</option>
                            <option <?php if($navlun['shippingType']=='GBP') echo ' selected '; ?>>GBP</option>
                        </select>
                    </div>
                </div>
                <div <?=$navlun['rejected']==null ? ' hidden ' : ''?> class="form-group rounded">
                    <label >Reason for Rejection </label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled value="<?=Navlun::get_reason_of_rejection_by_id($navlun['rejected'])?>">
                    </div>
                </div>
                <div class=" form-group rounded" style="margin-top: 55px">
                    <select id="portType" required   class="form-control" name="portType" autocomplete="off">
                        <option value="" disabled >Pick a Port</option>
                        <?php foreach ($ports as $port):?>
                            <option value="<?=$port['id']?>" <?= isset($navlun) ? $navlun['portType']==$port['id']? ' Selected ':'':''?> ><?=$port['name']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class=" form-group rounded" style="margin-top: 55px">

                    <button type="submit" name="reoffer" value="1" id="1" class="btn btn-primary btn-rounded " style="width: 100px"><?php if(get('booking')) echo 'Update BNo'; else echo 'Reoffer';?></button>

                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-group rounded">
                    <label >Container Quantity</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input id="containerQuantityInput"  value="<?= $navlun['containerQuantity'] ?>" name="containerQuantity" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" oninput="updateTotalPcs()">
                    </div>

                </div>
                <div class="form-group rounded">
                    <label >Shipping Type</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <select name="shippingType" class="form-control" style="height: 40px">
                            <option <?php if($navlun['shippingType']=='EXW') echo ' selected '; ?> >EXW</option>
                            <option <?php if($navlun['shippingType']=='FOB') echo ' selected '; ?> >FOB</option>
                            <option <?php if($navlun['shippingType']=='FOT') echo ' selected '; ?> >FOT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Navlun Price</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input value="<?= $navlun['navlunPrice'] ?>" id="navlunPrice" name="navlunPrice" type="text" class="form-control navlun" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Amount Sold</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input value="<?=$navlun['navlunSoldPrice']?>" id="navlunSoldPrice" name="navlunSoldPrice" type="text" class="form-control navlun" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Total Profitabil</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <input value="<?=$navlun['navlunProfit']?>" id="navlunProfit" name="navlunProfit" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>

            </div>

        </div>
    </form>

</div>
<?php require 'mainPageOperation/footer_operation.php'?>

<script>
        $('#example').DataTable({
            searching:false,
            dom: 'Bfrtip',
            paging: false,
            buttons: [
                'excel', 'pdf','copy','print'
            ],
            responsive: {
                details: true
            }
    });
</script>

<script>
    $('.navlun').on('input',function(e){
        $('#navlunProfit').val($('#navlunSoldPrice').val()-$('#navlunPrice').val());
    });
</script>
                            <script>
    function updateTotalPcs() {
        var containerQuantity = document.getElementById('containerQuantityInput').value;
        document.getElementById('totalPcs').innerText = containerQuantity;
    }
</script>
                            <script>
                                $(document).ready(function() {
                                    $(".quantity").on("input", function() {
                                        // Yalnızca sayıları bırak
                                        $(this).val(function(_, value) {
                                            return value.replace(/[^\d]/g, '');
                                        });
                                    });
                                });
                            </script>