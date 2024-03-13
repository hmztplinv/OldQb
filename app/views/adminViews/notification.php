<?php require 'mainPageAdmin/header_admin.php'; ?>

<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Products.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">QUA Products</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Notifications
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-header border-bottom-0">
                            <div class="main-content-label text-center"></div>
                        </div>
                        <div class="card-body">
                            <table id="notificationtable" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">Make As Read</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Sender</th>
                                    <th scope="col">Receiver</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($allnotifications as $notification): ?>
                                    <tr>
                                        <th scope="row"><a href="<?=admin_url('notification?id='.$notification['notificationId'])?>" ><i class="fa-solid fa-check"></i> Mark As Seen</a> </th>
                                        <td><?=$notification['message']?></td>
                                        <td><?=$notification['senderUserName']?></td>
                                        <td><?=$notification['receiverUserName']?></td>
                                        <td style="text-align: left" ><?=date("Y/m/d H:i:s", strtotime($notification['createdAt']))?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /# column -->


<?php require 'mainPageAdmin/footer_Admin.php'; ?>
<script>
$(document).ready(function() {
    $('#notificationtable').DataTable( {
        dom: 'Bfrtip',
        responsive: {
            details: false
        }
    });
});
</script>
</body>
</html>



