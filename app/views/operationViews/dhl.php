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
    <!-- Main Content-->
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">DHL Status İnquiry.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DHL Status İnquiry</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">DHL Status
                                    İnquiry</h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row row-sm">
                                    <form action="<?=operation_url('dhl')?>" method="post">
                                        <div class="input-group-rounded ">
                                            <input type="text" placeholder="Enter the 10-digit code"
                                                   name="dhlnumber"  required  class="btn-lg mt-4 w-30 responsive"
                                                   style="margin-left: 20px;">
                                            <button name="save" type="submit" id="1" value="1"
                                                    class="btn btn-group-right text-white bg-primary btn-lg btn-responsive w-20 ripple">
                                                Query
                                            </button>

                                        </div>
                                    </form>
                                </div>

                                <div class="row row-sm p-4">
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select id="customerNameSearch" title="Customer Name" name="customerNameSearch"
                                                    class="selectpicker">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select id="dhlno" name="dhlno" title="DHL No" class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button" name="reset" onclick="reset()"
                                                class="btn btn-primary ripple">
                                            Reset</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                           id="example">
                                        <thead >
                                        <tr>
                                            <th></th>
                                            <th>DHL No</th>
                                            <th>Customer Name</th>
                                            <th>Piece Code</th>
                                            <th>Piece Count</th>
                                            <th>Last Location</th>
                                            <th>Description</th>
                                            <th>Last Updated</th>
                                            <th>Created Date</th>
                                            <th>Origin Address</th>
                                            <th>Destination Address</th>
                                            <th>Estimated Time Of Delivery</th>
                                            <th>Estimated Time Of Delivery Remark</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                        <?php foreach($alldhls as $alldhl):?>
                                        <tr>
                                            <td class="sorting_1">
                                                        <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                            <a href="<?=site_url('operation/dhl_detail?dhlnumber=').$alldhl['dhlNumber']?>">
                                                                <i class="ti ti-search text-primary"></i>
                                                            </a>
                                                        </span>
                                            </td>
                                            <td ><?=$alldhl['dhlNumber']?></td>
                                            <td ><?=$alldhl['customerName']?></td>
                                            <td ><?=$alldhl['pieceId']?></td>
                                            <td ><?=$alldhl['pieceCount']?></td>
                                            <td ><?=$alldhl['lastUpdatedLocation']?></td>
                                            <td ><?=$alldhl['lastUpdatedDescription']?></td>
                                            <td ><?=$alldhl['lastUpdateDate']?></td>
                                            <td ><?=$alldhl['createdDate']?></td>
                                            <td ><?=$alldhl['originAddress']?></td>
                                            <td ><?=$alldhl['destinationAddress']?></td>
                                            <td ><?=$alldhl['estimatedTimeOfDelivery']?></td>
                                            <td ><?=$alldhl['estimatedTimeOfDeliveryRemark']?></td>
                                            <td ><?=$alldhl['description']?></td>
                                        </tr>
                                        <?endforeach;?>

                                        </tbody>
                                    </table>
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
<?php require 'mainPageOperation/footer_operation.php'?>
<script>
    $(document).ready(function() {
        $('#rejectedcostlist').DataTable( {
            dom: 'Bfrtip',
            pageLength: 1000,
            buttons: [
                {

                    extend: 'excelHtml5',
                    title: 'Dhl'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Dhl',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                },
                'copy',  'print',
            ]
        } );
    } );
</script>
        <script>
            var example=$('#example').DataTable( {
                dom: 'Bfrtip',
                pageLength: 1000,
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'All_receivables'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'All_receivables'}, 'copy', 'print'
                ],
                responsive: {
                    details: false
                }
            });

            $(document).ready(function () {
                reset();
            });

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

            function reset(){
                $('#example').dataTable().fnFilter('');//global searching
                $("#customerNameSearch").val([]);//select option değerlerini sıfırlar
                example.columns(2).search("").draw();
                setsearchvalues('customerNameSearch',2,example);
                matchingsinglesearch('customerNameSearch',2,example);
                $("#dhlno").val([]);//select option değerlerini sıfırlar
                example.columns(1).search("").draw();
                setsearchvalues('dhlno',1,example);
                matchingsinglesearch('dhlno',1,example);
                $('.selectpicker').selectpicker('refresh');
            }
        </script>

                <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
</body>

</html>
