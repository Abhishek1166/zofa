<!-- ========================  Main header ======================== -->
<?php
// echo '<pre>';
// print_r($data['single_product']['srt_description']);
// echo '</pre>';
// die;
?>
<section class="main-header" style="background-image:url(<?php echo SITE_URL; ?>assets/img/zofa/sl1.jpg)">
    <!-- <header> -->
    <div class="container">
        <h1 class="h2 title">Products</h1>

    </div>
    <!-- </header> -->
</section>

<!-- ========================  Product ======================== -->

<section class="product">
    <div class="main">
        <div class="container">
            <div class="row product-flex">

                <!-- product flex is used only for mobile order -->
                <!-- on mobile 'product-flex-info' goes bellow gallery 'product-flex-gallery' -->

                <div class="col-md-4 col-sm-12 product-flex-info">
                    <div class="clearfix">

                        <!-- === product-title === -->

                        <h1 class="title" data-title="Sofa">Laura <small>La Linea de Lucco</small></h1>

                        <div class="clearfix">

                            <!-- === price wrapper === -->

                            <div class="price">
                                <span class="h3">
                                    $ 1999,00
                                    <small>$ 2999,00</small>
                                </span>
                            </div>
                            <hr />

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Manufacturer</strong></span>
                                <span>Zofa </span>
                            </div>

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Materials</strong></span>
                                <span>Wood, Leather, Acrylic</span>
                            </div>

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Availability</strong></span>
                                <span><i class="fa fa-check-square-o"></i> In stock</span>
                                <span class="hidden"><i class="fa fa-truck"></i> Out of stock</span>
                            </div>

                            <hr />

                            <!-- <div class="info-box info-box-addto added">
                                <span><strong>Favourites</strong></span>
                                <span>
                                    <i class="add"><i class="fa fa-heart-o"></i> Add to favorites</i>
                                    <i class="added"><i class="fa fa-heart"></i> Remove from favorites</i>
                                </span>
                            </div>

                            <div class="info-box info-box-addto">
                                <span><strong>Wishlist</strong></span>
                                <span>
                                    <i class="add"><i class="fa fa-eye-slash"></i> Add to Watch list</i>
                                    <i class="added"><i class="fa fa-eye"></i> Remove from Watch list</i>
                                </span>
                            </div>

                            <div class="info-box info-box-addto">
                                <span><strong>Collection</strong></span>
                                <span>
                                    <i class="add"><i class="fa fa-star-o"></i> Add to Collection</i>
                                    <i class="added"><i class="fa fa-star"></i> Remove from Collection</i>
                                </span>
                            </div> -->

                            <hr />

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Available Colors</strong></span>
                                <div class="product-colors clearfix">
                                    <span class="color-btn color-btn-red"></span>
                                    <span class="color-btn color-btn-blue checked"></span>
                                    <span class="color-btn color-btn-green"></span>
                                    <span class="color-btn color-btn-gray"></span>
                                    <span class="color-btn color-btn-biege"></span>
                                </div>
                            </div>

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Choose size</strong></span>
                                <div class="product-colors clearfix">
                                    <span class="color-btn color-btn-biege">
                                        <span class="product-size" data-text="">S</span>
                                    </span>
                                    <span class="color-btn color-btn-biege checked">M</span>
                                    <span class="color-btn color-btn-biege">XL</span>
                                    <span class="color-btn color-btn-biege">XXL</span>
                                </div>
                            </div>

                        </div>
                        <!--/clearfix-->
                    </div>
                    <!--/product-info-wrapper-->
                </div>
                <!--/col-md-4-->
                <!-- === product item gallery === -->

                <div class="col-md-8 col-sm-12 product-flex-gallery">

                    <!-- === add to cart === -->

                    <!-- <button type="submit" class="btn btn-buy" data-text="Buy"></button> -->


                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">

                        <?php
                        if (!empty($data['single_product'])) {

                        ?>

                            <a href="#"><img src="<?php echo $data['single_product']['image'] ?>" alt="" height="500" /></a>
                            <!-- <a href="assets/images/product-2.png"><img src="assets/images/product-2.png" alt="" height="500" /></a>
                                <a href="assets/images/product-3.png"><img src="assets/images/product-3.png" alt="" height="500" /></a>
                                <a href="assets/images/product-4.png"><img src="assets/images/product-4.png" alt="" height="500" /></a> -->
                        <?php
                        }

                        ?>


                    </div>

                    <br><br><br>

                    <body>

                        <div class="container">

                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book Now</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Place Your Order</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" name="Firstname" placeholder="Firstname: *" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" name="Lastname" placeholder="Lastname: *" required>
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" name="Email" placeholder="Email: *" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" name="Mobile" placeholder="Mobile: *" required>
                                                    </div>
                                                </div>



                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="hidden" value="" class="form-control" name="Product_id" placeholder="Product_id:">
                                                    </div>
                                                </div>


                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="hidden" value="" class="form-control" name="Category_id" placeholder="Category_id: ">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">

                                                    <span class="checkbox">
                                                        <input type="checkbox" id="checkBoxId1">
                                                        <label for="checkBoxId1">I have read and accepted the <a href="#">terms</a>, as
                                                            well as read and understood our terms of
                                                            <a href="#">business contidions</a></label>
                                                    </span>

                                                    <hr />
                                                </div>

                                                <div class="col-md-12">
                                                    <a href="#" class="btn btn-main btn-block">Create account</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </body>
                    <!-- <button type="button"><a href="order">Order</a></button> -->

                </div>

            </div>
        </div>
    </div>

    <!-- === product-info === -->

    <div class="info">
        <div class="container">
            <div class="row">

                <!-- === product-designer === -->

                <!-- <div class="col-md-4">

                    <div class="designer">

                        <div class="box">


                        </div> -->


                <!--/box-->
                <!-- <div class="btn btn-add">
                            <i class="fab fa-product-hunt"></i>
                        </div>
                    </div> -->


                <!--/designer-->
            </div>
            <!--/col-md-4-->
            <!-- === nav-tabs === -->

            <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#designer" aria-controls="designer" role="tab" data-toggle="tab">
                            <i class="icon icon-user"></i>
                            <span>Collection</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                            <i class="icon icon-sort-alpha-asc"></i>
                            <span>Specification</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#rating" aria-controls="rating" role="tab" data-toggle="tab">
                            <i class="icon icon-thumbs-up"></i>
                            <span>Rating</span>
                        </a>
                    </li>
                </ul>

                <!-- === tab-panes === -->

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="designer">
                        <div class="content">

                            <!-- === designer collection title === -->

                            <h3>Designers collection</h3>

                            <div class="products">
                                <div class="row">

                                    <!-- === product-item === -->
                                    <?php
                                    if (!empty($data['Products'])) {
                                        foreach ($data['Products'] as $prod) {
                                    ?>
                                            <div class="col-md-4 col-xs-6">

                                                <article>
                                                    <div class="figure-grid">
                                                        <div class="image">
                                                            <!-- <a href="productid1" class="mfp-open"> -->
                                                            <img src="<?= $prod->image ?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="text">
                                                            <h4 class="title"><a href="#">Green corner</a></h4>
                                                            <sup>Designer collection</sup>
                                                            <!-- <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span> -->
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                    <!-- === product-item === -->

                                    <!-- <div class="col-md-6 col-xs-6">
                                    <article>
                                        <div class="figure-grid">
                                            <div class="image">
                                                <a href="#productid1" class="mfp-open">
                                                    <img src="assets/images/product-2.png" alt="" width="360" />
                                                </a>
                                            </div>
                                            <div class="text">
                                                <h4 class="title"><a href="product.html">Laura</a></h4>
                                                <sup>Designer collection</sup>
                                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                            </div>
                                        </div>
                                    </article>
                                </div> -->

                                    <!-- === product-item === -->

                                    <!-- <div class="col-md-6 col-xs-6">
                                    <article>
                                        <div class="figure-grid">
                                            <div class="image">
                                                <a href="#productid1" class="mfp-open">
                                                    <img src="assets/images/product-3.png" alt="" width="360" />
                                                </a>
                                            </div>
                                            <div class="text">
                                                <h4 class="title"><a href="product.html">Nude</a></h4>
                                                <sup>Designer collection</sup>
                                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                            </div>
                                        </div>
                                    </article>
                                </div> -->

                                    <!-- === product-item === -->

                                    <!-- <div class="col-md-6 col-xs-6">
                                        <article>
                                            <div class="figure-grid">
                                                <div class="image">
                                                    <a href="#productid1" class="mfp-open">
                                                        <img src="assets/images/product-4.png" alt="" width="360" />
                                                    </a>
                                                </div>
                                                <div class="text">
                                                    <h4 class="title"><a href="product.html">Aurora</a></h4>
                                                    <sup>Designer collection</sup>
                                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                                </div>
                                            </div>
                                        </article>

                                    </div> -->

                                </div>
                                <!--/row-->
                            </div>
                            <!--/products-->
                        </div>
                        <!--/content-->
                    </div>
                    <!--/tab-pane-->
                    <!-- ============ tab #2 ============ -->
                    <?php
                    if (!empty($data['single_product'])) {
                        // foreach ($data['Product'] as $prod) {
                    ?>
                        <div role="tabpanel" class="tab-pane" id="design">
                            <div class="content">
                                <div class="row">
                                    <!-- <div class="col-md-4">
                                        <h3>Dimensions</h3>
                                        <p>
                                                <img class="full-image" src="" alt="Alternate Text" width="350" />
                                            </p>
                                            <hr />
                                            <p>
                                                <img class="full-image" src="" alt="Alternate Text" width="350" />
                                            </p>
                                    </div> -->
                                    <div class="col-md-8">
                                        <h3>Product Specification</h3>
                                        <p style="text-align:justify">
                                            <?= $data['single_product']['description'] ?>
                                        </p>
                                        <!-- <p style="text-align:justify">
                                        $data['single_product']['image']
                                    </p> -->
                                        <!-- <p style="text-align:justify">
                                        Sofa is fun and elegant with beauty and style that will stay cutting-edge trendy through the years.
                                        It is completely padded, including the back and outside arms - combining comfort and value to make rewarding relaxatio.
                                    </p> -->
                                    </div>

                                </div>
                                <!--/row-->
                            </div>
                            <!--/content-->
                        </div>
                    <?php
                    }
                    // }
                    ?>
                    <!--/tab-pane-->
                    <!-- ============ tab #3 ============ -->

                    <div role=" tabpanel" class="tab-pane" id="rating">

                        <!-- ============ ratings ============ -->

                        <div class="content">
                            <h3>Rating</h3>

                            <div class="row">

                                <!-- === comments === -->

                                <div class="col-md-12">
                                    <div class="comments">

                                        <!-- === rating === -->

                                        <div class="rating clearfix">
                                            <div class="rate-box">
                                                <strong>Quality</strong>
                                                <div class="rating">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>3</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>5</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>0</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>2</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>1</span>
                                                </div>
                                            </div>

                                            <!-- rate  Design-->
                                            <!-- <div class="rate-box">
                                                    <strong>Design</strong>
                                                    <div class="rating">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>1</span>
                                                    </div>
                                                </div> -->

                                            <!-- rate gernal -->
                                            <!-- <div class="rate-box">
                                                    <strong>General</strong>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>3</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>5</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>2</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>1</span>
                                                    </div>
                                                </div> -->

                                            <!-- </div> -->
                                            <!-- <div class="comment-wrapper"> -->

                                            <!-- === comment === -->

                                            <!-- <div class="comment-block">
                                                        <div class="comment-user">
                                                            <div><img src="assets/images/user-2.jpg" alt="Alternate Text" width="70" /></div>
                                                            <div>
                                                                <h5>
                                                                    <span>John Doe</span>
                                                                    <span class="pull-right">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                                    <small>03.05.2017</small>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <!- comment description -->

                                            <!-- <div class="comment-desc">
                                                        <p>
                                                            In vestibulum tellus ut nunc accumsan eleifend. Donec mattis cursus ligula, id
                                                            iaculis dui feugiat nec. Etiam ut ante sed neque lacinia volutpat. Maecenas
                                                            ultricies tempus nibh, sit amet facilisis mauris vulputate in. Phasellus
                                                            tempor justo et mollis facilisis. Donec placerat at nulla sed suscipit. Praesent
                                                            accumsan, sem sit amet euismod ullamcorper, justo sapien cursus nisl, nec
                                                            gravida
                                                        </p>
                                                    </div> -->

                                            <!-- comment reply -->

                                            <!-- <div class="comment-block">
                                                            <div class="comment-user">
                                                                <div><img src="assets/images/user-2.jpg" alt="Alternate Text" width="70" /></div>
                                                                <div>
                                                                    <h5>Administrator<small>08.05.2017</small></h5>
                                                                </div>
                                                            </div> -->
                                            <!-- <div class="comment-desc">
                                                                <p>
                                                                    Curabitur sit amet elit quis tellus tincidunt efficitur. Cras lobortis id
                                                                    elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus. Quisque
                                                                    a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                                                    nisl egestas diam, nec blandit diam ipsum eget dolor. Maecenas ultricies
                                                                    tempus nibh, sit amet facilisis mauris vulputate in.
                                                                </p>
                                                            </div> -->
                                            <!-- </div> -->
                                            <!--/reply-->
                                            <!-- </div> -->
                                            <!-- === comment === -->

                                            <!-- <div class="comment-block">
                                                <div class="comment-user">
                                                    <div><img src="assets/images/user-2.jpg" alt="Alternate Text" width="70" /></div>
                                                    <div>
                                                        <h5>
                                                            <span>John Doe</span>
                                                            <span class="pull-right">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <small>03.05.2017</small>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="comment-desc">
                                                    <p>
                                                        Cras lobortis id elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus.
                                                        Quisque a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                                        nisl egestas diam, nec blandit diam ipsum eget dolor. In vestibulum tellus
                                                        ut nunc accumsan eleifend. Donec mattis cursus ligula, id iaculis dui feugiat
                                                        nec. Etiam ut ante sed neque lacinia volutpat. Maecenas ultricies tempus
                                                        nibh, sit amet facilisis mauris vulputate in. Phasellus tempor justo et mollis
                                                        facilisis. Donec placerat at nulla sed suscipit. Praesent accumsan, sem sit
                                                        amet euismod ullamcorper, justo sapien cursus nisl, nec gravida
                                                    </p>
                                                </div>
                                            </div> -->

                                            <!-- </div> -->
                                            <!--/comment-wrapper-->

                                            <!-- <div class="comment-header">
                                                <a href="#" class="btn btn-clean-dark">12 comments</a>
                                            </div> -->
                                            <!--/comment-header-->
                                            <!-- === add comment === -->

                                            <!-- <div class="comment-add">

                                                <!-- <div class="comment-reply-message"><br><br><br><br><br><br><br><br><br><br><br>
                                                    <div class="h3 title">Leave a Reply </div>
                                                    <p>Your email address will not be published.</p>
                                                </div> -->

                                            <!-- <form action="#" method="post">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" value="" placeholder="Your Name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" value="" placeholder="Your Email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea rows="10" class="form-control" placeholder="Your comment"></textarea>
                                                    </div>
                                                    <div class="clearfix text-center">
                                                        <a href="#" class="btn btn-main">Add comment</a>
                                                    </div>
                                                </form> -->

                                            <!-- </div> -->
                                            <!--/comment-add-->
                                        </div>
                                        <!--/comments-->
                                    </div>


                                </div>
                                <!--/row-->
                            </div>
                            <!--/content-->
                        </div>
                        <!--/tab-pane-->
                    </div>
                    <!--/tab-content-->
                </div>

            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>
    <!--/info-->
</section>

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