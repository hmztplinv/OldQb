<?php require 'mainPageAdmin/header_admin.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- Main Content-->
    <div class="main-content side-content pt-0">



        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Product Detail.</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Shipping</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Apporved Shipping</li>
                        </ol>
                    </div>
                </div>

                <!-- End Page Header -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card custom-card transcation-crypto">
                            <div class="card-header custom-card-header">
                                <h5 class="main-content-label tx-dark my-auto fw-bold tx-medium mb-0"><?=$product['mtext']?>
                                </h5>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-sm">

                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Product Name</p>
                                            <input type="text" class="form-control input-lg" id="collection" name="collection" value="<?=$product['collection']?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Type</p>
                                            <input type="text" class="form-control input-lg" id="cins" name="cins" aria-label="Small" value="<?=$product['cins']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Size</p>
                                            <input type="text" class="form-control input-lg" id="size" name="size" aria-label="Small" value="<?=$product['size']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Thickness</p>
                                            <input type="text" class="form-control input-lg" id="thickness" name="thickness" aria-label="Small" value="<?=$product['thickness']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Quality</p>
                                            <input type="text" class="form-control input-lg" id="quality" name="quality" aria-label="Small" value="<?=$product['quality']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Process</p>
                                            <input type="text" class="form-control input-lg" id="reclap" name="reclap" aria-label="Small" value="<?=$product['reclap']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Surface</p>
                                            <input type="text" class="form-control input-lg" id="surface" name="surface" aria-label="Small" value="<?=$product['surface']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Color</p>
                                            <input type="text" class="form-control input-lg" id="color" name="color" aria-label="Small" value="<?=$product['color']?>" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Finish
                                            </p>
                                            <input type="text" class="form-control input-lg" id="MatParlak" name="MatParlak" value="<?=$product['matParlak']?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mg-b-20">
                                            <p class="mg-b-0 text-primary fw-bold">Unit</p>
                                            <input type="text" class="form-control input-lg" id="pcUnit" name="price" value="<?=$product['pcUnit']?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-sm">
                                    <div class="col-lg-6">
                                        <form method="post" action="<?=admin_url('product_details').'?id='.get('id')?>" enctype="multipart/form-data">
                                            <input hidden name="product_id" value="<?=get('id')?>">
                                            <div class="col-lg-12 align-items-center">
                                                <h1 class="my-4">Fotoğraf Galerisi</h1>
                                                <span <?=count($photos) >0 ? ' hidden ' : '  '?> class="text-danger"> There is no picture here.</span>
                                                <div class="row d-flex justify-content-around">
                                                    <?php foreach ($photos as $photo):?>
                                                        <?php if ( $photo['isDeleted'] == 1 && $photo['fileType'] == 1 ):?>
                                                            <div class="row col-lg-3 col-md-3 mb-4 justify-content-between">
                                                                <div class="col-lg-6">

                                                                </div>
                                                                <a href="<?= public_url("product/img/").$photo['fileName']?> " data-fancybox="photos" class="">
                                                                    <img src="<?= public_url("product/img/").$photo['fileName']?>" alt=""  class="img-thumbnail">
                                                                </a>
                                                                <a href="<?=admin_url('product_details').'?id='.get('id').'&deleteid='.$photo['id']?>">
                                                                    <i class="ti ti-trash"></i>
                                                                    Delete
                                                                </a>
                                                            </div>
                                                        <?php endif;?>
                                                    <?php endforeach;?>
                                                </div>
                                                <div class="col-ld-12 ml-3">
                                                    <input name="upload[]" multiple required type="file">
                                                    <button type="submit" name="add_photo" value="1"
                                                            class="button btn btn-primary text-white btn-mdt mt-2">
                                                        <i class="ti ti-plus"></i>
                                                        Add Pictures
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-lg-6">
                                        <form method="post" action="<?=admin_url('product_details').'?id='.get('id')?>" enctype="multipart/form-data">
                                            <input hidden name="product_id" value="<?=get('id')?>">
                                            <div class="col-lg-12 align-items-center">
                                                <h1 class="my-4">Document</h1>
                                                <span <?=count($documents) >0 ? ' hidden ' : '  '?> class="text-danger"> There is no technical report here.</span>
                                                <?php foreach ($documents as $document):?>
                                                    <div class="row d-flex justify-content-start">
                                                        <div class="row col-lg-12 col-md-3 mb-4">
                                                            <div class="col-lg-12">
                                                                <a target="_blank"  href="<?=public_url("product/docs/").$document['fileName']?>">
                                                                    Technical Report: <i class="fa fa-file" style="font-size: 96px;"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach;?>
                                                <div class="col-ld-12 ml-3">
                                                    <input name="upload[]" multiple required type="file">
                                                    <button type="submit" name="add_document" value="1"
                                                            class="button btn btn-primary text-white btn-mdt mt-2">
                                                        <i class="ti ti-plus"></i>
                                                        Add Document
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Row End -->

            </div>
        </div>
    </div>
    <!-- Row End -->

<?php require 'mainPageAdmin/footer_admin.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script>
    $(document).ready(function() {
        // Fancybox'ı etkinleştir
        $('[data-fancybox="gallery"]').fancybox({
            // Tercihler ve seçenekler burada belirtilebilir (isteğe bağlı)
            // Örnek: transitionEffect: "slide",
            //        transitionDuration: 800,
            //        loop: true, vb.
        });
    });
</script>
