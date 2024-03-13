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
                        <h2 class="main-content-title tx-24 mg-b-5">Waiting for Booking No.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Freights</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Waiting for Booking No</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->


                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Waiting for Booking No
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select title="Customer Name" id="customerNameSearch" class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="reset" onclick="reset()"
                                                class="btn btn-primary ripple">Reset</button>
                                    </div>
                                </div>
                                <div class="table-responsive  mt-3  ">
                                    <table class="table table-hover dataTable key-buttons text-nowrap w-100"
                                           id="example">
                                        <thead >
                                        <tr>
                                            <th >#</th>
                                            <th>Customer Name</th>
                                            <th >Country</th>
                                            <th >Real Firm</th>
                                            <th >Booking No</th>
                                            <th >Price</th>
                                            <th >Created Date</th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                        <?php foreach ($sentoffers as $sentoffer):?>
                                            <tr>
                                                <td>
                                                    <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                       <a href="freight_update?booking=1&id=<?=$sentoffer['id']?>" >
                                                           <i class="ti ti-search text-primary"></i>
                                                       </a>
                                                    </span>

                                                    </td>
                                                <td style="text-align:left"><?=$sentoffer['companyName']?></td>
                                                <td style="text-align:left"><?=$sentoffer['countryName']?></td>
                                                <td style="text-align:left"><?=$sentoffer['realFirm']?></td>
                                                <td style="text-align:left"><?=$sentoffer['bookingNo']?></td>
                                                <td style="text-align:left"><?=$sentoffer['navlunSoldPrice']?></td>
                                                <td style="text-align:left"><?=$sentoffer['createdDate']?></td>
                                            </tr>
                                        <?php endforeach;?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'mainPageOperation/footer_operation.php'?>
<script>
        $(document).ready(function () {
        reset();
    });
        var example = $('#example').DataTable( {
        dom: 'Bfrtip',
        pageLength: 1000,

        buttons: [
    {
        extend: 'excelHtml5',
        title: 'Offer_Freights'
    },
    {
        extend: 'pdfHtml5',
        ordering:false,
        title: 'Offer_Freights',
        orientation: 'landscape',
        pageSize: 'LEGAL'
    },
        'copy', 'print',
        ]
    } );


        function setsearchvalues(id, index, table) {
        var values = table.column(index, {search: 'applied'}).data().toArray();
        //insert to array currently values done

        //clear select opitons
        var itemSelectorOption = $('#' + id + ' option');
        itemSelectorOption.remove();
        $('#' + id).selectpicker('refresh');
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
        $.each(values, function (key, value) {
        $('#' + id).append($('<option>', {value: value}).text(value));
    });
    }

        function matchingsinglesearch(id, index, table) {
        document.getElementById(id).onchange = function () {
            table.columns(index).search("^" + document.getElementById(id).value + '$', true).draw();
        }
    }
        function standartsinglesearch(id, index, table) {
        document.getElementById(id).onchange = function () {
            table.columns(index).search(document.getElementById(id).value, true).draw();
        }
    }

        function standartmultiplesearch(id, index, table) {//not match! for match you need to make value "^"+value+"$"
        document.getElementById(id).onchange = function () {
            var selected = [];
            for (var option of document.getElementById(id).options) {
                if (option.selected) {
                    selected.push(option.value);
                }
            }
            selected = selected.join("|");
            table.columns(index).search(selected, true, false).draw();
        }
    }


        function reset() {
        $('#example').dataTable().fnFilter('');//global searching
        $("#customerNameSearch").val([]);//select option değerlerini sıfırlar
        example.columns(1).search("").draw();
        setsearchvalues('customerNameSearch', 1, example);
        standartsinglesearch('customerNameSearch', 1, example);
        $('.selectpicker').selectpicker('refresh');
    }

</script>

<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>
