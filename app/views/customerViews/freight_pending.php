<?php require 'mainPageCustomer/header_customer.php'?>
<!-- Main Content-->
<div class="main-content side-content pt-0">



    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Pending Approval Orders.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pending Approval Orders</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Pending Approval Orders
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>

                        <div class="row select-container card-body ml-3">
                            <div class="col-sm-3 mb-2">
                                <select data-live-search=true title="Field Manager"  name="" id="fieldManagerSearch" class="selectpicker form-control">
                                </select>
                            </div>
                            <div class="col-sm-3 mb-2">
                                <select data-live-search=true title="Logistic Company" class="selectpicker form-control" name="" id="logisticCompanySearch">
                                </select>
                            </div>
                            <div class="col-sm-3 mb-2">
                                <select data-live-search=true title="Shipping Type" class="selectpicker form-control" name="" id="shippingTypeSearch">
                                </select>
                            </div>
                            <div class="col-sm-3 mb-8">
                                <button onclick="reset()" class="btn ripple btn-main-primary">Reset</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-custom text-center">#</th>
                                        <th class="text-custom text-center">Field Manager</th>
                                        <th class="text-custom text-center">Logistic Company</th>
                                        <th class="text-custom text-center">Shipping Type</th>
                                        <th class="text-custom text-center">Container Pcs</th>
                                        <th class="text-custom text-center">Currency</th>
                                        <th class="text-custom text-center">Price</th>
                                        <th class="text-custom text-center">Date</th>
                                        <th class="text-custom text-center">Expires</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($navluns as $navlun):?>
                                        <tr>
                                            <td align="center"><a href="<?=customer_url('freight_detail?id=').$navlun['navlunId']?>"><i class="ti ti-search text-primary"></a></td>
                                            <td align="center"><?=$navlun['executiveName']?></td>
                                            <td align="center"><?=$navlun['realFirm']?></td>
                                            <td align="center"><?=$navlun['shippingType']?></td>
                                            <td align="center"><?=$navlun['containerQuantity']?></td>
                                            <td align="center"><?=$navlun['currency']?></td>
                                            <td align="center"><?=$navlun['navlunSoldPrice']?></td>
                                            <td align="center"><?=date('d/m/Y', strtotime($navlun['createdDate']))?></td>
                                            <td align="center"><?=$navlun['expires']?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

<?php require 'mainPageCustomer/footer_customer.php'?>

<script>

    function setsearchvalues(id,index,table) {
        var values = table.column(index, {search: 'applied'}).data().toArray();
        //insert to array currently values done

        //clear select opitons
        var itemSelectorOption = $('#'+id+' option');
        itemSelectorOption.remove();
        $('#'+id).selectpicker('refresh');
        //clear done

        //unique current values
        function unique(arr) {
            var i,
                len = arr.length,
                out = [],
                obj = {};
            for (i = 0; i < len; i++) {
                obj[arr[i]] = 0;
            }
            for (i in obj) {
                out.push(i);
            }
            return out;
        }
        var values = unique(values);
        //unique done

        //insert values to select options
        $.each(values, function(key, value) {
            $('#'+id).append($('<option>', { value : value }).text(value));
        });
    }
    function matchingsinglesearch(id,index,table) {
        document.getElementById(id).onchange = function () {
            table.columns(index).search("^"+document.getElementById(id).value+'$',true).draw();
        }
    }
    function standartmultiplesearch(id,index,table) {//not match! for match you need to make value "^"+value+"$"
        document.getElementById(id).onchange = function () {
            var selected = [];
            for (var option of document.getElementById(id).options) {
                if (option.selected) {
                    selected.push(option.value);
                }
            }
            selected=selected.join("|");
            table.columns(index).search(selected, true, false).draw();
        }
    }
</script>



<script>
    var example = $('#example').DataTable({
        paging: false,
        buttons: [
            'excel', 'pdf', 'copy', 'print'
        ],
        responsive: {
            details: true
        },
    });
</script>

<script>
    function reset(){
        $('#example').dataTable().fnFilter('');//global searching
        $("#fieldManagerSearch").val([]);//select option değerlerini sıfırlar
        example.columns(1).search("").draw();
        setsearchvalues('fieldManagerSearch',1, example);
        matchingsinglesearch('fieldManagerSearch',1,example);


        $("#logisticCompanySearch").val([]);//select option değerlerini sıfırlar
        example.columns(2).search("").draw();
        setsearchvalues('logisticCompanySearch',2,example);
        matchingsinglesearch('logisticCompanySearch',2,example);

        $("#shippingTypeSearch").val([]);//select option değerlerini sıfırlar
        example.columns(3).search("").draw();
        setsearchvalues('shippingTypeSearch',3,example);
        matchingsinglesearch('shippingTypeSearch',3,example);

        $('.selectpicker').selectpicker('refresh');
    }

    $( document ).ready(function() {
        reset();
    });
</script>

</body>
</html>


