<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="Albattros Global" name="description">
    <meta name="author" content="Albatross Global">

    <title>Albattros Global</title>
    <!-- ================= Favicon ================== -->
    <link href="<?=public_url('images/global.png')?>" rel="apple-touch-icon" sizes="144x144">
    <link href="<?=public_url('images/global.png')?>" rel="shortcut icon">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet"/>
    <link href="<?=public_url('css/lib/calendar2/pignose.calendar.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/lib/chartist/chartist.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/lib/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/lib/themify-icons.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/lib/owl.carousel.min.css')?>" rel="stylesheet" />
    <link href="<?=public_url('css/lib/owl.theme.default.min.css')?>" rel="stylesheet" />
    <link href="<?=public_url('css/lib/weather-icons.css')?>" rel="stylesheet" />
    <link href="<?=public_url('css/lib/menubar/sidebar.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/lib/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/lib/helper.css')?>" rel="stylesheet">
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet">

    <link href="<?=public_url('css/lib/sweetalert/sweetalert.css')?>" rel="stylesheet">


</head>
<style>
    .header{
        background: linear-gradient(270deg, #fbffff, #30737e);
        background-image: linear-gradient(290deg, #b2d1d5, #30737e);
    }
    .logo{
        background-color: #348593;
    }
    .sidebar{
        background-color: #348593;
    }
    .sidebar .nano-content>ul li>a {
        background-color:#348593;
    }
    .sidebar .nano-content>ul>li.active>a, .sidebar .nano-content>ul>li.open>a, .sidebar .nano-content>ul>li>ul {
        background: linear-gradient(to right, #59aebd, #59aebd);
    }
    .sidebar .nano-content>ul li>a:hover {
        background: linear-gradient(to right, #59aebd , #59aebd);
    }
</style>
<body>

<?php require 'sidebar_operation.php' ?>

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-bell text-white"></i>
                            <div class="pulse-css"></div>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="<?=public_url('images/avatar/3.jpg')?>" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">5 members joined today </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="<?=public_url('images/avatar/3.jpg')?>" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="<?=public_url('images/avatar/3.jpg')?>" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="<?=site_url('images/avatar/3.jpg')?>" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div  class="header-icon">
                            <img alt="User Image" src="https://www.pngarts.com/files/3/Avatar-PNG-High-Quality-Image.png" style="height: 30px; border-radius: 0.25rem;">
                            <span class="user-avatar text-white">Meltem Özer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
