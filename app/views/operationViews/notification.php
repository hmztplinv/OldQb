<?php require 'mainPageOperation/header_operation.php'; ?>

<!-- Main Content-->

<body class="ltr main-body leftmenu">



<!-- Page -->
<div class="page">

    <?php require 'mainPageOperation/sidebar_operation.php'; ?>

<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Notifications.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Notifications</li>
                    </ol>
                </div>
            </div>

            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto overflow-hidden">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Notifications</h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="notificationtable" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">Make As Read</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Sender</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($notifications as $notification):?>
                                    <tr>
                                        <th scope="row"><a href="<?=operation_url('notification?id='.$notification['notificationId'])?>" ><i class="fa-solid fa-check"></i> Mark As Seen</a> </th>
                                        <td><?=$notification['message']?></td>
                                        <td><?=$notification['senderName']?></td>
                                        <td><?=date("Y/m/d H:i:s", strtotime($notification['createdAt']))?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


                    <!-- /# column -->



                    <?php require 'mainPageOperation/footer_operation.php'; ?>
                    <script>
                        $(document).ready(function() {
                            $('#notificationtable').DataTable( {
                                responsive: {
                                    details: false
                                }
                            });
                        });

                    </script>



