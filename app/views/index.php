<?php require 'mainPageAdmin/header_seller.php'; ?>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid mb-5">
            <section id="main-content">
                <div class="row mt-5">
                    <div class="col-lg-3">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="mdi mdi-account-outline text-primary mr-4"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text text-justify">Toplam Müşteri</div>
                                    <div class="stat-digit text-primary">5300</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="mdi mdi-clipboard-plus text-warning mr-4"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text text-justify">Toplam Sipariş</div>
                                    <div class="stat-digit text-warning">1953</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="mdi mdi-clock text-danger mr-4"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text text-justify">Devam Eden<br>Sipariş</div>
                                    <div class="stat-digit text-danger">1450</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="mdi mdi-clipboard-check text-success mr-4"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text text-justify">Tamamlanan<br>Sipariş</div>
                                    <div class="stat-digit text-success">9503</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-title">
                                <h3 style="text-shadow: 1px 1px #949494;" class="text-center">Karlılık</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="bar3" width="716" height="280" style="display: block; height: 240px; width: 573px;" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-title">
                                <h3 style="text-shadow: 1px 1px #949494;" class="text-center">Hedef</h3>
                            </div>

                            <div class="card-body" activity-data-spacing="">
                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute; left:0; top:0; right:0; bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute; width:1000000px; height:1000000px; left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="activity" width="572" height="350" style="display: block; height: 240px; width: 458px;" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-6">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-title">
                                <h3 class="mb-5 text-center">Aktif İhracatlar(şirket bazında)</h3>
                            </div>
                            <div class="simplebar-content">
                                <div class="media pb-3 align-items-center justify-content-between">
                                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                        <i class="mdi mdi-cart-outline font-size-20"></i>
                                    </div>
                                    <div class="media-body pr-3 ">
                                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">QTECH Export 1</a>
                                        <p class="card-subtitle text-muted mb-1"> Progress in 74% - Last update 1d </p>
                                        <div class="progress progress-xs bg-transparent">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="2181" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                                <span class="sr-only">74% Complete</span>
                                            </div>
                                        </div>

                                    </div>
                                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                </div>

                                <div class="media py-3 align-items-center justify-content-between">
                                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                        <i class="mdi mdi-email-outline font-size-20"></i>
                                    </div>
                                    <div class="media-body pr-3">
                                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">QTECH Export 2</a>
                                        <p class="card-subtitle text-muted mb-1"> Progress in 22% - Last update 2h </p>
                                        <div class="progress progress-xs bg-transparent">
                                            <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="867" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
                                                <span class="sr-only">22% Complete</span>
                                            </div>
                                        </div>

                                    </div>
                                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                                </div>


                                <div class="media py-3 align-items-center justify-content-between">
                                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                        <i class="mdi mdi-stack-exchange font-size-20"></i>
                                    </div>
                                    <div class="media-body pr-3">
                                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">QTECH Export 3</a>
                                        <p class="card-subtitle text-muted mb-1"> Progress in 99% - Last update 2d </p>
                                        <div class="progress progress-xs bg-transparent">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="6683" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                                                <span class="sr-only">99% Complete</span>
                                            </div>
                                        </div>

                                    </div>
                                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                </div>

                                <div class="media py-3 align-items-center justify-content-between">
                                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                        <i class="mdi mdi-cart-outline font-size-20"></i>
                                    </div>
                                    <div class="media-body pr-3">
                                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">QTECH Export 4</a>
                                        <p class="card-subtitle text-muted mb-1"> Progress in 35% - Last update 4h </p>
                                        <div class="progress progress-xs bg-transparent">
                                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="112" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                                <span class="sr-only">36% Complete</span>
                                            </div>
                                        </div>

                                    </div>
                                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                </div>


                                <div class="media py-3 align-items-center justify-content-between">
                                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                        <i class="mdi mdi-cart-outline font-size-20"></i>
                                    </div>
                                    <div class="media-body pr-3">
                                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">QTECH Export 5</a>
                                        <p class="card-subtitle text-muted mb-1"> Progress in 32% - Last update 1d </p>
                                        <div class="progress progress-xs bg-transparent">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="461" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                <span class="sr-only">32% Complete</span>
                                            </div>
                                        </div>


                                    </div>
                                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                </div>


                                <div class="media py-3 align-items-center justify-content-between">
                                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                        <i class="mdi mdi-cart-outline font-size-20"></i>
                                    </div>
                                    <div class="media-body pr-3">
                                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">QTECH Export 6</a>
                                        <p class="card-subtitle text-muted mb-1"> Progress in 93% - Last update 8h </p>
                                        <div class="progress progress-xs bg-transparent">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="3981" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                                <span class="sr-only">93% Complete</span>
                                            </div>
                                        </div>


                                    </div>
                                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="card animate__animated animate__fadeInLeft">
                            <div class="card-title text-center">
                                <h3>Ekim Bant Programı</h3>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
                <?php require 'mainPageAdmin/footer_seller.php'; ?>
