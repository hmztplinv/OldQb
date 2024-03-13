<?php require 'mainPageAdmin/header_admin.php'; ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Products.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">QUA Products</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">QUA Products
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
                                            <select data-live-search=true  title="Product No" class="selectpicker form-control" id="productNoSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Product Name" class="selectpicker form-control" id="productNameSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Collection Name" class="selectpicker form-control" id="productCollectionSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Size" class="selectpicker form-control" id="productSizeSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Thickness" class="selectpicker form-control" id="productThicknessSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Surface" class="selectpicker form-control" id="productSurfaceSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Color" class="selectpicker form-control" id="productColorSearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Quality" class="selectpicker form-control" id="productQualitySearch">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Picture" class="selectpicker form-control" id="pictureSearch">
                                                <option >Added</option>
                                                <option >Empty</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mg-b-20">
                                            <select data-live-search=true  title="Document" class="selectpicker form-control" id="documentSearch">
                                                <option >Added</option>
                                                <option >Empty</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="submit" name="reset" onclick="reset()" value=""
                                                class="btn btn-primary ripple"><i class="ti ti-back-left"></i>
                                            Reset</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="products" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-custom text-center">Product No</th>
                                            <th class="text-custom text-center">Product Name</th>
                                            <th class="text-custom text-center">Collection Name</th>
                                            <th class="text-custom text-center">Size</th>
                                            <th class="text-custom text-center">Thickness</th>
                                            <th class="text-custom text-center">Process</th>
                                            <th class="text-custom text-center">Surface</th>
                                            <th class="text-custom text-center">Color</th>
                                            <th class="text-custom text-center">Quality</th>
                                            <th class="text-custom text-center">Origin </th>
                                            <th class="text-custom text-center">Pictures </th>
                                            <th class="text-custom text-center">Document </th>
                                            <th hidden class="text-custom text-center">Pictures </th>
                                            <th hidden class="text-custom text-center">Document </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($products as $product):?>
                                            <tr>
                                                <td align="center">
                                                    <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                            <a target="_blank" href="product_details?id=<?=$product['id']?>">
                                                                <i class="ti ti-search text-primary"></i>
                                                            </a>
                                                        </span>
                                                </td>
                                                <td align="center"><?=$product['id']?></td>
                                                <td align="center"><?=$product['mtext']?></td>
                                                <td align="center"><?=$product['name']?></td>
                                                <td align="center"><?=$product['size']?></td>
                                                <td align="center"><?=$product['thickness']?></td>
                                                <td align="center"><?=$product['reclap']?></td>
                                                <td align="center"><?=$product['surface']?></td>
                                                <td align="center"><?=$product['color']?></td>
                                                <td align="center"><?=$product['quality']?></td>
                                                <?php $doc=File::check_document_existence_by_product_id($product['id']);$pic=File::check_pictures_existence_by_product_id($product['id']);?>
                                                <td align="center"><?=$product['product_origin']==1 ? 'Qua' : 'Bien'?></td>
                                                <td align="center">
                                                    <i <?=$pic == 1 ? ' ' : ' hidden '?> class="mdi mdi-lightbulb-on" style="color: #00800f; font-size: 25px;"></i>
                                                    <i <?=$pic == 0 ? ' ' : ' hidden '?> class="mdi mdi-lightbulb-on" style="color: #ff0000; font-size: 25px;"></i>
                                                </td>
                                                <td align="center">
                                                    <i <?=$doc == 1 ? ' ' : ' hidden '?> class="mdi mdi-lightbulb-on" style="color: #00800f; font-size: 25px;"></i>
                                                    <i <?=$doc == 0 ? ' ' : ' hidden '?> class="mdi mdi-lightbulb-on" style="color: #ff0000; font-size: 25px;"></i>
                                                </td>
                                                <td hidden align="center"><?=$pic == 0 ? 'Empty' : 'Added'?></td>
                                                <td hidden align="center"><?=$doc == 0 ? 'Empty' : 'Added'?></td>
                                            </tr>
                                        <?php endforeach;   ?>
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

<?php require 'mainPageAdmin/footer_admin.php'; ?>


<script>
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
</script>

<script>

    $(document).ready(function () {
        var example = $('#products').DataTable({
            scrollX: '200px',
            scrollY: '500px',
            scrollCollapse: true,
            paging: true,
            pageLength: 50,
            dom: 'Bfrtip',
            buttons: [
            {
                extend: 'excelHtml5',
                title: 'All_Orders'
            },
            {
                extend: 'pdfHtml5',
                title: 'All_Orders',
                orientation: 'landscape'
            },
            'copy', 'print'
            ]
        });
        example.clear().rows.add(newData).draw();
        example.page.info().recordsTotal = 2000;
        example.draw();
        reset();
    });

    function reset() {
        $('#example').dataTable().fnFilter('');
        $("#productNoSearch").val([]);
        example.columns(1).search("").draw();
        setsearchvalues('productNoSearch', 1, example);
        matchingsinglesearch('productNoSearch', 1, example);

        $("#productNameSearch").val([]);
        example.columns(2).search("").draw();
        setsearchvalues('productNameSearch', 2, example);
        matchingsinglesearch('productNameSearch', 2, example);

        $("#productCollectionSearch").val([]);
        example.columns(3).search("").draw();
        setsearchvalues('productCollectionSearch', 3, example);
        matchingsinglesearch('productCollectionSearch', 3, example);

        $("#productSizeSearch").val([]);
        example.columns(4).search("").draw();
        setsearchvalues('productSizeSearch', 4, example);
        matchingsinglesearch('productSizeSearch', 4, example);

        $("#productThicknessSearch").val([]);
        example.columns(5).search("").draw();
        setsearchvalues('productThicknessSearch', 5, example);
        matchingsinglesearch('productThicknessSearch', 5, example);

        $("#productSurfaceSearch").val([]);
        example.columns(6).search("").draw();
        setsearchvalues('productSurfaceSearch', 6, example);
        matchingsinglesearch('productSurfaceSearch', 6, example);

        $("#productColorSearch").val([]);
        example.columns(7).search("").draw();
        setsearchvalues('productColorSearch', 7, example);
        matchingsinglesearch('productColorSearch', 7, example);

        $("#productQualitySearch").val([]);
        example.columns(9).search("").draw();
        setsearchvalues('productQualitySearch', 9, example);
        matchingsinglesearch('productQualitySearch', 9, example);

        $("#documentSearch").val([]);
        example.columns(14).search("").draw();
        matchingsinglesearch('documentSearch', 14, example);

        $("#pictureSearch").val([]);
        example.columns(14).search("").draw();
        matchingsinglesearch('pictureSearch', 14, example);


        $('.selectpicker').selectpicker('refresh');
    }
</script>

