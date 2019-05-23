<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rumah Rakata</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="<?php echo base_url() ?>template/assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/vendor/helper.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="<?php echo base_url() ?>template/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky header-absolute d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                            <!--Logo Area Start-->
                            <div class="logo-area">
                                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>template/./assets/images/logora.png" alt=""></a>
                            </div>
                            <!--Logo Area End-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url() ?>">Home</a></li>
                                        <li><a href="#">Lihat Rumah</a>
                                            <ul class="mega-menu four-column left-0">
                                                <li><a href="#" class="item-link">Blok</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url() ?>front/blok_A">A</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/blok_B">B</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/blok_C">C</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/blok_D">D</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Type</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url() ?>front/tipe21">Tipe 21</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/tipe36">Tipe 36</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/tipe45">Tipe 45</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/tipe54">Tipe 54</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Status Rumah</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url() ?>front/rumah_terjual">Terjual</a></li>
                                                        <li><a href="<?php echo base_url() ?>front/rumah_belum_terjual">Belum Terjual</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">
                                <ul>
                                    <li class="currency-menu"><a href="<?php echo base_url() ?>login" title="login"><i class="flaticon-user"></i></a></li>

                                        <!--Mini Cart Dropdown End-->
                                    </li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.html">
                                                <img src="<?php echo base_url() ?>template/./assets/images/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->
