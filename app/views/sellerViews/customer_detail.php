<?php require 'mainPageSeller/header_seller.php'; ?>

<body class="ltr main-body leftmenu">

<!-- Loader -->
<div id="global-loader">
    <img src="<?= public_url('images/brand/qbdigitals.png') ?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">

    <?php require 'mainPageSeller/sidebar_seller.php'; ?>
    <form id="myForm" action="<?= seller_url('customer_detail') . '?id=' . get('id') ?>" method="POST">
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
                                    <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0"><?= $customer['companyName'] ?>
                                        Account Information</h5>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                    class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-lg-6 d-flex row">
                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0" id="basic-addon1">
                                                <i class="ti ti-credit-card"></i>
                                            </span>
                                                    <input aria-describedby="basic-addon1" aria-label="QUA Canias No"
                                                           name="customerNo" id="customerNo"
                                                           class="form-control" placeholder="QUA Canias No" type="text"
                                                           value="<?= isset($customer) ? $customer['ccustomerNo'] : '' ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-credit-card"></i>
                                            </span>
                                                    <input aria-label="BIEN Company No" placeholder="BIEN Canias No"
                                                           name="customerNoBien" id="customerNoBien"
                                                           class="form-control" type="text"
                                                           value="<?= isset($customer) ? $customer['ccustomerNoBien'] : '' ?>">
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <div class="mg-t-20 mg-sm-t-0">
                                                    <select id="marketCheck" name="marketT"
                                                            class="form-control select select2">
                                                        <option disabled Selected label="Pick a Market">Market</option>
                                                        <option value="1">QUA</option>
                                                        <option value="2">BIEN</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="input-group mb-3">
                                                    <button type="button" value="1" id="check"
                                                            class="btn ripple btn-main-primary btn-block">Check
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-sm">
                                        <div class="col-lg-6" style="padding: 13px">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-location-pin"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['address'] : '' ?>"
                                                       name="address" class="form-control" id="address"
                                                       placeholder="Address" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group  mt-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-credit-card"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['companyName'] : '' ?>"
                                                       id="companyName" class="form-control" placeholder="Company Name"
                                                       type="text" name="companyName" required>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row row-sm">

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-mobile"></i>
                                            </span>
                                                <input readonly
                                                       value="<?= isset($customer['phone']) ? $customer['phone'] : '' ?>"
                                                       name="phone" class="form-control" id="phone"
                                                       placeholder="Phone No" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-save-alt"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['faxNumber'] : '' ?>"
                                                       class="form-control" id="faxNumber" placeholder="Fax Number"
                                                       name="faxNumber" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-email"></i>
                                            </span>
                                                <input value="<?= isset($customer['email']) ? $customer['email'] : '' ?>"
                                                       class="form-control" name="email" id="email" placeholder="E-Mail"
                                                       type="text" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-user"></i>
                                            </span>
                                                <input value="<?= isset($customer['uname']) ? $customer['uname'] : '' ?>"
                                                       required id="uname" name="uname"
                                                       placeholder="Contact Person Name Surname" class="form-control"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-pencil"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['taxAdministration'] : '' ?>"
                                                       id="taxAdministration" name="taxAdministration"
                                                       placeholder="Tax Office" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text border-end-0"> <i
                                                            class="ti ti-id-badge"></i> </span>
                                                <input value="<?= isset($customer) ? $customer['taxNumber'] : '' ?>"
                                                       id="taxNumber" name="taxNumber" class="form-control"
                                                       placeholder="Registration Number/Tax NO / T.C. No" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-bookmark-alt"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['bankName'] : '' ?>"
                                                       name="bankName" id="bankName" placeholder="Bank Name"
                                                       class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-bookmark-alt"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['bankBranchName'] : '' ?>"
                                                       id="bankBranchName" name="bankBranchName"
                                                       placeholder="Bank Branch Name" class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-credit-card"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['ibanNumber'] : '' ?>"
                                                       id="ibanNumber" name="ibanNumber" data-mask="9999 9999 9999 9999"
                                                       maxlength="19" placeholder="IBAN No" class="form-control"
                                                       type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                            <span class="input-group-text border-end-0">
                                                <i class="ti ti-email"></i>
                                            </span>
                                                <input value="<?= isset($customer) ? $customer['postCode'] : '' ?>"
                                                       id="postCode" name="postCode" maxlength="10"
                                                       oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                       class="form-control" placeholder="Post Code" type="text">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row row-sm">


                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0">
                                                <select id="currency" name="currency"
                                                        class="form-control select select2" required>
                                                    <?php if (!isset($customer)): ?>
                                                        <option value="" disabled selected>Pick a Currency Type</option>
                                                    <?php endif; ?>
                                                    <option <?= isset($customer) ? $customer['currency'] == 'USD' ? ' Selected ' : '' : '' ?>>
                                                        USD
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['currency'] == 'EUR' ? ' Selected ' : '' : '' ?>>
                                                        EUR
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['currency'] == 'GBP' ? ' Selected ' : '' : '' ?>>
                                                        GBP
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['currency'] == 'TRY' ? ' Selected ' : '' : '' ?>>
                                                        TRY
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0">
                                                <select id="exporter" name="exporter" title="Exporter" required
                                                        class="form-control select select2">
                                                    <option <?= isset($customer) ? $customer['exporter'] == '' || $customer['exporter'] == NULL ? ' Selected ' : '' : '' ?>
                                                            value="">Exporter
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'Tile Space Inc.' ? ' Selected ' : '' : '' ?>
                                                            value="Tile Space Inc.">Tile Space Inc.
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'Tile Space Limited' ? ' Selected ' : '' : '' ?>
                                                            value="Tile Space Limited">Tile Space Limited
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'QUA TRADING' ? ' Selected ' : '' : '' ?>
                                                            value="QUA TRADING">QUA TRADING
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'QUA GRANITE' ? ' Selected ' : '' : '' ?>
                                                            value="QUA GRANITE">QUA GRANITE
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'BIEN TRADING' ? ' Selected ' : '' : '' ?>
                                                            value="BIEN TRADING">BIEN TRADING
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'Bien Yapı' ? ' Selected ' : '' : '' ?>
                                                            value="Bien Yapı">Bien Yapı
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'Demireks GmbH' ? ' Selected ' : '' : '' ?>
                                                            value="Demireks GmbH">Demireks GmbH
                                                    </option>
                                                    <option <?= isset($customer) ? $customer['exporter'] == 'Majorca' ? ' Selected ' : '' : '' ?>
                                                            value="Majorca">Majorca
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0 mt-3">
                                                <select id="transportType" name="transportType" required
                                                        class="form-control select select2">
                                                    <?php if (!isset($customer)): ?>
                                                        <option value="" disabled selected>Pick a Transport Type
                                                        </option>
                                                    <?php endif; ?>
                                                    <option value="FOB" <?= isset($customer) ? $customer['transportType'] == 'FOB' ? ' Selected ' : '' : '' ?> >
                                                        FOB - Free on Board
                                                    </option>
                                                    <option value="EXW" <?= isset($customer) ? $customer['transportType'] == 'EXW' ? ' Selected ' : '' : '' ?> >
                                                        EXW - Exworks
                                                    </option>
                                                    <option value="FOT" <?= isset($customer) ? $customer['transportType'] == 'FOT' ? ' Selected ' : '' : '' ?> >
                                                        FOT - To the Port
                                                    </option>
                                                    <option value="DAP" <?= isset($customer) ? $customer['transportType'] == 'DAP' ? ' Selected ' : '' : '' ?> >
                                                        DAP - Delivered Duty Paid
                                                    </option>
                                                    <option value="DDP" <?= isset($customer) ? $customer['transportType'] == 'DDP' ? ' Selected ' : '' : '' ?> >
                                                        DDP - Delivered at Place
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="mg-t-20 mg-sm-t-0 mt-3">
                                                <select id="marketType" required name="marketType"
                                                        class="form-control select select2">
                                                    <?php if (!isset($customer)): ?>
                                                        <option value="" disabled Selected>Pick a Market</option>
                                                    <?php endif; ?>
                                                    <option value="1" <?= isset($customer) ? $customer['marketType'] == 1 ? ' Selected ' : '' : '' ?> >
                                                        QUA
                                                    </option>
                                                    <option value="2" <?= isset($customer) ? $customer['marketType'] == 2 ? ' Selected ' : '' : '' ?> >
                                                        BIEN
                                                    </option>
                                                    <option value="3" <?= isset($customer) ? $customer['marketType'] == 3 ? ' Selected ' : '' : '' ?> >
                                                        QUA&BIEN
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">

                                            <div class="mg-t-20 mg-sm-t-0">

