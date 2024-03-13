<!-- Sidemenu -->
<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="<?=customer_url('index')?>">
                    <img src="<?=public_url('images/qbdigitals.png')?>" class="header-brand-img desktop-logo" alt="logo"/>
                    <img src="<?=public_url('images/qbdigitals.png')?>" class="header-brand-img icon-logo" alt="logo"/>
                    <img src="<?=public_url('images/qbdigitals.png')?>" class="header-brand-img desktop-logo theme-logo" alt="logo"/>
                    <img src="<?=public_url('images/qbdigitals.png')?>" class="header-brand-img icon-logo theme-logo" alt="logo"/>
                </a>
            </div><
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                <ul class="menu-nav nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=customer_url('index')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Home</span>
                        </a>
                    </li>

                    <?php  $customer=Customer::get_customer_userid($_SESSION['user_id']);?>

                    <?php if ($customer['isProductionShown']==1):?>


                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('customer/new_order?page=1')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-plus sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Create Order</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0)">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-wallet sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">My
                                <span class="sidemenu-label2">Order</span>
                            </span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0)">Crypto Currencies</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="all_orders">All Orders</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0)">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-shopping-cart-full sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Freights</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0)">Freights</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?=customer_url('freight_pending')?>">Pending Freight</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('customer/catalogs')?>">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-book sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Catalogs</span>
                        </a>
                    </li>
                    <?php endif;?>

                </ul>
                <div class="slide-right" id="slide-right">
                    <i class="fe fe-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidemenu -->