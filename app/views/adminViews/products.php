<?php require 'mainPageAdmin/header_admin.php'; ?>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid mb-5">
                <section id="main-content">
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header card-header-border-bottom bg-white">
                                    <h2>Products
                                    </h2>
                                    <div style="  border: 1px;
                                              border-style: solid;
                                              border-radius: 5px;
                                              margin-bottom: 5px;
                                              border-color: #00000026;" class="row">
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Product No" class="selectpicker" id="productNoSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Product Name" class="selectpicker" id="productNameSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Size" class="selectpicker" id="productSizeSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Thickness" class="selectpicker" id="productThicknessSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Surface" class="selectpicker" id="productSurfaceSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Color" class="selectpicker" id="productColorSearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Quality" class="selectpicker" id="productQualitySearch">
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Picture" class="selectpicker" id="pictureSearch">
                                                <option >Added</option>
                                                <option >Empty</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select data-live-search=true  title="Document" class="selectpicker" id="documentSearch">
                                                <option >Added</option>
                                                <option >Empty</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-2">
                                            <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary" ><b>Reset</b></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="p-5 mt-5">
                                        <div class="table-responsive">
                                            <table id="products" class="display" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-custom text-center">Product No</th>
                                                    <th class="text-custom text-center">Product Name</th>
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
                                                        <a target="_blank" href="product_details?id=<?=$product['id']?>">
                                                            <i class="ti ti-search"></i>
                                                        </a>
                                                    </td>
                                                    <td align="center"><?=$product['id']?></td>
                                                    <td align="center"><?=$product['mtext']?></td>
                                                    <td align="center"><?=$product['size']?></td>
                                                    <td align="center"><?=$product['thickness']?></td>
                                                    <td align="center"><?=$product['reclap']?></td>
                                                    <td align="center"><?=$product['surface']?></td>
                                                    <td align="center"><?=$product['color']?></td>
                                                    <td align="center"><?=$product['quality']?></td>
                                                    <?php $doc=File::check_document_existence_by_product_id($product['id']);$pic=File::check_pictures_existence_by_product_id($product['id']);?>
                                                    <td align="center"><?=$product['product_origin']==1 ? 'Qua' : 'Bien'?></td>
                                                    <td align="center">
                                                        <i <?=$pic == 1 ? ' ' : ' hidden '?> class="fa-solid fa-lightbulb" style="color: #00800f;"></i>
                                                        <i <?=$pic == 0 ? ' ' : ' hidden '?>  class="fa-solid fa-lightbulb" style="color: #ff0000;"></i>
                                                    </td>
                                                    <td align="center">
                                                        <i <?=$doc == 1 ? ' ' : ' hidden '?> class="fa-solid fa-lightbulb" style="color: #00800f;"></i>
                                                        <i <?=$doc == 0 ? ' ' : ' hidden '?>  class="fa-solid fa-lightbulb" style="color: #ff0000;"></i>
                                                    </td>
                                                    <td hidden align="center"><?=$pic == 0 ? 'Empty' : 'Added'?></td>
                                                    <td hidden align="center"><?=$doc == 0 ? 'Empty' : 'Added'?></td>
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
                </section>
            </div>
        </div>
    </div>
<?php require 'mainPageAdmin/footer_admin.php'; ?>

<script>
    var example = $('#products').DataTable({
        scrollX: '200px',
        scrollY: '500px',
        scrollCollapse: true,
        paging: true,
        pageLength: 50, // Burada sayfa başına 50 kayıt görünecek şekilde ayarladık.
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

    $(document).ready(function () {
        reset();
    });
</script>




<script>
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

        $("#productSizeSearch").val([]);
        example.columns(3).search("").draw();
        setsearchvalues('productSizeSearch', 3, example);
        matchingsinglesearch('productSizeSearch', 3, example);

        $("#productThicknessSearch").val([]);
        example.columns(4).search("").draw();
        setsearchvalues('productThicknessSearch', 4, example);
        matchingsinglesearch('productThicknessSearch', 4, example);

        $("#productSurfaceSearch").val([]);
        example.columns(5).search("").draw();
        setsearchvalues('productSurfaceSearch', 5, example);
        matchingsinglesearch('productSurfaceSearch', 5, example);

        $("#productColorSearch").val([]);
        example.columns(6).search("").draw();
        setsearchvalues('productColorSearch', 6, example);
        matchingsinglesearch('productColorSearch', 6, example);

        $("#productQualitySearch").val([]);
        example.columns(7).search("").draw();
        setsearchvalues('productQualitySearch', 7, example);
        matchingsinglesearch('productQualitySearch', 7, example);

        $("#documentSearch").val([]);
        example.columns(13).search("").draw();
        matchingsinglesearch('documentSearch', 13, example);

        $("#pictureSearch").val([]);
        example.columns(12).search("").draw();
        matchingsinglesearch('pictureSearch', 12, example);


        $('.selectpicker').selectpicker('refresh');
    }
</script>

<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
