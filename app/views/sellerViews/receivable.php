<?php require 'mainPageSeller/header_seller.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Alacak</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <div style="    border: 1px;
                                    border-style: solid;
                                    border-radius: 5px;
                                    margin-bottom: 5px;
                                    border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Firma
                                        <select id="company" class="selectpicker form-control" data-live-search=true name="company">
                                            <option value="" selected></option>
                                            <option value="" selected></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Ülke
                                        <select id="country" class="selectpicker form-control" data-live-search=true name="country">
                                            <option value="" selected></option>
                                            <option value="" selected></option>
                                            <option value="" selected></option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Müşteri
                                        <select id="customer" class="selectpicker form-control" data-live-search=true name="customer">
                                            <option value="" selected></option>
                                            <option value="" selected></option>
                                            <option value="" selected></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">

                                        <button style="margin-top:27px" id="search" type="submit" name="insertproductform" class="btn btn-outline-secondary btn-sm"><b>Search</b></button>

                                    </div>


                                </div>
                                <div class="table-responsive">
                                    <table id="rejectedcostlist" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Firma</th>
                                            <th class="text-custom text-center">Ülke</th>
                                            <th class="text-custom text-center">Müşteri</th>
                                            <th class="text-custom text-center">Limit Aşım</th>
                                            <th class="text-custom text-center">Temsilci</th>
                                            <th class="text-custom text-center">Müdür</th>
                                            <th class="text-custom text-center">Ödeme Tarihi</th>
                                            <th class="text-custom text-center">Açıklama</th>
                                            <th class="text-custom text-center">Açık Tutar</th>
                                            <th class="text-custom text-center">Vade Gün</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <?php require 'mainPageSeller/footer_seller.php'?>
                    <script>
                        $(document).ready(function() {
                            $('#rejectedcostlist').DataTable( {
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
                    </body>

                    </html>
