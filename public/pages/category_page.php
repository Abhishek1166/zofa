<?php
/* echo '<pre>';
print_r($category);
echo '</pre>';
die(); */
?>


<!-- ======================== Products ======================== -->

<section class="products">
    <div class="container">

        <header class="hidden">
            <h3 class="h3 title">Product category grid</h3>
        </header>

        <div class="row">

            <!-- === product-filters === -->



            <!--product items-->
            <!--product items-->

            <div class="col-md-12 col-xs-12">

                <div class="sort-bar clearfix">

                    <div class="sort-results pull-left">
                        Showing result per page
                        <select>
                            <option value="1">10</option>
                            <option value="2">50</option>
                            <option value="3">100</option>
                            <option value="4">All</option>
                        </select>
                        <!--Items counter-->
                        <span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
                    </div>
                    <!--Sort options-->
                    <div class="sort-options pull-right">
                        <span class="hidden-xs">Sort by</span>
                        <select>
                            <option value="1">Name</option>
                            <option value="2">Popular items</option>
                            <option value="3">Price: lowest</option>
                            <option value="4">Price: highest</option>
                        </select>
                        <!--Grid-list view-->
                        <!-- <span class="grid-list">
                    <a href="products-grid.html"><i class="fa fa-th-large"></i></a>
                    <a href="products-list.html"><i class="fa fa-align-justify"></i></a>
                    <a href="javascript:void(0);" class="toggle-filters-mobile"><i class="fa fa-search"></i></a>
                </span> -->
                    </div>
                </div>

                <div class="row">

                    <!-- === product-item === -->
                    <?php
                    if (!empty($data['produucts'])) {
                        foreach ($data['produucts'] as $prod) {
                    ?>
                            <div class="col-md-4 col-xs-6">


                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>" class="" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="">
                                        <!-- <i class="icon icon-cart"></i> -->
                                    </div>

                                    <div class="figure-grid">

                                        <span class="label label-info">₹<?php

                                                                        echo $prod->sell_price - $prod->regular_price;
                                                                        ?></span>
                                        <div class="image">
                                            <!-- <a href="#productid1" class="mfp-open"> -->
                                            <img src="<?php echo $prod->image; ?>" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html"><?php echo $prod->title; ?></a></h2>
                                            <sub><?php echo $prod->sell_price; ?></sub>
                                            <sup><?php echo $prod->regular_price; ?></sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                                consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>

                            </div>

                    <?php
                        }
                    } ?>

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-2.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Laura</a></h2>
                            <sub>$ 3999,-</sub>
                            <sup>$ 3499,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-3.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Nude</a></h2>
                            <sup>$ 2999,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <span class="label label-warning">New</span>
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-4.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Aurora</a></h2>
                            <sup>$ 299,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <span class="label label-warning">New</span>
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-5.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Dining set</a></h2>
                            <sub>$ 1999,-</sub>
                            <sup>$ 1499,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-6.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Seat chair</a></h2>
                            <sup>$ 896,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">

                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">

                        <span class="label label-info">-50%</span>
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="<?php echo $prod->image; ?>" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Green corner</a></h2>
                            <sub>$ 1499,-</sub>
                            <sup>$ 1099,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>


                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-2.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Laura</a></h2>
                            <sub>$ 3999,-</sub>
                            <sup>$ 3499,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-3.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Nude</a></h2>
                            <sup>$ 2999,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                    <!-- === product-item === -->

                    <!-- <div class="col-md-6 col-xs-6">
                <article>
                    <div class="info">
                        <span class="add-favorite">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <span class="label label-warning">New</span>
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="assets/images/product-4.png" alt="" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="product.html">Aurora</a></h2>
                            <sup>$ 299,-</sup>
                            <span class="description clearfix">Gubergren amet dolor ea diam takimata
                                consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et
                                consetetur nulla</span>
                        </div>
                    </div>
                </article>
            </div> -->

                </div>
                <!--/row-->

                <!--Pagination-->


                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <?php if ($data['page'] < 2) {
                            $prev_url = '#';
                        } else {
                            $prev_url = SITE_URL . 'page/productsgrid/' . ($data['page'] - 1);
                        }
                        ?>
                        <li>
                            <a href="<?php echo $prev_url ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>


                        <!--  -->

                        <?php
                        for ($i = 1; $i <= $data['total_page']; $i++) {
                        ?>
                            <li class="<?= ($i == $data['page']) ? 'active' : '';  ?>">
                                <a href="<?php echo SITE_URL . 'page/productsgrid/' . $i ?>"><?= $i ?></a>
                            </li>
                        <?php
                        }
                        ?>


                        <?php if ($data['page'] >= 3) {
                            $next_url = '#';
                        } else {
                            $next_url = SITE_URL . 'page/productsgrid/' . ($data['page'] + 1);
                        }
                        ?>

                        <li>
                            <a href="<?php echo $next_url ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!--/product items-->

        </div>
        <!--/row-->
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
                    <img src="assets/images/product-1.png" alt="" width="640" />
                    <img src="assets/images/product-2.png" alt="" width="640" />
                    <img src="assets/images/product-3.png" alt="" width="640" />
                    <img src="assets/images/product-4.png" alt="" width="640" />
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
                            <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View
                                    more</span></a>
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

<!-- ================== Footer  ================== -->