<!DOCTYPE html>
<html lang="en" id="demo">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta name="description" content="Qbdigitals - Customer Panel Dashboard"/>
    <meta name="author" content="Qbdigitals Technologies Private Limited" />
    <meta name="keywords" content="admin,dashboard,panel"/>

    <!-- Multislider css -->
    <link href="<?=public_url('plugins/multislider/multislider.css')?>" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="<?=public_url('images/brand/apple-icon-180x180.png')?>" type="image/x-icon" />
    <!-- Title -->
    <title>QBDigitals | Customer</title>
    <!-- Bootstrap css-->
    <link id="style" href="<?=public_url('plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"/>
    <!-- Icons css-->
    <link href="<?=public_url('plugins/web-fonts/icons.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/web-fonts/font-awesome/font-awesome.min.css')?>" rel="stylesheet"/>
    <link href="<?=public_url('plugins/web-fonts/plugin.css')?>" rel="stylesheet" />
    <!--- Internal  Notify -->
    <link href="<?=public_url('plugins/notify/css/notifIt.css')?>" rel="stylesheet">
    <!-- DATA TABLE CSS -->
    <link href="<?=public_url('plugins/datatable/css/dataTables.bootstrap5.css')?>" rel="stylesheet" />
    <link href="<?=public_url('plugins/datatable/css/buttons.bootstrap5.min.css')?>" rel="stylesheet">
    <link href="<?=public_url('plugins/datatable/css/responsive.bootstrap5.css')?>" rel="stylesheet" />
    <!-- Style css-->
    <link href="<?=public_url('css/style.css')?>" rel="stylesheet" />


    <!-- Owl-carousel css-->
    <link href="<?=public_url('plugins/owl-carousel/owl.carousel.css')?>" rel="stylesheet" />

    <!-- Select2 css-->
    <link href="<?=public_url('plugins/select2/css/select2.min.css')?>" rel="stylesheet" />
    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?=public_url('plugins/multipleselect/multiple-select.css')?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
</head>
<style>
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .loader-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #ffffff;
    }

    .loader-spinner {
        border: 4px solid #ffffff;
        border-top: 4px solid transparent;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }

    .loader-text {
        margin-top: 10px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }
        25% {
            transform: translateX(-5px);
        }
        50% {
            transform: translateX(5px);
        }
        75% {
            transform: translateX(-5px);
        }
    }

    .shake-icon {
        animation: shake 5s infinite;
    }
</style>
<div id="loader">
    <div class="loader-content">
        <div class="loader-spinner"></div>
        <div class="loader-text">Loading...</div>
    </div>
</div>
<body class="ltr main-body leftmenu">
<!-- Loader -->
<div id="global-loader">
    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="200px" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">
    <!-- Main Header-->
    <div class="main-header side-header sticky">
        <div class="main-container container-fluid">
            <div class="main-header-left">
                <a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
                <div class="hor-logo">
                    <a class="main-logo" href="<?=customer_url('index')?>">
                        <img src="<?=public_url('images/qbdigitals.png')?>" class="header-brand-img desktop-logo" alt="logo">
                        <img src="<?=public_url('images/qbdigitals.png')?>" class="header-brand-img desktop-logo-dark" alt="logo">
                    </a>
                </div>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="<?=customer_url('index')?>"><img src="<?=public_url('images/qbdigitals.png')?>" class="mobile-logo" alt="logo" height="50px"></a>
                    <a href="<?=customer_url('index')?>"><img src="<?=public_url('images/qbdigitals.png')?>" class="mobile-logo-dark"
                                         alt="logo" height="50px"></a>
                </div>

            </div>
            <div class="main-header-right">
                <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button><!-- Navresponsive closed -->
                <div
                        class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2 ms-auto">
                            <!-- Notification -->
                            <div class="dropdown main-header-notification">
                                <a class="nav-link icon shake-icon" href="">
                                    <i class="fe fe-bell header-icons"></i>
                                    <span class="badge bg-danger nav-link-badge"><?=count(Notification::get_notifications())?></span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="header-navheading">
                                        <p class="main-notification-text">You have <?=count(Notification::get_notifications())?> unread notification
                                        </p>
                                    </div>
                                    <?php $notifications = Notification::get_notifications();
                                    if (count($notifications) <= 5) $maxnot = count($notifications); else $maxnot = 5;
                                    for ($i = 0; $i < $maxnot; $i++): ?>
                                    <div class="main-notification-list ">
                                        <div class="media new">
                                            <a href="<?=customer_url('freight_pending')?>">
                                            <div class="media-body">
                                                 <p>
                                                    <strong><?=$notifications[$i]['senderName']?></strong>
                                                    <?= $notifications[$i]['message']?>
                                                </p>
                                                <span><?= date("Y/m/d H:i:s", strtotime($notifications[$i]['createdAt'])) ?></span>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <? endfor; ?>
                                    <div class="dropdown-footer">
                                        <a href="notification">Tüm Bildirimleri Görüntüle</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <?php if ($_SESSION['is_customer_verify']==2):?>

                            <!-- Cart -->
                            <div class="dropdown main-header-notification" id="shopping_show">
                                <a class="nav-link icon" href="">
                                    <i class="fa fa-cart-plus"></i>
                                    <?php $customer=Customer::get_customer_by_userid(); ?>
                                    <?php if ($customer['marketType']==3){
                                        $carts=Order::get_carts_market_3_by_userid(session('user_id'));
                                    }
                                    else{
                                        $carts=Order::get_carts_by_userid(session('user_id'));
                                    }?>
                                    <span class="badge bg-success nav-link-badge" id="cartcount"><?=count($carts)?></span>
                                </a>
                                <div class="dropdown-menu">

                                    <div class="main-notification-list shopping_dropdown">
                                        <?php
                                        $customercurrency=Customer::get_customer_by_userid();
                                        foreach ($carts as $cart):

                                       ;?>
                                        <?php
                                            $profit=Customer::get_profit($customer['userId']);
                                            $product=Products::get_product_detail($cart['productId'], $cart['currency'], $cart['product_origin']);
                                            $newprofit = [];

                                            foreach ($profit as $profit) {
                                                if ($profit["genus_name"] == $cart['cins']) {
                                                    $profit_price = $profit["profit"];
                                                }
                                            }

                                            $price=Order::get_product_by_api($cart['productId'],$cart['currency'],$cart['product_origin']); ?>

                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <p><strong><?=$cart['mtext']?></strong></p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="btn btn-primary deletecart" type="submit" data-id="<?=$cart['cardId']?>" name="deletecart">X</button>
                                                    </div>
                                                </div>

                                                <?php

                                                $rawPrice = number_format($price['price1'] + ($price['price1'] * $profit_price / 100), 2) + $price['fobStationFactor'];
                                                $roundedPrice = round($rawPrice, 2);

                                                if ($customer['round'] == 1) {
                                                    // Yukarı yuvarlama işlemi (ceil) burada 0.05 eklenerek yapılıyor
                                                    $roundedPrice = ceil($roundedPrice / 0.05) * 0.05;
                                                } elseif ($customer['round'] == 2) {
                                                    // Aşağı yuvarlama işlemi (floor) burada 0.05 çıkartılarak yapılıyor
                                                    $roundedPrice = floor($roundedPrice / 0.05) * 0.05;
                                                }

                                                echo '<p>Price: ' . number_format($roundedPrice, 2) . ' ' . $price['currency'] . '</p>';
                                                ?>
                                            </div>

                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <div class="dropdown-footer">
                                        <a href="cart">See All</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart -->
                            <?php endif;?>

                            <!-- Profile -->
                            <div class="dropdown main-profile-menu">
                                <a class="d-flex" href="javascript:void(0)">
										<span class="main-img-user"><img alt="avatar"
                                                                         src="<?=public_url('images/users/1.jpg')?>"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="header-navheading">
                                        <h6 class="main-notification-title"><?php
                                            $getusername = User::get_user_name();
                                            if ($getusername['roles']==0){
                                                echo 'Customer';
                                            }
                                            else if ($getusername['roles']==1){
                                                echo 'Seller';
                                            }
                                            else if ($getusername['roles']==5){
                                                echo 'Admin';
                                            }
                                            else if ($getusername['roles']==2){
                                                echo 'Admin';
                                            }
                                            else{
                                                echo 'undefined role';
                                            }
                                            ?></h6>
                                        <p class="main-notification-text"><?=$_SESSION['user_name']?></p>
                                    </div>
                                    <a class="dropdown-item border-top" href="<?=customer_url('customer_detail')?>">
                                        <i class="fe fe-user"></i> My Profile
                                    </a>
<!--                                    <a class="dropdown-item" href="profile.html">-->
<!--                                        <i class="fe fe-edit"></i> Edit Profile-->
<!--                                    </a>-->
<!--                                    <a class="dropdown-item" href="profile.html">-->
<!--                                        <i class="fe fe-settings"></i> Account Settings-->
<!--                                    </a>-->
<!--                                    <a class="dropdown-item" href="profile.html">-->
<!--                                        <i class="fe fe-settings"></i> Support-->
<!--                                    </a>-->
<!--                                    <a class="dropdown-item" href="profile.html">-->
<!--                                        <i class="fe fe-compass"></i> Activity-->
<!--                                    </a>-->
                                    <a class="dropdown-item" href="<?=site_url('logout')?>">
                                        <i class="fe fe-power"></i> Logout
                                    </a>
                                </div>
                            </div>

                            <!-- Profile -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Header-->
<?php require 'sidebar_customer.php'; ?>