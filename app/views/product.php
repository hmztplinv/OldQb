<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Qbdigitals - Seller Panel Dashboard"/>
    <meta name="author" content="Qbdigitals Technologies Private Limited" />
    <meta name="keywords" content="admin,dashboard,panel"/>

    <!-- Favicon -->
    <link rel="icon" href="<?=public_url('images/brand/apple-icon-180x180.png')?>" type="image/x-icon2" />

    <!-- Title -->
    <title>QBDigitals | Product</title>

    <!-- Bootstrap css-->
    <link id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>'" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet" />

    <link href="<?=public_url('plugins/datatable/css/dataTables.bootstrap5.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/datatable/css/buttons.bootstrap5.min.css')?>." rel="stylesheet">
    <link href="<?=public_url('plugins/datatable/css/responsive.bootstrap5.css')?>" rel="stylesheet">

    <!-- Style css-->
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet">

    <!-- INTERNAL COLOR PICKER css-->
    <link href="<?=public_url('plugins/pickr-master/themes/classic.min.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/pickr-master/themes/monolith.min.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/pickr-master/themes/nano.min.css')?>" rel="stylesheet" />  <!-- Select2 css -->
    <link href="<?=public_url('plugins/select2/css/select2.min.css')?>" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?=public_url('plugins/multipleselect/multiple-select.css')?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

    <!--Bootstrap-datepicker css-->
    <link rel="stylesheet" href="<?=public_url('plugins/bootstrap-datepicker/bootstrap-datepicker.css')?>">

    <!-- Internal Datetimepicker-slider css -->
    <link href="<?=public_url('plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')?>" rel="stylesheet">

    <!-- Internal Specturm-color picker css-->
    <link href="<?=public_url('plugins/spectrum-colorpicker/spectrum.css')?>" rel="stylesheet">

    <!-- Internal Ion.rangeslider css-->
    <link href="<?=public_url('plugins/ion-rangeslider/css/ion.rangeSlider.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')?>" rel="stylesheet">
</head>
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
<body class="ltr main-body leftmenu error-1">

<div class="page">
    <!-- Main Content-->
    <div class="main-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Product</h2>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-md-2 col-sm-6 col-lg-2 ">
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12">
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
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-6 col-lg-10 ">
                        <div class="row row-sm">
                            <?php if(!empty($productsfeatures)){ foreach ($productsfeatures as $item): ?>
                                <?php   $price=Order::get_product_by_api($item['id'],$item['currency'],$item['product_origin']);?>
                                <?php if ($price!=0): ?>
                                    <div class="col-md-6 col-xl-4 ">
                                        <div class="card custom-card">
                                            <div class="p-0 ht-100p">
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>" class="image">
                                                            <?php $photos=File::get_images_by_product_id($item['id']);  ?>
                                                            <img class="pic-1" alt="product-image-1"   src="<?php if (empty($photos)){echo public_url("images/quaexample.jpg") ;}
                                                            else{echo public_url("product/img/").$photos[0]['fileName'];}?>" style="max-width: 50rem">
                                                        </a>                                                        <div class="product-link">
                                                            <a class="w-100" target="_blank" href="<?= site_url('product_detail?id=').$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>">
                                                                <i class="fas fa-eye"></i>
                                                                <span>Quick View</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3 class="title"><a class="new_title" href="<?= 'product_detail?id='.$item["id"].'&currency='.$item["currency"].'&origin='.$item["product_origin"]?>"><?php echo $item["collection"]; ?></a></h3>
                                                        <div class="price">
                                                            <span class="text-black me-2"><b>Stock  :</b><?=$price["totalStock"]!=null && $price["totalStock"]!=''? number_format($price["totalStock"],2,',','.'): '0,00' ?></span>                                                        </div>
                                                        <?php $prod=Products::check_production_program_by_id($item['id']);?>

                                                        <p><b>PRODUCTION DATE :</b> <?php if ($prod=='No Production'){echo 'No Production';}else{echo date('d-m-Y', strtotime($prod));} ?></p>

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
                                <li class="page-item disabled"><a class="page-link <?php if ($selectpage<2){echo 'hidden';} else{'active';}?>" href="<?php if($pageproductcount>$selectpage){echo site_url('product?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Prev</a></li>
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
                                    } ?>"><a class="page-link <?php if($x==$selectpage){echo 'active';}?>" href="<?=site_url('product?page=').$x?><?= get('origin')!='' ? '&origin='.get('origin'):''?><?= get('collection')!='' ? '&collection='.get('collection'):''?><?= get('size')!='' ? '&size='.get('size'):''?><?= get('name')!='' ? '&name='.get('name'):''?><?= get('cins')!='' ? '&cins='.get('cins'):''?><?= get('thickness')!='' ? '&thickness='.get('thickness'):''?><?= get('surface')!='' ? '&surface='.get('surface'):''?><?= get('reclap')!='' ? '&reclap='.get('reclap'):''?><?= get('matParlak')!='' ? '&matParlak='.get('matParlak'):''?><?= get('color')!='' ? '&color='.get('color'):''?><?= get('quality')!='' ? '&quality='.get('quality'):''?>"><?php echo $x?></a></li>
                                <?php endfor;?>
                                <li class="page-item"><a class="page-link" <?php if (ceil($pageproductcount)<=$selectpage){echo 'hidden';} else{'active';}?> href="<?php if($pageproductcount>$selectpage){echo site_url('product?page='.($selectpage+1)).(get('origin')!='' ? '&origin='.get('origin'):'').(get('collection')!='' ? '&collection='.get('collection'):'').(get('size')!='' ? '&size='.get('size'):'').(get('name')!='' ? '&name='.get('name'):'').(get('cins')!='' ? '&cins='.get('cins'):'').(get('thickness')!='' ? '&thickness='.get('thickness'):'').(get('surface')!='' ? '&surface='.get('surface'):'').(get('reclap')!='' ? '&reclap='.get('reclap'):'').(get('matParlak')!='' ? '&matParlak='.get('matParlak'):'').(get('color')!='' ? '&color='.get('color'):'').(get('quality')!='' ? '&quality='.get('quality'):'') ;}?>">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End Main Content-->
