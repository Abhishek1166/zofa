<!-- ========================  Main header ======================== -->

<!-- <section class="main-header main-header-blog" style="background-image:url(assets/images/gallery-1.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Blog</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a href="blog-grid.html">Blog Category</a></li>
                        <li><a class="active" href="article.html">Decorating When You're...</a></li>
                    </ol>
                </div>
            </header>
        </section> -->

<!-- ========================  Blog article ======================== -->

<section class="blog">

    <!-- === blog navigation === -->

    <div class="blog-navigation">
        <!-- === nav previous === -->

        <a class="nav-link prev" href="#">
            <figure>
                <div class="image">
                    <img src="assets/images/blog-2.jpg" alt="Alternate Text">
                </div>
                <figcaption>
                    <div class="blog-title h6">The 3 Tricks that Quickly Became Rules</div>
                </figcaption>
            </figure>
        </a>

        <!-- === nav next === -->

        <a class="nav-link next" href="#">
            <figure>
                <div class="image">
                    <img src="assets/images/blog-3.jpg" alt="Alternate Text">
                </div>
                <figcaption>
                    <div class="blog-title h6">What does your favorite dining chair say about you?</div>
                </figcaption>
            </figure>
        </a>
    </div>
    <!--/blog-navigation-->
    <!-- ========================  Blog post ======================== -->

    <div class="container">

        <div class="row">
            <?php
            //_dd($data);
            if (!empty($data)) { ?>
                <?php //$value = $data;
                // _dd($data);
                ?>
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                    <div class="blog-post">

                        <!-- === blog main image & entry info === -->

                        <div class="blog-image-main">

                            <img src="<?php is($data['value']->post_image, 'show'); ?>" alt="" />
                        </div>

                        <div class="blog-post-content">

                            <!-- === blog post title === -->

                            <div class="blog-post-title">
                                <h1 class="blog-title">
                                    <?php is($data['value']->title, 'show'); ?>
                                </h1>
                                <h2 class="blog-subtitle h5">
                                    <?php is($data['value']->description, 'show'); ?>
                                </h2>


                                <!--/blog-info-->
                            </div>

                            <!-- === blog post text === -->

                            <!-- <div class="blog-post-text">


                                <p>
                                    <?php is($value->description, 'show'); ?>
                                </p>




                            </div> -->

                            <!-- === blog info === -->

                            <!-- <div class="blog-info blog-info-bottom">
                                <ul>
                                    <li class="divider"></li>
                                    <li>
                                        <i class="fa fa-folder-open"></i>
                                        <span>
                                            <a href="$">Furniture Blog</a>, <a href="$">Decorating ideas</a>, <a href="$">Modern living</a>, <a href="$">Floor plans</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i>
                                        <span>
                                            <a href="#">Furniture</a>,
                                            <a href="#">Decorating</a>,
                                            <a href="#">Starting</a>,
                                            <a href="#">Apartment</a>,
                                            <a href="#">Sketch</a>,
                                            <a href="#">Floor</a>,
                                            <a href="#">Color</a>,
                                            <a href="#">Interior</a>
                                        </span>
                                    </li>
                                </ul>
                            </div> -->
                            <!--/blog-info-->
                        </div>

                        <!-- === blog comments === -->

                        <!-- <div class="comments">--->

                        <!-- === comment header === -->

                        <!-- <div class="comment-header">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div> -->

                        <div class="comment-wrapper">

                            <!-- === comment === -->

                            <!-- <div class="comment-block">
                                <div class="comment-user">
                                    <div><img src="assets/images/user-2.jpg" alt="Alternate Text" width="70" /></div>
                                    <div>
                                        <h5>
                                            John Doe
                                            <a href="#" class="btn btn-sm btn-main pull-right"><i class="fa fa-reply"></i> Reply</a>
                                            <small>03.05.2017</small>
                                        </h5>
                                    </div>
                                </div>

                                 comment description -->

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
                                        <h5>
                                            John Doe
                                            <a href="#" class="btn btn-sm btn-main pull-right"><i class="fa fa-reply"></i> Reply</a>
                                            <small>08.05.2017</small>
                                        </h5>
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
                        </div>
                        <!--/reply-->
                    </div>

                    <!-- === comment === -->

                    <!-- <div class="comment-block">
                        <div class="comment-user">
                            <div><img src="assets/images/user-2.jpg" alt="Alternate Text" width="70" /></div>
                            <div>
                                <h5>
                                    John Doe
                                    <a href="#" class="btn btn-sm btn-main pull-right"><i class="fa fa-reply"></i> Reply</a>
                                    <small>21.03.2017</small>
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
                </div>
                <!--/comment-wrapper-->

                <!-- <div class="comment-header">
                    <a href="#" class="btn btn-clean-dark">12 comments</a>
                </div> -->
                <!--/comment-header-->
                <!-- === add comment === -->

                <!--  -->
                <!--/comment-add-->
        </div>
        <!--/comments-->

    </div>
    <!--blog-post-->
    </div>
    <!--col-sm-8-->
<?php } ?>
</div>
<!--/row-->
</div>
<!--/container-->
</section>

<!-- ================== Footer  ================== -->



</div>
<!--/wrapper-->