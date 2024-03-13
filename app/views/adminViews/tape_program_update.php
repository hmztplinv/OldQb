<?php require 'mainPageAdmin/header_admin.php'?>
<div class="content-wrap">
    <form action="<?=admin_url('tape_program_update?id=').get('id')?>" method="post" class="ml-5  ">
        <div class="   container border border-light mt-5 rounded ml-6" style="white-space: nowrap;">
            <header class="card-header d-md-flex align-items-center bg-secondary rounded">
                <h6 class="card-header-title text-light mt-1" >UPDATE Production Program</h6>
            </header>
            <input hidden name="id" value="<?=get('id')?>">
            <div class="row mt-3">
                <div class="col-6 col-md-6">
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
                        <div style="height: 25px"></div>
                        <button type="submit" class="btn btn-primary btn-rounded btn-lg" value="1" name="update" style="background-color: #0a4966">UPDATE</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
<?php require 'mainPageAdmin/footer_admin.php'?>
<script>
    $(document).ready(function() {
        $('#rejectedcostlist').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'copy', 'print'
            ],
            responsive: {
                details: false
            }
        });
    });
</script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>
