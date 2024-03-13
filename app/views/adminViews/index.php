<?php require 'mainPageAdmin/header_admin.php'; ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">QBDigitals'a Hoş Geldiniz.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->


                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-order ">
                                    <label class="main-content-label mb-3 pt-1">Completed Shipping</label>
                                    <h2 class="text-end card-item-icon card-icon">
                                        <i
                                                class="mdi mdi-briefcase-check icon-size float-start text-primary"></i><span
                                                class="font-weight-bold"><?=count($countshipping) ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-order">
                                    <label class="main-content-label mb-3 pt-1">Unaproved Shipping</label>
                                    <h2 class="text-end"><i
                                                class="mdi mdi-clipboard-alert icon-size float-start text-primary"></i><span
                                                class="font-weight-bold"><?=count($countunapproved)?></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-order">
                                    <label class="main-content-label mb-3 pt-1">Pending Freights</label>
                                    <h2 class="text-end"><i
                                                class="icon-size mdi mdi-cart  float-start text-primary"></i><span
                                                class="font-weight-bold"><?=count($countpendingfreight)?></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Freight
                                    Gainfulness</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="freight-bien" name="freight-bien" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Bien Seller
                                                </option>
                                                <option>Bien Seller 1</option>
                                                <option>Bien Seller 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="freight-qua" name="freight-qua" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Qua Seller
                                                </option>
                                                <option>Qua Seller 1</option>
                                                <option>Qua Seller 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="ht-200 ht-sm-300" id="flotBar2"></div>
                            </div>
                            <div class="card-footer">
                                <a href="freight.html">Freight PROFITABILITY REPORT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Goals</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="goals-bien" name="freight-bien" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Bien Seller
                                                </option>
                                                <option>Bien Seller 1</option>
                                                <option>Bien Seller 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select id="goals-qua" name="freight-qua" value="0"
                                                    class="form-control select2">
                                                <option disabled selected value="0">
                                                    Qua Seller
                                                </option>
                                                <option>Qua Seller 1</option>
                                                <option>Qua Seller 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="ht-300 ht-sm-250" id="flotBar1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Unexpired
                                    Receivables</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover key-buttons text-nowrap w-100"
                                           id="UnexpiredReceivables">
                                        <thead class="text-center">
                                        <tr>
                                            <th>Company</th>
                                            <th>Date</th>
                                            <th>Explanation</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <tr class="border-bottom">
                                            <td>21</td>
                                            <td>Antalya(TR)</td>
                                            <td>2023/01/02</td>
                                            <td>Shanghai(CN)</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>21</td>
                                            <td>Antalya(TR)</td>
                                            <td>2023/01/02</td>
                                            <td>Shanghai(CN) </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>21</td>
                                            <td>Antalya(TR)</td>
                                            <td>2023/01/02</td>
                                            <td>Shanghai(CN) </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Production
                                    Program</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example" class="display " style="width:100%">
                                    <thead>


                                    <tr>
                                        <th class="text-custom text-center" style="background-color:white;color: #0a4966">Start Date</th>
                                        <th class="text-custom text-center" style="background-color:white;color: #0a4966">End Date</th>
                                        <th class="text-custom text-center" style="background-color:white;color: #0a4966">Code</th>
                                        <th class="text-custom text-center" style="background-color:white;color: #0a4966">Description</th>
                                        <th class="text-custom text-center" style="background-color:white;color: #0a4966">Product Code</th>
                                        <th class="text-custom text-center" style="background-color:white;color: #0a4966">Product Name</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($productionprogram as $program): ?>
                                        <tr>
                                            <td align="center"><?=date("d-m-Y", strtotime($program['start_date']))?></td>
                                            <td align="center"><?=date("d-m-Y", strtotime($program['finish_date']))?></td>
                                            <td align="center"><?=$program['production_code']?></td>
                                            <td align="center"><?=$program['description']?></td>
                                            <td align="center"><?=$program['product_code']?></td>
                                            <td align="center"><?=$program['product_name']?></td>
                                        </tr>
                                    <? endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Row End -->

                <!-- row -->
<!--                <div class="row row-sm">-->
<!--                    <div class="col-md-12 col-lg-12 col-xl-12">-->
<!--                        <div class="card custom-card transcation-crypto">-->
<!--                            <div class="card-header custom-card-header">-->
<!--                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Sale Follow-->
<!--                                </h5>-->
<!--                                <div class="card-options">-->
<!--                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i-->
<!--                                                class="fe fe-chevron-up"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <div class="table-responsive">-->
<!--                                    <div class="table-responsive">-->
<!--                                        <table id="example" class="display" style="width:100%">-->
<!--                                            <thead>-->
<!--                                            <tr>-->
<!--                                                <th class="text-custom text-center">Product Name </th>-->
<!--                                                <th class="text-custom text-center">Surface </th>-->
<!--                                                <th class="text-custom text-center">Size</th>-->
<!--                                                <th class="text-custom text-center">Thickness </th>-->
<!--                                                <th class="text-custom text-center">Surface</th>-->
<!--                                                <th class="text-custom text-center">Color</th>-->
<!--                                                <th class="text-custom text-center">Quality</th>-->
<!--                                            </tr>-->
<!--                                            </thead>-->
<!--                                            <tbody>-->
<!--                                            --><?php //foreach($approvedorders as $approvedorder):?>
<!--                                                <tr>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['name']?><!--</td>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['surface']?><!--</td>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['size']?><!--</td>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['thickness']?><!--</td>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['surface']?><!--</td>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['color']?><!--</td>-->
<!--                                                    <td align="center">--><?php //=$approvedorder['quality']?><!--</td>-->
<!--                                                </tr>-->
<!--                                            --><?php //endforeach;?>
<!--                                            </tbody>-->
<!--                                        </table>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- Row End -->

            </div>
        </div>
    </div>
    <!-- End Main Content-->

<?php require 'mainPageAdmin/footer_admin.php'; ?>
<script>

    $(document).ready(function() {
        $('#example,#1').DataTable( {

            scrollX: '300px',
            scrollY: '600px',
            scrollCollapse: true,
            searching:false,
            paging:false,
            fixedColumns:   {
                left: 1,
                right: 1
            },

        });
    });
</script>
