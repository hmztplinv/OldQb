<?php require 'mainPageCustomer/header_customer.php'; ?>


<!-- ====================================
——— CONTENT WRAPPER
===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                <h2>Sipariş Takip</h2>
                            </div>

                            <div class="card-body" >
                                <div class="expendable-data-table">
                                    <table id="" class="table display nowrap" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Sipariş Kodu</th>
                                            <th>Sipariş adı</th>
                                            <th>Konteynır</th>
                                            <th>Taşıyıcı Firma</th>
                                            <th>Yükleme Şekli</th>
                                            <th>Sipariş Tutarı</th>
                                            <th>Satış Temsilcisi</th>
                                            <th>Çıkış Noktası</th>
                                            <th>Varış Noktası</th>
                                            <th>Koordinat</th>
                                            <th>Tahmini Varış</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td><span class="mdi mdi-cart-plus"></span></td>
                                            <td>G015</td>
                                            <td>60X60 Sg Luna Ash 1.</td>
                                            <td>20' DRY CONTAINER</td>
                                            <td>Arkas Shipment</td>
                                            <td>FOB</td>
                                            <td>$ 100.459,00</td>
                                            <th>Enes Demirel</th>
                                            <th>İzmir</th>
                                            <th>VALENCIA</th>
                                            <th>40° 05' 26.7" N, 002° 24' 37.4" E</th>
                                            <th>05/11/2022</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="text-align: center;">
                                    <img src=" <?= public_url('images/shipment.png') ?>"width="1050px" >

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <?php require 'mainPageCustomer/footer_customer.php'; ?>
            <script  src="<?= public_url('plugins/toastr/toastr.min.js') ?>"></script>

</body>
</html>

