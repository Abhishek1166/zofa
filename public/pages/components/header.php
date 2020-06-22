<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Zofa - Furniture Showroom</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/bootstrap.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/animate.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/font-awesome.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/furniture-icons.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/linear-icons.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="<?php echo SITE_URL; ?>assets/css/fe/zofa/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        <!--Use class "navbar-fixed" or "navbar-default" -->
        <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

        <!-- ======================== Navigation ======================== -->

        <nav class="navbar-fixed">

            <div class="container">

                <!-- ==========  Top navigation ========== -->

                <div class="navigation navigation-top clearfix">
                    <ul>
                        <!--add active class for current page-->

                        <li><a href="https://www.facebook.com/zofafurniture"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/zofafurniture"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                        <li><a href="https://www.instagram.com/zofafurniture/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                        <!--Currency selector-->



                        <!--Language selector-->

                        <!--  -->
                        <!-- <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
                        <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
                        <li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span></span></a></li> -->
                    </ul>
                </div>
                <!--/navigation-top-->

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">

                    <!-- Setup your logo here-->
                    <a href="<?php echo SITE_URL ?>zofahome" class="logo"><img src="<?= $site['site_logo'] ?>"" alt="" /></a>
                    <!-- Mobile toggle menu -->

                    <a href=" #" class="open-menu"><i class="icon icon-menu"></i></a>

                    <!-- Convertible menu (mobile/desktop)-->

                    <div class="floating-menu">

                        <!-- Mobile toggle menu trigger-->

                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>

                        <ul>
                            <li><a href="<?php echo SITE_URL ?>zofahome">Home</a></li>

                            <!-- Multi-content dropdown -->

                            <!-- Single dropdown-->
                            <?PHP

                            //print_r($categories);

                            foreach ($nav_categories as $category) {
                            ?>
                                <li>

                                    <a href="<?= SITE_URL . 'category/' . $category->slug ?>"><?= $category->title ?><span class="open-dropdown"></span></a>
                                    <!-- <div class="navbar-dropdown navbar-dropdown-single">
                                        <div class="navbar-box">


                                            <div class="box-2">
                                                <div class="box clearfix">
                                                    <ul>
                                                        <li class="label">Shop</li>
                                                        <li><a href="products-grid.html">GDFGDFG</a></li>
                                                        <li><a href="products-list.html">Products list</a></li>
                                                        <li><a href="category.html">Products intro</a></li>
                                                        <li><a href="products-topbar.html">Products topbar</a></li>
                                                        <li><a href="product.html">Product overview</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="label">Shop Isotope</li>
                                                        <li><a href="products-grid-isotope.html">Products filters <span class="label label-warning">New</span></a></li>
                                                        <li><a href="products-topbar-isotope.html">Products topbar <span class="label label-warning">New</span></a></li>
                                                    </ul>
                                                    <ul>
                                                        <li class="label">Checkout</li>
                                                        <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                                        <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                                        <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                                        <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </li>
                            <?php } ?>

                            <!-- Furniture icons in dropdown-->

                            <li>
                                <!-- <a href="#">Bedroom <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a> -->
                                <div class="">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <!--/box-2-->
                                    </div>
                                    <!--/navbar-box-->
                                </div>
                                <!--/navbar-dropdown-->
                            </li>

                            <!-- Mega menu dropdown -->

                            <li>
                                <!-- <a href="#">outdoor <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a> -->
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Shop</li>
                                                    <li><a href="products-grid.html">Products grid</a></li>
                                                    <li><a href="products-list.html">Products list</a></li>
                                                    <li><a href="category.html">Products intro</a></li>
                                                    <li><a href="products-topbar.html">Products topbar</a></li>
                                                    <li><a href="product.html">Product overview</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Shop Isotope</li>
                                                    <li><a href="products-grid-isotope.html">Products filters <span class="label label-warning">New</span></a></li>
                                                    <li><a href="products-topbar-isotope.html">Products topbar <span class="label label-warning">New</span></a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Checkout</li>
                                                    <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                                    <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                                    <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                                    <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                                </ul>
                                            </div>
                                            <!--/box-->
                                        </div>
                                        <!--/box-2-->
                                    </div>
                                    <!--/navbar-box-->
                                </div>
                                <!--/navbar-dropdown-->
                            </li>

                            <!-- Simple menu link-->

                            <li>
                                <!-- <a href="#">office <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a> -->
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Shop</li>
                                                    <li><a href="products-grid.html">Products grid</a></li>
                                                    <li><a href="products-list.html">Products list</a></li>
                                                    <li><a href="category.html">Products intro</a></li>
                                                    <li><a href="products-topbar.html">Products topbar</a></li>
                                                    <li><a href="product.html">Product overview</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Shop Isotope</li>
                                                    <li><a href="products-grid-isotope.html">Products filters <span class="label label-warning">New</span></a></li>
                                                    <li><a href="products-topbar-isotope.html">Products topbar <span class="label label-warning">New</span></a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Checkout</li>
                                                    <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                                    <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                                    <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                                    <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                                </ul>
                                            </div>
                                            <!--/box-->
                                        </div>
                                        <!--/box-2-->
                                    </div>
                                    <!--/navbar-box-->
                                </div>
                                <!--/navbar-dropdown-->
                            </li>

                            <li>
                                <!-- <a href="#">Brands <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a> -->
                                <div class="navbar-dropdown navbar-dropdown-single">
                                    <div class="navbar-box">

                                        <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <ul>
                                                    <li class="label">Shop</li>
                                                    <li><a href="products-grid.html">Products grid</a></li>
                                                    <li><a href="products-list.html">Products list</a></li>
                                                    <li><a href="category.html">Products intro</a></li>
                                                    <li><a href="products-topbar.html">Products topbar</a></li>
                                                    <li><a href="product.html">Product overview</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Shop Isotope</li>
                                                    <li><a href="products-grid-isotope.html">Products filters <span class="label label-warning">New</span></a></li>
                                                    <li><a href="products-topbar-isotope.html">Products topbar <span class="label label-warning">New</span></a></li>
                                                </ul>
                                                <ul>
                                                    <li class="label">Checkout</li>
                                                    <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                                    <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                                    <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                                    <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                                </ul>
                                            </div>
                                            <!--/box-->
                                        </div>
                                        <!--/box-2-->
                                    </div>
                                    <!--/navbar-box-->
                                </div>
                                <!--/navbar-dropdown-->
                            </li>

                            <li class="<?php is_page_active('blogs') ?>">
                                <a href="<?php echo SITE_URL ?>blogs">BLOG</a>
                            </li>
                            <div class="navbar-dropdown navbar-dropdown-single">
                                <div class="navbar-box">

                                    <!-- box-2 (without 'box-1', box-2 will be displayed as full width)-->


                                    <!--/box-2-->
                                </div>
                                <!--/navbar-box-->
                            </div>
                            <!--/navbar-dropdown-->
                            </li>
                        </ul>
                    </div>
                    <!--/floating-menu-->
                </div>
                <!--/navigation-main-->

                <!-- ==========  Search wrapper ========== -->

                <div class="search-wrapper">

                    <!-- Search form -->
                    <input class="form-control" placeholder="Search..." />
                    <button class="btn btn-main btn-search">Go!</button>
                    <!-- brand -->

                    <!-- brands end -->
                    <!-- Search results - live search -->
                    <div class="search-results">
                        <div class="search-result-items">
                            <!-- <div class="title h4">Products <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div> -->
                            <ul>
                                <li class="<?php is_page_active('sofa') ?>">
                                    <a href="<?php echo SITE_URL ?>	category">
                                        ">
                                        <span class=" id">42563</span>
                                        <span class="name">Green corner</span>
                                        <span class="category">Sofa</span></a>
                                </li>


                                <li><a href="#"><span class="id">42563</span> <span class="name">Laura</span> <span class="category">Armchairs</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Nude</span> <span class="category">Dining tables</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Aurora</span> <span class="category">Nightstands</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Dining set</span> <span class="category">Kitchen</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Seat chair</span> <span class="category">Bar sets</span></a></li>
                            </ul>
                        </div>
                        <!--/search-result-items-->
                        <div class="search-result-items">
                            <div class="title h4">Blog2 <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">01 Jan</span> <span class="name">Creating the Perfect Gallery Wall </span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">12 Jan</span> <span class="name">Making the Most Out of Your Kids Old Bedroom</span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">28 Dec</span> <span class="name">Have a look at our new projects!</span> <span class="category">Modern design</span></a></li>
                                <li><a href="#"><span class="id">31 Sep</span> <span class="name">Decorating When You're Starting Out or Starting Over</span> <span class="category">Best of 2017</span></a></li>
                                <li><a href="#"><span class="id">22 Sep</span> <span class="name">The 3 Tricks that Quickly Became Rules</span> <span class="category">Tips for you</span></a></li>
                            </ul>
                        </div>
                        <!--/search-result-items-->
                    </div>
                    <!--/search-results-->
                </div>

                <!-- ==========  Login wrapper ========== -->

                <div class="login-wrapper">
                    <form>
                        <div class="h4">Sign in</div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <a href="#forgotpassword" class="open-popup">Forgot password?</a>
                            <a href="#createaccount" class="open-popup">Don't have an account?</a>
                        </div>
                        <button type="submit" class="btn btn-block btn-main">Submit</button>
                    </form>
                </div>

                <!-- ==========  Cart wrapper ========== -->

                <div class="cart-wrapper">
                    <div class="checkout">
                        <div class="clearfix">

                            <!--cart item-->

                            <div class="row">

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-1.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item-->

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-2.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item-->

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-3.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>

                                <!--cart item-->

                                <div class="cart-block cart-block-item clearfix">
                                    <div class="image">
                                        <a href="product.html"><img src="assets/images/product-4.png" alt="" /></a>
                                    </div>
                                    <div class="title">
                                        <div><a href="product.html">Green corner</a></div>
                                        <small>Green corner</small>
                                    </div>
                                    <div class="quantity">
                                        <input type="number" value="2" class="form-control form-quantity" />
                                    </div>
                                    <div class="price">
                                        <span class="final">$ 1.998</span>
                                        <span class="discount">$ 2.666</span>
                                    </div>
                                    <!--delete-this-item-->
                                    <span class="icon icon-cross icon-delete"></span>
                                </div>
                            </div>

                            <hr />

                            <!--cart prices -->

                            <div class="clearfix">
                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Discount 15%</strong>
                                    </div>
                                    <div>
                                        <span>$ 159,00</span>
                                    </div>
                                </div>

                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Shipping</strong>
                                    </div>
                                    <div>
                                        <span>$ 30,00</span>
                                    </div>
                                </div>

                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>VAT</strong>
                                    </div>
                                    <div>
                                        <span>$ 59,00</span>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <!--cart final price -->

                            <div class="clearfix">
                                <div class="cart-block cart-block-footer clearfix">
                                    <div>
                                        <strong>Total</strong>
                                    </div>
                                    <div>
                                        <div class="h4 title">$ 1259,00</div>
                                    </div>
                                </div>
                            </div>


                            <!--cart navigation -->

                            <div class="cart-block-buttons clearfix">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="products-grid.html" class="btn btn-clean-dark">Continue shopping</a>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <a href="checkout-1.html" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/checkout-->
                </div>
                <!--/cart-wrapper-->
            </div>
            <!--/container-->
        </nav>

        <?php
        if (($this->router->fetch_method() != 'zofahome')) { ?>
            <?php
            if (($this->router->fetch_method() != 'contact')) { ?>

                <section class="main-header <?= ($this->router->fetch_method() == 'single_blog') ? "main-header-blog" : ""; ?>" style="background-image:url(http://www.elathemes.com/themes/mobel/assets/images/gallery-2.jpg)">
                    <header>
                        <div class="container <?= ($this->router->fetch_method() == 'single_blog') ? "text-center" : ""; ?>">
                            <h1 class="h2 title"><?= $this->router->fetch_method(); ?></h1>
                            <ol class="breadcrumb breadcrumb-inverted">
                                <li><a href="<?php echo SITE_URL ?>zofahome"><span class="icon icon-home"></span></a></li>
                                <li><a href="#"><?= $this->router->fetch_method(); ?></a></li>
                                <li><a class="active" href="#"><?= $this->uri->segment(2); ?></a></li>
                            </ol>
                        </div>
                    </header>
                </section>

                <!-- ========================  Icons slider ======================== -->
                <?php
                if ($this->router->fetch_method() != 'single_blog') { ?>
                    <section class="owl-icons-wrapper">

                        <!-- === header === -->

                        <header class="hidden">
                            <h2>Product categories DGDFGDFGDF</h2>
                        </header>

                        <div class="container ">

                            <div class="owl-icons">



                                <!-- === icon item === -->
                                <?php

                                foreach ($nav_categories as $nav_category) {
                                ?>
                                    <a href="<?= SITE_URL . "category/" . $nav_category->slug ?>">

                                        <figure>
                                            <i class="f-icon f-icon-<?php echo $nav_category->icon; ?>"></i>
                                            <figcaption><?php echo $nav_category->title; ?></figcaption>
                                        </figure>
                                    </a>
                                <?php

                                }
                                ?>
                            </div>
                            <!--/owl-icons-->

                        </div>
                        <!--/container-->
                    </section>
                <?php } ?>
            <?php } ?>
        <?php } ?>