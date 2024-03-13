<?php require 'mainPageAdmin/header_admin.php'?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header card-header-border-bottom bg-white mt-5">
                                <h2>DHL Status İnquiry</h2>
                            </div>
                            <div class=" p-1">
                                <ul class="nav nav-tabs ">
                                    <a class="nav-link      " aria-current="page" href="active_sales"><p class="text-dark"><b>Active Sales</b></p></a>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="all_receivables"><p class="text-dark"><b>All Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link    " aria-current="page" href="overdue"><p class="text-dark"><b>Overdue</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="unexpired"><p class="text-dark"><b>Unexpired</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " aria-current="page" href="paid_receivables"><p class="text-dark"><b>Paid Receivables</b></p></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active " aria-current="page" href="dhl"><p class="text-dark"><b>DHL</b></p></a>
                                    </li>
                                </ul>
                                <div class="form-group   embed-responsive">
                                    <label class="responsive text-center  font-weight-bold" style="margin-left: 20px;">Watch & Follow</label>
                                    <form action="<?=seller_url('dhl')?>" method="post">

                                        <div class="input-group-rounded ">
                                            <input type="text" placeholder="Enter the 10-digit code" name="dhlnumber" value="" class="btn-lg mt-4 w-30 responsive" style="margin-left: 20px;">
                                            <button  name="save" type="submit" id="1" value="1" class="btn btn-group-right text-white bg-secondary btn-lg btn-responsive w-20" style="margin-left: 40px;">
                                                Query
                                            </button>

                                        </div>
                                    </form>

                                </div>
                                <div class="table-responsive">
                                    <table id="rejectedcostlist" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">#</th>
                                            <th class="text-custom text-center">DHL No</th>
                                            <th class="text-custom text-center">Piece Code</th>
                                            <th class="text-custom text-center">Piece Count</th>
                                            <th class="text-custom text-center">Last Location</th>
                                            <th class="text-custom text-center">Description</th>
                                            <th class="text-custom text-center">Last Updated</th>
                                            <th class="text-custom text-center">Created Date</th>
                                            <th class="text-custom text-center">Origin Address</th>
                                            <th class="text-custom text-center">Destination Address</th>
                                            <th class="text-custom text-center">Estimated Time Of Delivery</th>
                                            <th class="text-custom text-center">Estimated Time Of Delivery Remark</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($alldhls as $alldhl):?>
                                            <tr>
                                                <td class="text-center"><a href="https://qbdigitals.com/operation/dhl_detail?dhlnumber=<?=$alldhl['dhlNumber']?>"><i class="fa fa-search"></i></a> </td>
                                                <td class="text-center"><?=$alldhl['dhlNumber']?></td>
                                                <td class="text-center"><?=$alldhl['pieceId']?></td>
                                                <td class="text-center"><?=$alldhl['pieceCount']?></td>
                                                <td class="text-center"><?=$alldhl['lastUpdatedLocation']?></td>
                                                <td class="text-center"><?=$alldhl['lastUpdatedDescription']?></td>
                                                <td class="text-center"><?=$alldhl['lastUpdateDate']?></td>
                                                <td class="text-center"><?=$alldhl['createdDate']?></td>
                                                <td class="text-center"><?=$alldhl['originAddress']?></td>
                                                <td class="text-center"><?=$alldhl['destinationAddress']?></td>
                                                <td class="text-center"><?=$alldhl['estimatedTimeOfDelivery']?></td>
                                                <td class="text-center"><?=$alldhl['estimatedTimeOfDeliveryRemark']?></td>

                                            </tr>
                                        <?endforeach;?>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <?php require 'mainPageAdmin/footer_admin.php'?>
                <script>
                    $(document).ready(function() {
                        $('#rejectedcostlist').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                {
                                    extend: 'excelHtml5',
                                    title: 'Dhl'
                                },
                                {
                                    extend: 'pdfHtml5',
                                    title: 'Dhl',
                                    orientation: 'landscape'}, 'copy', 'print'
                            ],
                            responsive: {
                                details: false
                            }
                        });
                    });
                </script>
                <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                </body>

                </html>
