<?php require 'mainPageSeller/header_seller.php'?>
<form class="ml-5  ">
    <div class="container border border-light mt-5 rounded ml-6 content-wrap" style="white-space: nowrap;">
        <header class="card-header d-md-flex align-items-center bg-secondary rounded">
            <h6 class="card-header-title text-light mt-1" >ADD Tape Program</h6>
        </header>
        <div class="row mt-3">
            <div class="col-6 col-md-6">
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >HAS THE APPROVED PRO FORMA BEEN RECEIVED?</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >HAS PAYMENT BEEN RECEIVED?</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >NOTIFICATION OF THE ORDER AMOUNT FOR PRODUCTION</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <button type="button" class="btn btn-primary btn-rounded" style="background-color: #0a4966">Add</button>
            </div>
            <div class="col-6 col-md-6">
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >PROFORMA INVOICE DELIVERY TO CUSTOMER</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

        </div>
    </div>
</form>
<?php require 'mainPageSeller/footer_seller.php'?>
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
