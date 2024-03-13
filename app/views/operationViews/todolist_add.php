<?php require 'mainPageOperation/header_operation.php'?>
<form class="ml-5">
    <div class="container border border-light mt-5 rounded ml-6" style="white-space: nowrap;">
        <header class="card-header d-md-flex align-items-center bg-secondary rounded">
            <h6 class="card-header-title text-light mt-1" >ADD TO DO LİST</h6>
        </header>
        <div class="row mt-3">
            <div class="col-6 col-md-4">
                <div class="form-group rounded">
                    <label >PRODUCTION PLANNING AND STOCK CONTROL</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >STOCK AND CURRENT PRICE LIST SHARING WITH THE CUSTOMER</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
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
                    <label >PRODUCTION-EXPORT WAREHOUSE ENTRANCES CONTROL</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary btn-rounded" style="background-color: #0a4966">Add</button>
            </div>
            <div class="col-6 col-md-4">
                <div class="form-group">
                    <label >CUSTOMER NOTIFICATION OF THE READY ORDER</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >CUSTOMER TR. PASSING THE AGENT INFORMATION</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >RESERVATION CONFIRMATION</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >SHARING SHIP INFORMATION AND ETA WITH CUSTOMER</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >FACTORY LOADING DAY NOTICE</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >BILL OF LADING INSTRUCTIONS</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="form-group">
                    <label >CUSTOMS CLEARANCE INSTRUCTIONS</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >CIRCULATION CERTIFICATE REQUEST</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >SHARING OF ALL LOADING DOCUMENTS WITH THE CUSTOMER</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >HAVE THE YDG PROCEDURES BEEN COMPLETED?</label>
                    <select class="form-control rounded" >
                        <option>OK</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >COMPLETION AND RETURN OF CONTAINERS</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label >HAS THE PAYMENT BEEN TRANSFERRED TO OUR ACCOUNT?</label>
                    <input type="text" class="form-control" placeholder="">

                </div>

            </div>

        </div>
    </div>
</form>
<?php require 'mainPageOperation/footer_operation.php'?>
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
