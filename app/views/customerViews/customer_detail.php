<?php require 'mainPageCustomer/header_customer.php'; ?>


<!-- Main Content-->
<div class="main-content side-content pt-0">
    <form action="<?= !isset($exist) ?  customer_url('customer_detail') : '' ?>" method="POST">
    <div class="main-container container-fluid">
        <div class="inner-body">
            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Profile</h2>
                </div>
            </div>
            <div class="row row-sm">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card main-content-body-profile">
                        <div
                                class="main-content-body tab-pane p-4 border-top-0"
                                id="edit"
                        >
                            <div class="card-body border">
                                <div class="mb-4 main-content-label">
                                    Personal Information
                                </div>
                                <form class="form-horizontal">
                                    <u style="font-size: 13px">Please fill in the fields with <label style="color:red;">*</label>  </u>
                                    <div class="mb-3 main-content-label">Name</div>

                                    <div class="form-group mt-2">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="company" class="form-label"
                                                >Company Name <label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        required
                                                        value="<?=isset($customer['companyName']) ? $customer['companyName']:''?>"
                                                        type="text"
                                                        id="companyName"
                                                        class="form-control"
                                                        data-mask="(999) 999-9999"
                                                        aria-label
                                                        autocomplete="off"
                                                        name="companyName"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ********* -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="contact" class="form-label"
                                                >Contact Person Name Surname:<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        required
                                                        class="form-control"
                                                        aria-label
                                                        type="text"
                                                        id="uname"
                                                        name="uname"
                                                        value="<?= isset($user['uname']) ? $user['uname'] : '' ?>"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************ -->

                                    <!-- *********** -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="taxnumber" class="form-label"
                                                >Registration Number / T.C No:<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['taxNumber'])?$customer['taxNumber']:''?>"
                                                        type="text"
                                                        id="taxNumber"
                                                        class="form-control"
                                                        name="taxNumber"
                                                        aria-label
                                                        autocomplete="off" required
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************* -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="ülke" class="form-label"
                                                >Country<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">

                                                    </div>
