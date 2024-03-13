<?php require 'mainPageOperation/header_operation.php'?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>ACTIVE FREIGHTS   </h2>

                            </div>
                            <div class="p-5 mt-5">
                                <ul class="nav nav-tabs  ">
                                    <a class="nav-link  " aria-current="page" href="navlun"><p class="text-dark"><b>Offer Freights</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="navlun_active"><p class="text-dark"><b>Active Freights</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="renavlun"><p class="text-dark"><b>Re Offer Freights</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="navlun_booking"><p class="text-dark"><b>Wait for Booking</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="navlun_send"><p class="text-dark"><b>Sent Freights</b></p></a>
                                    </li>
                                </ul>
                                <form action="<?=operation_url('navlun_active')?>" method="POST">
                                <div class="table-responsive mt-3 ">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Customer Name</th>
                                            <th class="text-custom text-center">Phone</th>
                                            <th class="text-custom text-center">E-mail</th>
                                            <th class="text-custom text-center">Address</th>
                                            <th class="text-custom text-center">Tax Number</th>
                                            <th class="text-custom text-center">Country</th>
                                            <th class="text-custom text-center">Select</th>
                                            <th class="text-custom text-center">Freight</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <?php foreach ($customers as $customer):?>
                                            <tr>
                                                <td align="center"><?=$customer['companyName']?></td>
                                                <td align="center"><?=$customer['phone']?></td>
                                                <td align="center"><?=$customer['email']?></td>
                                                <td align="center"><?=$customer['address']?></td>
                                                <td align="center"><?=$customer['taxNumber']?></td>
                                                <td align="center"><?=$customer['countryName']?></td>
                                                <td>
                                                    <button name="approve" type="submit" value="<?=$customer['navlunId']?>" id="1" class="btn btn-outline-primary" style="background-color: #0a4966; color: white">Approve</button>
                                                </td>
                                                <td  >
                                                    <button name="approve" type="submit" value="<?=$customer['navlunId']?>" id="1" class="btn btn-outline-primary" style="background-color: #0a4966; color: white"><a href="https://qbdigitals.com/operation/navlun_pdf">View Freight</a></button>
                                                    <button name="approve" type="submit" value="<?=$customer['navlunId']?>" id="1" class="btn btn-outline-primary" style="background-color: #0a4966; color: white"><a href="https://qbdigitals.com/operation/navlun_pdf">Sent Freight</a></button>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>

                                        </tbody>
                                    </table>
                                </div>
                                </form>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <?php require 'mainPageOperation/footer_operation.php'?>
                    <script>

                        $(document).ready(function() {
                            $('#example').DataTable( {
                                dom: 'Bfrtip',
                                buttons: [
                                    {
                                        extend: 'excelHtml5',
                                        title: 'Active_Freights'
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        title: 'Active_Freights',

                                        orientation: 'landscape',
                                        pageSize: 'LEGAL'
                                    },
                                    'copy', 'print',
                                ]
                            } );
                        } );

                    </script>

                    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
                    </body>

                    </html>
