<?php require 'mainPageSeller/header_seller.php'; ?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Price List</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link  " aria-current="page" href="price_list"><p class="text-dark"><b>All Price List</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="approved_price_list"><p class="text-dark"><b>Approved Price List</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="unapproved_price_list"><p class="text-dark"><b>Unapproved Price List</b></p></a>
                                    </li>
                                </ul>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Collection Name</th>
                                            <th class="text-custom text-center">Offer</th>
                                            <th class="text-custom text-center">Order Quantity</th>
                                            <th class="text-custom text-center">Price</th>
                                            <th class="text-custom text-center">Bill</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($getpricelist as $item):?>
                                            <tr>
                                                <td align="center"><?=$item['collectionname']?></td>
                                                <td align="center"><?=$item['offer']?></td>
                                                <td align="center"><?=$item['quantity']?></td>
                                                <td align="center"><?=$item['price']?></td>

                                                <td>
                                                    <a href="<?=site_url('/seller/commercial_bien') ?>" target="_blank">
                                                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark" id="price_"style="background-color: #0a4966; color: white">Commercial Oluştur</button>
                                                    </a>
                                                    <!--
                                                <a href="<?=site_url('/seller/commercial_tilespace') ?>">
                                                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark" id="price_"style="background-color: #0a4966; color: white">Commercial Oluştur</button>
                                                </a>
                                                <a href="<?=site_url('/seller/commercial_bien') ?>">
                                                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark" id="price_"style="background-color: #0a4966; color: white">Commercial Oluştur</button>
                                                </a>

                                               -->
                                                    <a href="<?=site_url('/seller/proforma_bien') ?>" target="_blank"
                                                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark"id="price_"style="background-color: #0a4966; color: white">Proforma Oluştur</button>
                                                    </a>
                                                    <!--
                                                 <a href="<?=site_url('/seller/proforma_tilespace') ?>">
                                                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark"id="price_"style="background-color: #0a4966; color: white">Proforma Oluştur</button>
                                                </a>
                                                 <a href="<?=site_url('/seller/proforma_qua') ?>">
                                                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark"id="price_"style="background-color: #0a4966; color: white">Proforma Oluştur</button>
                                                </a>
                                                -->
                                                </td>
                                            </tr>

                                        <? endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <?php require 'mainPageSeller/footer_seller.php'; ?>
                    <script>

                        var example=   $('#example').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [{

                                extend: 'excelHtml5',
                                title: 'Approved_Price_List'
                            },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'Approved_Price_List'}, 'copy', 'print'
                            ],
                            responsive: {
                                details: false
                            }
                        });

                    </script>
                    <script>
                        function reset(){
                            document.getElementById("productNameSearch").options[0].selected="selected";
                            document.getElementById("productSizeSearch").options[0].selected="selected";
                            document.getElementById("productAreaSearch").options[0].selected="selected";

                            example.columns(0).search("").draw();
                            example.columns(1).search("").draw();
                            example.columns(2).search("").draw();
                        }
                        document.getElementById("productNameSearch").onchange=function () {
                            example.columns(0).search(document.getElementById("productNameSearch").value).draw();
                        }
                        document.getElementById("productSizeSearch").onchange=function () {
                            example.columns(1).search(document.getElementById("productSizeSearch").value).draw();
                        }
                        document.getElementById("productAreaSearch").onchange=function () {
                            example.columns(2).search(document.getElementById("productAreaSearch").value).draw();
                        }


                    </script>
                    </body>

                    </html>