<!--                                                    <select-->
<!--                                                            required=""-->
<!--                                                            id="countryname"-->
<!--                                                            class="form-control"-->
<!--                                                            name="countryName"-->
<!--                                                            aria-label=""-->
<!--                                                            autocomplete="off"-->
<!--                                                    >-->
                                                        <select id="multipleSelect" name="countryName" required  class="mul-select">
                                                        <?php if (!isset($countryname['countryName'])): ?>
                                                            <option value="" disabled selected >Pick a Country</option>
                                                        <?php endif;?>
                                                        <?php for($i=0;$i<count($countries);$i++):?>
                                                            <option <?= isset($countryname['countryName']) ? strtoupper($countryname['countryName'])==$countries[$i]['countryName'] ? ' Selected ':'':''?> ><?=$countries[$i]['countryName']?></option>
                                                        <?php endfor;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ********** -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="postCode" class="form-label"
                                                >Post Code:<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?= isset($customer['postCode'])?$customer['postCode']:''?>"
                                                        type="text"
                                                        id="postCode"
                                                        class="form-control"
                                                        autocomplete="off"
                                                        maxlength="10"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                        name="postCode" required
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 main-content-label">Contact Info</div>
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="E-Posta" class="form-label"
                                                >E-Mail:</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input   readonly
                                                        type="text"
                                                        class="form-control"
                                                        id="email"
                                                        name="email"
                                                        value="<?= isset($user['email']) ? $user['email'] : '' ?>"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************ -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="fax" class="form-label"
                                                >Faks No:</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['faxNumber'])?$customer['faxNumber']:''?>"
                                                        type="text"
                                                        id="faxNumber"
                                                        class="form-control"
                                                        autocomplete="off"
                                                        name="faxNumber"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************* -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="tax" class="form-label"
                                                >Tax Office:</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['taxAdministration'])?$customer['taxAdministration']:''?>"
                                                        type="text"
                                                        id="taxAdministration"
                                                        class="form-control"
                                                        autocomplete="off"
                                                        name="taxAdministration"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********** -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="Telefon" class="form-label"
                                                >Phone No:<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?= isset($user['phone']) ? $user['phone'] : '' ?>"
                                                        type="tel"
                                                        id="phone"
                                                        class="form-control"
                                                        autocomplete="off"
                                                        name="phone"
                                                        required
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ************* -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="adress" class="form-label"
                                                >Address</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['address'])? $customer['address']:''?>"
                                                        type="text"
                                                        id="address"
                                                        class="form-control"
                                                        data-mask="(999) 999-9999"
                                                        aria-label
                                                        autocomplete="off"
                                                        name="address"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 main-content-label">Payment Info</div>
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="bank" class="form-label"
                                                >Bank Name:</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['bankName'])?$customer['bankName']:'' ?>"
                                                        type="text"
                                                        name="bankName"
                                                        id="bankName"
                                                        class="form-control"
                                                        autocomplete="off"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ********* -->
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="bank" class="form-label"
                                                >Bank Branch Name:</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['bankBranchName'])?$customer['bankBranchName']:''?>"
                                                        type="text"
                                                        id="bankBranchName"
                                                        class="form-control"
                                                        name="bankBranchName"
                                                        autocomplete="off"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="ıban" class="form-label"
                                                >Iban No:</label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <input
                                                        value="<?=isset($customer['ibanNumber'])?$customer['ibanNumber']:''?>"
                                                        type="text"
                                                        id="ibanNumber"
                                                        class="form-control"
                                                        data-mask="9999 9999 9999 9999"
                                                        autocomplete="off"
                                                        maxlength="19"
                                                        name="ibanNumber"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="currency" class="form-label"
                                                >Currency<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="mdi mdi-cash"></i>
                                  </span>
                                                    </div>
                                                    <select
                                                            id="currency"
                                                            required
                                                            class="form-control"
                                                            name="currency"
                                                            autocomplete="off"
                                                    >
                                                        <?php if (!isset($customer['currency'])): ?>
                                                            <option value="" disabled selected >Pick a Currency Type</option>
                                                        <?php endif;?>
                                                        <option <?= isset($customer['currency'])?$customer['currency']=='USD'? ' Selected ':'':''?>>USD</option>
                                                        <option <?= isset($customer['currency'])?$customer['currency']=='EUR'? ' Selected ':'':''?>>EUR</option>
                                                        <option <?= isset($customer['currency'])?$customer['currency']=='GBP'? ' Selected ':'':''?>>GBP</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="marketType" class="form-label">Market<label style="color: red">*</label></label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
										<span class="input-group-text">
											<i class="mdi mdi-shopping"></i>
										</span>
                                                    </div>
                                                    <select id="marketType" required class="form-control" name="marketType" autocomplete="off">
                                                        <?php if (!isset($customer['marketType'])): ?>
                                                            <option value="" disabled Selected>Pick a Market</option>
                                                        <?php endif;?>
                                                        <option value="1" <?= isset($customer['marketType']) ? $customer['marketType']==1? ' Selected ':'':''?> >QUA</option>
                                                        <option value="2" <?= isset($customer['marketType']) ? $customer['marketType']==2? ' Selected ':'':''?> >BIEN</option>
                                                        <option value="3" <?= isset($customer['marketType']) ? $customer['marketType']==3? ' Selected ':'':''?> >QUA&BIEN</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row row-sm">
                                            <div class="col-md-3">
                                                <label for="transportType" class="form-label"
                                                >Transport Type:<label style="color: red">*</label></label
                                                >
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="mdi mdi-shopping"></i>
                                  </span>
                                                    </div>
                                                    <select
                                                            id="transportType"
                                                            required
                                                            class="form-control"
                                                            name="transportType"
                                                            autocomplete="off"
                                                    >
                                                        <?php if (!isset($customer['transportType'])): ?>
                                                            <option value="" disabled selected >Pick a Transport Type</option>
                                                        <?php endif;?>
                                                        <option <?= isset($customer['transportType'])? $customer['transportType']=='FOB'? ' Selected ':'':''?> value="FOB" >FOB - Free on Board</option>
                                                        <option <?= isset($customer['transportType'])? $customer['transportType']=='EXW'? ' Selected ':'':''?>  value="EXW" >EXW - Exworks</option>
                                                        <option <?= isset($customer['transportType'])? $customer['transportType']=='FOT'? ' Selected ':'':''?> value="FOT" >FOT - To the Port</option>
                                                        <option <?= isset($customer['transportType'])? $customer['transportType']=='DAP'? ' Selected ':'':''?>  value="DAP" >DAP - Delivered Duty Paid</option>
                                                        <option <?= isset($customer['transportType'])? $customer['transportType']=='DDP'? ' Selected ':'':''?> value="DDP" >DDP - Delivered at Place</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input hidden="" name="customerNo" value="<?=$user['customerNo']?>">
                                        <input hidden="" name="customerNoBien" value="<?=$user['customerNoBien']?>">
                                        <div class="input-group w-100">
                                            <button name="save" value="1" type="submit" class="btn btn-primary btn-default btn-md " style="background-color: #6259ca"><?= isset($user) ?'UPDATE':'SAVE'?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
    </form>

</div>
<!-- End Main Content-->
<?php require 'mainPageCustomer/footer_customer.php'; ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= @returned($message); ?>
</body>
</html>

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
