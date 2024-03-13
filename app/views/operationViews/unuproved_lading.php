<?php require 'mainPageSeller/header_seller.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Onaylanmamış Yüklemeler</h2>
                            </div>

                            <div class="p-5 mt-5">
                                <div style="    border: 1px;
                                border-style: solid;
                                border-radius: 5px;
                                margin-bottom: 5px;
                                border-color: #00000026;" class="row">
                                    <div class="col-sm-3 mb-2">
                                        Firma
                                        <select id="firma" class="selectpicker form-control" data-live-search=true name="firma">
                                            <option value="01" selected>01</option>
                                            <option value="06" selected>06</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        Belge Tipi
                                        <select id="belgetipi" class="selectpicker form-control" data-live-search=true name="belgetipi">
                                            <option value="T3" selected>T3</option>
                                            <option value="S3" selected>S3</option>
                                            <option value="PK" selected>PK</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        Belge No
                                        <select id="belgeno" class="selectpicker form-control" data-live-search=true name="belgeno">
                                            <option value="00023933" selected>00023933</option>
                                            <option value="00039598" selected>00039598</option>
                                            <option value="00032345" selected>00032345</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">

                                        <button style="margin-top:27px" id="search" type="submit" name="insertproductform" class="btn btn-outline-secondary btn-sm"><b>Search</b></button>

                                    </div>


                                </div>
                                <ul class="nav nav-tabs">
                                    <a class="nav-link active" aria-current="page" href=""><p class="text-dark"><b>Teklif</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href=""><p class="text-dark"><b>Sipariş</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href=""><p class="text-dark"><b>İrsaliye</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href=""><p class="text-dark"><b>Fatura</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href=""><p class="text-dark"><b>İade Faturası</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href=""><p class="text-dark"><b>İptal Faturası</b></p></a>
                                    </li>
                                </ul>
                                <div class="table-responsive">
                                    <table id="rejectedcostlist" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Firma</th>
                                            <th class="text-custom text-center">BTipi</th>
                                            <th class="text-custom text-center">BNo</th>
                                            <th class="text-custom text-center">Müşteri</th>
                                            <th class="text-custom text-center">Müşteri Adı</th>
                                            <th class="text-custom text-center">Net Tutar(Kdv'li)</th>
                                            <th class="text-custom text-center">Net Tutar(Kdv'siz)</th>
                                            <th class="text-custom text-center">Para Birimi</th>
                                            <th class="text-custom text-center">Vade Gün</th>
                                            <th class="text-custom text-center">Vade</th>
                                            <th class="text-custom text-center">Mal Alıcısı</th>
                                            <th class="text-custom text-center">Onayla</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet2"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet3"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet4"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet5"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet6"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet7"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet8"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet9"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet10"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet11"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet12"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet13"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet14"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet15"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet16"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet17"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">30X60</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet18"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">01</td>
                                            <td align="center">T3</td>
                                            <td align="center">30X60 IMPERIAL GREY DECOR</td>
                                            <td align="center">DEKOR</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">BIEN/STANDART</td>
                                            <td align="center">304,00</td>
                                            <td align="center">STANDART</td>
                                            <td align="center">0,00</td>
                                            <td align="center">304,00</td>
                                            <td align="center">1.KALİTE</td>
                                            <td align="center">
                                                <button class="btn btn-primary btn-sm btn-flat btn-addon" id="sweet19"><i class="ti-truck"></i>ONAYLA</button>
                                            </td>
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
                                    {
                                        extend: 'pdfHtml5',
                                        orientation: 'landscape',
                                        pageSize: 'LEGAL'
                                    },
                                    'copy', 'excel', 'print', 'csv'
                                ]
                            } );
                        } );
                    </script>
                    <script>
                        document.querySelector("#sweet").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet2").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet3").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet4").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet5").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet6").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet7").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet8").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet9").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet10").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet11").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet12").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet13").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet14").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet15").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet16").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet17").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet18").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                        document.querySelector("#sweet19").onclick = function () {
                            swal("Yükleme Onaylandı !!", "", "success");
                        };
                    </script>
                    </body>
                    </html>
