<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
    <form action="<?= customer_url('cart') ?>" method="POST" >
        <div class="main">
            <div class="container-fluid mb-5">
                <section id="main-content">
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card animate__animated animate__fadeInLeft">
                                <div class="card-header card-header-border-bottom bg-white">
                                    <h2>Tüm Siparişlerim</h2>
                                </div>
                                <div class="p-5 mt-5">
                                    <h3>Qua</h3>
                                    <div class="table-responsive">
                                        <table id="rejectedcostlist" class="display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Koleksiyon</th>
                                                <th scope="col">Renk</th>
                                                <th scope="col">Fiyat</th>
                                                <th scope="col">Adet</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            for($i=0;$i<count($carts);$i++):
                                            ?>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><?= $i+1?></th>
                                                <td ><?= $carts[$i]['collection']?></td>
                                                <td ><?= $carts[$i]['color']?> </td>
                                                <td  ><?= $carts[$i]['price']?></td>
                                                <td >
                                                    <button value="<?= $carts[$i]['productId']?>" name="reduce" id="1" data-id="<?= $carts[$i]['productId']?>" type="submit" CLASS="btn-danger px-2" style="border-radius: 10px">
                                                        -
                                                    </button>
                                                    <span class="mx-2" >
                    <?= $carts[$i]['quantity']?>
                </span>
                                                    <button value="<?= $carts[$i]['productId']?>" name="add" id="2" data-id="<?= $carts[$i]['productId']?>" type="submit" CLASS="btn-success px-2" style="border-radius: 10px">
                                                        +
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endfor; ?>
                                            </tbody>

                                        </table>

                                        <h3 class="mt-3">Bien</h3>
                                        <div class="table-responsive">
                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Koleksiyon</th>
                                                    <th scope="col">Renk</th>
                                                    <th scope="col">Fiyat</th>
                                                    <th scope="col">Adet</th>
                                                </tr>
                                                </thead>
                                                <?php
                                                for($i=0;$i<count($carts);$i++):
                                                ?>
                                                <tbody>
                                                <tr>
                                                    <th scope="row"><?= $i+1?></th>
                                                    <td ><?= $carts[$i]['collection']?></td>
                                                    <td ><?= $carts[$i]['color']?> </td>
                                                    <td  ><?= $carts[$i]['price']?></td>
                                                    <td >
                                                        <button value="<?= $carts[$i]['productId']?>" name="reduce" id="1" data-id="<?= $carts[$i]['productId']?>" type="submit" CLASS="btn-danger px-2" style="border-radius: 10px">
                                                            -
                                                        </button>
                                                        <span class="mx-2" >
                    <?= $carts[$i]['quantity']?>
                </span>
                                                        <button value="<?= $carts[$i]['productId']?>" name="add" id="2" data-id="<?= $carts[$i]['productId']?>" type="submit" CLASS="btn-success px-2" style="border-radius: 10px">
                                                            +
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php endfor; ?>
                                                </tbody>

                                            </table>

                                            <div <?= empty($carts) ? 'hidden' : ''?> class="col-sm-3 mb-2">
                                            Teslimat Türü
                                            <select id="deliveryType" class="selectpicker sm form-control" data-live-search=true name="deliveryType">
                                                <option selected>FOB</option>
                                                <option >EXC</option>
                                            </select>

                                        </div>
                                        <button <?= empty($carts) ? 'hidden' : ''?> name="order" value="1" type="submit"  type="button" class="btn btn-primary btn-lg btn-flat btn-addon " style="float: right"><i class="ti-check"></i>Sipariş Ver</button>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
    </form>

</div>


<?php require 'mainPageCustomer/footer_customer.php'; ?>
<script>
    $(document).ready(function() {
        $('#rejectedcostlist','example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'copy', 'print'
            ],
            responsive: {
                details: false
            }
        });
    });
</script>
<?= @returned($message) ?>

</body>
</html>



