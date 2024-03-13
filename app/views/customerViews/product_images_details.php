<?php require 'mainPageCustomer/header_customer.php'; ?>
    <style>

        #image:hover{
            transform: translate(0, -15px);
            transition: transform 0.5s;
            filter: brightness(50%);
        }
    </style>
    <div class="container mt-5 " style="  width: 100%">
        <div class="row" >
            <div class="col-4 "style="text-align: center"><h5>Abella</h5></div>
            <div class="col-4 "style="text-align: center "><h1>Abella</h1></div>
            <div class="col-4 "style="text-align: right ; width: 150%">
                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #0a4966;color: white">
                        Diğer Koleksiyonlar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Bahçe</a>
                        <a class="dropdown-item" href="#">Banyo</a>
                        <a class="dropdown-item" href="#">Dış Cephe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container" style="width: 100%">
    <div class="row " style="margin-left: 15%">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.bienseramik.com.tr/uploads/collections/abel.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.bienseramik.com.tr/uploads/collections/albero-60x60-1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.bienseramik.com.tr/uploads/collections/andorra.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<div class="container mt-5" style="width: 100%; ">
    <div class="row" style="margin-left: 15%">
        <div class="col-12" style="text-align: center">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="width: 500px;color: #0a4966">
                            Koleksiyon Ürünler
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div  class="row mt-4" style="width: 150% ;">
                                <div class=" ml-3 ">
                                    <a href="product_images_details"><div id="image" >
                                            <img   src="https://www.bienseramik.com.tr/uploads/collections/t_abel.png" style="width: 270px" >
                                            <h3> Abella  </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class=" ml-3 ">
                                    <a href="product_images_details"><div id="image" >
                                            <img   src="https://www.bienseramik.com.tr/uploads/collections/t_anticotto-bianco-60x60.png" style="width: 270px" >
                                            <h3> Abella  </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class=" ml-3 ">
                                    <a href="product_images_details"><div id="image" >
                                            <img   src="https://www.bienseramik.com.tr/uploads/collections/t_artemoderna-120x180-2.png" style="width: 270px" >
                                            <h3> Abella  </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="width: 500px;color: #0a4966">
                            Dökümanlar
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"style="width: 500px ;color: #0a4966" >
                             Benzer Ürünler
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div  class="row mt-4" style="width: 150% ;">
                                <div class=" ml-3 ">
                                    <a href="product_images_details"><div id="image" >
                                            <img   src="https://www.bienseramik.com.tr/uploads/collections/t_astoria_genel_30x90_45x45-(1)(renk-ayrimli)-900x900.jpg" style="width: 270px" >
                                            <h3> Abella  </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class=" ml-3 ">
                                    <a href="product_images_details"><div id="image" >
                                            <img   src="https://www.bienseramik.com.tr/uploads/collections/t_belgium-stone-54a19f1f[1].jpg" style="width: 270px" >
                                            <h3> Abella  </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class=" ml-3 ">
                                    <a href="product_images_details"><div id="image" >
                                            <img   src="https://www.bienseramik.com.tr/uploads/collections/t_atalier900.jpg" style="width: 270px" >
                                            <h3> Abella  </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'mainPageCustomer/footer_customer.php'?>