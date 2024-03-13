<?php require 'mainPageAdmin/header_admin.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="p-5 mt-5">
                    <div class="row mt-5 ml-5 justify-content-center">
                        <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                            <!-- Product Details Left -->
                            <div class="product-details-left text-center">
                                <div class="product-details-images p-5 text-center">
                                    <div class="lg-image p-5 mt-5">
                                        <img src="<?php echo public_url("images/exp1.jpg") ?>" alt="">
                                        <a href="<?php echo public_url("images/exp1.jpg") ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                    </div>
                                    <div class="col-md-12">
                                        <a class="button btn btn-secondary text-white btn-mdt">
                                            <i class="ti ti-plus"></i> Fotoğraf Ekle</a>
                                        <a class="button btn btn-secondary text-white btn-md">
                                            <i class="ti ti-close"></i> Fotoğraf Sil</a>
                                    </div>
                                </div>
                            </div>
                            <!--Product Details Left -->
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-details-content">
                                        <h2></h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-meta">
                                        <span class="posted-in">Collection: </span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="collection" name="collection" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Stok:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="stok" name="stok" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Cins:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="cins" name="cins" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Size:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="size" name="size" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Thickness:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="thickness" name="thickness" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Quality:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="quality" name="quality" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-meta">
                                        <span class="posted-in">Reclap:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="reclap" name="reclap" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Surface:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="surface" name="surface" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Color:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="color" name="color" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">MatParlak:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="MatParlak" name="MatParlak" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Üretim Tarihi:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="uretimTarihi" name="uretimTarihi" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">Price:</span>
                                        <div class="input-group input-group-sm mb-3">
                                            <input type="text" class="form-control" id="price" name="price" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a class="button btn btn-secondary text-white btn-mdt">
                                        <i class="ti ti-plus"></i> Doküman Ekle</a>
                                    <a class="button btn btn-secondary text-white btn-md">
                                        <i class="ti ti-close"></i> Doküman Sil</a>
                                    <a class="button btn btn-secondary text-white btn-md">
                                        <i class="ti ti-reload"></i> Güncelle</a>

                                </div>
                                <div class="col-md-6">
                                    Teknik Rapor: <a href="<?=public_url("docs/report.pdf")?>" target="_blank"><i class="fa-solid fa-file-pdf " style="font-size: 40px"></i></a>
                                </div>
                                <div class="col-md-6">
                                    Paketleme: <a href="<?=public_url("docs/package.xlsx")?>" target="_blank"><i class="fa-solid fa-file-excel-o " style="font-size: 40px"></i></a>
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
