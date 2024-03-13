<?php require 'mainPageCustomer/header_customer.php'; ?>

<style>
    .product-grid .product-image img {
        /* width: 100%; */
        height: ;
        width: 100%;
        height: ;
        300px
        object-fit: contain;
    }
    select{
        limit:5
    }
</style>

<body class="ltr main-body leftmenu">


<!-- Page -->
<div class="page">

    <?php require 'mainPageCustomer/sidebar_customer.php'; ?>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Create Order.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Order</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-4 col-sm-6 col-lg-3 ">
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
                                        <div class="form-group" <?=Customer::get_customer_by_userid()['marketType']!=3 ? ' hidden ': ''?>>
                                            <select onchange="sendclick()" class="form-control select2-with-search filtero">
                                                <option label="Origin"></option>
                                                <?php foreach($origon as $item): ?>
                                                    <option value="<?= $item['product_origin']?>" <?= (get('origin')==$item['product_origin']) ? 'selected' : '' ?>> <?= $item['product_origin']==1? 'QUA':'BIEN' ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter1">
                                                <option label="Product Name"></option>
                                                <?php foreach($collection as $item): ?>
                                                    <option value="<?= $item['collection']?>" <?= (get('collection')==$item['collection']) ? 'selected' : '' ?>> <?= $item['collection'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter2">
                                                <option label="Size"></option>
                                                <?php foreach($size as $item): ?>
                                                    <option value="<?= $item['size']?>" <?= (get('size')==$item['size']) ? 'selected' : '' ?>> <?= $item['size'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter3">
                                                <option label="Family Name"></option>
                                                <?php foreach($name as $item): ?>
                                                    <option value="<?= $item['name']?>" <?= (get('name')==$item['name']) ? 'selected' : '' ?>> <?= $item['name'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter4">
                                                <option label="Type"></option>
                                                <?php foreach($cins as $item): ?>
                                                    <option value="<?= $item['cins']?>" <?= (get('cins')==$item['cins']) ? 'selected' : '' ?>> <?= $item['cins'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter5">
                                                <option label="Thickness"></option>
                                                <?php foreach($thickness as $item): ?>
                                                    <option value="<?= $item['thickness']?>" <?= (get('thickness')==$item['thickness']) ? 'selected' : '' ?>> <?= $item['thickness'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter6">
                                                <option label="Process"></option>
                                                <?php foreach($reclap as $item): ?>
                                                    <option value="<?= $item['reclap']?>" <?= (get('reclap')==$item['reclap']) ? 'selected' : '' ?>> <?= $item['reclap'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter7">
                                                <option label="Color"></option>
                                                <?php foreach($color as $item): ?>
                                                    <option value="<?= $item['color']?>" <?= (get('color')==$item['color']) ? 'selected' : '' ?>> <?= $item['color'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select onchange="sendclick()" class="form-control select2-with-search filter8">
                                                <option label="Finish"></option>
                                                <?php foreach($matParlak as $item): ?>
                                                    <option value="<?= $item['matParlak']?>" <?= (get('matParlak')==$item['matParlak']) ? 'selected' : '' ?>> <?= $item['matParlak'] ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>

                                        <a class="btn text-white ripple btn-primary btn-block" onclick="sendclick()">Apply Filter</a>
                                        <a class="btn ripple btn-primary btn-block" href="<?= site_url('customer/new_order?page=').($selectpage) ?>">Reset</a>
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-lg-9 ">
                        <div class="row row-sm">
                            <?php if(!empty($productsfeatures)){ foreach ($productsfeatures as $item):
                                ?>
                                <?php   $price=Order::get_product_by_api($item['id'],$item['currency'],$item['product_origin']);
                                ?>
                                    <?php if (!(empty($price))&&!(empty($price['fobStationFactor']))):?>
                                    <?php foreach ($profits as $profit){ if($profit["genus_name"]==$item['cins']){ $profit_price= $profit["profit"];} } ?>
<?php
                                    $rawPrice = number_format($price['price1'] + ($price['price1'] * $profit_price / 100), 2) + $price['fobStationFactor'];

                                    $roundedPrice = round($rawPrice, 2); // İlk olarak, sayıyı normal şekilde yuvarla

                                    if ($customer['round'] == 1) {
                                        // Yukarı yuvarlama işlemi (ceil) burada 0.05 eklenerek yapılıyor
                                        $roundedPrice = ceil($roundedPrice / 0.05) * 0.05;
                                    } elseif ($customer['round'] == 2) {
                                        // Aşağı yuvarlama işlemi (floor) burada 0.05 çıkartılarak yapılıyor
                                        $roundedPrice = floor($roundedPrice / 0.05) * 0.05;
                                    }
                                    ?>

                                <div class="col-md-6 col-xl-4 ">
                                <div class="card custom-card">
                                    <div class="p-0 ht-100p">
                                        <div class="product-grid" style="">
                                            <div class="product-image">

                                                   <a href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>" class="image">
                                                        <?php $photos=File::get_images_by_product_id($item['id']);  ?>
                                                    <img class="pic-1" alt="product-image-1"   src="<?php if (empty($photos)){echo public_url("images/quaexample.jpg") ;}
                                                                else{echo public_url("product/img/").$photos[0]['fileName'];}?>" style="max-width: 50rem">
                                                </a>
                                                <div class="product-link">

                                                    <a onclick="prudoct_add()" href="#" id="liveToastBtn" class="shopping_cart addcart" data-id="<?=$item["id"]?>" data-sqm="<?=number_format($price['totalquan'],2)?>" data-origin="<?=$item["product_origin"]?>" data-currency="<?=$item["currency"]?>" data-collection="<?=$item["collection"]?>" data-price="<?=number_format($roundedPrice,2) ?>">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Add to cart</span>
                                                    </a>
                                                    <a href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>">
                                                        <i class="fas fa-eye"></i>
                                                        <span>Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a class="new_title" href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>"><?php echo $item["collection"]; ?></a></h3>
                                                <div class="price">


                                                    <span class="text-black me-2"><b>Stock  :</b><?=$price["totalStock"]!=null && $price["totalStock"]!=''? number_format($price["totalStock"],2,',','.'): '0,00' ?></span>
                                                    <span class="text-danger">Price :
                                                         <?php foreach ($profits as $profit){ if($profit["genus_name"]==$item['cins']){ $profit_price= $profit["profit"];} } ?>
<!--                                                        <span class="new_price">--><?php //=number_format(( ( $price['price1'] * ( 1 + ($profit_price/100)) ) ),2) ?><!--</span> --><?php //=$item['currency']?><!--</span>-->

                                                        <?php

echo '<span class="new_price">' . number_format($roundedPrice, 2) . '</span> ' . $item['currency'];
?>



<!--                                                        <span class="new_price">--><?php //=number_format(( ( $price['price1'] * ( 1 + ($profit_price/100)) ) + ( $customer['transportType'] == 'EXW' ? 0 : ($customer['transportType'] == 'FOB' && ( $price['fobStationFactor'] != NULL || $price['fobStationFactor'] != '' ) ? $price['fobStationFactor'] : ($customer['transportType'] == 'FOT' && ( $price['stationFactor'] != NULL || $price['stationFactor'] != '' ) ? $price['stationFactor'] : 0)))),2) ?><!--</span> --><?php //=$item['currency']?><!--</span>-->
                                            </div>

                                                <?php if ($customer['productionDate']==1):?>
                                                <?php $prod=Products::check_production_program_by_id($item['id']);?>
                                                <p><b>PRODUCTION DATE :</b> <?php if ($prod=='No Production'){echo 'No Production';}else{echo date('d-m-Y', strtotime($prod));} ?></p>
                                                <?php endif;?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php endif;?>
                          <?php endforeach; }else{?>
                                <div class="col-12 text-center mt-5">
                                    <h2 class="mt-5">Aradığınız kriterde ürün bulunamadı!!</h2>
                                </div>
                            <?php }?>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled"><a class="page-link <?php if ($selectpage<2){echo 'hidden';} else{'active';}?>" href="<?php if($pageproductcount>$selectpage){echo site_url('customer/new_order?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Prev</a></li>
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
                                } ?>"><a class="page-link <?php if($x==$selectpage){echo 'active';}?>" href="<?=site_url('customer/new_order?page=').$x?><?= get('origin')!='' ? '&origin='.get('origin'):''?><?= get('collection')!='' ? '&collection='.get('collection'):''?><?= get('size')!='' ? '&size='.get('size'):''?><?= get('name')!='' ? '&name='.get('name'):''?><?= get('cins')!='' ? '&cins='.get('cins'):''?><?= get('thickness')!='' ? '&thickness='.get('thickness'):''?><?= get('surface')!='' ? '&surface='.get('surface'):''?><?= get('reclap')!='' ? '&reclap='.get('reclap'):''?><?= get('matParlak')!='' ? '&matParlak='.get('matParlak'):''?><?= get('color')!='' ? '&color='.get('color'):''?><?= get('quality')!='' ? '&quality='.get('quality'):''?>"><?php echo $x?></a></li>
                                <?php endfor;?>
                                <li class="page-item"><a class="page-link" <?php if (ceil($pageproductcount)<=$selectpage){echo 'hidden';} else{'active';}?> href="<?php if($pageproductcount>$selectpage){echo site_url('customer/new_order?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
</div>
    <!-- End Main Content-->
    <?php require 'mainPageCustomer/footer_customer.php'; ?>
    <script>

    $(".shopping_cart").click(function() {
    var classNames = $(this).attr("class").split(" ");
    var index = $('.shopping_cart').index(this);
        if (classNames[1] != "shoping_active") {
            $(this).removeClass("addcart");
            $(this).addClass("shoping_active");

            div = '<div class="media"><div class="media-body"><div class="row"><p><strong>' + document.getElementsByClassName("new_title")[index].innerHTML + '</strong></p><p>Price:' + document.getElementsByClassName("new_price")[index].innerHTML + '</p></div></div><button class="btn btn-primary remove-item deletecart" type="submit" name="deletecart">X</button></div>';

            if ($(".shopping_dropdown").children().length === 0) {
                $(".shopping_dropdown").append(div);
            } else {
                $(".shopping_dropdown").children().eq(0).before(div);
            }

            // Yeni eklenen öğeyi görünür hale getir
            $(".shopping_dropdown").show();

            // Yeni eklenen çarpı butonlarına tıklama olayını ekle
            $(".remove-item").on("click", function() {
                // Öğeyi kaldır
                $(this).parent().remove();

                // Sepet sayısını güncelle
                document.getElementById("cartcount").innerHTML = parseInt(document.getElementById("cartcount").innerHTML) - 1;

                // Eğer sepet boşsa gizle
                if ($(".shopping_dropdown").children().length === 0) {
                    $(".shopping_dropdown").hide();
                }
            });
        }

});


      $('.addcart').click(function (e) {
    var id = $(this).data('id');
    var price = $(this).data('price');
    var sqm = $(this).data('sqm');
    var dataToSend = { new_cart: id + ',' + price+ ','+sqm };

    $.post("<?= customer_url('new_order') ?>", dataToSend, function (result) {
alert(result)
    });
});


        function sendclick() {
            select = document.getElementsByClassName("form-control");
            array = ['&origin=','&collection=','&size=','&name=','&cins=','&thickness=','&reclap=','&color=','&matParlak='];
            var string='new_order?page=1';
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



