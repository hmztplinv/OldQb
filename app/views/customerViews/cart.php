<?php require 'mainPageCustomer/header_customer.php'; ?>

<style>
    .handle-counter input{
        width: 35px!important;
    }
</style>
<!-- Main Content-->
<div class="main-content side-content pt-0">
    <form  id="myForm" method="post" action="<?=customer_url('cart')?>" >
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">My Cart</h2>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12 col-xl-10 col-md-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <h5 class="mb-3 font-weight-bold tx-14">Shopping cart</h5>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="rejectedcostlist" class="table border table-bordered table-hover text-nowrap table-shopping-cart mb-0" style="font-size: 12px;">
                                    <thead class="text-muted">
                                    <tr  >
                                        <th scope="col">#</th>
                                        <th scope="col" style="text-align: center">Collection Name</th>
                                        <th scope="col" style="text-align: center">Sqm</th>
                                        <th scope="col" style="text-align: center">Unit Price</th>
                                        <th scope="col" style="text-align: center">Pallet Price</th>
                                        <th scope="col"   style="text-align: center" >Total SQM</th>
                                        <th scope="col" style="text-align: center">Total Price</th>
                                        <th scope="col" style="text-align: center">Pallet Pcs</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($customer['marketType']==3){
                                        $carts=Order::get_carts_market_3_by_userid(session('user_id'));
                                    }
                                    else{
                                        $carts=Order::get_carts_by_userid(session('user_id'));
                                    }?>

                                    <?php for($i=0;$i<count($carts);$i++): ?>
<?php $profit=Customer::get_profit($customer['userId']);
                                        $product=Products::get_product_detail($carts[$i]['productId'], $carts[$i]['currency'], $carts[$i]['product_origin']);
                                        $newprofit = [];

                                        foreach ($profit as $profit) {
                                            if ($profit["genus_name"] == $carts[$i]['cins']) {
                                                $profit_price = $profit["profit"];
                                            }
                                        }

                                        ?>
                                        <?php   $price=Order::get_product_by_api($carts[$i]['productId'],$carts[$i]['currency'],$carts[$i]['product_origin']);

                                        $rawPrice = number_format($price['price1'] + ($price['price1'] * $profit_price / 100), 2) + $price['fobStationFactor'];

                                        $roundedPrice = round($rawPrice, 2); // İlk olarak, sayıyı normal şekilde yuvarla

                                        if ($customer['round'] == 1) {
                                            // Yukarı yuvarlama işlemi (ceil) burada 0.05 eklenerek yapılıyor
                                            $roundedPrice = ceil($roundedPrice / 0.05) * 0.05;
                                        } elseif ($customer['round'] == 2) {
                                            // Aşağı yuvarlama işlemi (floor) burada 0.05 çıkartılarak yapılıyor
                                            $roundedPrice = floor($roundedPrice / 0.05) * 0.05;
                                        }
                                        ?>
                                    <tr>
                                        <input name="product[]" value="<?=$carts[$i]['cardId']?>" hidden>
                                        <input name="price[]" value="<?=$roundedPrice?>" hidden>
                                        <td style="width: 10px;"><input name="id" value="<?=$carts[$i]['productId']?>" hidden > <?= $i+1?></td>
                                        <td style="width: 50px;">
                                            <div class="media">
                                                <div class="media-body my-auto">
                                                    <div class="card-item-desc mt-0">
                                                        <h6 class="font-weight-semibold mt-0 text-uppercase"><a href="<?= 'product_detail?id='.$carts[$i]["productId"].'&currency='.$carts[$i]["currency"].'&origin='.$carts[$i]["product_origin"]?>"> <?= $carts[$i]['collection']?></h6></a>
                                                        <dl class="card-item-desc-1">
                                                            <dt>Color: </dt>
                                                            <dd><?= $price['renk']?></dd>
                                                            <br>
                                                            <dt>Size:</dt>
                                                            <dd><?= $carts[$i]['size']?></dd>
                                                            <br>
                                                            <dt>Type:</dt>
                                                            <dd><?= $carts[$i]['cins']?></dd>
                                                            <br>
                                                            <dt>Tickness</dt>
                                                            <dd><?= $carts[$i]['thickness']?></dd>
                                                            <br>
                                                            <dt>Quality</dt>
                                                            <dd><?= $carts[$i]['quality']?></dd>
                                                            <br>
                                                            <dt>Process:</dt>
                                                            <dd><?= $carts[$i]['reclap']?></dd>
                                                            <br>
                                                            <dt>Finish:</dt>
                                                            <dd><?= $carts[$i]['matParlak']?></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 20px;">
                                            <?= number_format($price['totalquan'],2)?>
                                        </td>
                                        <?php


                                        echo '<td class="text-center" style="width: 20px;">' . number_format($roundedPrice, 2) . '</td>';
                                        ?>

                                        <td class="text-center" style="width: 20px;">
                                            <?=number_format(number_format($price['totalquan'],2)*number_format($roundedPrice,2),2)?>
                                         </td>
                                        <td style="width: 20px;" >
                                            <?=number_format($price['totalquan'],2)*number_format($carts[$i]['quantity'],2)?>
                                        </td>
                                        <td class="text-center" style="width: 25px;">
                                            <?=number_format(number_format(number_format($price['totalquan'],2)*number_format($roundedPrice,2),2)*$carts[$i]['quantity'],2)?>

                                        </td>
                                        <td style="width: 15px;">
                                            <div class="handle-counter" id="handleCounter">
                                                <button value="<?= $carts[$i]['productId']?>" data-sqm=" <?=number_format($price['totalquan'],2)?>" data-id="<?= $carts[$i]['productId']?>" data-packageprice="<?=number_format(number_format($price['totalquan'],2)*number_format($roundedPrice,2),2)?>" type="button" class="counter-minus btn btn-light subtractorder">-</button>
                                                <input name="quantity" class="quantityInput" type="text" data-sqm=" <?=number_format($price['totalquan'],2)?>" value="<?=$carts[$i]['quantity']?>" data-id="<?= $carts[$i]['productId']?>" data-packageprice="<?=number_format(number_format($price['totalquan'],2)*number_format($roundedPrice,2),2)?>">
                                                <button value="<?= $carts[$i]['productId']?>" data-sqm=" <?=number_format($price['totalquan'],2)?>" data-id="<?= $carts[$i]['productId']?>" data-packageprice="          <?=number_format(number_format($price['totalquan'],2)*number_format($roundedPrice,2),2)?>" type="button" class="counter-plus btn btn-light addorder">+</button>
                                            </div>
                                        </td>

                                    </tr>
                                    <?php endfor;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-2 col-md-12 ">

                    <div class="card custom-card cart-details">
                        <div class="card-body  " >
                            <h5 class="mb-3 font-weight-bold tx-14">PRICE DETAIL</h5>
                            <dl class="dlist-align">
                                <dt class="">Total Sqm</dt>
                                <dd class="text-end ms-auto"><span id="totalSqm" ></span> M2</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total Pallet Pcs:	</dt>
                                <dd class="text-end text-danger ms-auto"><span id="totalPcs" ></span></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-end ms-auto"><span id="totalPrice" ></span> <?=$customercurrency['currency']?></dd>
                            </dl>
                            <hr>
                            <div class="step-footer">
                                <button <?= empty($carts) ? 'hidden' : ''?> type="button" id="confirmBtn" class="btn btn-success btn-block">Order Now</button>
                                <button hidden name="order" value="1"  type="submit" id="confirmBtn" class="btn btn-primary btn-lg btn-flat btn-addon " style="background-color: #0a4966; float: right"><i class="ti-check"></i>ORDER NOW</button>
                            </div>
                            <button <?= empty($carts) ? 'hidden' : ''?> type="button" id="confirmBtn" class="mt-3 btn btn-success btn-block" onclick="goBack()">Keep Shopping</button>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->

        </div>
    </div>
    </form>
