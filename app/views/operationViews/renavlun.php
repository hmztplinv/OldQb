<?php require 'mainPageOperation/header_operation.php'?>
<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->
<!-- Page -->
<div class="page">
    <?php require 'mainPageOperation/sidebar_operation.php'?>

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Rejected Freights</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rejected Freights</li>
                        </ol>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Rejected Freights
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover dataTable key-buttons text-nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">#</th>
                                            <th class="text-custom text-center">Seller Name</th>
                                            <th class="text-custom text-center">Real Firm</th>
                                            <th class="text-custom text-center">Company Name</th>
                                            <th class="text-custom text-center">Shipping Type</th>
                                            <th class="text-custom text-center">Navlun Sold Price</th>
                                            <th class="text-custom text-center">Currency</th>
                                            <th class="text-custom text-center">ExecutiveName</th>
                                            <th class="text-custom text-center">Country Name</th>
                                            <th class="text-custom text-center">Address</th>
                                            <th class="text-custom text-center">User Name</th>
                                            <th class="text-custom text-center">E-mail</th>
                                            <th class="text-custom text-center">Navlun Id</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($rejecktednaluns as $navlun):?>
                                            <tr>
                                                <td align="center">
                                                    <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                        <a href="freight_update?id=<?=$navlun['navlunId']?>"><i class="ti ti-search text-primary"></i></a>
                                                    </span>
                                                </td>
                                                <td align="center"><?=$navlun['sellerName']?></td>
                                                <td align="center"><?=$navlun['realFirm']?></td>
                                                <td align="center"><?=$navlun['companyName']?></td>
                                                <td align="center"><?=$navlun['shippingType']?></td>
                                                <td align="center"><?=$navlun['navlunSoldPrice']?></td>
                                                <td align="center"><?=$navlun['currency']?></td>
                                                <td align="center"><?=$navlun['executiveName']?></td>
                                                <td align="center"><?=$navlun['countryName']?></td>
                                                <td align="center"><?=$navlun['address']?></td>
                                                <td align="center"><?=$navlun['uname']?></td>
                                                <td align="center"><?=$navlun['email']?></td>
                                                <td align="center"><?=$navlun['navlunId']?></td>

                                            </tr>
                                        <?php endforeach;?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
        </div>
    </div>
    </div>
<?php require 'mainPageOperation/footer_operation.php'?>
                <script>
    $(document).ready(function() {
        $('#example').DataTable( {

    order: [12 , 'desc'],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'ReOffer_Freights'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'ReOffer_Freights',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                },
                'copy', 'print',
            ],

        });
    });
</script>


