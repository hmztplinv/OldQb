<?php require 'mainPageCustomer/header_customer.php'; ?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-header card-header-border-bottom bg-white">
                                <h2>Products</h2>
                            </div>
                            <div class="p-5 mt-5">
                                <div class="row">
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true  title="Product Name" class="selectpicker" id="productNameSearch">
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true title="Size" class="selectpicker"  id="productSizeSearch">
                                        </select>
                                    </div>

                                    <div class="col-sm-3 mb-2">
                                        <select data-live-search=true title="Area of Use" class="selectpicker" id="productAreaSearch">
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-8">
                                        <button type="submit" name="" onclick="reset()" value="" class="btn btn-outline-secondary btn-sm" style="margin-top:27px" ><b>Reset</b></button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="text-custom text-center">Product Name</th>
                                            <th class="text-custom text-center">Size</th>
                                            <th class="text-custom text-center">Thickness</th>
                                            <th class="text-custom text-center">Quality</th>
                                            <th class="text-custom text-center">Net Weight</th>
                                            <th class="text-custom text-center">Brut Weight</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        for($i=0;$i<count($products);$i++):
                                        ?>
                                        <tr>
                                            <td align="center"><?= $products[$i]['collection']?></td>
                                            <td align="center"><?= $products[$i]['collection']?></td>
                                            <td align="center"><?= $products[$i]['collection']?></td>
                                            <td align="center"><?= $products[$i]['collection']?></td>
                                            <td align="center"><?= $products[$i]['collection']?></td>
                                            <td align="center"><?= $products[$i]['collection']?></td>

                                        </tr>
                                        <?php endfor;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<?php require 'mainPageCustomer/footer_customer.php'; ?>

<script>
        var example=$('#example').DataTable({
            scrollX: '200px',
            scrollY: '500px',
            pageLength: 50,
            scrollCollapse: true,
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excelHtml5',
                title: 'Products'
            },
                {
                    extend: 'pdfHtml5',
                    title: 'Products'},
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
            $("#productNameSearch").val([]);//select option değerlerini sıfırlar
            $("#productSizeSearch").val([]);
            $("#productAreaSearch").val([]);
            example.columns(0).search("").draw();
            example.columns(1).search("").draw();
            example.columns(2).search("").draw();
            setsearchvalues('productNameSearch',0,example);
            setsearchvalues('productSizeSearch',1,example);
            setsearchvalues('productAreaSearch',2,example);
            matchingsinglesearch('productNameSearch',0,example);
            matchingsinglesearch('productSizeSearch',1,example);
            matchingsinglesearch('productAreaSearch',2,example);
            $('.selectpicker').selectpicker('refresh');
        }
</script>

