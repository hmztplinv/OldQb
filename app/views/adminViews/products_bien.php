<?php require 'mainPageAdmin/header_admin.php'; ?>
<style>
    .dataTables_scrollBody
    {
        overflow-x:hidden !important;
        overflow-y:auto !important;
    }
</style>
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
                        <li class="breadcrumb-item active" aria-current="page">BİEN Products</li>

                    </ol>

                </div>
            </div>

            <!-- End Page Header -->
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card custom-card">
                    <div class="card-header custom-card-header">
                        <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">Filter
                        </h5>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-4 col-lg-4 col-xl-4"> <div class="form-group" <?=Customer::get_customer_by_userid()['marketType']!=3 ? ' hidden ': ''?>>
                                <select onchange="sendclick()" class="form-control select2-with-search filtero">
                                    <option label="Origin"></option>
                                    <?php foreach($origon as $item): ?>
                                        <option value="<?= $item['product_origin']?>" <?= (get('origin')==$item['product_origin']) ? 'selected' : '' ?>> <?= $item['product_origin']==1? 'QUA':'BIEN' ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div></div>
                        <div class="row">

                            <div class="col-md-4 col-lg-4 col-xl-4">  <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter1">
                                        <option label="Product Name"></option>
                                        <?php foreach($collection as $item): ?>
                                            <option value="<?= $item['collection']?>" <?= (get('collection')==$item['collection']) ? 'selected' : '' ?>> <?= $item['collection'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                            <div class="col-md-4 col-lg-4 col-xl-4">  <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter2">
                                        <option label="Size"></option>
                                        <?php foreach($size as $item): ?>
                                            <option value="<?= $item['size']?>" <?= (get('size')==$item['size']) ? 'selected' : '' ?>> <?= $item['size'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                            <div class="col-md-3 col-lg-3 col-xl-3">   <div class="form-group">
                                        <select onchange="sendclick()" class="form-control select2-with-search filter3">
                                            <option label="Family Name"></option>
                                            <?php foreach($name as $item): ?>
                                                <option value="<?= $item['name']?>" <?= (get('name')==$item['name']) ? 'selected' : '' ?>> <?= $item['name'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div></div>
                            </div>

                        <div class="row">

                            <div class="col-md-4 col-lg-4 col-xl-4"> <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter4">
                                        <option label="Type"></option>
                                        <?php foreach($cins as $item): ?>
                                            <option value="<?= $item['cins']?>" <?= (get('cins')==$item['cins']) ? 'selected' : '' ?>> <?= $item['cins'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                            <div class="col-md-4 col-lg-4 col-xl-4">     <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter5">
                                        <option label="Thickness"></option>
                                        <?php foreach($thickness as $item): ?>
                                            <option value="<?= $item['thickness']?>" <?= (get('thickness')==$item['thickness']) ? 'selected' : '' ?>> <?= $item['thickness'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                            <div class="col-md-3 col-lg-3 col-xl-3">   <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter6">
                                        <option label="Process"></option>
                                        <?php foreach($reclap as $item): ?>
                                            <option value="<?= $item['reclap']?>" <?= (get('reclap')==$item['reclap']) ? 'selected' : '' ?>> <?= $item['reclap'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 col-lg-4 col-xl-4">  <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter7">
                                        <option label="Color"></option>
                                        <?php foreach($color as $item): ?>
                                            <option value="<?= $item['color']?>" <?= (get('color')==$item['color']) ? 'selected' : '' ?>> <?= $item['color'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                            <div class="col-md-4 col-lg-4 col-xl-4"> <div class="form-group">
                                    <select onchange="sendclick()" class="form-control select2-with-search filter8">
                                        <option label="Finish"></option>
                                        <?php foreach($matParlak as $item): ?>
                                            <option value="<?= $item['matParlak']?>" <?= (get('matParlak')==$item['matParlak']) ? 'selected' : '' ?>> <?= $item['matParlak'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xl-4">  <a class="btn text-white ripple btn-primary btn-block" onclick="sendclick()">Apply Filter</a></div>
                            <div class="col-md-4 col-lg-4 col-xl-4">      <a class="btn ripple btn-primary btn-block" href="<?= site_url('admin/products_bien?page=').($selectpage) ?>">Reset</a></div>
                        </div>








                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row row-sm">

                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card custom-card transcation-crypto">
                        <div class="card-header custom-card-header">
                            <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0">BİEN  Products
                            </h5>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
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

                                        <th class="text-custom text-center">Color</th>
                                        <th class="text-custom text-center">Quality</th>

                                        <th class="text-custom text-center">Pictures </th>
                                        <th class="text-custom text-center">Document </th>
                                        <th hidden class="text-custom text-center">Pictures </th>
                                        <th hidden class="text-custom text-center">Document </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($productsfeatures as $product):?>
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

                                            <td align="center"><?=$product['color']?></td>
                                            <td align="center"><?=$product['quality']?></td>
                                            <?php $doc=File::check_document_existence_by_product_id($product['id']);$pic=File::check_pictures_existence_by_product_id($product['id']);?>

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
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link <?php if ($selectpage<2){echo 'hidden';} else{'active';}?>" href="<?php if($pageproductcount>$selectpage){echo site_url('admin/products_bien?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Prev</a></li>
                                    <?php for($x = 1; $x < $pageproductcount+1; $x++):?>
                                        <li class="page-item <?php if($selectpage<9){
                                            if($x<18) {
                                                if ($x==$selectpage){echo ' select';}
                                            }
                                            else{ echo 'hidden';}
                                        }else if($selectpage>$pageproductcount-9){
                                            if($x>$pageproductcount-17){
                                                if ($x==$selectpage){echo ' select';}
                                            }else{echo 'hidden';}
                                        }else{
                                            if ($x<$selectpage+9 and  $x>$selectpage-9 ){
                                                if ($x==$selectpage){echo 'select';}
                                            }
                                            else{echo 'hidden';}
                                        } ?>"><a class="page-link <?php if($x==$selectpage){echo 'active';}?>" href="<?=site_url('admin/products_bien?page=').$x?><?= get('origin')!='' ? '&origin='.get('origin'):''?><?= get('collection')!='' ? '&collection='.get('collection'):''?><?= get('size')!='' ? '&size='.get('size'):''?><?= get('name')!='' ? '&name='.get('name'):''?><?= get('cins')!='' ? '&cins='.get('cins'):''?><?= get('thickness')!='' ? '&thickness='.get('thickness'):''?><?= get('surface')!='' ? '&surface='.get('surface'):''?><?= get('reclap')!='' ? '&reclap='.get('reclap'):''?><?= get('matParlak')!='' ? '&matParlak='.get('matParlak'):''?><?= get('color')!='' ? '&color='.get('color'):''?><?= get('quality')!='' ? '&quality='.get('quality'):''?>"><?php echo $x?></a></li>
                                    <?php endfor;?>
                                    <li class="page-item"><a class="page-link" <?php if (ceil($pageproductcount)<=$selectpage){echo 'hidden';} else{'active';}?> href="<?php if($pageproductcount>$selectpage){echo site_url('admin/products_bien?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Next</a></li>
                                </ul>
                            </nav>
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

        $(".shopping_cart").click(function() {

            var classNames = $(this).attr("class").split(" ");
            var index = $('.shopping_cart').index(this);
            if(classNames[1]!="shoping_active"){
                $(this).removeClass("addcart");
                $(this).addClass("shoping_active");
                div='<div class="media"><div class="media-body"><p><strong>'+document.getElementsByClassName("new_title")[index].innerHTML+'</strong></p><p>Price:'+document.getElementsByClassName("new_price")[index].innerHTML+'</p></div></div>';
                $(".shopping_dropdown").children().eq(0).before(div);
                document.getElementById("cartcount").innerHTML=parseInt(document.getElementById("cartcount").innerHTML)+1;
            }
        });
        $('.addcart').click(function (e) {
            var id =$(this).data('id');
            $.post("<?= admin_url('products_bien') ?>", {
                new_cart: id,
            }, function (result) {

            })
        });

        function sendclick() {
            select = document.getElementsByClassName("form-control");
            array = ['&origin=','&collection=','&size=','&name=','&cins=','&thickness=','&reclap=','&color=','&matParlak='];
            var string='products_bien?page=1';
            for(let x = 0; x < select.length; x++){
                if(select[x].value != undefined) {
                    if(select[x].value!=''){
                        string+=array[x]+select[x].value;
                    }
                }
            }
            window.location.href = string;
        }

        $('select').attr('data-size', '5');

        $('select').click(function() {
            $('.selectpicker').selectpicker('refresh');
        });



    </script>
<script>
    function prudoct_add() {
        var dropdown = document.getElementById("shopping_show");
        var dropdownMenu = dropdown.querySelector(".dropdown-menu");

        if (!dropdown.classList.contains("show")) {
            dropdown.classList.add("show");
            dropdownMenu.classList.add("show");

            // Dropdown'u 2 saniye sonra gizle
            setTimeout(function () {
                dropdown.classList.remove("show");
                dropdownMenu.classList.remove("show");
            }, 2000);
        }
    }
</script>

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
  var example = $('#products').DataTable({
    info:false,
    paging:false,
      scrollX: false,

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

