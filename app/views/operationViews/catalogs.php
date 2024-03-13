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
                        <h2 class="main-content-title tx-24 mg-b-5">Catalogs</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catalogs</li>
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
                                    <select data-live-search=true title="Origin Name"  name="" id="originSearch" class="selectpicker form-control">
                                        <option>QUA</option>
                                        <option>BIEN</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 mb-8">
                                    <button onclick="reset()" class="btn ripple btn-main-primary">Reset</button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover dataTable key-buttons text-nowrap w-100">
                                        <thead class="text-left">
                                        <tr>
                                            <th class="text-left">Download</th>
                                            <th>Origin</th>
                                            <th>Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/qua/QUA_2cm_Collection.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>QUA</td>
                                            <td>2 Cm Collection</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/qua/QUA_2023_Products.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>QUA</td>
                                            <td>2023 Products</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/qua/QUA_Exclusive_Catalogue.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>QUA</td>
                                            <td>Exclusive Catalogue</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/qua/QUA_Exclusive_Catalogue_Global_mail.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>QUA</td>
                                            <td>Exclusive Catalogue Global</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/qua/QUA_Genel_Katalog_2023.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>QUA</td>
                                            <td>Genel Katalog</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/qua/QUA_WALL_CATALOG_2022.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>QUA</td>
                                            <td>Wall Catalog 2022</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px"><a target="_blank" href="<?=public_url('catalogs/bien/BIEN_EXCLUSIVE_CATALOG.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>Exclusive Catalog</td>
                                        </tr>
                                        <tr>
                                            <td ><a target="_blank" href="<?=public_url('catalogs/bien/BIEN_EXCLUSIVE_CATALOG.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>Exclusive Catalog</td>
                                        </tr>
                                        <tr>
                                            <td ><a target="_blank" href="<?=public_url('catalogs/bien/Bien_Genel_Katalog_2023.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>Genel Katalog 2023</td>
                                        </tr>
                                        <tr>
                                            <td ><a target="_blank" href="<?=public_url('catalogs/bien/BIEN_GENERAL_CATALOG.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>General Catalog</td>
                                        </tr>
                                        <tr>
                                            <td><a target="_blank" href="<?=public_url('catalogs/bien/Bien_Over_Size.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>Over Size</td>
                                        </tr>
                                        <tr>
                                            <td><a target="_blank" href="<?=public_url('catalogs/bien/BIEN_SMALL_SIZE_CATALOG.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>Small Size Catalog</td>
                                        </tr>
                                        <tr>
                                            <td><a target="_blank" href="<?=public_url('catalogs/bien/BIEN_WALL_TILE_ENG.pdf')?>"><i class="ti ti-download text-primary"></i></a></td>
                                            <td>BIEN</td>
                                            <td>Wall Tile Eng</td>
                                        </tr>
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
    <?php require 'mainPageOperation/footer_operation.php'?>

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
            pageLength: 10,
            dom: 'Bfrtip',
            buttons: [{

                extend: 'excelHtml5',
                title: 'All_Orders'
            },
                {
                    extend: 'pdfHtml5',
                    title: 'All_Orders'},
                'copy',     'print'
            ]
        });
    </script>

    <script>
        function reset(){
            $('#example').dataTable().fnFilter('');//global searching
            $("#originSearch").val([]);//select option değerlerini sıfırlar
            example.columns(1).search("").draw();
            setsearchvalues('originSearch',1, example);
            matchingsinglesearch('originSearch',1,example);

            $('.selectpicker').selectpicker('refresh');
        }

        $( document ).ready(function() {
            reset();
        });
    </script>