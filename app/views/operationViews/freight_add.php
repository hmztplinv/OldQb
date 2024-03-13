<?php require 'mainPageOperation/header_operation.php'?>
<div class="container border border-light mt-5 rounded ml-6" style="white-space: nowrap;">

    <form action="<?=operation_url('freight_detail')?>" method="post" class="ml-5 mt-3">
        <header class="card-header d-md-flex align-items-center bg-secondary rounded">
            <h6 class="card-header-title text-light mt-1" >Freight Add</h6>
        </header>

        <div class="row mt-3">
            <div class="col-6 col-md-6">
                <div class="form-group rounded">
                    <label >Field Manager</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['fieldManagerName'] : '' ?>" name="fieldManagerName" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Real Firm</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['realFirm'] : '' ?>"  name="realFirm" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Company Name</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['companyName'] : '' ?>"   name="companyName" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>

                <div class="form-group rounded">
                    <label >Date</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input  value="<?= isset($freight) ? $freight['bookingNo'] : '' ?>" name="bookingNo" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Booking No</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['containerQuantity'] : '' ?>"  name="containerQuantity" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class=" form-group rounded" style="margin-top: 55px">

                    <button <?php if(get('id')!=0)echo 'hidden'; else echo ''; ?> type="submit" name="add" value="1" id="1" class="btn btn-primary btn-rounded " style="width: 100px">Add</button>
                    <button <?php if(get('id')==0)echo 'hidden'; else echo ''; ?> type="submit" name="update" value="1" id="2" class="btn btn-primary btn-rounded">Güncelle</button>

                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-group rounded">
                    <label >containerQuantity</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['shippingMethod'] : '' ?>" name="shippingMethod" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Shipping Method</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['Navlun'] : '' ?>" name="Navlun" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Navlun</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['amountSoldCustomer'] : '' ?>" name="amountSoldCustomer" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Amount Sold</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['totalProfitability'] : '' ?>" name="totalProfitability" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Total Profitabil</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['currencyUnit'] : '' ?>" name="currencyUnit" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="form-group rounded">
                    <label >Currency Unit</label>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input value="<?= isset($freight) ? $freight['currencyUnit'] : '' ?>" name="currencyUnit" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>

            </div>


        </div>
    </form>

</div>
<?php require 'mainPageOperation/footer_operation.php'?>

