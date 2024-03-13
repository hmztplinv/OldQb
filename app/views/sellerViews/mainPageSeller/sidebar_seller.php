<!-- Main Header-->
<div class="main-header side-header sticky">
    <div class="main-container container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
            <div class="hor-logo">
                <a class="main-logo" href="index.html">
                    <img src="<?=public_url('images/brand/logo.png')?>" class="header-brand-img desktop-logo" alt="logo">
                    <img src="<?=public_url('images/brand/logo-light.png')?>" class="header-brand-img desktop-logo-dark"
                         alt="logo">
                </a>
            </div>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="index"><img src="<?=public_url('images/brand/qbdigitals.png')?>" height="50px"
                                          class="mobile-logo" alt="logo"></a>
                <a href="index"><img src="<?=public_url('images/brand/logow.png')?>" height="50px"
                                          class="mobile-logo-dark" alt="logo"></a>
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
                        <!-- Full screen -->
                        <div class="dropdown ">
                            <a class="nav-link icon full-screen-link">
                                <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                            </a>
                        </div>
                        <!-- Full screen -->
                        <!-- Notification -->
                        <div class="dropdown main-header-notification">
                            <a class="nav-link icon" href="">
                                <i class="fe fe-bell header-icons"></i>
                                <span id="cartcount" class="badge bg-danger nav-link-badge"><?=count(Notification::get_notifications())?></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <p class="main-notification-text">You have <?=count(Notification::get_notifications())?> unread notification
                                    </p>
                                </div>
                                <?php $notifications = Notification::get_notifications();

                                if (count($notifications) <= 5) $maxnot = count($notifications); else $maxnot = 5;
                                for ($i = 0; $i < $maxnot; $i++): ?>
                                    <div class="main-notification-list">
                                        <div class="media new">
                                            <div class="media-body">
                                                <a href="<?php
                                                if ($notifications[$i]['messageId']) {
                                                    echo site_url('seller/approval_customer');
                                                }
                                                ?>">
                                                <p>
                                                    <strong><?=$notifications[$i]['senderName']?></strong>
                                                    <?= $notifications[$i]['message']?>
                                                </p>
                                                <span><?= date("Y/m/d H:i:s", strtotime($notifications[$i]['createdAt'])) ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <? endfor; ?>
                                <div class="dropdown-footer">
                                    <a href="notification">Tüm Bildirimleri Görüntüle</a>
                                </div>
                            </div>
                        </div>
                        <!-- Notification -->
                        <!-- Profile -->
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="javascript:void(0)">
                  <span class="main-img-user"><img alt="avatar"
                                                   src="<?=public_url('images/users/u6.jpg')?>"></span>
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

<!-- Sidemenu -->
<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1">
            <div class="sidemenu-logo mb-5">
                <a class="main-logo" href="index">
                    <img src="<?=public_url('images/brand/qbdigitals.png')?>" height="45px"
                         class="header-brand-img desktop-logo" alt="logo" />
                    <img src="<?=public_url('images/brand/qbdigitals.png')?>" class="header-brand-img desktop-logo theme-logo"
                         alt="logo" />
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left">
                    <i class="fe fe-chevron-left"></i>
                </div>
                <ul class="menu-nav nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('seller/index')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="<?=site_url('seller/customers')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-user sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Customers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="<?=site_url('seller/new_order?page=1')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-tag sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0)">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-package sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">
                                <span class="sidemenu-label2">Orders</span>
                            </span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Orders</a></li>
                            <li class="nav-sub-item"> <a class="nav-sub-link" href="<?=site_url('seller/all_orders')?>">All</a></li>
                            <li class="nav-sub-item"><a class="nav-sub-link" href="<?=site_url('seller/approval_customer')?>">Pending Approval</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="<?=site_url('seller/dhl')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-truck sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">DHL Status İnquiry</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="<?=site_url('seller/production_program')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-clipboard sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Production Program
                </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('seller/catalogs')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-book sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Catalogs</span>
                        </a>
                    </li>
                </ul>
                <div class="slide-right" id="slide-right">
                    <i class="fe fe-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidemenu -->