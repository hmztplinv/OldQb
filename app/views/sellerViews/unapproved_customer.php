<?php require 'mainPageSeller/header_seller.php'; ?>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
<form action="<?=seller_url('unapproved-customer')?>" method="POST" >
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                <h2>Onay Bekleyen Siparişler</h2>
                            </div>

                            <div class="card-body" >
                                <div class="expendable-data-table">
                                    <table id="expendable-data-table" class="table display nowrap" cellspacing="0" width="100%">
                                        <thead class="bg-success">
                                        <tr>
                                            <th></th>
                                            <th>Firmanın Tam Ünvanı</th>
                                            <th>Adresi</th>
                                            <th>Telefon No</th>
                                            <th>Vergi No / T.C No</th>
                                            <th>E-Posta</th>
                                            <th class="text-center">Durumu</th>
                                        </tr>
                                        </thead>

                                        <tbody class="bg-light-gray">
                                        <?php

                                        for($i=0;$i<count($unapprovedorders);$i++):
                                        ?>
                                        <tr>
                                            <td class="details-control"></td>
                                            <td><?= $unapprovedorders[$i]['companyName']?></td>
                                            <td><?= $unapprovedorders[$i]['address']?></td>
                                            <td><?= $unapprovedorders[$i]['phone']?></td>
                                            <td><?= $unapprovedorders[$i]['taxNumber']?></td>
                                            <td><?= $unapprovedorders[$i]['email']?></td>
                                            <td>Onay Bekleyen
                                                    <button id="1" value="<?= $unapprovedorders[$i]['orderId']?>" typle="submit" name="save"  class="btn btn-success btn-default btn-sm" >
                                                       SİPARİŞİ ONAYLA
                                                    </button>
                                            </td>
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
</form>



            <?php require 'mainPageSeller/footer_seller.php'; ?>

</body>
</html>
