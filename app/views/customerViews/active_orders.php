<?php require 'mainPageCustomer/header_customer.php'; ?>


        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                <h2>Aktif Siparişlerim</h2>
                            </div>

                            <div class="card-body">
                                <div class="expendable-data-table" style="overflow-x:auto;">
                                    <table id="expendable-data-table"  class="table display nowrap bg-light-gray" cellspacing="0" width="100%">
                                        <thead style="text-align: center;" class="bg-success">
                                        <tr>
                                            <th></th>
                                            <th>Ürün Kodu</th>
                                            <th>Ürün Adı</th>
                                            <th>Cins</th>
                                            <th>Ebat</th>
                                            <th>Kalınlık</th>
                                            <th>Yüzey</th>
                                            <th>Renk</th>
                                            <th>Kalite</th>
                                            <th>Birim</th>
                                            <th>Fiyat</th>
                                            <th>Durumu</th>
                                        </tr>
                                        </thead>

                                        <tfoot style="text-align: center; color: black;" class="bg-success">
                                        <tr>
                                            <th></th>
                                            <th>Ürün Kodu</th>
                                            <th>Ürün Adı</th>
                                            <th>Cins</th>
                                            <th>Ebat</th>
                                            <th>Kalınlık</th>
                                            <th>Yüzey</th>
                                            <th>Renk</th>
                                            <th>Kalite</th>
                                            <th>Birim</th>
                                            <th>Fiyat</th>
                                            <th>Durumu</th>
                                        </tr>
                                        </tfoot>

                                        <?php

                                        for($i=0;$i<count($productsfeatures);$i++):
                                        ?>
                                        <tbody class="bg-light-gray">
                                        <tr>
                                            <td class="details-control"></td>
                                            <td><?= $productsfeatures[$i]['id']?></td>
                                            <td><?= $productsfeatures[$i]['collection']?></td>
                                            <td><?= $productsfeatures[$i]['applicationarea']  ?></td>
                                            <td><?= $productsfeatures[$i]['size']  ?></td>
                                            <td><?= $productsfeatures[$i]['thickness']  ?></td>
                                            <td><?= $productsfeatures[$i]['surface']  ?></td>
                                            <td><?= $productsfeatures[$i]['color']  ?></td>
                                            <td ><?= $productsfeatures[$i]['quality'] == 1 ? " 1. Kalite" : "Endüstriyel" ?></td>
                                            <?php if($productsfeatures[$i]['measure'] == 0): ?>
                                                <td >m2</td>
                                            <?php elseif($productsfeatures[$i]['measure'] == 1): ?>
                                                <td >Adet</td>
                                            <?php elseif($productsfeatures[$i]['measure'] == 2): ?>
                                                <td>Kutu</td>
                                            <?php else: ?>
                                                <td >Palet</td>
                                            <?php endif; ?>
                                            <td><?= $productsfeatures[$i]['price']  ?></td>
                                            <td><?= $productsfeatures[$i]['status']  ?></td>
                                        </tr>
                                        <?php endfor;?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require 'mainPageCustomer/footer_customer.php'; ?>

<script>
    $(document).ready(function() {

        var table = $('#expendable-data-table').DataTable( {

            className:      details-control,
            pageLength: 20,
            dom: '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
        });

        // Add event listener for opening and closing details
        $('#expendable-data-table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        });



    });
</script>

</body>
</html>

