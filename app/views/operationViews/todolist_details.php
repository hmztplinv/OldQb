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
    <form action="<?=operation_url('todolist_details')?>" method="post" class="ml-5">

    <input type="text" hidden name="todotype" value="<?=get('todotype')?>">

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">To Do List <?= isset($todo) ? 'Update' : 'Add' ?></h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="to_do_list">To Do List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">To Do List <?= isset($todo) ? 'Update' : 'Add' ?></li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">To Do List
                                    <?= isset($todo) ? 'Update' : 'Add' ?></h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">

                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Task Name</p>
                                            <input class="form-control input-lg" id="todoName" required value="<?= isset($todo) ? $todo['todoName'] : '' ?>" name="todoName"
                                                   placeholder="Todo Adı" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Production Planning and Inventory Control
                                            </p>
                                            <div class="form-group select2-lg">
                                                <select id="productPlaning" name="productPlaning"
                                                        class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['productPlaning']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['productPlaning']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Sharing Stock and Current Price List with the Customer
                                            </p>
                                            <div class="form-group select2-lg">
                                                <select id="updatedPriceListShare" name="updatedPriceListShare" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['updatedPriceListShare']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['updatedPriceListShare']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Sending a Proforma Invoice to the Customer</p>
                                            <input class="form-control input-lg" id="customerInvoice"
                                                   value="<?= isset($todo) ? $todo['customerInvoice'] : '' ?>" name="customerInvoice" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Has the Approved Proforma Been Received?
                                            </p>
                                            <input class="form-control input-lg" value="<?= isset($todo) ? $todo['doesProformaTook'] : '' ?>" name="doesProformaTook"
                                                   id="doesProformaTook" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Completion of Container Unloading Process and Return</p>
                                            <input type="text" value="<?= isset($todo) ? $todo['container'] : '' ?>" name="container" id="container"
                                                   class="form-control input-lg">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Has the Payment Been Received?</p>
                                            <input class="form-control input-lg" value="<?= isset($todo) ? $todo['payment'] : '' ?>" name="payment" id="payment"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Notification of Order Quantity for Production</p>
                                            <input class="form-control input-lg" value="<?= isset($todo) ? $todo['productionNotification'] : '' ?>" name="productionNotification" id="productionNotification" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Notification to the Customer for the Ready Order</p>
                                            <div class="form-group select2-lg">
                                                <select id="customerNotification" name="customerNotification" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['customerNotification']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['customerNotification']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Sharing Local Agent Information with the Customer</p>
                                            <div class="form-group select2-lg">
                                                <select  name="informCustomer" id="informCustomer" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['informCustomer']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['informCustomer']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Reservation Confirmation</p>
                                            <div class="form-group select2-lg">
                                                <select id="reservationConfirmation" name="reservationConfirmation" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['reservationConfirmation']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['reservationConfirmation']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Sharing Vessel Information and ETA with the Customer</p>
                                            <div class="form-group select2-lg">
                                                <select id="doesShipmentInfoShared" name="doesShipmentInfoShared" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['doesShipmentInfoShared']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['doesShipmentInfoShared']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Notification of Loading Day to the Factory
                                            </p>
                                            <div class="form-group select2-lg">
                                                <select id="factoryNotification" name="factoryNotification" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['factoryNotification']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['factoryNotification']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Bill of Lading Instructions</p>
                                            <div class="form-group select2-lg">
                                                <select id="billOfLading" name="billOfLading" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['billOfLading']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['billOfLading']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Control of Production-Export Warehouse Entries</p>
                                            <div class="form-group select2-lg">
                                                <select id="warehouseControl" name="warehouseControl" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['warehouseControl']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['warehouseControl']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Customs Clearance Instructions</p>
                                            <div class="form-group select2-lg">
                                                <select id="customsInstruction" name="customsInstruction" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['customsInstruction']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['customsInstruction']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Request for Circulation Document</p>
                                            <div class="form-group select2-lg">
                                                <select id="circulationDocumentation" name="circulationDocumentation" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['circulationDocumentation']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['circulationDocumentation']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Sharing All Loading Documents with the Customer</p>
                                            <div class="form-group select2-lg">
                                                <select id="loadingDocumentationSharingWithCustomer" name="loadingDocumentationSharingWithCustomer" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['loadingDocumentationSharingWithCustomer']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['loadingDocumentationSharingWithCustomer']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Has the Dangerous Goods Handling Process Been Completed?</p>
                                            <div class="form-group select2-lg">
                                                <select id="loadingDocumentationSharingWithCustomer" name="loadingDocumentationSharingWithCustomer" class="form-control select2">
                                                    <option <?php if(isset($todo)&&$todo['ydgProcess']=='OK') echo  'selected'  ;else echo ' ';?>>OK</option>
                                                    <option <?php if(isset($todo)&&$todo['ydgProcess']=='None') echo ' selected ';elseif(!isset($todo)) echo ' selected ';?>>None</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Has the Payment Been Deposited into Our Account?</p>
                                            <input class="form-control input-lg" id="paymentInAccount" value="<?= isset($todo) ? $todo['paymentInAccount'] : '' ?>" name="paymentInAccount" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mg-t-15">
                                            <button type="submit" <?php if(get('id')!=0)echo 'hidden'; else echo ''; ?> type="submit" name="add" value="1"
                                                    class="btn w-50 btn-lg btn-primary ripple">Add</button>
                                            <button type="submit" <?php if(get('id')==0)echo 'hidden'; else echo ''; ?> type="submit" name="update" value="1"
                                                    class="btn w-50 btn-lg btn-primary ripple">Update</button>
                                        </div>
                                        <input value="<?= get('id') ?>" hidden name="todoid" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Row End -->

            </div>
        </div>
    </div>
    <!-- End Main Content-->

    </form>
<?php require 'mainPageOperation/footer_operation.php'?>
