<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <!-- theme meta -->
    <meta name="theme-name" content="sleek" />
    <title>QBDigitals | Müşteri</title>
    <link href="../public/icons/apple-icon-180x180.png" rel="apple-touch-icon" sizes="144x144">
    <link href="../public/icons/favicon2.ico" rel="shortcut icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="../assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href='../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='../assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>


    <link href='../assets/plugins/toastr/toastr.min.css' rel='stylesheet'>







    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />

    <!-- FAVICON -->
    <link href="../assets/img/favicon.png" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>

<div id="toaster"></div>

<!-- ====================================
——— WRAPPER
===================================== -->
<div class="wrapper">




    <!-- ====================================
      ——— LEFT SIDEBAR WITH OUT FOOTER
    ===================================== -->
    <aside class="left-sidebar bg-sidebar">
        <div class="sidebar sidebar-with-footer" id="sidebar">
            <!-- Aplication Brand -->
            <div class="app-brand" style="background-color: transparent;">

                <a href="" title="">


                </a>
            </div>

            <hr class="separator mb-0">
            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="index.html">
                            <span class="mdi mdi-home">   ANASAYFA</span>
                        </a>
                    </li>
                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="customer_detail.html">
                            <span class="mdi mdi-account">    Hesabım</span>
                        </a>
                    </li>
                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="products.html">
                            <span class="mdi mdi-star-circle">    Ürünler</span>
                        </a>
                    </li>
                    <li class="has-sub expand">
                        <a class="sidenav-item-link" href="new_order.html">
                            <span class="mdi mdi-plus-circle">    Sipariş Oluştur</span>
                        </a>
                    </li>
                    <li class="has-sub expand">
                        <a aria-controls="app" aria-expanded="false" class="sidenav-item-link" data-target="#app"
                           data-toggle="collapse" href="javascript:void(0)">
                            <span class="mdi mdi-bookmark">   Siparişlerim</span><b class="caret"></b>
                        </a>
                        <ul class="collapse " data-parent="#sidebar-menu" id="app">
                            <div class="sub-menu">
                                <li class="">
                                    <a class="sidenav-item-link" href="orders.html">
                                        <span class="nav-text mdi mdi-bookmark-checks">Tüm Siparişlerim</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="sidenav-item-link" href="active_orders.html">
                                        <span class="nav-text">Aktif Siparişlerim</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="sidenav-item-link" href="complated_orders.html">
                                        <span class="nav-text">Tamamlanan Siparişlerim</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sidebar-footer">

                <div class="sidebar-footer-content">
                    <hr class="separator mb-0"/>
                    <button class="btn-subtle-light btn-block mt-2 mb-0">
                        <a href="index.html">
                            <img class="responsive-img" height="50%" src="../public/images/qbdigitals.png" width="50%">
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </aside>


    <!-- ====================================
  ——— PAGE WRAPPER
  ===================================== -->
    <div class="page-wrapper">

        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control" placeholder="Search"
                               autofocus autocomplete="off" />
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu custom-dropdown">
                            <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                                <i class="mdi mdi-bell-outline text-white"></i>
                            </button>

                            <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                                <div class="card-header card-header-border-bottom px-3">
                                    <h2>Notifications</h2>
                                </div>

                                <div class="card-body px-0 py-3">
                                    <ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab" role="tablist">
                                        <li class="nav-item mx-3 my-0 py-0">
                                            <a class="nav-link active pb-3" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">All (11)</a>
                                        </li>

                                        <li class="nav-item mx-3 my-0 py-0">
                                            <a class="nav-link pb-3" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Msgs (6)</a>
                                        </li>

                                        <li class="nav-item mx-3 my-0 py-0">
                                            <a class="nav-link pb-3" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Others (5)</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent3">
                                        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u2.jpg" alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Aaren</h4>
                                                                <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification media-active">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u1.jpg" alt="Image">
                                                            <span class="status active"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Abril</h4>
                                                                <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                                                <span class="font-size-12 font-weight-medium text-white">
                                        <i class="mdi mdi-clock-outline"></i> Just now...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u5.jpg" alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Emma</h4>
                                                                <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification event-active">

                                                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                            <i class="mdi mdi-calendar-check font-size-20"></i>
                                                        </div>

                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">New event added</h4>
                                                                <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 10 min ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>






                                            </ul>
                                        </div>

                                        <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u6.jpg" alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">William</h4>
                                                                <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u7.jpg" alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Camble</h4>
                                                                <p class="last-msg">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification media-active">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u1.jpg" alt="Image">
                                                            <span class="status active"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Abril</h4>
                                                                <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                                                <span class="font-size-12 font-weight-medium text-white">
                                        <i class="mdi mdi-clock-outline"></i> Just now...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle" src="../assets/img/user/u2.jpg" alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Aaren</h4>
                                                                <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>



                                            </ul>
                                        </div>

                                        <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification event-active">

                                                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                            <i class="mdi mdi-calendar-check font-size-20"></i>
                                                        </div>

                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">New event added</h4>
                                                                <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 10 min ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">

                                                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                            <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                                        </div>

                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Sales report</h4>
                                                                <p class="last-msg font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">

                                                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                            <i class="mdi mdi-account-multiple-check font-size-20"></i>
                                                        </div>

                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Add request</h4>
                                                                <p class="last-msg font-size-14">Add Dany Jones as your contact consequat nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim.</p>

                                                                <button type="button" class="my-1 btn btn-sm btn-success">Accept</button>
                                                                <button type="button" class="my-1 btn btn-sm btn-secondary">Delete</button>

                                                                <span class="font-size-12 font-weight-medium text-secondary d-block">
                                        <i class="mdi mdi-clock-outline"></i> 5 min ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)" class="media media-message media-notification">

                                                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                            <i class="mdi mdi-server-network-off font-size-20"></i>
                                                        </div>

                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Server overloaded</h4>
                                                                <p class="last-msg font-size-14">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                                                <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                      </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="dropdown-menu dropdown-menu-right d-none">
                                <li class="dropdown-header">You have 5 notifications</li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-plus"></i> New user registered
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-remove"></i> User deleted
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-supervisor"></i> New client
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-server-network-off"></i> Server overloaded
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a class="text-center" href="#"> View All </a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="../public/images/avatars/profile.jpg" class="user-image" alt="User Image" />
                                <span class="d-none d-lg-inline-block">Enes Demirel</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="../public/images/avatars/profile.jpg" class="img-circle" alt="User Image" />
                                    <div class="d-inline-block">
                                        Enes Demirel <small class="pt-1">enes@quatrading.com</small>
                                    </div>
                                </li>

                                <li>
                                    <a href="user-profile.html">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-email"></i> Message
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                </li>
                                <li class="right-sidebar-in">
                                    <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default">
                            <div class="card-header card-header-border-bottom">
                                <h2>Cari Kart Oluştur</h2>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="company" style="margin-bottom: 0;">Firmanın Tam Ünvanı:</label>
                                            <input type="text" class="form-control" id="company" name="company" placeholder="Stones Enter BV" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="adress" style="margin-bottom: 0;">Adresi:</label>
                                            <input type="text" class="form-control" id="adress" name="adress" placeholder="Vonderveg 25 7468 DC Enter The Netherlands" disabled>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phonenumber" style="margin-bottom: 0;">Telefon Numarası:</label>
                                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="0031(0)547-38-59-16" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="fax" style="margin-bottom: 0;">Faks Numarası:</label>
                                            <input type="text" class="form-control" id="fax" name="fax">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email" style="margin-bottom: 0;">E-Posta Adresi:</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="info@regge-tegels.nl" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact" style="margin-bottom: 0;">İrtibat Kurulacak Kişi Adı Soyadı:</label>
                                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Bart Knol" disabled>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tax" style="margin-bottom: 0;">Vergi Dairesi:</label>
                                            <input type="text" class="form-control" id="tax" name="tax">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="taxnumber" style="margin-bottom: 0;">Vergi Numarası / T.C. Kimlik Numarası:</label>
                                            <input type="text" class="form-control" id="taxnumber" name="taxnumber" placeholder="VAT Nr NL859557169" disabled>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="bank" style="margin-bottom: 0;">Çalıştığı Banka Adı ve Şubesi:</label>
                                            <input type="text" class="form-control" id="bank" name="bank">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="ıban" style="margin-bottom: 0;">İban Numarası:</label>
                                            <input type="text" class="form-control" id="ıban" name="ıban">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="coefficient" style="margin-bottom: 0;">Müşteri Katsayısı:</label>
                                            <input type="text" class="form-control" id="coefficient" name="coefficient">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="loadingmethod" style="margin-bottom: 0;">Yükleme Yöntemi:</label>
                                            <input type="text" class="form-control" id="loadingmethod" name="loadingmethod">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="termamount" style="margin-bottom: 0;">Vade Tutarı:</label>
                                            <input type="text" class="form-control" id="termamount" name="termamount">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="paymenttype" style="margin-bottom: 0;">Ödeme şekli:</label>
                                            <input type="text" class="form-control" id="paymenttype" name="paymenttype">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                        <button type="submit" class="btn btn-primary btn-default">Kaydet</button>
                                        <button type="submit" class="btn btn-secondary btn-default">İptal Et</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    Copyright &copy; <span id="copy-year"></span>. All Right Reserved.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </footer>

    </div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->


