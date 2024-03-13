<?php require 'mainPageCustomer/header_customer.php'?>
<div class="  border border-light mt-3 rounded ml-6 content-wrap" style="white-space: nowrap;">
    <div class="main"   >
        <div class=" container-fluid mb-5">
            <section id="main-content">
                <div class="row  ">
                    <div class="col-lg-12">
                        <div class="card  ">  <div class="card-header card-header-border-bottom bg-white">
                                <h2>Freights</h2>
                            </div>
    <ul class="nav nav-tabs mt-5 ">
        <a class="nav-link   " aria-current="page" href="freight_pending"><p class="text-dark"><b>Pending Freight</b></p></a>

        <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="freight_approved"><p class="text-dark"><b>Approved Freight</b></p></a>
        </li>
    </ul>
    <form action="<?=operation_url('freight_detail').'?customerId='.get('customerId')?>" method="post" class="ml-5 mt-3">
        <input hidden name="companyId" value="<?=get('customerId')?>">
        <div class="table-responsive ">
            <h4>  Approved Freights List </h4>
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th class="text-custom">Filed Manager</th>
                    <th class="text-custom ">Real Firm</th>
                    <th class="text-custom ">Shipping Type</th>
                    <th class="text-custom ">Container Quantity</th>
                    <th class="text-custom ">Currency</th>
                    <th class="text-custom ">Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php foreach ($navluns as $navlun):?>
                    <td><?=$navlun['executiveName']?></td>
                    <td><?=$navlun['realFirm']?></td>
                    <td><?=$navlun['shippingType']?></td>
                    <td><?=$navlun['containerQuantity']?></td>
                    <td><?=$navlun['currency']?></td>
                    <td class="text-left" ><?=$navlun['navlunSoldPrice']?></td>
                    <?php endforeach;?>
                </tr>

                </tbody>
            </table>
        </div>

    </form>
</div>
<?php require 'mainPageCustomer/footer_customer.php'?>
<script>
    $('#example').DataTable({
        paging: false,
        buttons: [
            'excel', 'pdf', 'copy', 'print'
        ],
        responsive: {
            details: true
        },
        searching:false
    });
</script>

<script>
    $('.navlun').on('input',function(e){
        $('#navlunprofit').val($('#navlunsoldprice').val()-$('#navlunprice').val());
    });
</script>

</body>
</html>


