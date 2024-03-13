<?php require 'mainPageAdmin/header_admin.php'?>


<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">UPDATE Production Program.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">UPDATE Production Program</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->


            <!-- Row -->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="<?=admin_url('production_program_update?id=').get('id')?>" method="post" class="ml-5  ">
                        <div class="card custom-card">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>
                                    UPDATE Production Program
                                    <span>
                                    </span>
                                </h2>
                            </div>

                            <div class="card-body">
                                <input hidden name="id" value="<?=get('id')?>">
                                <div class="row mt-3">
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label>Bant Name</label>
                                            <input value="<?=$program['bantName']?>" name="bant_name" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >Production Code</label>
                                            <input value="<?=$program['production_code']?>" name="production_code" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >Description</label>
                                            <input value="<?=$program['description']?>" name="description" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >İhr</label>
                                            <input value="<?=$program['ihr']?>" name="ihr" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label > Product Code</label>
                                            <input value="<?=$program['product_code']?>" name="product_code" type="text" class="form-control" >
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-6 col-md-6">
                                                <label >Start Date</label>
                                                <input type="date" name="start_date" value="<?=date("Y-m-d",strtotime($program['start_date']))?>" class="form-control">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label >Start Time</label>
                                                <input  type="time" name="start_time" value="<?=date("H:i",strtotime($program['start_time']))?>" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-6 col-md-6">
                                                <label >Finish Date</label>
                                                <input type="date" name="finish_date" value="<?=date("Y-m-d",strtotime($program['finish_date']))?>" class="form-control" >
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label >Finish Time</label>
                                                <input  type="time" name="finish_time" value="<?=date("H:i",strtotime($program['finish_time']))?>" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="form-group">
                                            <label >EAN</label>
                                            <input name="ean" type="text" value="<?=$program['ean']?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label >Ware House</label>
                                            <input name="warehouse" type="text" value="<?=$program['warehouse']?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label >Box</label>
                                            <input name="box" type="text" value="<?=$program['box']?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label >İnfo</label>
                                            <input name="info" type="text" value="<?=$program['info']?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label >Product Name</label>
                                            <input value="<?=$program['product_name']?>" name="product_Name" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label >Product Origin</label>
                                            <select required value="" name="product_origin" type="text" class="form-control">
                                                <option <?=$program['productOrigin']=='QUA'? ' selected ':''?> >QUA</option>
                                                <option <?=$program['productOrigin']=='BIEN'? ' selected ':''?> >BIEN</option>
                                            </select>
                                        </div>
                                        <div class="row form-group mt-5">
                                            <div class="col-lg-6 col-md-6">
                                                <button type="submit" class="btn btn-success btn-rounded btn-lg" value="1" name="update" style="width: 100%">UPDATE</button>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <button type="button"  onclick="window.location.href='https://qbdigitals.com/operation/tape_program'"  class="btn btn-warning btn-rounded btn-lg" value="1" name="add" style=" width: 100%">BACK</button>
                                            </div>
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