</div>
<!-- End Main Content-->

<?php require 'mainPageCustomer/footer_customer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('confirmBtn').addEventListener('click', function() {
        // SweetAlert ile confirm kutusu oluşturma
        Swal.fire({
            title: 'Are you sure?',
            text: 'Your order will be forwarded to your customer representatives.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            // Kullanıcı evet butonuna tıklarsa
            if (result.isConfirmed) {
                // Formu submit etmek için gizli submit düğmesine tıklama işlemi
                document.querySelector('#myForm button[type="submit"]').click();
                var newTab = window.open("<?=customer_url('index?proforma=1')?>", "_blank");
                newTab.focus();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        var total = 0;
        var totalSql = 0;
        var totalPcs = 0;

        $("#rejectedcostlist tbody tr").each(function() {
            var value = parseFloat($(this).find("td:eq(4)").text().replace(/[^0-9.-]+/g, ""));
            var sqm = parseFloat($(this).find("td:eq(2)").text().replace(/[^0-9.-]+/g, ""));
            //var quantity = parseFloat($("#handleCounter input[name='quantity']").val());
            var quantity = parseFloat($(this).find("td:eq(7) input[name='quantity']").val());
            total += (isNaN(value) ? 0 : value) * quantity;
            totalSql += (isNaN(sqm) ? 0 : sqm)*(isNaN(quantity) ? 0 : quantity);
            totalPcs += isNaN(quantity) ? 0 : quantity;
        });
        $("#totalPrice").text(total.toFixed(2));
        $("#totalSqm").text(totalSql.toFixed(2));
        $("#totalPcs").text(totalPcs);
    });


    $('.addorder').click(function (e) {
        var $row = $(this).parents('tr');
        var id=$(this).attr('data-id');
        var packageprice = $(this).attr('data-packageprice');
        var sqm = $(this).attr('data-sqm');
        var priceTd = $(this).closest('td').prev('td');
        var sqmtd = $(this).closest('td').prev('td').prev('td');
        var quantity = $row.find('input[name="quantity"]').val();

        $row.find('input[name="quantity"]').val(parseInt(quantity)+1);

        priceTd.text(((parseInt(quantity)+1)*packageprice).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
        sqmtd.text(((parseInt(quantity)+1)*sqm).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
        $.post("<?= customer_url('cart') ?>", {
            addorder: id,
        }, function (result) {
        })
    });

    $('.subtractorder').click(function (e) {
        var $row = $(this).parents('tr');
        var id=$(this).attr('data-id');
        var packageprice=$(this).attr('data-packageprice');
        var sqm=$(this).attr('data-sqm');
        var priceTd = $(this).closest('td').prev('td');
        var sqmTd = $(this).closest('td').prev('td').prev('td');
        var quantity = $row.find('input[name="quantity"]').val();

        $row.find('input[name="quantity"]').val(parseInt(quantity)-1);
        priceTd.text(((parseInt(quantity)-1)*packageprice).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
        sqmTd.text(((parseInt(quantity)-1)*sqm).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
        var deletecontrol=$row.find('input[name="quantity"]').val();
        $.post("<?= customer_url('cart') ?>", {
            subtractorder: id,
        }, function (result) {
            if (deletecontrol=='0'){
                $row.remove();
            }
        })
    });


    $('.addorder , .subtractorder ').click(function (e) {
        var total = 0;
        var totalSql = 0;
        var totalPcs = 0;

        $("#rejectedcostlist tbody tr").each(function() {
            var value = parseFloat($(this).find("td:eq(4)").text().replace(/[^0-9.-]+/g, ""));
            var sqm = parseFloat($(this).find("td:eq(2)").text().replace(/[^0-9.-]+/g, ""));
            var quantity = parseFloat($(this).find("td:eq(7) input[name='quantity']").val());
            total += (isNaN(value) ? 0 : value) * quantity;
            totalSql += (isNaN(sqm) ? 0 : sqm) * (isNaN(quantity) ? 0 : quantity);
            totalPcs += isNaN(quantity) ? 0 : quantity;

        });

        $("#totalPrice").text(total.toFixed(2));
        $("#totalSqm").text(totalSql.toFixed(2));
        $("#totalPcs").text(totalPcs);
    })
    $('.quantityInput').on('input', function() {

        var total = 0;
        var totalSql = 0;
        var totalPcs = 0;
        var $row = $(this).parents('tr');
        var id=$(this).attr('data-id');
        var packageprice = $(this).attr('data-packageprice');
        var sqm = $(this).attr('data-sqm');
        var sqmTd =$(this).closest('td').prev('td').prev('td');
        var priceTd = $(this).closest('td').prev('td');
        var number = $row.find('input[name="quantity"]').val();
        var text=[id,number]

        priceTd.text((parseInt(number)*packageprice).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
        sqmTd.text((parseInt(number)*sqm).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));

        $.post("<?= customer_url('cart') ?>", {
            textarray: text,
        }, function (result) {
            //alert(result);
        })
        $("#rejectedcostlist tbody tr").each(function() {
            var value = parseFloat($(this).find("td:eq(4)").text().replace(/[^0-9.-]+/g, ""));
            var sqm = parseFloat($(this).find("td:eq(2)").text().replace(/[^0-9.-]+/g, ""));

            var quantity = parseFloat($(this).find("td:eq(7) input[name='quantity']").val());
            if (quantity=='0'){
                $row.remove();
            }


            total += (isNaN(value) ? 0 : value) * quantity;
            totalSql += (isNaN(sqm) ? 0 : sqm) * (isNaN(quantity) ? 0 : quantity);
            totalPcs += isNaN(quantity) ? 0 : quantity;
        });

        $("#totalPrice").text(total.toFixed(2));


        $("#totalSqm").text(totalSql.toFixed(2));
        $("#totalPcs").text(totalPcs);
      });
</script>

<script>
    $(document).ready(function() {
        $('#rejectedcostlist').DataTable( {
         searching:false;
            paging:false;
        });
    });
</script>

<script>
    window.open("<?php echo @$link; ?>", "_blank");
</script>
<script>
    document.cookie = "previousPage=" + document.referrer + "; path=/";
</script>
<script>
    function goBack() {
        // Önceki sayfanın URL'sini al
        const previousPage = document.referrer;

        // Eğer önceki sayfa new_order ise, o sayfaya yönlendir
        if (previousPage && previousPage.includes("/customer/new_order")) {
            window.location.href = previousPage;
        } else {
            // Eğer önceki sayfa new_order değilse, normal geri git
            window.location.href="https://www.qbdigitals.com/customer/new_order?page=1";
        }
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $(".quantityInput").on("input", function() {
            // Yalnızca sayıları bırak
            $(this).val(function(_, value) {
                return value.replace(/[^\d]/g, '');
            });
        });
    });
</script>
<?= @returned($message)?>

</body>
</html>



