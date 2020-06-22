<!-- ========================  Header content ======================== -->
<?php
/* echo '<pre>';
print_r($data['Sliders']);
echo '</pre>';
die; */
?>
<section class="header-content">

    <div class="owl-slider">

        <!-- === slide item === -->
        <?php
        if (!empty($data['Sliders'])) {
            foreach ($data['Sliders'] as $Sliders) {
        ?>
                <div class="item" style="background-image:url(<?= $Sliders->image ?>)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown"><?= $Sliders->title ?></h2>
                            <div class="animated" data-animation="fadeInUp">
                                <?= $Sliders->description ?>
                            </div>
                            <!-- <div class="animated" data-animation="fadeInUp">
                                <a href="https://www.twstechnology.com/" target="_blank" class="btn btn-main"><i class="icon icon-cart"></i> Buy this template</a>
                            </div> -->
                        </div>
                    </div>
                </div>
        <?php }
        } ?>


    </div>
    <!--/owl-slider-->
</section>

<!-- ========================  Icons slider ======================== -->

<section class="owl-icons-wrapper owl-icons-frontpage">

    <!-- === header === -->

    <header class="hidden">
        <h2>Product categories</h2>
    </header>

    <div class="container">

        <div class="owl-icons">

            <!-- === icon item === -->
            <?php

            foreach ($nav_categories as $nav_category) {
            ?>


                <!-- === icon item === -->

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

<!-- ========================  Products widget ======================== -->

<section class="products">

    <div class="container">

        <!-- === header title === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title">Popular products</h2>
                    <div class="text">
                        <p>Check out our latest collections</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <!-- === product-item === -->
            <?php
            if (!empty($data['Product'])) {
                foreach ($data['Product'] as $prod) {
            ?>
                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-block">
                                <div class="image">
                                    <a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>">
                                        <img src="<?php echo $prod->image; ?>" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>"><?php echo $prod->title; ?></a></h2>
                                    <i class="fa fa-rupee"></i></i><sub><?php echo $prod->sell_price; ?></sub>
                                    <srike><sup><?php echo $prod->regular_price; ?></sup></srike>
                                    <!--<span class="description clearfix"><?php //echo $prod->short_description; 
                                                                            ?></span> -->
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list">
                                        <i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href=<?php echo SITE_URL . 'products1/' . $prod->id ?>><i class="icon icon-eye"></i></a>
                                </span>
                            </div>
                            <div class="">

                            </div>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>">
                                        <img src="<?php echo $prod->image; ?>" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><?php echo $prod->title; ?></a></h2>
                                    <sub><?php echo $prod->sell_price; ?></sub>
                                    <sup><?php echo $prod->regular_price; ?></sup>
                                    <span class="description clearfix"><?php echo $prod->short_description; ?></span>
                                </div>
                            </div>
                        </article>
                    </div> -->

            <?php
                }
            }
            ?>

        </div>


        <!--/row-->
        <!-- === button more === -->

        <div class="wrapper-more">
            <a href="<?php echo SITE_URL ?>shop/1" class="btn btn-main">View store</a>
        </div>

        <!-- ========================  Product info popup - quick view ======================== -->

        <div class="popup-main mfp-hide" id="productid1">

            <!-- === product popup === -->

            <div class="product">

                <!-- === popup-title === -->

                <div class="popup-title">
                    <div class="h1 title">Laura <small>product category</small></div>
                </div>

                <!-- === product gallery === -->

                <div class="owl-product-gallery">
                    <img src="<?php echo SITE_URL; ?>assets/img/zofa/product-1.png" alt="" width="640" />
                    <img src="<?php echo SITE_URL; ?>assets/img/zofa/product-2.png" alt="" width="640" />
                    <img src="<?php echo SITE_URL; ?>assets/img/zofa/product-3.png" alt="" width="640" />
                    <img src="<?php echo SITE_URL; ?>assets/img/zofa/product-4.png" alt="" width="640" />
                </div>

                <!-- === product-popup-info === -->

                <div class="popup-content">
                    <div class="product-info-wrapper">
                        <div class="row">

                            <!-- === left-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Maifacturer</strong>
                                    <span>Brand name</span>
                                </div>
                                <div class="info-box">
                                    <strong>Materials</strong>
                                    <span>Wood, Leather, Acrylic</span>
                                </div>
                                <div class="info-box">
                                    <strong>Availability</strong>
                                    <span><i class="fa fa-check-square-o"></i> in stock</span>
                                </div>
                            </div>

                            <!-- === right-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Available Colors</strong>
                                    <div class="product-colors clearfix">
                                        <span class="color-btn color-btn-red"></span>
                                        <span class="color-btn color-btn-blue checked"></span>
                                        <span class="color-btn color-btn-green"></span>
                                        <span class="color-btn color-btn-gray"></span>
                                        <span class="color-btn color-btn-biege"></span>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <strong>Choose size</strong>
                                    <div class="product-colors clearfix">
                                        <span class="color-btn color-btn-biege">S</span>
                                        <span class="color-btn color-btn-biege checked">M</span>
                                        <span class="color-btn color-btn-biege">XL</span>
                                        <span class="color-btn color-btn-biege">XXL</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/row-->
                    </div>
                    <!--/product-info-wrapper-->
                </div>
                <!--/popup-content-->
                <!-- === product-popup-footer === -->

                <div class="popup-table">
                    <div class="popup-cell">
                        <div class="price">
                            <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                        </div>
                    </div>
                    <div class="popup-cell">
                        <div class="popup-buttons">
                            <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                            <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/product-->
        </div>
        <!--popup-main-->
    </div>
    <!--/container-->
</section>

<!-- ========================  Stretcher widget ======================== -->

<!-- <section class="stretcher-wrapper"> -->

<!-- === stretcher header === -->

<!-- <header class="hidden"> -->
<!--remove class 'hidden'' to show section header -->
<!-- <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h1 class="h2 title">Popular categories</h1>
                    <div class="text">
                        <p>
                            Whether you are changing your home, or moving into a new one, you will find a huge selection of quality living room furniture,
                            bedroom furniture, dining room furniture and the best value at Furniture factory
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header> -->

<!-- === stretcher === -->

<!-- <ul class="stretcher"> -->

<!-- === stretcher item === -->

<!-- <li class="stretcher-item" style="background-image:url(<?php echo SITE_URL; ?>assets/img/zofa/mfp1.jpg);"> -->
<!--logo-item-->
<!-- <div class="stretcher-logo">
                <div class="text">
                    <span class="f-icon f-icon-bedroom"></span>
                    <span class="text-intro">Bedroom</span>
                </div>
            </div> -->
<!--main text-->
<!-- <figure>
                <h4>Modern furnishing projects</h4>
                <figcaption>New furnishing ideas</figcaption>
            </figure> -->
<!--anchor-->
<!-- <a href="#">Anchor link</a>
        </li> -->

<!-- === stretcher item === -->

<!-- <li class="stretcher-item" style="background-image:url(<?php echo SITE_URL; ?>assets/img/zofa/mfp2.jpg);"> -->
<!--logo-item-->
<!-- <div class="stretcher-logo">
                <div class="text">
                    <span class="f-icon f-icon-sofa"></span>
                    <span class="text-intro">Living room</span>
                </div>
            </div> -->
<!--main text-->
<!-- <figure>
                <h4>Furnishing and complements</h4>
                <figcaption>Discover the design table collection</figcaption>
            </figure> -->
<!--anchor-->
<!-- <a href="#">Anchor link</a>
        </li> -->

<!-- === stretcher item === -->

<!-- <li class="stretcher-item" style="background-image:url(<?php echo SITE_URL; ?>assets/img/zofa/mfp3.jpg);"> -->
<!--logo-item-->
<!-- <div class="stretcher-logo">
                <div class="text">
                    <span class="f-icon f-icon-office"></span>
                    <span class="text-intro">Office</span>
                </div>
            </div> -->
<!--main text-->
<!-- <figure>
                <h4>Which is Best for Your Home</h4>
                <figcaption>Wardrobes vs Walk-In Closets</figcaption>
            </figure> -->
<!--anchor-->
<!-- <a href="#">Anchor link</a>
        </li> -->

<!-- === stretcher item === -->

<!-- <li class="stretcher-item" style="background-image:url(<?php echo SITE_URL; ?>assets/img/zofa/mfp4.jpg);"> -->
<!--logo-item-->
<!-- <div class="stretcher-logo">
                <div class="text">
                    <span class="f-icon f-icon-bathroom"></span>
                    <span class="text-intro">Bathroom</span>
                </div>
            </div> -->
<!--main text-->
<!-- <figure>
                <h4>Keeping Things Minimal</h4>
                <figcaption>Creating Your Very Own Bathroom</figcaption>
            </figure> -->
<!--anchor-->
<!-- <a href="#">Anchor link</a>
</li> -->

<!-- === stretcher item more=== -->

<!-- <li class="stretcher-item more">
            <div class="more-icon">
                <span data-title-show="Show more" data-title-hide="+"></span>
            </div>
            <a href="#"></a>
        </li>

    </ul>
</section> -->

<!-- ========================  Blog Block ======================== -->

<section class="blog blog-block" style="background-color:#fff !important;">

    <div class="container">

        <!-- === blog header === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title">Interior ideas</h2>
                    <div class="text">
                        <p>Keeping things minimal</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <!-- === blog item === -->


            <?php

            if (!empty($data["ideas"])) {
                foreach ($data['ideas'] as $idea) {
            ?>


                    <div class="col-sm-4">
                        <article>
                            <a href="#">
                                <div class="image">
                                    <img src="<?= $idea->post_image ?>" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="date"><?php echo strtoupper(date('M', strtotime($idea->created_date))); ?>&nbsp;<strong><?php echo date('d', strtotime($idea->created_date)) ?></strong>&nbsp;<span><?php echo date('o', strtotime($idea->created_date)) ?></span></div>
                                    <div class="title">
                                        <h2 class="h3"><?= $idea->title ?> </h2>
                                    </div>
                                    <div class="description">
                                        <p><?= $idea->description ?></p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <!-- <span class="btn btn-main btn-block">Read more</span> -->
                                </div>
                            </a>
                        </article>
                    </div>

                    <!--<div class="col-sm-4">
                        <article>
                            <a href="#">
                                <div class="image">
                                    <img src="<?= $idea->post_image ?>" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="date">28 Mart 2017</div>
                                    <div class="title">
                                        <h2 class="h3"><?= $idea->title ?> </h2>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <?= $idea->description ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div> -->
            <?php
                }
            }
            ?>



        </div>
        <!--/row-->
        <!-- === button more === -->

        <div class="wrapper-more">
            <!-- <a href="ideas.html" class="btn btn-main">View all posts</a> -->
        </div>

    </div>
    <!--/container-->
</section>

<!-- ========================  Banner ======================== -->

<section class="banner" style="background-image:url(<?php echo SITE_URL; ?>assets/img/zofa/ourstory.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title">Our story</h2>
                <p>
                    We believe in creativity as one of the major forces of progress. With this idea, we traveled throughout Italy to find exceptional
                    artisans and bring their unique handcrafted objects to connoisseurs everywhere.
                </p>
                <p><a href="#" class="btn btn-clean">Read full story</a></p>
            </div>
        </div>
    </div>
</section>

<!-- ========================  Blog ======================== -->

<section class="blog">

    <div class="container">

        <!-- === blog header === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h1 class="h2 title">Blog</h1>
                    <div class="text">
                        <p>Latest news from the blog</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <!-- === blog item === -->
            <?php

            if (!empty($data['Blogs'])) {
                foreach ($data['Blogs'] as $blog) {
            ?>
                    <div class="col-sm-4">
                        <article>
                            <a href="<?php echo SITE_URL ?>blogs">
                                <div class="image" style="background-image:url(<?= $blog->post_image ?>)">
                                    <!-- <img src="<?= $blog->post_image ?>" alt="" /> -->
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <div class="date">
                                            <span><?php echo strtoupper(date('M', strtotime($blog->created_date))); ?></span>
                                            <strong><?php echo date('d', strtotime($blog->created_date)) ?></strong>
                                            <span><?php echo date('o', strtotime($blog->created_date)) ?></span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h2 class="h5"><?php echo $blog->title ?></h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
            <?php }
            } ?>

        </div>
        <!--/row-->
        <!-- === button more === -->

        <div class="wrapper-more">
            <a href="<?php echo SITE_URL ?>blogs" class="btn btn-main">View all posts</a>
        </div>

    </div>
    <!--/container-->
</section>

<!-- ========================  Instagram ======================== -->




<section class="instagram">

    <!-- === instagram header === -->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="h2 title">Follow us <i class="fa fa-instagram fa-2x"></i> Instagram </h2>
                    <div class="text">
                        <p>
                            <a href="https://www.instagram.com/zofafurniture/"> <?php echo $data['instagram'] ?></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--===instagram gallery===-->
    <?php
    // echo '<pre>';
    // print_r($data);
    // echo '<pre>';
    ?><div class="gallery clearfix">
        <?php if (!empty($data['Gallery'])) {
            foreach ($data['Gallery'] as $Galleri) {
        ?>

                <a class="item" href="#">
                    <img src="<?php echo $Galleri->image ?>" alt="Alternate Text" />
                </a>

        <?php
            }
        } ?></div>


</section>