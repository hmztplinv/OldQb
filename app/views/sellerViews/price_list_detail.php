<?php require 'mainPageSeller/header_seller.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="invoice-wrapper rounded border bg-white py-5 px-3 px-md-4 px-lg-5 animate__animated animate__fadeInLeft">
                            <div class="d-flex justify-content-between">
                                <h2 class="text-dark font-weight-medium">Fatura #2365546</h2>

                                <div class="btn-group">

                                    <button class="btn btn-sm btn-secondary" id="btn1" onclick="window.print()">
                                        <i class="mdi mdi-printer"></i> Yazdır
                                    </button>
                                </div>
                            </div>

                            <div class="row pt-4 yazdir" id="bolum1">
                                <div class="col-xl-2 col-lg-2">
                                    <p class="text-dark mb-2">From</p>

                                    <address>
                                        Şirket Adı
                                        <br> 47 Holmes Green, Sophiebury, WP9M 3ZZ
                                        <br> E-Posta: example@gmail.com
                                        <br> Telefon: +91 5264 251 325
                                    </address>
                                </div>

                                <div class="col-xl-2 col-lg-2">
                                    <p class="text-dark mb-2">To</p>

                                    <address>
                                        Company Name
                                        <br> 58 Jamie Ways, North Faye, Q5 5ZP
                                        <br> Email: example@gmail.com
                                        <br> Phone: +91 5264 521 943
                                    </address>
                                </div>

                                <div class="col-xl-2 col-lg-2">
                                    <p class="text-dark mb-2">Details</p>

                                    <address>
                                        Fatura ID:
                                        <span class="text-dark">#2365546</span>
                                        <br> March 25, 2018
                                        <br> KDV: PL6541215450
                                    </address>
                                </div>
                            </div>

                            <div class="table-responsive yazdir" id="bolum1">
                                <table class="table table-striped ">
                                    <thead>
                                    <tr>
                                        <th>Fatura No</th>
                                        <th>Ürün</th>
                                        <th>Açıklama</th>
                                        <th>Miktar</th>
                                        <th>Birim Maliyet</th>
                                        <th>Toplam</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>#1</td>
                                        <td>Platinum Support</td>
                                        <td>1 year subcription 24/7</td>
                                        <td>1</td>
                                        <td>$3.999,00</td>
                                        <td>$3.999,00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row justify-content-end yazdir" id="bolum1">
                                <div class="col-lg-6 col-xl-6 col-xl-6 mr-sm-auto">
                                    <ul class="list-unstyled mt-4">
                                        <li class="mid pb-3 text-dark"> Ara Toplam
                                            <span class="d-inline-block float-right">$7.897,00</span>
                                        </li>

                                        <li class="mid pb-3 text-dark">KDV(10%)
                                            <span class="d-inline-block float-right">$789,70</span>
                                        </li>

                                        <li class="pb-3 text-dark">Toplam
                                            <span class="d-inline-block float-right">$8.686,70</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button type="button" class="btn mt-5 btn-lg btn-primary btn-pill" id="sweet" style="background-color: #0a4966; color: white">Faturayı Onayla</button>

                        </div>

                        <!-- /# card -->
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <?php require 'mainPageSeller/footer_seller.php'; ?>
                    <script>
                        document.querySelector("#sweet").onclick = function () {
                            swal("Fatura Onaylandı !!", "", "success");
                        };
                    </script>
