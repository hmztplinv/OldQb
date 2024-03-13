<?php require 'mainPageAdmin/header_admin.php'?>



<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">ADD Production Program.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ADD Production Program</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->


            <!-- Row -->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form class="ml-5" action="<?=admin_url('production_program_details')?>" method="post">
                        <div class="card custom-card">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>
                                    ADD Production Program
                                    <span>
                                    </span>
                                </h2>
                            </div>

                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class=" col-lg-6 col-md-6">
                                        <label >Bant Name</label>
                                        <input value="" name="bant_name" type="text" class="form-control" >
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <label >Production Code</label>
                                        <input value="" name="production_code" type="text" class="form-control" >
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label > Product Code</label>
                                        <input value="" name="product_code" type="text" class="form-control" >
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >Product Origin</label>
                                        <select required value="" name="product_origin" type="text" class="form-control select2">
                                            <option>QUA</option>
                                            <option>BIEN</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >Product Name</label>
                                        <input value=""  name="product_Name" type="text" class="form-control" >
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >İhr</label>
                                        <input value="" name="ihr" type="text" class="form-control" >
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >EAN</label>
                                        <input name="ean" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >Ware House</label>
                                        <input name="warehouse" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >Box</label>
                                        <input name="box" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label >İnfo</label>
                                        <input name="info" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label>Description</label>
                                        <input value="" name="description" type="text" class="form-control" >
                                    </div>
                                    <div class="row col-lg-6 col-md-6">
                                        <div class="col-lg-6 col-md-6">
                                            <label >Start Date</label>
                                            <input required type="date" name="start_date" value="" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label >Start Time</label>
                                            <input required type="time" name="start_time" value="00:00" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row col-lg-6 col-md-6 mt-4">
                                        <div class="col-lg-6 col-md-6">
                                            <br>
                                            <button type="submit" class="btn btn-success btn-rounded btn-lg" value="1" name="add" style="width: 100%">Add</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <br>
                                            <button type="button"  onclick="window.location.href='https://qbdigitals.com/admin/tape_program'"  class="btn btn-warning btn-rounded btn-lg" value="1" name="add" style=" width: 100%">BACK</button>
                                        </div>
                                    </div>
                                    <div class="row col-lg-6 col-md-6 ms-3 mt-3">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Finish Date</label>
                                            <input required type="date" name="finish_date" value="" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label>Finish Time</label>
                                            <input required type="time" name="finish_time" value="00:00" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require 'mainPageAdmin/footer_admin.php'?>

<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>