<!-- <script type="module">
  import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

  const el = document.createElement('pwa-update');
  document.body.appendChild(el);
</script> -->

<!-- Javascript -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/plugins/simplebar/simplebar.min.js"></script>

<script src='../assets/plugins/charts/Chart.min.js'></script>
<script src='../assets/js/chart.js'></script>




<script src='../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
<script src='../assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
<script src='../assets/js/vector-map.js'></script>

<script src='../assets/plugins/daterangepicker/moment.min.js'></script>
<script src='../assets/plugins/daterangepicker/daterangepicker.js'></script>
<script src='../assets/js/date-range.js'></script>








<script src='../assets/plugins/toastr/toastr.min.js'></script>












<script src="../assets/js/sleek.js"></script>
<link href="../assets/options/optionswitch.css" rel="stylesheet">
<script src="../assets/options/optionswitcher.js"></script>
</body>
</html>
<script>
    /* Formatting function for row details - modify as you need */
    function format () {
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
            '<tr>'+
            '<td>Full name:</td>'+
            '<td>Name...</td>'+
            '</tr>'+
            '<tr>'+
            '<td>Extension number:</td>'+
            '<td>123</td>'+
            '</tr>'+
            '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
            '</tr>'+
            '</table>';
    }

    $(document).ready(function() {
        var table = $('#expendable-data-table').DataTable( {
            "className":      'details-control',
            "order": [[0, 'asc']],
            "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
            "pageLength": 20,
            "dom": '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
        });

        // Add event listener for opening and closing details
        $('#expendable-data-table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        });
    });
</script>
