<?php require 'mainPageOperation/header_operation.php'?>

<body class="ltr main-body leftmenu">


<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->
<!-- <script>
    function not6() {
        alert("Merhaba, sayfa yüklendi!");
    }

    window.onload = function () {
        not6();
    }
</script> -->


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
                    <h2 class="main-content-title tx-24 mg-b-5">All Customers.</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">My Customers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Customers</li>
                    </ol>
                </div>
            </div>

            <!-- End Page Header -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">All Customers
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-header border-bottom-0">
                            <div class="main-content-label text-center"></div>
                        </div>
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-lg-2">
                                    <div class="mg-b-20">
                                        <select title="Company Name" id="CompanySearch" name="CompanySearch"
                                                class="selectpicker">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mg-b-20">
                                        <select title="Country Name" id="CountrySearch" name="CountrySearch"
                                                class="selectpicker">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" name="reset" onclick="reset()" value=""
                                            class="btn btn-primary ripple">
                                        Reset</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                       id="example">
                                    <thead class="text-center">
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Country</th>
                                        <th>Phone No</th>
                                        <th>Tax No / TC. No</th>
                                        <th>Bank Name</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <?php foreach ($customer as $item):?>
                                        <tr>
                                            <td ><?=$item['companyName']?></td>
                                            <td ><?=$item['countryName']?></td>
                                            <td ><?=$item['faxNumber']?></td>
                                            <td ><?=$item['taxAdministration']?></td>
                                            <td ><?=$item['bankName']?></td>
                                        </tr>
                                    <?php endforeach;?>
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

    var example=$('#example').DataTable({
        scrollX: '200px',
        scrollY: '500px',
        pageLength: 10,
        scrollCollapse: true,
            ordering:false,
        dom: 'Bfrtip',
        buttons: [   {
            extend: 'excelHtml5',
            title: 'All_Customers'
        },
            {
                extend: 'pdfHtml5',
                title: 'All_Customers',
                orientation: 'landscape',},
            'copy',   'print'
        ]
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
    function reset(){
        $('#example').dataTable().fnFilter('');//global searching
        $("#CompanySearch").val([]);//select option değerlerini sıfırlar
        $("#CountrySearch").val([]);

        example.columns(0).search("").draw();
        example.columns(1).search("").draw();

        setsearchvalues('CompanySearch',0,example);
        setsearchvalues('CountrySearch',1,example);

        matchingsinglesearch('CompanySearch',0,example);
        matchingsinglesearch('CountrySearch',1,example);

        $('.selectpicker').selectpicker('refresh');
    }
</script>
</body>
</html>