</div>

<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="<?=public_url('plugins/jquery/jquery.min.js')?>"></script>


<!-- Bootstrap js-->
<script src="<?=public_url('plugins/bootstrap/js/popper.min.js')?>"></script>
<script src="<?=public_url('plugins/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Select2 js-->
<script src="<?=public_url('plugins/select2/js/select2.min.js')?>"></script>
<script src="<?=public_url('js/select2.js')?>"></script>

<!-- Internal Data Table js -->
<script src="<?=public_url('plugins/datatable/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/dataTables.bootstrap5.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/buttons.bootstrap5.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/jszip.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/buttons.html5.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/buttons.print.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/js/buttons.colVis.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/dataTables.responsive.min.js')?>"></script>
<script src="<?=public_url('plugins/datatable/responsive.bootstrap5.min.js')?>"></script>


<!-- Internal Chart.Bundle js-->
<script src="<?=public_url('plugins/chart.js/Chart.bundle.min.js')?>"></script>
<script src="<?=public_url('js/chart.chartjs.js')?>"></script>

<!-- Peity js-->
<script src="<?=public_url('plugins/peity/jquery.peity.min.js')?>"></script>

<!-- Perfect-scrollbar js -->
<script src="<?=public_url('plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>

<!-- Sidemenu js -->
<script src="<?=public_url('plugins/sidemenu/sidemenu.js')?>"></script>

<!-- Bootstrap js-->
<script src="<?=public_url('plugins/bootstrap/js/popper.min.js')?>"></script>
<script src="<?=public_url('plugins/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Owl Carousel js-->
<script src="<?=public_url('plugins/owl-carousel/owl.carousel.js')?>"></script>

<!-- Internal Apexchart js-->
<script src="<?=public_url('js/apexcharts.js')?>"></script>

<!-- Sidebar js -->
<script src="<?=public_url('plugins/sidebar/sidebar.js')?>"></script>

<!-- Internal Polyfills js-->
<script src="<?=public_url('plugins/polyfill/polyfill.min.js')?>"></script>
<script src="<?=public_url('plugins/polyfill/classList.min.js')?>"></script>
<script src="<?=public_url('plugins/polyfill/polyfill_mdn.js')?>"></script>

<!-- Internal Morris js -->
<script src="<?=public_url('plugins/raphael/raphael.min.js')?>"></script>
<script src="<?=public_url('plugins/morris.js/morris.min.js')?>"></script>

<!--- Internal Notify js -->
<script src="<?=public_url('plugins/notify/js/notifIt.js')?>"></script>
<script src="<?=public_url('plugins/notify/js/notifit-custom.js')?>"></script>

<!-- Sparkline js-->
<script src="<?=public_url('plugins/jquery-sparkline/jquery.sparkline.min.js')?>"></script>

<!-- Internal Dashboard js-->
<script src="<?=public_url('js/crypto-dashboard.js')?>"></script>

<!-- Color Theme js -->
<script src="<?=public_url('js/themeColors.js')?>"></script>

<!-- Sticky js -->
<script src="<?=public_url('js/sticky.js')?>"></script>

<!-- Custom js -->
<script src="<?=public_url('js/custom.js')?>"></script>
<script>
    function sendclick() {
        select = document.getElementsByClassName("form-control");
        array = ['&origin=','&collection=','&size=','&name=','&cins=','&thickness=','&surface=','&reclap=','&matParlak=','&color=','&quality='];
        var string='product?page=1';
        for(let x = 0; x < select.length; x++){
            if(select[x].value != undefined) {
                if(select[x].value!=''){
                    string+=array[x]+select[x].value;
                }
            }
        }
        window.location.href = string;
    }
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


</body>
</html>