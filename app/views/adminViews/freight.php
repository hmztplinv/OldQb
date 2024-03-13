<?php require 'mainPageAdmin/header_admin.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2> FREIGHTS   </h2>

                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link    active  " aria-current="page" href="freight"><p class="text-dark"><b>Freight</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="aporved_shipping"><p class="text-dark"><b>Approved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link    " aria-current="page" href="unaporved_shipping"><p class="text-dark"><b>Unaproved Shipping</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="delivered_shipping"><p class="text-dark"><b>Delivered Shipping</b></p></a>
                                    </li>
                                </ul>
                                <div class="table-responsive mt-3">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">id</th>
                                            <th class="text-custom text-center">Customer Name</th>
                                            <th class="text-custom text-center">Country</th>
                                            <th class="text-custom text-center">Real Firm</th>
                                            <th class="text-custom text-center">Booking No</th>
                                            <th class="text-custom text-center">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($sentoffers as $sentoffer):?>
                                            <tr>
                                                <td align="center"><?=$sentoffer['id']?></td>
                                                <td align="center"><?=$sentoffer['companyName']?></td>
                                                <td align="center"><?=$sentoffer['countryName']?></td>
                                                <td align="center"><?=$sentoffer['realFirm']?></td>
                                                <td align="center"><?=$sentoffer['bookingNo']?></td>
                                                <td align="center"><?=$sentoffer['navlunSoldPrice']?></td>
                                            </tr>
                                        <?php endforeach;?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <?php require 'mainPageAdmin/footer_admin.php'?>
                    <script>

                        $(document).ready(function() {
                            $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [
                                    {

                                        extend: 'excelHtml5',
                                        title: 'Sent_freights'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'Sent_freights',
                                        orientation: 'landscape',
                                        pageSize: 'LEGAL'
                                    },
                                    'copy',  'print',
                                ]
                            } );
                        } );

                    </script>

                    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
                    </body>

                    </html>