<!--                                                <select required id="countryname" name="countryName"-->
<!--                                                        class="form-control select select2">-->
                                                    <select id="multipleSelect" name="countryName" required  class="mul-select">
                                                    <?php
                                                    for ($i = 0; $i < count($countries); $i++):
                                                        ?>
                                                        <option <?= isset($customer) ? $customer['countryName'] == $countries[$i]['countryName'] ? ' Selected ' : '' : '' ?> ><?= $countries[$i]['countryName'] ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6 row ml-1">
                                            <div class="col-lg-12 col-6 row ml-1 d-flex">
                                                <div class="col-lg-4" style="padding: 13px !important;">
                                                    <label style="margin-bottom: 0;">Show production
                                                        schedule?</label><br>
                                                    <div class="flex-row d-flex">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['productionDate'] == 1 ? ' checked' : '' ?>
                                                                    id="option8" name="isProductiondate" value="1"
                                                                    type="radio">
                                                            <span class="me-2">Yes</span>
                                                        </label>
                                                        <label class="rdiobox">
                                                            <input <?= $customer['productionDate'] == 2 ? ' checked' : '' ?>
                                                                    id="option9" name="isProductiondate" value="2"
                                                                    type="radio">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="padding: 13px !important;">
                                                    <label style="margin-bottom: 0;">Show product?</label><br>
                                                    <div class="flex-row d-flex">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['isProductionShown'] == 1 ? ' checked' : '' ?>
                                                                    id="option8" name="isProductionShown" value="1"
                                                                    type="radio">
                                                            <span class="me-2">Yes</span>
                                                        </label>
                                                        <label class="rdiobox">
                                                            <input <?= $customer['isProductionShown'] == 2 ? ' checked' : '' ?>
                                                                    id="option9" name="isProductionShown" value="2"
                                                                    type="radio">
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="padding: 13px !important; float: right">
                                                    <label style="margin-bottom: 0;">Customer profile ?</label><br>
                                                    <div class="flex-row d-flex">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['isNew'] == 1 ? ' checked' : '' ?>
                                                                    id="option1" name="isNew" type="radio" value="1">
                                                            <span class="me-2">New</span>
                                                        </label>
                                                        <label class="rdiobox">
                                                            <input <?= $customer['isNew'] == 2 ? ' checked' : '' ?>
                                                                    id="option2" name="isNew" type="radio" value="2">
                                                            <span>Old</span>
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                    <div class="row row-sm">

                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Second Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card custom-card">
                                        <div class="card-header custom-card-header">
                                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">
                                                Payment Method</h5>
                                            <div class="card-options">
                                                <a href="#" class="card-options-collapse"
                                                   data-bs-toggle="card-collapse"><i
                                                            class="fe fe-chevron-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mg-t-10">
                                                <div class="col-lg-6">
                                                    <div class="mg-t-20 mg-lg-t-0">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['paymentMethod'] == 1 ? ' checked' : '' ?>
                                                                    value="1" type="radio" name="paymentMethod"
                                                                    id="option10">
                                                            <span>Cash Payment / Cash Before Delivery</span>
                                                        </label>
                                                    </div>
                                                    <div class="mg-t-20 mg-lg-t-0">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['paymentMethod'] == 2 ? ' checked' : '' ?>
                                                                    value="2" type="radio" name="paymentMethod"
                                                                    id="option11">
                                                            <span>Cash Against Goods</span>
                                                        </label>
                                                    </div>

                                                    <div class="mg-t-20 mg-lg-t-0">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['paymentMethod'] == 3 ? ' checked' : '' ?>
                                                                    value="3" type="radio" name="paymentMethod"
                                                                    id="option12">
                                                            <span>Cash Against Documents</span>
                                                        </label>
                                                    </div>
                                                    <div class="mg-t-20 mg-lg-t-0 ">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['paymentMethod'] == 45 ? ' checked' : '' ?>
                                                                    value="5" type="radio" name="paymentMethod"
                                                                    id="option14">
                                                            <span>Letter of Credit</span>
                                                        </label>
                                                    </div>
                                                    <div class="mg-t-20 mg-lg-t-0">
                                                        <label class="rdiobox">
                                                            <input <?= $customer['paymentMethod'] == 4 ? ' checked' : '' ?>
                                                                    value="4" type="radio" name="paymentMethod"
                                                                    id="option13">
                                                            <span>Acceptance Credit</span>
                                                        </label>
                                                    </div>


                                                    <div class="mt-3">
                                                        <label>Profit</label>
                                                        <div class="input-group">
                                                            <div class="col-4 pl-0">
                                                                <select class="form-control select select2 profit"
                                                                        name="profit">
                                                                    <?php foreach ($profit as $item) { ?>
                                                                        <option value="<?= $item["id"] ?>"
                                                                                data-profit="<?= $item["profit"] ?>"><?= $item["genus_name"] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <input required value="<?= $profit[0]["profit"] ?>"
                                                                   type="number" id="profitNumber"
                                                                   class="form-control col-lg-3" min="0" max="100"
                                                                   autocomplete="off" name="profitNumber" step="0.01">
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-primary"><a
                                                                    style="color: white;direction: "
                                                                    href="<?= seller_url('edit_profit') . '?id=' . $customer["userId"] ?>">Profit
                                                                Detail</a></button>


                                                        <div class="d-flex mt-3">
                                                            <div class="mg-t-20 mg-lg-t-0">
                                                                <label class="rdiobox">
                                                                    <input <?= $customer['round'] == 1 ? ' checked' : '' ?>
                                                                            value="1" id="option5" name="options"
                                                                            type="radio">
                                                                    <span class="me-2">Roll up</span>
                                                                </label>
                                                            </div>
                                                            <div class="mg-t-20 mg-lg-t-0">
                                                                <label class="rdiobox">
                                                                    <input <?= $customer['round'] == 2 ? ' checked' : '' ?>
                                                                            value="2" id="option6" name="options"
                                                                            type="radio">
                                                                    <span class="me-2">Roll down</span>
                                                                </label>
                                                            </div>
                                                            <div class="mg-t-20 mg-lg-t-0">
                                                                <label class="rdiobox">
                                                                    <input <?= $customer['round'] == 0 ? ' checked' : '' ?>
                                                                            value="0" id="option7" name="options"
                                                                            type="radio">
                                                                    <span>Non Roll</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="col-lg-6">
                                                        <label for="question">Select a port: </label>
                                                        <select id="portType" name="portType" required
                                                                class="form-control select select2">
                                                            <?php foreach ($ports as $port): ?>
                                                                <option value="<?= $port['id'] ?>" <?= isset($customer) ? $customer['portType'] == $port['id'] ? ' Selected ' : '' : '' ?> ><?= $port['name'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-group mt-3">

                                                            <!--                                                        <input hidden aria-label="BankName" placeholder="Currency" id="bankName" name="bankName" class="form-control" type="text" value="-->
                                                            <?php //=isset($customer)?$customer['bankName']:'' ?><!--">-->
                                                            <select class="form-control select bankname"
                                                                    aria-label="BankName" placeholder="" id="bankName"
                                                                    name="bankName[]" multiple>
                                                                <?php
                                                                $selectedOptions = explode(',', $customer["bankName"]);
                                                                $options = ["-", "Exim", "Factoring", "Coface"];

                                                                foreach ($options as $option) {
                                                                    $isSelected = in_array($option, $selectedOptions) ? 'selected' : '';
                                                                    echo "<option $isSelected value=\"$option\">$option</option>";
                                                                }
                                                                ?>
                                                            </select>


                                                        </div>

                                                    </div>

                                                    <div class="row mt-3 ms-0 display-row">
                                                        <div class="col-5 pr-0">
                                                            <div class="input-group">
                                                                <input name="paymentTermDay" aria-label="paymentTermDay"
                                                                       value="<?php if ($customer["paymentTermDay"]) {
                                                                           echo $customer["paymentTermDay"];
                                                                       } ?>" class="form-control" type="text">
                                                                <span class="p-2"> days from</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 pl-0">
                                                            <select class="form-control select select2"
                                                                    name="paymentTerm">
                                                                <option <?php if ($customer["paymentTerm"] == "B/L") {
                                                                    echo "selected";
                                                                } ?> value="B/L">B/L
                                                                </option>
                                                                <option <?php if ($customer["paymentTerm"] == "Invoice") {
                                                                    echo "selected";
                                                                } ?> value="Invoice">Invoice
                                                                </option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="ps-3">
                                                        <button id="confirmBtn" type="button"
                                                                class="btn ripple btn-main-primary w-50 mt-3"><?= isset($exist) ? 'UPDATE' : 'SAVE' ?></button>
                                                        <button hidden name="save" value="1" id="confirmBtn"
                                                                type="submit"></button>
                                                    </div>
                                                </div>

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
    <script>
        $(document).ready(function () {
            $('input[name="paymentMethod"]').change(function () {
                if ($(this).val() == 1) {
                    $('.display-row').css('display', 'none');
                } else {
                    $('.display-row').css('display', 'flex');
                }
            });
            $('.profit').change(function () {
                $('#profitNumber').val($(this).find("option:selected").data("profit"))
            });
        });
    </script>
    <script>
        document.getElementById('confirmBtn').addEventListener('click', function () {
            if ($('#option4').is(':checked')) {
                var dueDate = "There is no due date"
            } else if ($('#option3').is(':checked')) {
                var dueDate = "Due date is " + $('#dueDate').val() + " days."
            }
            var transportType = $('#transportType').val();
            var paymentType = $('input[name="paymentMethod"]:checked').siblings('label').text();
            var paymentMethodText = $('input[name="paymentMethod"]:checked').closest('div').find('span').text();





            // SweetAlert ile confirm kutusu oluşturma
            Swal.fire({
                title: 'Are you sure?',
                // html: 'Freight Type is: ' + transportType + ' <br>' + dueDate + '<br>Payment Type is: ' + paymentType,
                html: 'Freight Type is: ' + transportType + '  ' +  '<br>Payment Type is: ' + paymentMethodText,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                // Kullanıcı evet butonuna tıklarsa
                if (result.isConfirmed) {
                    // Formu submit etmek için gizli submit düğmesine tıklama işlemi
                    document.querySelector('#myForm button[type="submit"]').click();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            // Sayfa yüklendiğinde varsayılan durumu kontrol etmek için çalıştırılır
            if ($('#option3').is(':checked')) {
                $('#dueDate').show();
            } else {
                $('#dueDate').hide();
            }

            // radiodueyes değiştiğinde çalışacak kod
            $('#option3').change(function () {
                if ($(this).is(':checked')) {
                    $('#dueDate').show();
                } else {
                    $('#dueDate').hide();
                }
            });

            // radiodueno değiştiğinde çalışacak kod
            $('#option4').change(function () {
                if ($(this).is(':checked')) {
                    $('#dueDate').hide();
                    $('#dueDate').val(0);
                } else {
                    $('#dueDate').show();
                }
            });
        });

        function isJSON(str) {
            try {
                JSON.parse(str);
                return true;
            } catch (e) {
                return false;
            }
        }


        $('#check').click(function (e) {
            var check = $('#check').val();
            var customerNo = $('#customerNo').val();
            var customerNoBien = $('#customerNoBien').val();
            var marketCheck = $('#marketCheck').val();

            $.post("<?=seller_url('customer_detail') . '?id=' . get('id')?>", {
                check: check,
                customerNo: customerNo,
                customerNoBien: customerNoBien,
                marketCheck: marketCheck,
            }, function (result) {

                if (!isJSON(result)) {
                    if (result == "Customer can not found!" && marketCheck == 1) {
                        $('#customerNo').val('');
                    } else if (result == "Customer can not found!" && marketCheck == 2) {
                        $('#customerNoBien').val('');
                    }
                    alert(result);
                } else {
                    const parsedData = JSON.parse(result);
                    console.log(parsedData)
                    const taxAdministration = parsedData.taxnum;
                    const postCode = parsedData.zipstreet;
                    const companyName = parsedData.name1;

                    const address = parsedData.adres;
                    const phone = parsedData.telnum;

                    let country = parsedData.country;

// Eğer country boşsa varsayılan bir değer atayabilir veya hata işleyebilirsiniz
                    if (country) {
                        country = country.toUpperCase();
                    } else {
                        // Country boşsa, bir varsayılan değer atayabilir veya hata işleyebilirsiniz
                        console.error("Country bilgisi bulunamadı.");
                    }

                    var countrySelect = document.getElementById('countryname');
                    for (var i = 0; i < countrySelect.options.length; i++) {
                        if (countrySelect.options[i].value === country) {
                            countrySelect.selectedIndex = i;
                            break;
                        }
                    }

                    document.getElementById('taxAdministration').value = taxAdministration;
                    document.getElementById('postCode').value = postCode;
                    document.getElementById('companyName').value = companyName;
                    document.getElementById('address').value = address;
                    document.getElementById('phone').value = phone;
                    alert("This Customer Code Belongs To: " + companyName);
                }
            })
        });
    </script>
    <?= @returned($message); ?>

    <script>
        $(document).ready(function() {
            $(".mul-select").select2({
                placeholder: "Select options",
                tags: true,
                closeOnSelect: false
            });

            var availableCountries = <?php echo json_encode(array_column($countries, 'countryName')); ?>;

            $('#multipleSelect').change(function() {
                var selectedValue = $(this).val();

                // Sadece mevcut seçenekler arasında bir değer ise ekle
                if ($.inArray(selectedValue, availableCountries) !== -1) {
                    var idx = $.inArray(selectedValue, selectArr);
                    if (idx == -1) {
                        selectArr.push(selectedValue);
                    } else {
                        selectArr.splice(idx, 1);
                    }

                    $.each(selectArr, function(index, value) {
                        $('.display-here').text(value);
                    });
                } else {
                    // Geçersiz bir değer seçildiğinde uyarı verebilirsiniz
                    alert("You have chosen an invalid country!");
                }
            });
        });
    </script>


