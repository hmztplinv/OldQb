<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>My Deleted Orders</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <div style="    border: 1px;
                              border-style: solid;
                              border-radius: 5px;
                              margin-bottom: 5px;
                              border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true class="selectpicker form-control" name="" id="productNameSearch">
                                            <option selected disabled value="">Product Name</option>
                                            <?php foreach ($productName as $name): ?>
                                                <option value="<?= $name ?>"><?= $name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true class="selectpicker form-control" name="" id="productSizeSearch">
                                            <option selected disabled value="">Size</option>
                                            <?php foreach ($productOffer as $size): ?>
                                                <option value="<?= $size ?>"><?= $size ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-6">
                                        <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th scope="col">Collection Name</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Cart</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        for($i=0;$i<count($deletedcarts);$i++):
                                            ?>
                                            <tr>
                                                <td align="center"><?= $deletedcarts[$i]['collection']?></td>
                                                <td align="center"><?= $deletedcarts[$i]['color']==NULL ? 'no info':$deletedcarts[$i]['color']  ?></td>
                                                <td align="center"><button value="<?= $deletedcarts[$i]['productId']?>"  name="id" class="btn btn-primary subtractorder">Geri Al <i class="fa-solid fa-arrow-rotate-left"></i></button></td>

                                            </tr>
                                        <?php endfor;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                            <?php require 'mainPageCustomer/footer_customer.php'; ?>
                    <script>

                        var example=$('#example').DataTable({

                            scrollX: '200px',
                            scrollY: '500px',
                            pageLength: 50,
                            scrollCollapse: true,

                            dom: 'Bfrtip',

                            buttons: [{

                                extend: 'excelHtml5',
                                title: 'Cart Deleted'
                            },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'Cart Deleted'},
                                'copy',   'print'
                            ]

                        });

                    </script>
                    <script>

                        $('.subtractorder').click(function (e) {
                            var $row = $(this).parents('tr');
                            var id = $row.find('button[name="id"]').val();
                            $.post("<?=customer_url('cart_delete')?>", {
                                subtractorder: id,
                            }, function (result) {
                                $row.remove();
                            })
                        });
                    </script>


</body>
</html>



