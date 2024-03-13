<?php require 'mainPageOperation/header_operation.php'?>

    <body class="ltr main-body leftmenu">


    <!-- Loader -->
    <div id="global-loader">
        <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->
    <!-- Page -->
<div class="page">

<?php require 'mainPageOperation/sidebar_operation.php' ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">All Orders.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Orders</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">All Orders
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
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select title="Product Code" id="productionCodeSearch" name="orderCompanySearch"
                                                    class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mg-b-20">
                                            <select title="Product Name" id="productNameSearch" name="orderSizeSearch"
                                                    class="selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button type="submit" name="reset" onclick="reset()"
                                                class="btn btn-primary ripple">Reset</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="example" class="table table-hover dataTable key-buttons text-nowrap w-100">
                                        <thead class="text-center">
                                        <tr>
                                            <th>Production Code</th>
                                            <th>Production Name</th>
                                            <th>Size</th>
                                            <th>Tickness</th>
                                            <th>Surface</th>
                                            <th>Color</th>
                                            <th>Quality</th>
                                            <th>Unit</th>
                                            <th>Number</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        <? foreach ($allorders as $allorder):?>
                                            <tr>
                                                <td><?=$allorder['productId']?></td>
                                                <td><?=$allorder['collection']?></td>
                                                <td><?=$allorder['size']==NULL?'no info':$allorder['size']?></td>
                                                <td><?=$allorder['thickness']==NULL?'no info':$allorder['thickness']?></td>
                                                <td><?=$allorder['surface']==NULL?'no info':$allorder['surface']?></td>
                                                <td><?=$allorder['color']==NULL?'no info':$allorder['color']?></td>
                                                <td><?=$allorder['quality']==NULL?'no info':$allorder['quality']?></td>
                                                <td><?=$allorder['pcUnit']?></td>
                                                <td><?=$allorder['quantity']?></td>
                                            </tr>
                                        <? endforeach;?>
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

<?php require 'mainPageOperation/footer_operation.php' ?>

    <script>
        var example=$('#example').DataTable( {
            dom: 'Bfrtip',
            ordering:false,
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
            $("#productionCodeSearch").val([]);//select option değerlerini sıfırlar
            $("#productNameSearch").val([]);
            example.columns(0).search("").draw();
            example.columns(1).search("").draw();
            setsearchvalues('productionCodeSearch', 0, example);
            setsearchvalues('productNameSearch', 1, example);
            matchingsinglesearch('productionCodeSearch', 0, example);
            matchingsinglesearch('productNameSearch', 1, example);
            $('.selectpicker').selectpicker('refresh');
        }
    </script>



    </body>

</html>
