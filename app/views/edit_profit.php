<?php require 'mainPageSeller/header_seller.php'; ?>

<body class="ltr main-body leftmenu">

<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">

    <?php require 'mainPageSeller/sidebar_seller.php'; ?>
    <form id="myForm" action="<?=seller_url('customer_detail').'?id='.get('id')?>" method="POST">

        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="main-container container-fluid">
                <div class="inner-body">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Customer Details</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="customers">Customers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer Details</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Page Header -->



                    <!-- First Row -->
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-header custom-card-header">
                                    <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0"><?=$customer['companyName']?> Profit</h5>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-lg-6" style="padding: 13px">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-location-pin"></i>
                                            </span>
                                                <input value="<?=isset($customer)? $customer['address']:''?>" name="address" class="form-control" id="address" placeholder="Address" type="text">
                                            </div>
                                        </div>


                                        <div class="col-lg-6 col-6 row ml-1">
                                            <div class="col-lg-12 col-6 row ml-1 d-flex">
                                                <div class="col-lg-5" style="padding: 13px !important;">
                                                    <label style="margin-bottom: 0;">Production Program to be shown?</label><br>
                                                    <div class="flex-row d-flex">
                                                        <label class="rdiobox">
                                                            <input <?=$customer['isProductionShown']==1 ? ' checked' : ''?> id="option8" name="isProductionShown" value="1" type="radio">
                                                            <span class="me-2">Yes</span>
                                                        </label>
                                                        <label class="rdiobox">
                                                            <input <?=$customer['isProductionShown']==2 ? ' checked' : ''?> id="option9" name="isProductionShown" value="2" type="radio">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7" style="padding: 13px !important; float: right">
                                                    <label style="margin-bottom: 0;">Is this the new client ?</label><br>
                                                    <div class="flex-row d-flex">
                                                        <label class="rdiobox">
                                                            <input <?=$customer['isNew']==1 ? ' checked' : ''?> id="option1" name="isNew" type="radio" value="1">
                                                            <span class="me-2">Yes</span>
                                                        </label>
                                                        <label class="rdiobox">
                                                            <input <?=$customer['isNew']==2 ? ' checked' : ''?> id="option2" name="isNew" type="radio" value="2">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="row row-sm">
                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0">
                                                <select required id="countryname" name="countryName" class="form-control select select2">
                                                    <?php
                                                    for($i=0;$i<count($countries);$i++):
                                                        ?>
                                                        <option <?= isset($customer) ? $customer['countryName']==$countries[$i]['countryName'] ? ' Selected ':'':''?> ><?=$countries[$i]['countryName']?></option>
                                                    <?php endfor;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-mobile"></i>
                                            </span>
                                                <input value="<?= isset($customer['phone']) ? $customer['phone'] : '' ?>" name="phone" class="form-control" id="phone" placeholder="Phone No" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-save-alt"></i>
                                            </span>
                                                <input value="<?=isset($customer)?$customer['faxNumber']:''?>" class="form-control" id="faxNumber" placeholder="Fax Number" name="faxNumber" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-email"></i>
                                            </span>
                                                <input value="<?= isset($customer['email']) ? $customer['email'] : '' ?>" class="form-control" name="email" id="email" placeholder="E-Mail" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-user"></i>
                                            </span>
                                                <input value="<?= isset($customer['uname']) ? $customer['uname'] : '' ?>" required id="uname" name="uname" placeholder="Contact Person Name Surname" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-pencil"></i>
                                            </span>
                                                <input value="<?=isset($customer)?$customer['taxAdministration']:''?>" id="taxAdministration" name="taxAdministration" placeholder="Tax Office" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-sm">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text border-end-0"> <i class="ti ti-id-badge"></i> </span>
                                                <input value="<?=isset($customer)?$customer['taxNumber']:''?>" id="taxNumber" name="taxNumber" class="form-control" placeholder="Registration Number/Tax NO / T.C. No" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-bookmark-alt"></i>
                                            </span>
                                                <input value="<?=isset($customer)?$customer['bankName']:'' ?>" name="bankName" id="bankName" placeholder="Bank Name" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-sm">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-bookmark-alt"></i>
                                            </span>
                                                <input value="<?=isset($customer)?$customer['bankBranchName']:''?>"  id="bankBranchName" name="bankBranchName" placeholder="Bank Branch Name" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-credit-card"></i>
                                            </span>
                                                <input value="<?=isset($customer)?$customer['ibanNumber']:''?>" id="ibanNumber" name="ibanNumber"  data-mask="9999 9999 9999 9999" maxlength="19" placeholder="IBAN No" class="form-control" type="text" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-sm">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-email"></i>
                                            </span>
                                                <input value="<?= isset($customer)?$customer['postCode']:''?>" id="postCode" name="postCode" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-control" placeholder="Post Code" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0">
                                                <select id="currency" name="currency" class="form-control select select2" required>
                                                    <?php if (!isset($customer)): ?>
                                                        <option value="" disabled selected >Pick a Currency Type</option>
                                                    <?php endif;?>
                                                    <option <?= isset($customer)?$customer['currency']=='USD'? ' Selected ':'':''?>>USD</option>
                                                    <option <?= isset($customer)?$customer['currency']=='EUR'? ' Selected ':'':''?>>EUR</option>
                                                    <option <?= isset($customer)?$customer['currency']=='GBP'? ' Selected ':'':''?>>GBP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-sm">
                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0">
                                                <select id="transportType" name="transportType" required class="form-control select select2">
                                                    <?php if (!isset($customer)): ?>
                                                        <option value="" disabled selected >Pick a Transport Type</option>
                                                    <?php endif;?>
                                                    <option value="FOB" <?= isset($customer)? $customer['transportType']=='FOB'? ' Selected ':'':''?> >FOB - Free on Board</option>
                                                    <option value="EXW" <?= isset($customer)? $customer['transportType']=='EXW'? ' Selected ':'':''?> >EXW - Exworks</option>
                                                    <option value="FOT" <?= isset($customer)? $customer['transportType']=='FOT'? ' Selected ':'':''?> >FOT - To the Port</option>
                                                    <option value="DAP" <?= isset($customer)? $customer['transportType']=='DAP'? ' Selected ':'':''?> >DAP - Delivered Duty Paid</option>
                                                    <option value="DDP" <?= isset($customer)? $customer['transportType']=='DDP'? ' Selected ':'':''?> >DDP - Delivered at Place</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0">
                                                <select id="exporter" name="exporter" title="Exporter" required class="form-control select select2">
                                                    <option <?= isset($customer)? $customer['exporter']=='' || $customer['exporter']==NULL ? ' Selected ':'':''?> value="">Exporter</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='Tile Space Inc.'? ' Selected ':'':''?> value="Tile Space Inc.">Tile Space Inc.</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='Tile Space Limited'? ' Selected ':'':''?> value="Tile Space Limited">Tile Space Limited</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='QUA TRADING'? ' Selected ':'':''?> value="QUA TRADING">QUA TRADING</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='QUA GRANITE'? ' Selected ':'':''?> value="QUA GRANITE">QUA GRANITE</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='BIEN TRADING'? ' Selected ':'':''?> value="BIEN TRADING">BIEN TRADING</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='Bien Yapı'? ' Selected ':'':''?> value="Bien Yapı">Bien Yapı</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='Demireks GmbH'? ' Selected ':'':''?> value="Demireks GmbH">Demireks GmbH</option>
                                                    <option <?= isset($customer)? $customer['exporter']=='Majorca'? ' Selected ':'':''?> value="Majorca">Majorca</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0 mt-3">
                                                <select id="marketType" required name="marketType" class="form-control select select2">
                                                    <?php if (!isset($customer)): ?>
                                                        <option value="" disabled Selected>Pick a Market</option>
                                                    <?php endif;?>
                                                    <option value="1" <?= isset($customer) ? $customer['marketType']==1? ' Selected ':'':''?> >QUA</option>
                                                    <option value="2" <?= isset($customer) ? $customer['marketType']==2? ' Selected ':'':''?> >BIEN</option>
                                                    <option value="3" <?= isset($customer) ? $customer['marketType']==3? ' Selected ':'':''?> >QUA&BIEN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Content-->
    </form>
    <?php require 'mainPageSeller/footer_seller.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?= @returned($message); ?>



