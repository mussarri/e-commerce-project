<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=setting('title')?></title>
    <link href="<?= public_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?= public_url() . 'css/prettyPhoto.css' ?>" rel="stylesheet">
    <link href="<?= public_url() . 'css/price-range.css' ?>" rel="stylesheet">
    <link href="<?= public_url() . 'css/animate.css' ?>" rel="stylesheet">
    <link href="<?= public_url() . 'css/main.css?13' ?>" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?= public_url() . 'js/html5shiv.js' ?>"></script>
    <script src="<?= public_url() . 'js/respond.min.js' ?>"></script>
    <![endif]-->

    <!-- Remember to include jQuery :) -->


    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

    <link rel="shortcut icon" href="<?= public_url() ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?= public_url() . 'images/ico/apple-touch-icon-144-precomposed.png' ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?= public_url() . 'images/ico/apple-touch-icon-114-precomposed.png' ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?= public_url() . 'images/ico/apple-touch-icon-72-precomposed.png' ?>">
    <link rel="apple-touch-icon-precomposed"
          href="<?= public_url() . 'images/ico/apple-touch-icon-57-precomposed.png' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap"
        rel="stylesheet">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i><?=setting('tel')?></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> <?=setting('email')?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?= site_url() ?>"><img src="<?= public_url() ?>images/home/logo.png" alt=""/></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <li><a href="<?=site_url('wishlist')?>"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="<?= site_url('checkout') ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>



                            <li><a href="<?= site_url('cart') ?>"><i class="fa fa-shopping-cart"></i>
                                    Cart<?= session('cart') ? '(' . count(session('cart')) . ')' : '' ?></a></li>

                           <?php if (session('id')): ?>
                                <li id="account">
                                    <a href="#" "><i class="fa fa-user"></i> <?= session('username')
                                    ?></a>
                                    <div id="dropdown-logout">
                                        <ul style="display: flex; flex-direction: column; gap: 10px; padding: 10px
                                        5px 0 0;">
                                            <li><a href=""><i class="fa-solid fa-gear"></i></i>Settings</a></li>
                                            <li><a href="<?=site_url('logout')?>"><i class="fa-solid
                                            fa-right-from-bracket"></i>Logout</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            <?php else: ?>
                                <li><a href="<?= site_url('login') ?>"><i class="fa fa-lock"></i> Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->