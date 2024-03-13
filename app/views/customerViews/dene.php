<?php require 'mainPageCustomer/header_customer.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--<link rel="stylesheet" href="https://www.alenagranite.com.tr/public/css/style.css">-->
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-3">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <div class="common-sidebar-widget">
                            <ul class="sidebar-list">
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple title="Origin" class="selectpicker" id="originSearch">
                                        <?php foreach($origon as $item): ?>
                                            <option value="<?= $item['product_origin']?>" <?= (get('origin')==$item['product_origin']) ? 'selected' : '' ?>> <?= $item['product_origin'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Collection" class="selectpicker" id="collectionSearch">
                                        <?php foreach($collection as $item): ?>
                                            <option value="<?= $item['collection']?>" <?= (get('collection')==$item['collection']) ? 'selected' : '' ?>> <?= $item['collection'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Size" class="selectpicker" id="sizeSearch">
                                        <?php foreach($size as $item): ?>
                                            <option value="<?= $item['size']?>" <?= (get('size')==$item['size']) ? 'selected' : '' ?>> <?= $item['size'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Name" class="selectpicker" id="nameSearch">
                                        <?php foreach($name as $item): ?>
                                            <option value="<?= $item['name']?>" <?= (get('name')==$item['name']) ? 'selected' : '' ?>> <?= $item['name'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Cins" class="selectpicker" id="cinsSearch">
                                        <?php foreach($cins as $item): ?>
                                            <option value="<?= $item['cins']?>" <?= (get('cins')==$item['cins']) ? 'selected' : '' ?>> <?= $item['cins'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Thickness" class="selectpicker" id="thicknessSearch">
                                        <?php foreach($thickness as $item): ?>
                                            <option value="<?= $item['thickness']?>" <?= (get('thickness')==$item['thickness']) ? 'selected' : '' ?>> <?= $item['thickness'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Surface" class="selectpicker" id="surfaceSearch">
                                        <?php foreach($surface as $item): ?>
                                            <option value="<?= $item['surface']?>" <?= (get('surface')==$item['surface']) ? 'selected' : '' ?>> <?= $item['surface'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Reclap" class="selectpicker" id="reclapSearch">
                                        <?php foreach($reclap as $item): ?>
                                            <option value="<?= $item['reclap']?>" <?= (get('reclap')==$item['reclap']) ? 'selected' : '' ?>> <?= $item['reclap'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Color" class="selectpicker" id="colorSearch">
                                        <?php foreach($color as $item): ?>
                                            <option value="<?= $item['color']?>" <?= (get('color')==$item['color']) ? 'selected' : '' ?>> <?= $item['color'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="MatParlak" class="selectpicker" id="matParlakSearch">
                                        <?php foreach($matParlak as $item): ?>
                                            <option value="<?= $item['matParlak']?>" <?= (get('matParlak')==$item['matParlak']) ? 'selected' : '' ?>> <?= $item['matParlak'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li style="margin-bottom: 25px;">
                                    <select data-live-search=true multiple  title="Quality" class="selectpicker" id="qualitySearch">
                                        <?php foreach($quality as $item): ?>
                                            <option value="<?= $item['quality']?>" <?= (get('quality')==$item['quality']) ? 'selected' : '' ?>> <?= $item['quality'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </li>
                                <li>
                                    <a class="button btn btn-primary btn-default btn-md w-100" style="background-color: #0a4966; color:#fff;" onclick="sendclick()" >Filtrele</a>
                                    <a class="button btn btn-primary btn-default btn-md w-100  mt-3" style="background-color: #0a4966" href="<?= 'dene?page='.($selectpage) ?>">Temizle</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">

                                                    <?php if(!empty($productsfeatures)){ foreach ($productsfeatures as $item): ?>
                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <a href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>">
                                                                        <img src="<?php echo public_url("images/example_img.png") ?>" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="product-content">
                                                                    <h6> <a href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>"><?php echo $item["collection"]; ?></a></h6>
                                                                    <p class="product-price">
                                                                        <span><b>Ücret:</b> <?php echo number_format($item["price"], 2); ?> </span>
                                                                        <span><b>Stok :</b> <?php if($item["totalStock"]!=null){echo $item["totalStock"];}else{echo '0';} ?></span>
                                                                    </p>
                                                                    <a class="button btn btn-primary btn-default btn-md w-100 shopping_cart addcart" data-id="<?=$item["id"]?>" data-origin="<?=$item["product_origin"]?>" data-currency="<?=$item["currency"]?>" data-collection="<?=$item["collection"]?>" data-price="<?= number_format($item["price"], 2)?>" style="background-color: #0a4966; color:#fff;" >Sepete Ekle</a>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>
                                                    <?php endforeach; }
                                                    else{?>
                                                    <div class="col-12 text-center mt-5">
                                                        <h2 class="mt-5">Aradığınız kriterde ürün bulunamadı!!</h2>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="list" class="tab-pane fade">
                                            <div class="product-list-view">
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">

                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Miro Dining Table</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$210.00</span></p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">

                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Stylish Design Chair</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price">  </p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">

                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Janus Table Lamp</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"> </p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">

                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Normal Dining chair</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"> </p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">

                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Affordances Side Table</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">

                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Hot Design Table</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"><span class="discounted-price">$153.00</span> </p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-29%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Outdoor Lock Chair</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"> </p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h4> <a href="single-product.html">Normal Dining chair</a></h4>
                                                                    <div class="product-category-rating">
                                                                                    <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                        <span class="review"><a href="#">(1 review)</a></span>
                                                                    </div>
                                                                    <p class="product-price"><span class="discounted-price">$287.00</span></p>
                                                                    <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30 mb-sm-40 mb-xs-30">
                            <div class="col">
                                <ul class="page-pagination">
                                    <li><a class="<?php if ($selectpage<2){echo 'hidden';} else{'active';}?>" href="<?php if($pageproductcount>$selectpage){echo site_url('customer/dene?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Geri</a></li>
                                    <?php for($x = 1; $x < $pageproductcount+1; $x++):?>
                                        <li class="
                                            <?php if($selectpage<9){
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
                                        } ?>"><a class="<?php if($x==$selectpage){echo 'active';}?>" href="<?=site_url('customer/dene?page=').$x?><?= get('origin')!='' ? '&origin='.get('origin'):''?><?= get('collection')!='' ? '&collection='.get('collection'):''?><?= get('size')!='' ? '&size='.get('size'):''?><?= get('name')!='' ? '&name='.get('name'):''?><?= get('cins')!='' ? '&cins='.get('cins'):''?><?= get('thickness')!='' ? '&thickness='.get('thickness'):''?><?= get('surface')!='' ? '&surface='.get('surface'):''?><?= get('reclap')!='' ? '&reclap='.get('reclap'):''?><?= get('matParlak')!='' ? '&matParlak='.get('matParlak'):''?><?= get('color')!='' ? '&color='.get('color'):''?><?= get('quality')!='' ? '&quality='.get('quality'):''?>"><?php echo $x?></a></li>
                                    <?php endfor;?>
                                    <li><a class="<?php if (ceil($pageproductcount)<=$selectpage){echo 'hidden';} else{'active';}?>" href="<?php if($pageproductcount>$selectpage){echo site_url('customer/dene?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?> ">İleri</a></li>    </ul>
                            </div>
                        </div>
                    </div>
                </div>
 <?php require 'mainPageCustomer/footer_customer.php'; ?>
<script>
    $('.addcart').click(function (e) {
        var id =$(this).data('id');
        $.post("<?= customer_url('new_order') ?>", {
            new_cart: id,
        }, function (result) {

        })
    });

    function sendclick() {
        select = document.getElementsByClassName("selectpicker");
        array = ['&origin=','&collection=','&size=','&name=','&cins=','&thickness=','&surface=','&reclap=','&matParlak=','&color=','&quality='];
        var string='dene?page=1';
        for(let x = 0; x < select.length; x++){
            if(select[x].value != undefined) {
                if(select[x].value!=''){
                    string+=array[x]+select[x].value;
                }
            }
        }
       window.location.href = string;
    }
    $(".shopping_cart").click(function() {
        var classNames = $(this).attr("class").split(" ");
        if(classNames[7]!="shoping_active"){
            $(this).addClass("shoping_active");
            $(this).text("Sepete Eklendi");
            show = $(".shopping_show");
            show.addClass("show");
            setTimeout(function(){
                show.removeClass("show");
            }, 1000);
            shopping_dropdown  = $(".shopping_dropdown");
            shopping_dropdown.css({ "position": "absolute", "transform": "translate3d(-207px, 43px, 0px)", "top": "0px", "left": "0px", "will-change": "transform"});
            div='<div class="notification-ui_dd-content" data-id="'+$(this).data("id")+'" data-origin="'+$(this).data("origin")+'" data-currency="'+$(this).data("currency")+'"><h6 class="p-2">'+$(this).data("collection")+'<span style="float: right;">'+$(this).data("price")+' </span><h6> </div>'
            $(".shopping_dropdown").children().eq(1).before(div);
            document.getElementById("cartcount").innerHTML=parseInt(document.getElementById("cartcount").innerHTML)+1;
        }else{
            document.querySelector('.notification-ui_dd-content[data-id="'+$(this).data("id")+'"]').remove();
            $(this).removeClass("shoping_active");
            $(this).text("Sepete Ekle");
            document.getElementById("cartcount").innerHTML=parseInt(document.getElementById("cartcount").innerHTML)-1;
        }
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
