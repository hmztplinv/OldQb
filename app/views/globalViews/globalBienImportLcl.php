<?php require 'GlobalPageOperation/header_operation.php' ?>
<style>
    .nav-tabs .btn {
        margin-left: auto;
    }
</style>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>BIEN IMPORT LCL </h2>

                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs animate__animated animate__fadeInDown">
                                    <a class="nav-link  " aria-current="page" href="globalQuaImport"><p class="text-dark"><b> Qua IMPORT 20 DC</q></b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="globalQuaImportLcl"><p class="text-dark"><b>QUA IMPORT LCL</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="globalBienImport"><p class="text-dark"><b>BIEN IMPORT 20 DC</b></p></a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a class="nav-link active" aria-current="page" href="globalBienImportLcl"><p class="text-dark"><b>BIEN IMPORT LCL</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="globalQtileImport"><p class="text-dark"><b>QTILE IMPORT 20 DC</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="globalQtileImportLcl"><p class="text-dark"><b>QTILE IMPORT LCL</b></p></a>
                                    </li>
                                </ul>
                                <div class="table-responsive animate__animated animate__fadeInLeft">
                                    <table id="rejectedcostlist" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom" style="font-size: 10px;">REFERANS</th>
                                            <th class="text-custom" style="font-size: 10px;">DATE</th>
                                            <th class="text-custom" style="font-size: 10px;">SHIPPER</th>
                                            <th class="text-custom" style="font-size: 10px;">COUNTRY</th>
                                            <th class="text-custom" style="font-size: 10px;">ZIP CODE</th>
                                            <th class="text-custom" style="font-size: 10px;">TERM</th>
                                            <th class="text-custom" style="font-size: 10px;">LCL DETAILS</th>
                                            <th class="text-custom" style="font-size: 10px;">GROOS WEIGHT</th>
                                            <th class="text-custom" style="font-size: 10px;">TRANSPORTER</th>
                                            <th class="text-custom" style="font-size: 10px;">T.T.</th>
                                            <th class="text-custom" style="font-size: 10px;">NAVLUN ALIS</th>
                                            <th class="text-custom" style="font-size: 10px;">CURR.</th>
                                            <th class="text-custom" style="font-size: 10px;">IC NAKLIYE</th>
                                            <th class="text-custom" style="font-size: 10px;">YURT DISI GUMRUKLEME</th>
                                            <th class="text-custom" style="font-size: 10px;">GECERLILIK</th>
                                            <th class="text-custom" style="font-size: 10px;">NAVLUN SATIS</th>
                                            <th class="text-custom" style="font-size: 10px;">CURR.</th>
                                            <th class="text-custom" style="font-size: 10px;">IC NAKLIYE SATIS</th>
                                            <th class="text-custom" style="font-size: 10px;">KARLILIK</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($todolist as $todo):?>
                                            <tr>
                                                <td style="font-size: 10px;"><?=$todo['productPlaning']?></td>
                                                <td style="font-size: 10px;"><?=$todo['customerNotification']?></td>
                                                <td style="font-size: 10px;"><?=$todo['customsInstruction']?></td>
                                                <td style="font-size: 10px;"><?=$todo['doesProformaTook']?></td>
                                                <td style="font-size: 10px;"><?=$todo['payment']?></td>
                                                <td style="font-size: 10px;"><?=$todo['productionNotification']?></td>
                                                <td style="font-size: 10px;"><?=$todo['warehouseControl']?></td>
                                                <td style="font-size: 10px;"><?=$todo['customerNotification']?></td>
                                                <td style="font-size: 10px;"><?=$todo['informCustomer']?></td>
                                                <td style="font-size: 10px;"><?=$todo['reservationConfirmation']?></td>
                                                <td style="font-size: 10px;"><?=$todo['doesShipmentInfoShared']?></td>
                                                <td style="font-size: 10px;"><?=$todo['factoryNotification']?></td>
                                                <td style="font-size: 10px;"><?=$todo['billOfLading']?></td>
                                                <td style="font-size: 10px;"><?=$todo['customsInstruction']?></td>
                                                <td style="font-size: 10px;"><?=$todo['circulationDocumentation']?></td>
                                                <td style="font-size: 10px;"><?=$todo['loadingDocumentationSharingWithCustomer']?></td>
                                                <td style="font-size: 10px;"><?=$todo['ydgProcess']?></td>
                                                <td style="font-size: 10px;"><?=$todo['container']?></td>
                                                <td style="font-size: 10px;"><?=$todo['paymentInAccount']?></td>



                                            </tr>
                                        <?endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <?php require 'GlobalPageOperation/footer_operation.php' ?>
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
                    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
                    </body>

                    </html>
