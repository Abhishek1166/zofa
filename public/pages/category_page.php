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
                    
                    <div class="col-md-12">
                                <article>
                                    <div class="info">
                                        <span class="add-favorite">
                                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>" class="" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                        </span>
                                    </div>
                                    <div class="btn btn-add">
                                        <i class="icon icon-cart"></i>
                                    </div>
                                    <div class="figure-list">
                                        <div class="image">
                                            <a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>" class="mfp-open-rm">
                                                <img src="<?php echo $prod->image; ?>" alt="" width="360" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="<?php echo SITE_URL . 'products1/' . $prod->id ?>"><?php echo $prod->title; ?></a></h2>
                                            ₹<sub><?php echo $prod->sell_price; ?></sub>
                                            <sup><?php echo $prod->regular_price; ?></sup>
                                            <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            
                            <!--<div class="col-md-4 col-xs-6">


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
                                    <!--</div>

                                    <div class="figure-grid">

                                        <span class="label label-info">₹<?php

                                                                        echo $prod->sell_price - $prod->regular_price;
                                                                        ?></span>
                                        <div class="image">
                                            <!-- <a href="#productid1" class="mfp-open"> -->
                                            <!--<img src="<?php echo $prod->image; ?>" alt="" width="360" />
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

                            </div> -->
                        <?php }
                    } else {
                        ?>
                        <div class="col-md-4">&nbsp;</div>
                        <div class="col-md-4">
                            <svg xmlns=" http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="340pt" height="250pt" viewBox="0 0 640 501" version="1.1">
                                <defs>
                                    <filter id="alpha" filterUnits="objectBoundingBox" x="0%" y="0%" width="100%" height="100%">
                                        <feColorMatrix type="matrix" in="SourceGraphic" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                    </filter>
                                    <mask id="mask0">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip1">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface6" clip-path="url(#clip1)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 335.988281 470.097656 C 335.988281 458.414062 286.027344 448.941406 224.398438 448.941406 C 162.769531 448.941406 112.8125 458.414062 112.8125 470.097656 C 112.8125 481.78125 162.769531 491.253906 224.398438 491.253906 C 286.027344 491.253906 335.988281 481.78125 335.988281 470.097656 Z M 335.988281 470.097656 " />
                                    </g>
                                    <mask id="mask1">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip2">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface9" clip-path="url(#clip2)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 371.675781 70.648438 C 330.664062 69.226562 291.605469 55.972656 254.308594 41.476562 C 217.011719 26.976562 180.066406 10.921875 140.039062 3.242188 C 114.292969 -1.699219 84.847656 -2.402344 64.109375 11.394531 C 44.140625 24.714844 37.691406 47.640625 34.222656 68.929688 C 31.613281 84.949219 30.078125 101.8125 37.226562 116.808594 C 42.195312 127.222656 51.003906 135.972656 57.097656 145.949219 C 78.308594 180.652344 63.316406 223.445312 40.339844 257.332031 C 29.566406 273.222656 17.050781 288.40625 8.730469 305.304688 C 0.410156 322.207031 -3.433594 341.636719 3.847656 358.925781 C 11.058594 376.046875 28.25 388.882812 46.871094 397.921875 C 84.695312 416.28125 129.25 421.53125 172.722656 424.511719 C 268.933594 431.09375 365.648438 428.246094 462.113281 425.386719 C 497.8125 424.335938 533.664062 423.261719 568.78125 417.738281 C 588.285156 414.667969 608.417969 409.800781 622.582031 398.042969 C 640.550781 383.117188 645.007812 357.855469 632.960938 339.144531 C 612.757812 307.753906 556.921875 299.960938 542.785156 266.277344 C 535.015625 247.734375 542.992188 227.085938 554.289062 209.894531 C 578.523438 173.003906 619.132812 140.640625 621.269531 98.480469 C 622.738281 69.523438 603.214844 40.523438 573.027344 26.820312 C 541.390625 12.457031 497.507812 14.261719 474.175781 38.039062 C 450.128906 62.492188 407.890625 71.910156 371.675781 70.648438 Z M 371.675781 70.648438 " />
                                    </g>
                                    <linearGradient id="linear0" gradientUnits="userSpaceOnUse" x1="318.22" y1="488.45" x2="630.35" y2="488.45" gradientTransform="matrix(0.633663,0,0,0.634177,-60.343762,-34.898772)">
                                        <stop offset="0" style="stop-color:rgb(50.196078%,50.196078%,50.196078%);stop-opacity:0.25098;" />
                                        <stop offset="0.54" style="stop-color:rgb(50.196078%,50.196078%,50.196078%);stop-opacity:0.121569;" />
                                        <stop offset="1" style="stop-color:rgb(50.196078%,50.196078%,50.196078%);stop-opacity:0.101961;" />
                                    </linearGradient>
                                    <mask id="mask2">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip3">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface12" clip-path="url(#clip3)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 251.863281 237.214844 C 251.082031 239.929688 248.949219 243.992188 246.824219 246.953125 L 244.449219 244.714844 L 248.433594 236.242188 C 248.433594 236.242188 249.714844 236.59375 251.863281 237.214844 Z M 251.863281 237.214844 " />
                                    </g>
                                    <mask id="mask3">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip4">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface15" clip-path="url(#clip4)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 202.054688 199.992188 C 202.054688 199.992188 179.730469 203.734375 181.894531 211.554688 C 181.894531 211.554688 189.996094 203.113281 202.054688 199.992188 Z M 202.054688 199.992188 " />
                                    </g>
                                    <mask id="mask4">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip5">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface18" clip-path="url(#clip5)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 202.226562 203.160156 C 202.226562 203.160156 189.953125 213.183594 192.355469 213.699219 C 194.757812 214.210938 202.226562 203.160156 202.226562 203.160156 Z M 202.226562 203.160156 " />
                                    </g>
                                    <mask id="mask5">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip6">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface21" clip-path="url(#clip6)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 208.125 206.652344 C 208.125 206.652344 204.839844 213.394531 206.859375 212.9375 C 208.878906 212.480469 208.125 206.652344 208.125 206.652344 Z M 208.125 206.652344 " />
                                    </g>
                                    <mask id="mask6">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip7">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface24" clip-path="url(#clip7)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 252.6875 237.929688 L 251.328125 237.542969 C 251.714844 236.277344 251.824219 235.246094 251.507812 234.773438 C 249.953125 232.476562 230.078125 227.667969 227.546875 223.832031 C 225.019531 219.996094 219.152344 217.636719 219.152344 217.636719 C 219.152344 217.636719 213.101562 213.972656 212.6875 210.660156 C 212.277344 207.351562 213.875 204.882812 214.28125 203.429688 C 214.683594 201.980469 215.710938 187.949219 215.710938 187.949219 C 215.710938 187.949219 222.523438 138.046875 192.140625 142.378906 C 192.140625 142.378906 175.867188 149.609375 176.660156 167.347656 C 177.234375 178.773438 178.480469 190.160156 180.390625 201.441406 C 180.390625 201.441406 177.066406 228.132812 190.917969 235.011719 C 204.769531 241.894531 217.585938 247.550781 217.585938 247.550781 C 217.585938 247.550781 239.253906 249.878906 241.953125 250.847656 C 242.972656 251.214844 244.816406 249.320312 246.621094 246.714844 L 247.648438 247.671875 L 265.300781 264.199219 C 265.300781 264.199219 288.082031 269.011719 294.417969 259.9375 C 299.773438 252.300781 264.125 241.242188 252.6875 237.929688 Z M 252.6875 237.929688 " />
                                    </g>
                                    <mask id="mask7">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip8">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface27" clip-path="url(#clip8)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 180.132812 76.550781 C 180.1875 76.242188 180.226562 75.917969 180.296875 75.605469 C 179.695312 76.132812 179.664062 77.027344 179.503906 77.820312 C 179.425781 78.277344 179.300781 78.726562 179.128906 79.15625 C 179.628906 78.363281 179.96875 77.476562 180.132812 76.550781 Z M 180.132812 76.550781 " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 180.335938 81.789062 C 180.648438 80.972656 180.863281 80.121094 180.96875 79.253906 C 180.332031 79.519531 179.648438 79.640625 178.960938 79.601562 C 178.757812 80.046875 178.515625 80.472656 178.230469 80.871094 C 178.949219 80.925781 179.671875 80.808594 180.335938 80.527344 C 180.230469 81.394531 180.015625 82.25 179.699219 83.066406 C 180.507812 83.082031 181.25 82.628906 181.601562 81.902344 C 181.757812 81.617188 181.886719 81.3125 181.980469 80.996094 C 181.605469 81.527344 180.984375 81.824219 180.335938 81.789062 Z M 180.335938 81.789062 " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 185.898438 77.476562 C 184.996094 77.386719 183.90625 77.078125 183.324219 77.769531 C 183.1875 77.960938 183.082031 78.175781 183.019531 78.402344 C 182.964844 78.566406 182.914062 78.738281 182.867188 78.910156 C 183.472656 78.433594 184.445312 78.6875 185.265625 78.769531 C 186.789062 78.894531 188.261719 78.1875 189.117188 76.917969 C 189.308594 76.613281 189.453125 76.277344 189.542969 75.921875 C 188.660156 77.015625 187.292969 77.597656 185.898438 77.476562 Z M 185.898438 77.476562 " />
                                    </g>
                                    <mask id="mask8">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip9">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface30" clip-path="url(#clip9)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 210.679688 139.101562 L 209.496094 150.140625 L 209.417969 150.839844 L 198.882812 134.324219 L 197.746094 132.542969 L 198.078125 132.03125 L 201.015625 127.46875 L 201.667969 128.257812 Z M 210.679688 139.101562 " />
                                    </g>
                                    <mask id="mask9">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip10">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface33" clip-path="url(#clip10)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 231.589844 444.851562 C 230.640625 445.445312 229.640625 445.957031 228.601562 446.382812 C 225.117188 447.976562 221.800781 449.917969 218.277344 451.421875 C 214.753906 452.921875 210.960938 453.996094 207.144531 453.710938 C 205.148438 453.5625 203.109375 453.074219 201.199219 453.644531 C 200.019531 454.101562 198.910156 454.71875 197.898438 455.480469 C 191.5625 455.074219 180.957031 454.386719 177.203125 454.082031 C 171.730469 453.632812 173.074219 451.386719 173.074219 451.386719 L 173.074219 449.804688 C 173.269531 449.804688 173.492188 449.746094 173.746094 449.726562 C 175.054688 449.707031 176.363281 449.902344 177.609375 450.304688 C 180.359375 451.050781 183.097656 451.789062 185.847656 452.523438 C 186.304688 450.796875 187.449219 449.335938 189.015625 448.476562 C 190.585938 447.644531 192.347656 447.238281 194.121094 447.304688 C 198.386719 447.359375 202.421875 449.382812 206.683594 449.585938 C 207.871094 449.695312 209.070312 449.496094 210.160156 449.003906 C 210.742188 448.710938 211.257812 448.289062 211.828125 447.964844 C 212.738281 447.523438 213.703125 447.195312 214.699219 446.992188 C 217.488281 446.296875 220.230469 445.414062 222.902344 444.34375 C 223.664062 444.042969 224.550781 443.503906 224.449219 442.695312 C 224.316406 441.617188 222.625 441.488281 222.179688 440.5 C 222.023438 440.136719 222.042969 439.722656 222.230469 439.378906 C 222.472656 439.421875 222.726562 439.472656 222.992188 439.535156 C 227.597656 440.59375 230.109375 441.011719 231.589844 444.851562 Z M 231.589844 444.851562 " />
                                    </g>
                                    <mask id="mask10">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip11">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface36" clip-path="url(#clip11)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 228.320312 472.59375 C 227.203125 473.296875 226.027344 473.898438 224.804688 474.402344 C 220.703125 476.273438 216.800781 478.554688 212.65625 480.324219 C 208.511719 482.09375 204.046875 483.351562 199.554688 483.019531 C 197.207031 482.851562 194.808594 482.261719 192.582031 482.945312 C 191.1875 483.488281 189.878906 484.222656 188.6875 485.125 C 181.257812 484.652344 168.75 483.859375 164.335938 483.484375 C 157.890625 482.953125 159.472656 480.3125 159.472656 480.3125 L 159.472656 478.449219 C 159.738281 478.40625 160 478.375 160.265625 478.359375 C 161.808594 478.332031 163.347656 478.5625 164.816406 479.039062 L 174.503906 481.652344 C 175.050781 479.613281 176.410156 477.890625 178.261719 476.886719 C 180.109375 475.902344 182.183594 475.425781 184.277344 475.507812 C 189.292969 475.574219 194.039062 477.953125 199.050781 478.195312 C 200.449219 478.324219 201.855469 478.089844 203.132812 477.515625 C 203.824219 477.167969 204.402344 476.667969 205.097656 476.292969 C 206.167969 475.765625 207.304688 475.382812 208.476562 475.152344 C 211.742188 474.324219 214.953125 473.285156 218.082031 472.03125 C 218.976562 471.675781 220.019531 471.042969 219.898438 470.089844 C 219.742188 468.820312 217.753906 468.667969 217.226562 467.503906 C 217.046875 467.074219 217.070312 466.589844 217.289062 466.183594 C 217.574219 466.234375 217.871094 466.296875 218.183594 466.367188 C 223.625 467.585938 226.578125 468.078125 228.320312 472.59375 Z M 228.320312 472.59375 " />
                                    </g>
                                    <mask id="mask11">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip12">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface39" clip-path="url(#clip12)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 200.441406 375.757812 L 198.75 415.601562 C 198.75 415.601562 196.214844 423.738281 197.589844 426.066406 C 198.964844 428.394531 201.28125 430.714844 200.441406 432.089844 C 199.597656 433.464844 189.460938 448.34375 186.183594 442.636719 C 182.90625 436.929688 179.675781 412.195312 179.675781 412.195312 L 182.699219 381.648438 Z M 200.441406 375.757812 " />
                                    </g>
                                    <mask id="mask12">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip13">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface42" clip-path="url(#clip13)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 207.777344 276.480469 L 212.480469 282.773438 L 212.480469 337.488281 C 212.480469 337.488281 213.855469 352.074219 212.480469 355.089844 C 211.105469 358.101562 204.132812 364.125 204.132812 364.125 L 198.273438 334.003906 L 199.539062 302.132812 Z M 207.777344 276.480469 " />
                                    </g>
                                    <mask id="mask13">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip14">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface45" clip-path="url(#clip14)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 215.699219 111.722656 C 212.429688 112.660156 209.304688 115.882812 206.585938 119.796875 L 205.878906 119.796875 C 197.765625 119.800781 190.273438 115.464844 186.234375 108.425781 C 185.40625 106.992188 184.738281 105.472656 184.242188 103.890625 C 186.203125 98.914062 187.652344 94.585938 187.652344 94.585938 C 187.652344 94.585938 225.679688 108.871094 215.699219 111.722656 Z M 215.699219 111.722656 " />
                                    </g>
                                    <mask id="mask14">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip15">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface48" clip-path="url(#clip15)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 209.496094 150.140625 L 209.417969 150.839844 L 198.882812 134.351562 C 197.777344 136.957031 197.164062 138.699219 197.164062 138.699219 C 197.164062 138.699219 172.132812 119.839844 176.09375 118.570312 C 177.425781 118.148438 179.175781 115.292969 180.90625 111.699219 L 181.121094 111.242188 C 182.957031 116.71875 193.636719 127.671875 198.078125 132.0625 C 198.589844 132.570312 199.015625 132.988281 199.34375 133.292969 L 200.023438 133.925781 L 200.378906 134.28125 C 201.992188 135.949219 208.8125 143.304688 209.496094 150.140625 Z M 209.496094 150.140625 " />
                                    </g>
                                    <mask id="mask15">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip16">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface51" clip-path="url(#clip16)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 191.9375 161.980469 C 191.9375 161.980469 187.5 172.761719 184.175781 174.507812 C 180.847656 176.25 193.519531 178.183594 191.9375 161.980469 Z M 191.9375 161.980469 " />
                                    </g>
                                    <mask id="mask16">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip17">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface54" clip-path="url(#clip17)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 195.261719 182.117188 C 195.261719 182.117188 185.125 183.386719 185.125 185.289062 C 185.125 187.191406 195.261719 182.117188 195.261719 182.117188 Z M 195.261719 182.117188 " />
                                    </g>
                                    <mask id="mask17">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip18">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface57" clip-path="url(#clip18)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 205.878906 194.484375 C 205.878906 194.484375 191.144531 225.875 187.027344 226.824219 C 182.90625 227.777344 205.878906 194.484375 205.878906 194.484375 Z M 205.878906 194.484375 " />
                                    </g>
                                    <mask id="mask18">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip19">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface60" clip-path="url(#clip19)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 199.738281 136.8125 L 187.550781 142.113281 L 172.84375 119.878906 C 173.152344 119.25 173.386719 118.589844 173.535156 117.90625 C 175.4375 109.660156 180.246094 112.933594 180.246094 112.933594 C 181.40625 119.382812 199.355469 136.457031 199.355469 136.457031 Z M 199.738281 136.8125 " />
                                    </g>
                                    <mask id="mask19">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip20">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface63" clip-path="url(#clip20)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 216.015625 249.847656 C 216.015625 249.847656 202.355469 248.578125 189.605469 247.183594 L 212.480469 253.175781 L 212.480469 260.152344 C 211.480469 261.058594 210.609375 261.527344 210.046875 261.289062 C 207.410156 260.175781 185.898438 256.691406 185.898438 256.691406 C 185.898438 256.691406 173.402344 250.347656 159.917969 242.738281 C 159.589844 242.554688 159.273438 242.355469 158.96875 242.140625 C 157.394531 241.074219 156.039062 239.714844 154.976562 238.140625 C 152.484375 234.53125 151.269531 229.894531 150.742188 225.347656 C 150.445312 222.742188 150.335938 220.117188 150.414062 217.496094 C 150.476562 214.523438 150.75 211.558594 151.222656 208.625 C 149.917969 197.257812 149.285156 185.824219 149.324219 174.378906 C 149.480469 156.621094 166.113281 150.28125 166.113281 150.28125 C 196.6875 147.585938 187.210938 197.050781 187.210938 197.050781 C 187.210938 197.050781 185.441406 211.003906 184.960938 212.429688 C 184.476562 213.855469 182.75 216.234375 182.984375 219.566406 C 183.21875 222.894531 189.058594 226.875 189.058594 226.875 C 189.058594 226.875 194.761719 229.554688 197.113281 233.515625 C 198.824219 236.441406 209.9375 240.402344 216.21875 243.230469 Z M 216.015625 249.847656 " />
                                    </g>
                                    <mask id="mask20">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip21">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface66" clip-path="url(#clip21)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 226.253906 81.789062 C 226.265625 82.835938 226.050781 83.867188 225.621094 84.820312 C 225.296875 85.597656 224.921875 86.351562 224.496094 87.078125 C 223.828125 88.414062 222.878906 89.589844 221.71875 90.527344 C 220.253906 91.574219 218.40625 91.867188 216.648438 92.292969 C 214.894531 92.714844 213.070312 93.394531 212.066406 94.890625 C 211.527344 95.855469 211.164062 96.90625 210.996094 98 C 210.828125 99.089844 210.394531 100.125 209.730469 101.003906 C 209.019531 101.890625 207.800781 102.183594 206.765625 101.714844 C 206.234375 101.359375 205.832031 100.839844 205.617188 100.238281 C 204.894531 98.609375 204.710938 96.800781 204.417969 95.042969 C 204.128906 93.289062 203.714844 91.480469 202.640625 90.066406 C 201.5625 88.652344 199.65625 87.71875 197.960938 88.269531 C 196.820312 88.710938 195.902344 89.601562 195.429688 90.730469 C 194.960938 91.851562 194.636719 93.027344 194.472656 94.230469 C 193.683594 98.535156 192.757812 102.816406 191.691406 107.066406 C 191.65625 107.242188 191.585938 107.40625 191.480469 107.550781 C 191.3125 107.71875 191.085938 107.8125 190.847656 107.816406 C 189.425781 108.007812 188.066406 107.011719 186.632812 107.117188 C 186.484375 107.128906 186.339844 107.152344 186.195312 107.1875 C 181.453125 98.9375 182.367188 88.601562 188.484375 81.3125 L 188.597656 81.28125 C 189.550781 80.945312 190.414062 80.398438 191.132812 79.683594 C 192.046875 78.769531 192.894531 77.785156 193.667969 76.75 L 194.171875 76.113281 C 195.628906 74.359375 197.289062 72.78125 199.117188 71.414062 C 199.613281 71.003906 200.1875 70.695312 200.800781 70.5 C 201.328125 70.398438 201.867188 70.382812 202.398438 70.449219 C 204.585938 70.714844 206.792969 70.796875 208.996094 70.699219 C 210.527344 70.457031 212.074219 70.300781 213.625 70.230469 C 217.636719 70.34375 221.058594 73.175781 223.59375 76.285156 C 224.957031 77.878906 226.171875 79.710938 226.253906 81.789062 Z M 226.253906 81.789062 " />
                                    </g>
                                    <mask id="mask21">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip22">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface69" clip-path="url(#clip22)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 244.214844 102.605469 C 239.144531 103.535156 234.945312 99.433594 232.617188 96.4375 C 231.902344 95.53125 231.253906 94.574219 230.671875 93.574219 L 248.074219 96.859375 L 248.777344 96.992188 C 248.777344 96.992188 251.976562 101.183594 244.214844 102.605469 Z M 244.214844 102.605469 " />
                                    </g>
                                    <mask id="mask22">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip23">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface72" clip-path="url(#clip23)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 178.371094 100.921875 C 178.441406 100.09375 178.316406 99.257812 178.003906 98.488281 C 178.003906 98.550781 177.945312 98.613281 177.925781 98.679688 C 177.652344 99.527344 178.019531 100.410156 178.253906 101.289062 C 178.304688 101.171875 178.34375 101.050781 178.371094 100.921875 Z M 178.371094 100.921875 " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 179.878906 90.542969 C 179.8125 91.417969 179.828125 92.300781 179.929688 93.171875 C 179.992188 92.296875 179.976562 91.414062 179.878906 90.542969 Z M 179.878906 90.542969 " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 223.886719 84.613281 C 223.21875 85.949219 222.273438 87.125 221.109375 88.0625 C 219.648438 89.109375 217.804688 89.398438 216.042969 89.824219 C 214.28125 90.25 212.460938 90.929688 211.460938 92.425781 C 210.917969 93.386719 210.554688 94.441406 210.390625 95.53125 C 210.222656 96.625 209.789062 97.660156 209.121094 98.542969 C 208.394531 99.371094 207.113281 99.8125 206.164062 99.253906 C 205.628906 98.894531 205.226562 98.375 205.007812 97.769531 C 204.292969 96.140625 204.101562 94.339844 203.816406 92.578125 C 203.53125 90.8125 203.109375 89.011719 202.03125 87.597656 C 200.953125 86.183594 199.046875 85.253906 197.355469 85.804688 C 196.210938 86.246094 195.296875 87.136719 194.820312 88.265625 C 194.351562 89.386719 194.03125 90.5625 193.871094 91.765625 C 193.078125 96.074219 192.148438 100.351562 191.082031 104.601562 C 191.050781 104.777344 190.980469 104.941406 190.871094 105.082031 C 190.703125 105.25 190.476562 105.347656 190.238281 105.355469 C 188.820312 105.539062 187.457031 104.550781 186.03125 104.652344 C 184.277344 104.777344 182.988281 106.476562 181.257812 106.757812 C 180.15625 106.855469 179.050781 106.609375 178.089844 106.054688 C 177.652344 105.863281 177.253906 105.582031 176.929688 105.230469 C 176.632812 105.660156 176.542969 106.203125 176.695312 106.707031 C 176.976562 107.296875 177.476562 107.753906 178.089844 107.976562 C 179.050781 108.53125 180.15625 108.777344 181.257812 108.679688 C 182.988281 108.398438 184.277344 106.699219 186.03125 106.574219 C 187.457031 106.472656 188.820312 107.460938 190.238281 107.277344 C 190.476562 107.269531 190.703125 107.171875 190.871094 107.003906 C 190.980469 106.863281 191.050781 106.699219 191.082031 106.523438 C 192.144531 102.292969 193.074219 98.015625 193.871094 93.6875 C 194.03125 92.484375 194.351562 91.304688 194.820312 90.1875 C 195.296875 89.054688 196.210938 88.167969 197.355469 87.726562 C 199.046875 87.175781 200.949219 88.105469 202.03125 89.519531 C 203.113281 90.933594 203.527344 92.742188 203.816406 94.5 C 204.109375 96.253906 204.292969 98.0625 205.007812 99.691406 C 205.226562 100.296875 205.628906 100.816406 206.164062 101.175781 C 207.113281 101.726562 208.394531 101.289062 209.121094 100.464844 C 209.789062 99.582031 210.222656 98.546875 210.390625 97.453125 C 210.554688 96.363281 210.917969 95.308594 211.460938 94.347656 C 212.460938 92.851562 214.292969 92.175781 216.042969 91.746094 C 217.789062 91.316406 219.632812 91.03125 221.109375 89.984375 C 222.273438 89.046875 223.21875 87.871094 223.886719 86.535156 C 224.824219 84.902344 225.699219 83.128906 225.621094 81.246094 C 225.609375 81.003906 225.585938 80.761719 225.546875 80.519531 C 225.242188 81.972656 224.679688 83.359375 223.886719 84.613281 Z M 223.886719 84.613281 " />
                                    </g>
                                    <mask id="mask23">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip24">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface75" clip-path="url(#clip24)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 225.648438 84.800781 C 227.273438 87.695312 228.234375 90.910156 228.46875 94.21875 C 222.820312 91.046875 217.511719 87.566406 214.832031 86.355469 C 210.160156 84.242188 192.695312 84.5625 186.132812 84.757812 C 186.820312 83.53125 187.621094 82.371094 188.527344 81.296875 C 190.027344 79.511719 191.789062 77.96875 193.753906 76.714844 C 199.015625 73.375 205.414062 72.347656 211.453125 73.875 C 217.492188 75.402344 222.636719 79.351562 225.679688 84.789062 Z M 225.648438 84.800781 " />
                                    </g>
                                    <mask id="mask24">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip25">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface78" clip-path="url(#clip25)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 245.796875 99.914062 C 242.75 100.851562 237.777344 99.039062 232.617188 96.4375 C 231.902344 95.53125 231.253906 94.574219 230.671875 93.574219 L 248.074219 96.859375 C 249.226562 97.644531 249.519531 98.765625 245.796875 99.914062 Z M 245.796875 99.914062 " />
                                    </g>
                                    <mask id="mask25">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip26">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface81" clip-path="url(#clip26)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 175.144531 359.738281 C 175.144531 359.738281 185.757812 370.042969 190.351562 369.25 C 190.351562 369.25 177.363281 368.140625 175.144531 359.738281 Z M 175.144531 359.738281 " />
                                    </g>
                                    <mask id="mask26">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip27">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface84" clip-path="url(#clip27)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 172.925781 364.511719 C 172.925781 364.511719 173.878906 369.8125 176.410156 369.292969 C 178.945312 368.773438 172.925781 364.511719 172.925781 364.511719 Z M 172.925781 364.511719 " />
                                    </g>
                                    <mask id="mask27">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip28">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface87" clip-path="url(#clip28)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 189.558594 453.121094 C 189.558594 453.121094 174.492188 464.851562 177.03125 465.167969 C 179.574219 465.484375 189.558594 453.121094 189.558594 453.121094 Z M 189.558594 453.121094 " />
                                    </g>
                                    <mask id="mask28">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.0509804;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip29">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface90" clip-path="url(#clip29)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 209.71875 220.269531 L 258.507812 212.324219 L 258.507812 258.554688 L 212.152344 256.125 Z M 209.71875 220.269531 " />
                                    </g>
                                    <mask id="mask29">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip30">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface93" clip-path="url(#clip30)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 258.507812 212.324219 L 317.023438 216.703125 L 313.785156 256.9375 L 258.507812 258.554688 Z M 258.507812 212.324219 " />
                                    </g>
                                    <mask id="mask30">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.0509804;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip31">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface96" clip-path="url(#clip31)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 317.023438 216.703125 L 317.023438 278.347656 L 298.703125 281.867188 L 289.792969 283.578125 L 269.207031 287.535156 L 269.207031 224.328125 Z M 317.023438 216.703125 " />
                                    </g>
                                    <mask id="mask31">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip32">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface99" clip-path="url(#clip32)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 192.050781 233.574219 L 209.71875 220.269531 L 269.207031 224.328125 L 260.449219 239.089844 Z M 192.050781 233.574219 " />
                                    </g>
                                    <mask id="mask32">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip33">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface102" clip-path="url(#clip33)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 317.023438 216.703125 L 269.207031 224.328125 L 284.769531 238.28125 L 335.988281 229.679688 Z M 317.023438 216.703125 " />
                                    </g>
                                    <mask id="mask33">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip34">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface105" clip-path="url(#clip34)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 298.703125 281.867188 L 289.792969 283.578125 L 289.792969 270.40625 L 298.136719 268.300781 Z M 298.703125 281.867188 " />
                                    </g>
                                    <mask id="mask34">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip35">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface108" clip-path="url(#clip35)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 246.347656 276.476562 L 246.347656 285.191406 L 236.40625 284.175781 L 236.40625 276.476562 Z M 246.347656 276.476562 " />
                                    </g>
                                    <mask id="mask35">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip36">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface111" clip-path="url(#clip36)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 233.378906 279.222656 L 233.378906 283.859375 L 223.441406 282.835938 L 223.441406 279.222656 Z M 233.378906 279.222656 " />
                                    </g>
                                    <mask id="mask36">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip37">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface114" clip-path="url(#clip37)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 263.222656 271.851562 C 256.410156 280.574219 233.917969 274.546875 233.917969 274.546875 L 217.199219 257.09375 L 214.933594 254.730469 L 219.367188 246.484375 C 219.367188 246.484375 220.636719 246.902344 222.75 247.640625 C 233.953125 251.558594 268.957031 264.515625 263.222656 271.851562 Z M 263.222656 271.851562 " />
                                    </g>
                                    <mask id="mask37">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip38">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface117" clip-path="url(#clip38)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 222.09375 246.371094 C 221.167969 249.035156 218.816406 252.980469 216.542969 255.828125 L 214.273438 253.460938 L 218.707031 245.21875 C 218.707031 245.21875 219.984375 245.636719 222.09375 246.371094 Z M 222.09375 246.371094 " />
                                    </g>
                                    <mask id="mask38">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip39">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface120" clip-path="url(#clip39)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 174.351562 206.53125 C 174.351562 206.53125 151.859375 209.070312 153.601562 216.996094 C 153.601562 216.996094 162.148438 209 174.351562 206.53125 Z M 174.351562 206.53125 " />
                                    </g>
                                    <mask id="mask39">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip40">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface123" clip-path="url(#clip40)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 174.351562 209.703125 C 174.351562 209.703125 161.585938 219.058594 163.929688 219.691406 C 166.273438 220.324219 174.351562 209.703125 174.351562 209.703125 Z M 174.351562 209.703125 " />
                                    </g>
                                    <mask id="mask40">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip41">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface126" clip-path="url(#clip41)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 180.054688 213.507812 C 180.054688 213.507812 176.410156 220.066406 178.472656 219.722656 C 180.53125 219.382812 180.054688 213.507812 180.054688 213.507812 Z M 180.054688 213.507812 " />
                                    </g>
                                    <mask id="mask41">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip42">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface129" clip-path="url(#clip42)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 487.433594 155.835938 C 487.433594 155.835938 463.355469 154.382812 466.167969 171.292969 C 466.167969 171.292969 465.601562 174.277344 468.308594 175.636719 C 468.308594 175.636719 468.351562 174.367188 470.785156 174.804688 C 471.652344 174.949219 472.527344 174.992188 473.402344 174.929688 C 474.574219 174.847656 475.6875 174.382812 476.570312 173.613281 C 476.570312 173.613281 483.351562 170.808594 485.988281 159.722656 C 485.988281 159.722656 487.933594 157.308594 487.859375 156.6875 L 483.789062 158.421875 C 483.789062 158.421875 485.175781 161.359375 484.085938 163.800781 C 484.085938 163.800781 483.953125 158.53125 483.175781 158.652344 C 483.015625 158.652344 481.058594 159.671875 481.058594 159.671875 C 481.058594 159.671875 483.453125 164.789062 481.648438 168.507812 C 481.648438 168.507812 482.332031 162.203125 480.308594 160.039062 L 477.476562 161.695312 C 477.476562 161.695312 480.273438 166.980469 478.378906 171.292969 C 478.378906 171.292969 478.867188 164.675781 476.875 162.101562 L 474.285156 164.132812 C 474.285156 164.132812 476.90625 169.339844 475.3125 172.914062 C 475.3125 172.914062 475.101562 165.214844 473.71875 164.632812 C 473.71875 164.632812 471.453125 166.636719 471.101562 167.460938 C 471.101562 167.460938 472.902344 171.265625 471.789062 173.238281 C 471.789062 173.238281 471.101562 168.109375 470.519531 168.082031 C 470.519531 168.082031 468.257812 171.480469 468.023438 173.789062 C 468.136719 171.636719 468.808594 169.550781 469.976562 167.738281 C 468.671875 167.988281 467.464844 168.609375 466.507812 169.535156 C 466.507812 169.535156 466.863281 167.132812 470.53125 166.921875 C 470.53125 166.921875 472.402344 164.339844 472.902344 164.183594 C 472.902344 164.183594 469.253906 163.878906 467.042969 164.859375 C 467.042969 164.859375 468.988281 162.597656 473.566406 163.625 L 476.101562 161.53125 C 476.101562 161.53125 471.292969 160.898438 469.257812 161.601562 C 469.257812 161.601562 471.605469 159.597656 476.792969 161.054688 L 479.582031 159.386719 C 479.582031 159.386719 475.480469 158.507812 473.042969 158.824219 C 473.042969 158.824219 475.621094 157.433594 480.398438 158.9375 L 482.394531 158.042969 C 482.394531 158.042969 479.390625 157.453125 478.511719 157.359375 C 477.628906 157.261719 477.585938 157.023438 477.585938 157.023438 C 479.488281 156.707031 481.441406 156.925781 483.226562 157.65625 C 483.226562 157.65625 487.507812 156.101562 487.433594 155.835938 Z M 487.433594 155.835938 " />
                                    </g>
                                    <mask id="mask42">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip43">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface132" clip-path="url(#clip43)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 341.152344 140.824219 C 341.152344 140.824219 346.695312 117.304688 329.5625 117.222656 C 329.5625 117.222656 326.71875 116.15625 324.921875 118.589844 C 324.921875 118.589844 326.148438 118.851562 325.316406 121.171875 C 325.03125 121.992188 324.839844 122.84375 324.746094 123.707031 C 324.625 124.886719 324.886719 126.074219 325.5 127.089844 C 325.5 127.089844 327.101562 134.253906 337.539062 138.746094 C 337.539062 138.746094 339.59375 141.078125 340.214844 141.105469 L 339.199219 136.796875 C 339.199219 136.796875 336.070312 137.667969 333.851562 136.164062 C 333.851562 136.164062 339.066406 136.929688 339.074219 136.164062 C 339.074219 136.003906 338.441406 133.90625 338.441406 133.90625 C 338.441406 133.90625 332.996094 135.390625 329.636719 132.972656 C 329.636719 132.972656 335.726562 134.722656 338.207031 133.109375 L 337.066406 129.988281 C 337.066406 129.988281 331.363281 131.84375 327.457031 129.238281 C 327.457031 129.238281 333.890625 130.851562 336.765625 129.328125 L 335.214844 126.421875 C 335.214844 126.421875 329.636719 128.121094 326.386719 125.933594 C 326.386719 125.933594 333.992188 127.039062 334.816406 125.78125 C 334.816406 125.78125 333.230469 123.203125 332.476562 122.71875 C 332.476562 122.71875 328.445312 123.847656 326.671875 122.410156 C 326.671875 122.410156 331.835938 122.605469 331.957031 122.058594 C 331.957031 122.058594 328.996094 119.25 326.742188 118.617188 C 328.84375 119.09375 330.785156 120.113281 332.375 121.570312 C 332.351562 120.242188 331.941406 118.949219 331.195312 117.847656 C 331.195312 117.847656 333.503906 118.609375 333.097656 122.289062 C 333.097656 122.289062 335.316406 124.570312 335.386719 125.089844 C 335.386719 125.089844 336.304688 121.546875 335.714844 119.195312 C 335.714844 119.195312 337.617188 121.503906 335.824219 125.847656 L 337.445312 128.730469 C 337.445312 128.730469 338.914062 124.101562 338.539062 121.972656 C 338.539062 121.972656 340.117188 124.621094 337.792969 129.492188 L 338.964844 132.53125 C 338.964844 132.53125 340.53125 128.636719 340.632812 126.1875 C 340.632812 126.1875 341.5625 128.964844 339.261719 133.425781 L 339.808594 135.542969 C 339.808594 135.542969 340.898438 132.683594 341.140625 131.832031 C 341.378906 130.984375 341.625 130.976562 341.625 130.976562 C 341.617188 132.90625 341.070312 134.792969 340.050781 136.429688 C 340.050781 136.429688 340.878906 140.855469 341.152344 140.824219 Z M 341.152344 140.824219 " />
                                    </g>
                                    <mask id="mask43">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip44">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface135" clip-path="url(#clip44)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 288.417969 148.839844 C 288.417969 148.839844 269.078125 134.363281 262.164062 150.046875 C 262.164062 150.046875 260.054688 152.234375 261.570312 154.851562 C 261.570312 154.851562 262.292969 153.832031 264.105469 155.527344 C 264.746094 156.125 265.457031 156.644531 266.222656 157.074219 C 267.257812 157.648438 268.449219 157.871094 269.625 157.707031 C 269.625 157.707031 276.820312 159.097656 285.109375 151.289062 C 285.109375 151.289062 288.070312 150.339844 288.347656 149.78125 L 283.984375 149.011719 C 283.984375 149.011719 283.527344 152.226562 281.277344 153.667969 C 281.277344 153.667969 284.058594 149.191406 283.335938 148.867188 C 283.191406 148.796875 281.011719 148.550781 281.011719 148.550781 C 281.011719 148.550781 280.199219 154.144531 276.652344 156.253906 C 276.652344 156.253906 280.6875 151.367188 280.1875 148.449219 L 276.871094 148.269531 C 276.871094 148.269531 276.308594 154.226562 272.355469 156.789062 C 272.355469 156.789062 276.390625 151.53125 276.15625 148.285156 L 272.875 148.550781 C 272.875 148.550781 272.210938 154.339844 268.90625 156.445312 C 268.90625 156.445312 272.957031 149.902344 272.125 148.65625 C 272.125 148.65625 269.128906 149.082031 268.386719 149.578125 C 268.386719 149.578125 267.8125 153.722656 265.785156 154.777344 C 265.785156 154.777344 268.035156 150.117188 267.578125 149.792969 C 267.578125 149.792969 263.820312 151.382812 262.34375 153.199219 C 263.621094 151.460938 265.328125 150.089844 267.296875 149.214844 C 266.074219 148.707031 264.726562 148.566406 263.421875 148.808594 C 263.421875 148.808594 265.03125 146.996094 268.210938 148.839844 C 268.210938 148.839844 271.1875 147.71875 271.695312 147.859375 C 271.695312 147.859375 268.8125 145.59375 266.421875 145.203125 C 266.421875 145.203125 269.300781 144.375 272.5625 147.738281 L 275.851562 147.402344 C 275.851562 147.402344 272.195312 144.230469 270.097656 143.699219 C 270.097656 143.699219 273.160156 143.3125 276.6875 147.382812 L 279.933594 147.527344 C 279.933594 147.527344 277 144.535156 274.789062 143.457031 C 274.789062 143.457031 277.695312 143.710938 280.863281 147.597656 L 283.027344 147.945312 C 283.027344 147.945312 280.839844 145.804688 280.15625 145.246094 C 279.472656 144.6875 279.566406 144.453125 279.566406 144.453125 C 281.328125 145.234375 282.839844 146.488281 283.933594 148.082031 C 283.933594 148.082031 288.335938 149.101562 288.417969 148.839844 Z M 288.417969 148.839844 " />
                                    </g>
                                    <mask id="mask44">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip45">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface138" clip-path="url(#clip45)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 352.804688 14.324219 C 352.804688 14.324219 333.464844 -0.160156 326.550781 15.53125 C 326.550781 15.53125 324.441406 17.71875 325.957031 20.339844 C 325.957031 20.339844 326.679688 19.316406 328.492188 21.011719 C 329.136719 21.605469 329.847656 22.121094 330.613281 22.550781 C 331.648438 23.128906 332.84375 23.351562 334.015625 23.183594 C 334.015625 23.183594 341.214844 24.574219 349.503906 16.761719 C 349.503906 16.761719 352.460938 15.816406 352.734375 15.253906 L 348.367188 14.496094 C 348.367188 14.496094 347.917969 17.710938 345.664062 19.152344 C 345.664062 19.152344 348.453125 14.675781 347.730469 14.351562 C 347.582031 14.28125 345.402344 14.035156 345.402344 14.035156 C 345.402344 14.035156 344.566406 19.640625 341.019531 21.738281 C 341.019531 21.738281 345.046875 16.851562 344.554688 13.933594 L 341.242188 13.753906 C 341.242188 13.753906 340.671875 19.710938 336.722656 22.265625 C 336.722656 22.265625 340.757812 17.007812 340.523438 13.761719 L 337.25 14.027344 C 337.25 14.027344 336.578125 19.824219 333.273438 21.929688 C 333.273438 21.929688 337.332031 15.386719 336.5 14.140625 C 336.5 14.140625 333.503906 14.566406 332.761719 15.0625 C 332.761719 15.0625 332.183594 19.210938 330.15625 20.261719 C 330.15625 20.261719 332.40625 15.601562 331.949219 15.269531 C 331.949219 15.269531 328.191406 16.867188 326.71875 18.683594 C 327.992188 16.945312 329.699219 15.570312 331.671875 14.699219 C 330.445312 14.1875 329.09375 14.046875 327.789062 14.292969 C 327.789062 14.292969 329.402344 12.480469 332.585938 14.324219 C 332.585938 14.324219 335.5625 13.195312 336.070312 13.34375 C 336.070312 13.34375 333.1875 11.078125 330.796875 10.679688 C 330.796875 10.679688 333.667969 9.863281 336.929688 13.214844 L 340.21875 12.878906 C 340.21875 12.878906 336.570312 9.710938 334.464844 9.171875 C 334.464844 9.171875 337.527344 8.789062 341.0625 12.859375 L 344.308594 13 C 344.308594 13 341.375 10.007812 339.15625 8.9375 C 339.15625 8.9375 342.070312 9.1875 345.238281 13.078125 L 347.394531 13.425781 C 347.394531 13.425781 345.199219 11.308594 344.515625 10.761719 C 343.832031 10.214844 343.925781 9.976562 343.925781 9.976562 C 345.691406 10.757812 347.203125 12.011719 348.292969 13.601562 C 348.292969 13.601562 352.695312 14.566406 352.804688 14.324219 Z M 352.804688 14.324219 " />
                                    </g>
                                    <mask id="mask45">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip46">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface141" clip-path="url(#clip46)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 426.703125 32.671875 C 426.703125 32.671875 418.972656 9.773438 404.390625 18.773438 C 404.390625 18.773438 401.414062 19.40625 401.179688 22.394531 C 401.179688 22.394531 402.351562 21.960938 402.871094 24.371094 C 403.0625 25.230469 403.355469 26.0625 403.738281 26.851562 C 404.261719 27.914062 405.117188 28.78125 406.171875 29.316406 C 406.171875 29.316406 411.316406 34.550781 422.570312 32.820312 C 422.570312 32.820312 425.542969 33.71875 426.089844 33.410156 L 422.917969 30.292969 C 422.917969 30.292969 420.726562 32.683594 418.054688 32.589844 C 418.054688 32.589844 422.886719 30.484375 422.488281 29.804688 C 422.40625 29.671875 420.753906 28.234375 420.753906 28.234375 C 420.753906 28.234375 416.914062 32.375 412.792969 32.101562 C 412.792969 32.101562 418.882812 30.363281 420.125 27.664062 L 417.5 25.640625 C 417.5 25.640625 413.660156 30.21875 408.953125 30.078125 C 408.953125 30.078125 415.289062 28.042969 416.894531 25.226562 L 414.042969 23.585938 C 414.042969 23.585938 410.238281 27.980469 406.296875 27.839844 C 406.296875 27.839844 413.34375 24.75 413.363281 23.253906 C 413.363281 23.253906 410.660156 21.90625 409.765625 21.890625 C 409.765625 21.890625 406.9375 24.980469 404.695312 24.703125 C 404.695312 24.703125 409.183594 22.132812 408.992188 21.605469 C 408.992188 21.605469 405 20.789062 402.75 21.449219 C 404.785156 20.738281 406.96875 20.574219 409.085938 20.972656 C 408.363281 19.855469 407.332031 18.972656 406.113281 18.433594 C 406.113281 18.433594 408.472656 17.859375 410.050781 21.179688 C 410.050781 21.179688 413.140625 21.949219 413.472656 22.347656 C 413.472656 22.347656 412.382812 18.855469 410.640625 17.167969 C 410.640625 17.167969 413.472656 18.125 414.246094 22.761719 L 417.148438 24.347656 C 417.148438 24.347656 415.949219 19.648438 414.503906 18.003906 C 414.503906 18.003906 417.25 19.425781 417.84375 24.785156 L 420.441406 26.742188 C 420.441406 26.742188 419.71875 22.609375 418.503906 20.464844 C 418.503906 20.464844 420.757812 22.328125 421.164062 27.332031 L 422.742188 28.84375 C 422.742188 28.84375 422.160156 25.835938 421.917969 24.988281 C 421.675781 24.136719 421.875 24.078125 421.875 24.078125 C 422.882812 25.726562 423.414062 27.617188 423.414062 29.546875 C 423.414062 29.546875 426.480469 32.835938 426.703125 32.671875 Z M 426.703125 32.671875 " />
                                    </g>
                                    <mask id="mask46">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip47">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface144" clip-path="url(#clip47)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 376.25 33.800781 C 376.25 33.800781 352.234375 31.125 354.21875 48.179688 C 354.21875 48.179688 353.5 51.132812 356.117188 52.617188 C 356.117188 52.617188 356.226562 51.347656 358.652344 51.921875 C 359.511719 52.105469 360.386719 52.191406 361.265625 52.179688 C 362.449219 52.160156 363.59375 51.75 364.527344 51.019531 C 364.527344 51.019531 371.441406 48.566406 374.667969 37.625 C 374.667969 37.625 376.730469 35.3125 376.6875 34.683594 L 372.535156 36.21875 C 372.535156 36.21875 373.804688 39.21875 372.535156 41.601562 C 372.535156 41.601562 372.671875 36.332031 371.902344 36.414062 C 371.746094 36.414062 369.742188 37.328125 369.742188 37.328125 C 369.742188 37.328125 371.871094 42.558594 369.882812 46.207031 C 369.882812 46.207031 370.882812 39.941406 368.976562 37.683594 L 366.03125 39.203125 C 366.03125 39.203125 368.5625 44.628906 366.441406 48.839844 C 366.441406 48.839844 367.265625 42.253906 365.410156 39.585938 L 362.714844 41.488281 C 362.714844 41.488281 365.074219 46.820312 363.292969 50.316406 C 363.292969 50.316406 363.476562 42.617188 362.125 41.964844 C 362.125 41.964844 359.757812 43.867188 359.371094 44.652344 C 359.371094 44.652344 360.972656 48.519531 359.761719 50.457031 C 359.761719 50.457031 359.335938 45.300781 358.78125 45.25 C 358.78125 45.25 356.347656 48.527344 355.992188 50.84375 C 356.210938 48.695312 356.988281 46.644531 358.246094 44.894531 C 356.933594 45.074219 355.699219 45.636719 354.699219 46.511719 C 354.699219 46.511719 355.167969 44.132812 358.84375 44.105469 C 358.84375 44.105469 360.839844 41.628906 361.378906 41.496094 C 361.378906 41.496094 357.746094 41.007812 355.484375 41.875 C 355.484375 41.875 357.542969 39.707031 362.070312 40.96875 L 364.738281 39.007812 C 364.738281 39.007812 359.914062 38.03125 357.875 38.664062 C 357.875 38.664062 360.320312 36.761719 365.425781 38.507812 L 368.296875 36.980469 C 368.296875 36.980469 364.25 35.886719 361.796875 36.085938 C 361.796875 36.085938 364.4375 34.816406 369.132812 36.574219 L 371.175781 35.78125 C 371.175781 35.78125 368.203125 35.039062 367.328125 34.898438 C 366.453125 34.757812 366.421875 34.519531 366.421875 34.519531 C 368.335938 34.296875 370.277344 34.613281 372.023438 35.429688 C 372.023438 35.429688 376.292969 34.066406 376.25 33.800781 Z M 376.25 33.800781 " />
                                    </g>
                                    <mask id="mask47">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip48">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface147" clip-path="url(#clip48)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 586.375 220.359375 C 586.375 220.359375 562.371094 217.679688 564.351562 234.714844 C 564.351562 234.714844 563.636719 237.671875 566.253906 239.15625 C 566.253906 239.15625 566.363281 237.886719 568.789062 238.449219 C 569.644531 238.640625 570.523438 238.730469 571.398438 238.710938 C 572.585938 238.691406 573.730469 238.285156 574.664062 237.550781 C 574.664062 237.550781 581.578125 235.097656 584.769531 224.164062 C 584.769531 224.164062 586.835938 221.839844 586.792969 221.21875 L 582.640625 222.75 C 582.640625 222.75 583.90625 225.753906 582.640625 228.140625 C 582.640625 228.140625 582.773438 222.863281 582.007812 222.953125 C 581.847656 222.953125 579.847656 223.859375 579.847656 223.859375 C 579.847656 223.859375 581.976562 229.089844 579.984375 232.738281 C 579.984375 232.738281 580.988281 226.476562 579.078125 224.214844 L 576.132812 225.742188 C 576.132812 225.742188 578.667969 231.164062 576.550781 235.375 C 576.550781 235.375 577.367188 228.792969 575.511719 226.117188 L 572.820312 228.019531 C 572.820312 228.019531 575.175781 233.351562 573.394531 236.839844 C 573.394531 236.839844 573.578125 229.140625 572.230469 228.492188 C 572.230469 228.492188 569.867188 230.398438 569.472656 231.183594 C 569.472656 231.183594 571.082031 235.050781 569.867188 236.984375 C 569.867188 236.984375 569.441406 231.828125 568.882812 231.777344 C 568.882812 231.777344 566.449219 235.058594 566.097656 237.371094 C 566.316406 235.226562 567.09375 233.175781 568.351562 231.425781 C 567.035156 231.601562 565.800781 232.164062 564.804688 233.042969 C 564.804688 233.042969 565.273438 230.65625 568.949219 230.632812 C 568.949219 230.632812 570.949219 228.152344 571.480469 228.023438 C 571.480469 228.023438 567.851562 227.53125 565.589844 228.398438 C 565.589844 228.398438 567.648438 226.238281 572.179688 227.5 L 574.839844 225.539062 C 574.839844 225.539062 570.074219 224.636719 568.003906 225.257812 C 568.003906 225.257812 570.449219 223.355469 575.554688 225.09375 L 578.425781 223.574219 C 578.425781 223.574219 574.378906 222.480469 571.925781 222.679688 C 571.925781 222.679688 574.566406 221.410156 579.261719 223.167969 L 581.304688 222.367188 C 581.304688 222.367188 578.332031 221.625 577.457031 221.492188 C 576.582031 221.359375 576.550781 221.113281 576.550781 221.113281 C 578.464844 220.886719 580.40625 221.203125 582.152344 222.019531 C 582.152344 222.019531 586.4375 220.628906 586.375 220.359375 Z M 586.375 220.359375 " />
                                    </g>
                                    <mask id="mask48">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip49">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface150" clip-path="url(#clip49)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 623.070312 242.792969 C 623.070312 242.792969 599.066406 240.125 601.046875 257.152344 C 601.046875 257.152344 600.339844 260.109375 602.949219 261.589844 C 602.949219 261.589844 603.058594 260.324219 605.484375 260.894531 C 606.339844 261.082031 607.214844 261.164062 608.089844 261.148438 C 609.269531 261.125 610.410156 260.71875 611.339844 259.992188 C 611.339844 259.992188 618.246094 257.539062 621.441406 246.601562 C 621.441406 246.601562 623.511719 244.285156 623.460938 243.65625 L 619.3125 245.1875 C 619.3125 245.1875 620.578125 248.191406 619.3125 250.574219 C 619.3125 250.574219 619.445312 245.304688 618.675781 245.386719 C 618.519531 245.386719 616.515625 246.296875 616.515625 246.296875 C 616.515625 246.296875 618.644531 251.527344 616.65625 255.175781 C 616.65625 255.175781 617.65625 248.914062 615.75 246.65625 L 612.804688 248.179688 C 612.804688 248.179688 615.335938 253.601562 613.222656 257.8125 C 613.222656 257.8125 614.039062 251.230469 612.183594 248.558594 L 609.488281 250.460938 C 609.488281 250.460938 611.847656 255.796875 610.070312 259.289062 C 610.070312 259.289062 610.25 251.585938 608.898438 250.9375 C 608.898438 250.9375 606.535156 252.839844 606.144531 253.625 C 606.144531 253.625 607.753906 257.496094 606.535156 259.429688 C 606.535156 259.429688 606.113281 254.273438 605.554688 254.222656 C 605.554688 254.222656 603.121094 257.5 602.773438 259.816406 C 602.992188 257.671875 603.765625 255.621094 605.023438 253.867188 C 603.707031 254.050781 602.472656 254.613281 601.472656 255.484375 C 601.472656 255.484375 601.949219 253.101562 605.625 253.082031 C 605.625 253.082031 607.621094 250.601562 608.160156 250.46875 C 608.160156 250.46875 604.527344 249.980469 602.265625 250.847656 C 602.265625 250.847656 604.324219 248.679688 608.855469 249.941406 L 611.515625 247.980469 C 611.515625 247.980469 606.75 247.082031 604.679688 247.703125 C 604.679688 247.703125 607.125 245.800781 612.234375 247.542969 L 615.101562 246.015625 C 615.101562 246.015625 611.054688 244.925781 608.601562 245.121094 C 608.601562 245.121094 611.246094 243.855469 615.941406 245.609375 L 617.980469 244.816406 C 617.980469 244.816406 615.007812 244.074219 614.140625 243.9375 C 613.273438 243.796875 613.226562 243.554688 613.226562 243.554688 C 615.144531 243.335938 617.082031 243.652344 618.828125 244.46875 C 618.828125 244.46875 623.132812 243.066406 623.070312 242.792969 Z M 623.070312 242.792969 " />
                                    </g>
                                    <mask id="mask49">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip50">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface153" clip-path="url(#clip50)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 541.597656 53.804688 C 541.597656 53.804688 522.257812 39.324219 515.347656 55.007812 C 515.347656 55.007812 513.234375 57.195312 514.75 59.816406 C 514.75 59.816406 515.472656 58.792969 517.285156 60.488281 C 517.925781 61.085938 518.636719 61.605469 519.402344 62.035156 C 520.4375 62.613281 521.632812 62.835938 522.804688 62.667969 C 522.804688 62.667969 530.003906 64.058594 538.296875 56.25 C 538.296875 56.25 541.25 55.300781 541.527344 54.742188 L 537.175781 53.957031 C 537.175781 53.957031 536.71875 57.171875 534.46875 58.609375 C 534.46875 58.609375 537.25 54.132812 536.527344 53.808594 C 536.382812 53.738281 534.210938 53.492188 534.210938 53.492188 C 534.210938 53.492188 533.390625 59.085938 529.84375 61.199219 C 529.84375 61.199219 533.878906 56.308594 533.378906 53.390625 L 530.066406 53.214844 C 530.066406 53.214844 529.5 59.167969 525.546875 61.730469 C 525.546875 61.730469 529.589844 56.472656 529.351562 53.226562 L 526.066406 53.492188 C 526.066406 53.492188 525.433594 59.28125 522.101562 61.386719 C 522.101562 61.386719 526.15625 54.84375 525.320312 53.601562 C 525.320312 53.601562 522.324219 54.027344 521.582031 54.519531 C 521.582031 54.519531 521.011719 58.667969 518.984375 59.71875 C 518.984375 59.71875 521.226562 55.058594 520.769531 54.734375 C 520.769531 54.734375 517.011719 56.328125 515.535156 58.140625 C 516.8125 56.40625 518.519531 55.03125 520.492188 54.160156 C 519.265625 53.648438 517.917969 53.507812 516.613281 53.753906 C 516.613281 53.753906 518.230469 51.9375 521.410156 53.785156 C 521.410156 53.785156 524.382812 52.660156 524.890625 52.800781 C 524.890625 52.800781 522.003906 50.539062 519.617188 50.144531 C 519.617188 50.144531 522.492188 49.320312 525.757812 52.679688 L 529.046875 52.34375 C 529.046875 52.34375 525.394531 49.175781 523.292969 48.640625 C 523.292969 48.640625 526.351562 48.253906 529.882812 52.324219 L 533.132812 52.472656 C 533.132812 52.472656 530.191406 49.476562 527.980469 48.402344 C 527.980469 48.402344 530.894531 48.652344 534.058594 52.542969 L 536.21875 52.890625 C 536.21875 52.890625 534.03125 50.746094 533.347656 50.1875 C 532.664062 49.628906 532.765625 49.445312 532.765625 49.445312 C 534.527344 50.230469 536.035156 51.484375 537.125 53.074219 C 537.125 53.074219 541.515625 54.0625 541.597656 53.804688 Z M 541.597656 53.804688 " />
                                    </g>
                                    <mask id="mask50">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip51">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface156" clip-path="url(#clip51)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 556.539062 158.328125 C 556.539062 158.328125 549.875 135.097656 534.882812 143.4375 C 534.882812 143.4375 531.878906 143.902344 531.503906 146.90625 C 531.503906 146.90625 532.695312 146.53125 533.105469 148.960938 C 533.261719 149.835938 533.515625 150.6875 533.867188 151.5 C 534.335938 152.589844 535.152344 153.5 536.1875 154.085938 C 536.1875 154.085938 541.089844 159.539062 552.410156 158.324219 C 552.410156 158.324219 555.335938 159.351562 555.894531 159.070312 L 552.898438 155.8125 C 552.898438 155.8125 550.597656 158.105469 547.933594 157.890625 C 547.933594 157.890625 552.851562 155.988281 552.472656 155.308594 C 552.394531 155.171875 550.8125 153.65625 550.8125 153.65625 C 550.8125 153.65625 546.792969 157.625 542.6875 157.160156 C 542.6875 157.160156 548.855469 155.703125 550.210938 153.078125 L 547.675781 150.933594 C 547.675781 150.933594 543.632812 155.335938 538.9375 154.992188 C 538.9375 154.992188 545.324219 153.234375 547.085938 150.503906 L 544.308594 148.734375 C 544.308594 148.734375 540.285156 152.949219 536.382812 152.632812 C 536.382812 152.632812 543.5625 149.863281 543.652344 148.371094 C 543.652344 148.371094 541.003906 146.902344 540.109375 146.851562 C 540.109375 146.851562 537.148438 149.804688 534.902344 149.425781 C 534.902344 149.425781 539.5 147.058594 539.335938 146.527344 C 539.335938 146.527344 535.382812 145.53125 533.105469 146.082031 C 535.167969 145.472656 537.351562 145.40625 539.445312 145.898438 C 538.773438 144.75 537.78125 143.824219 536.59375 143.234375 C 536.59375 143.234375 538.976562 142.757812 540.394531 146.152344 C 540.394531 146.152344 543.441406 147.054688 543.757812 147.472656 C 543.757812 147.472656 542.828125 143.925781 541.160156 142.167969 C 541.160156 142.167969 543.949219 143.246094 544.511719 147.914062 L 547.339844 149.632812 C 547.339844 149.632812 546.351562 144.878906 544.980469 143.203125 C 544.980469 143.203125 547.65625 144.746094 548.015625 150.121094 L 550.550781 152.195312 C 550.550781 152.195312 550.011719 148.035156 548.898438 145.855469 C 548.898438 145.855469 551.070312 147.820312 551.25 152.832031 L 552.757812 154.414062 C 552.757812 154.414062 552.3125 151.382812 552.125 150.523438 C 551.933594 149.660156 552.125 149.539062 552.125 149.539062 C 553.0625 151.226562 553.511719 153.140625 553.421875 155.070312 C 553.421875 155.070312 556.3125 158.480469 556.539062 158.328125 Z M 556.539062 158.328125 " />
                                    </g>
                                    <mask id="mask51">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip52">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface159" clip-path="url(#clip52)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 407.996094 210.671875 C 407.996094 210.671875 395.050781 190.265625 383.03125 202.480469 C 383.03125 202.480469 380.28125 203.75 380.761719 206.761719 C 380.761719 206.761719 381.808594 206.0625 382.882812 208.28125 C 383.273438 209.070312 383.753906 209.804688 384.316406 210.476562 C 385.074219 211.394531 386.109375 212.035156 387.261719 212.304688 C 387.261719 212.304688 393.503906 216.160156 404.023438 211.796875 C 404.023438 211.796875 407.121094 211.960938 407.578125 211.535156 L 403.777344 209.253906 C 403.777344 209.253906 402.210938 212.105469 399.59375 212.644531 C 399.59375 212.644531 403.789062 209.476562 403.226562 208.890625 C 403.117188 208.777344 401.164062 207.777344 401.164062 207.777344 C 401.164062 207.777344 398.421875 212.710938 394.355469 213.425781 C 394.355469 213.425781 399.859375 210.285156 400.429688 207.382812 L 397.394531 206.042969 C 397.394531 206.042969 394.753906 211.402344 390.152344 212.386719 C 390.152344 212.386719 395.792969 208.90625 396.710938 205.785156 L 393.542969 204.871094 C 393.542969 204.871094 390.867188 210.050781 387.035156 210.84375 C 387.035156 210.84375 393.144531 206.164062 392.808594 204.707031 C 392.808594 204.707031 389.855469 204.039062 389.007812 204.242188 C 389.007812 204.242188 386.996094 207.914062 384.730469 208.179688 C 384.730469 208.179688 388.480469 204.617188 388.167969 204.148438 C 388.167969 204.148438 384.09375 204.304688 382.066406 205.480469 C 383.875 204.308594 385.960938 203.628906 388.113281 203.515625 C 387.148438 202.601562 385.941406 201.992188 384.632812 201.757812 C 384.632812 201.757812 386.78125 200.632812 389.070312 203.488281 C 389.070312 203.488281 392.238281 203.488281 392.675781 203.804688 C 392.675781 203.804688 390.773438 200.632812 388.6875 199.449219 C 388.6875 199.449219 391.667969 199.703125 393.519531 204.019531 L 396.71875 204.871094 C 396.71875 204.871094 394.429688 200.589844 392.648438 199.367188 C 392.648438 199.367188 395.648438 200.089844 397.503906 205.15625 L 400.496094 206.425781 C 400.496094 206.425781 398.808594 202.589844 397.117188 200.792969 C 397.117188 200.792969 399.753906 202.0625 401.332031 206.824219 L 403.230469 207.921875 C 403.230469 207.921875 401.964844 205.136719 401.515625 204.371094 C 401.066406 203.601562 401.242188 203.425781 401.242188 203.425781 C 402.613281 204.78125 403.582031 206.492188 404.035156 208.367188 C 404.035156 208.367188 407.824219 210.890625 407.996094 210.671875 Z M 407.996094 210.671875 " />
                                    </g>
                                    <mask id="mask52">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip53">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface162" clip-path="url(#clip53)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 459.976562 454.261719 C 459.976562 452.667969 452.335938 451.375 442.910156 451.375 C 433.488281 451.375 425.847656 452.667969 425.847656 454.261719 C 425.847656 455.855469 433.488281 457.148438 442.910156 457.148438 C 452.335938 457.148438 459.976562 455.855469 459.976562 454.261719 Z M 459.976562 454.261719 " />
                                    </g>
                                    <mask id="mask53">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip54">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface165" clip-path="url(#clip54)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 397.769531 498.070312 C 397.769531 496.476562 390.128906 495.183594 380.703125 495.183594 C 371.28125 495.183594 363.640625 496.476562 363.640625 498.070312 C 363.640625 499.664062 371.28125 500.957031 380.703125 500.957031 C 390.128906 500.957031 397.769531 499.664062 397.769531 498.070312 Z M 397.769531 498.070312 " />
                                    </g>
                                    <mask id="mask54">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip55">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface168" clip-path="url(#clip55)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 76.082031 475.625 C 76.082031 474.03125 68.445312 472.742188 59.019531 472.742188 C 49.59375 472.742188 41.953125 474.03125 41.953125 475.625 C 41.953125 477.21875 49.59375 478.511719 59.019531 478.511719 C 68.445312 478.511719 76.082031 477.21875 76.082031 475.625 Z M 76.082031 475.625 " />
                                    </g>
                                    <mask id="mask55">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.101961;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip56">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface171" clip-path="url(#clip56)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 527.203125 495.183594 C 527.203125 493.589844 519.5625 492.300781 510.136719 492.300781 C 500.710938 492.300781 493.074219 493.589844 493.074219 495.183594 C 493.074219 496.777344 500.710938 498.070312 510.136719 498.070312 C 519.5625 498.070312 527.203125 496.777344 527.203125 495.183594 Z M 527.203125 495.183594 " />
                                    </g>
                                    <mask id="mask56">
                                        <g filter="url(#alpha)">
                                            <rect x="0" y="0" width="640" height="501" style="fill:rgb(0%,0%,0%);fill-opacity:0.2;stroke:none;" />
                                        </g>
                                    </mask>
                                    <clipPath id="clip57">
                                        <rect width="640" height="502" />
                                    </clipPath>
                                    <g id="surface174" clip-path="url(#clip57)">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 79.757812 474.1875 C 68.773438 474.277344 54.230469 472.476562 51.300781 470.6875 C 49.070312 469.328125 48.183594 464.453125 47.886719 462.199219 L 47.5625 462.199219 C 47.5625 462.199219 48.195312 470.058594 51.105469 471.839844 C 54.011719 473.621094 68.574219 475.429688 79.5625 475.339844 C 82.730469 475.339844 83.828125 474.1875 83.769531 472.511719 C 83.328125 473.535156 82.117188 474.167969 79.757812 474.1875 Z M 79.757812 474.1875 " />
                                    </g>
                                </defs>
                                <g id="surface1">
                                    <use xlink:href="#surface6" mask="url(#mask0)" />
                                    <use xlink:href="#surface9" mask="url(#mask1)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:url(#linear0);" d="M 339.085938 229.40625 L 319.675781 216.3125 L 329.46875 201.726562 L 278.203125 197.636719 L 259.78125 211.890625 L 236.722656 198.953125 L 217.492188 201.269531 L 217.265625 196.195312 C 217.027344 190.90625 216.496094 185.632812 215.671875 180.40625 C 215.757812 178.820312 215.8125 177 215.808594 175.019531 C 215.808594 166.679688 214.679688 155.628906 209.722656 148.257812 L 210.863281 137.996094 L 201.613281 127.058594 C 203.097656 124.09375 204.792969 121.242188 206.683594 118.519531 C 207 118.066406 207.316406 117.621094 207.65625 117.191406 C 219.664062 116.320312 229.140625 106.441406 229.140625 94.359375 C 229.140625 93.800781 229.140625 93.242188 229.074219 92.691406 C 229.074219 92.46875 229.03125 92.242188 229.007812 92.019531 C 230.179688 92.652344 231.363281 93.289062 232.546875 93.921875 C 232.769531 94.238281 233.023438 94.554688 233.300781 94.929688 L 233.359375 95 L 233.714844 95.4375 L 233.828125 95.570312 C 233.953125 95.722656 234.089844 95.867188 234.222656 96.019531 L 234.308594 96.121094 C 234.644531 96.496094 235 96.875 235.378906 97.25 C 235.425781 97.289062 235.46875 97.328125 235.507812 97.371094 L 235.984375 97.816406 L 236.117188 97.9375 C 236.519531 98.296875 236.953125 98.644531 237.382812 98.976562 L 237.523438 99.078125 L 238.066406 99.453125 L 238.246094 99.566406 C 238.453125 99.691406 238.667969 99.824219 238.878906 99.945312 L 238.953125 99.992188 C 239.203125 100.125 239.453125 100.25 239.707031 100.371094 L 239.835938 100.421875 C 240.050781 100.515625 240.261719 100.605469 240.46875 100.6875 L 240.664062 100.757812 C 240.886719 100.835938 241.101562 100.902344 241.332031 100.96875 L 241.46875 101.003906 C 241.75 101.074219 242.027344 101.132812 242.3125 101.175781 L 242.34375 101.175781 C 242.613281 101.21875 242.882812 101.246094 243.15625 101.257812 L 243.339844 101.257812 C 243.582031 101.273438 243.824219 101.273438 244.066406 101.257812 L 244.226562 101.257812 C 244.53125 101.242188 244.832031 101.207031 245.132812 101.152344 C 246.550781 100.964844 247.910156 100.476562 249.125 99.71875 C 249.433594 99.511719 249.707031 99.257812 249.9375 98.964844 C 251.203125 97.300781 249.808594 95.480469 249.808594 95.480469 C 249.316406 94.300781 246.109375 93.472656 246.109375 93.472656 C 246.109375 93.472656 235.96875 89.234375 235.96875 85.859375 C 235.96875 82.488281 233.433594 64.984375 207.269531 60.984375 C 207.269531 60.984375 190.25 60.023438 185.46875 69.144531 L 185.367188 70.210938 C 183.957031 71.089844 182.792969 72.859375 181.40625 73.378906 C 180.804688 73.507812 180.226562 73.722656 179.6875 74.015625 L 179.6875 73.894531 C 179.527344 74.035156 179.394531 74.203125 179.300781 74.394531 C 179.003906 74.988281 178.824219 75.636719 178.777344 76.296875 C 178.632812 77.105469 178.351562 77.886719 177.945312 78.601562 C 177.832031 78.804688 177.703125 78.996094 177.566406 79.183594 L 177.457031 79.355469 C 178.191406 79.410156 178.933594 79.292969 179.613281 79.003906 C 179.503906 79.875 179.292969 80.726562 178.976562 81.542969 C 179.800781 81.570312 180.5625 81.113281 180.929688 80.375 L 180.929688 80.324219 L 181.011719 80.210938 C 181.171875 79.917969 181.304688 79.609375 181.40625 79.292969 L 181.335938 79.367188 C 181.460938 78.953125 181.578125 78.535156 181.714844 78.128906 C 181.78125 77.902344 181.882812 77.6875 182.027344 77.496094 C 182.367188 77.152344 182.855469 76.988281 183.335938 77.058594 L 183.078125 82.558594 L 183.191406 82.558594 C 183.039062 82.957031 182.851562 83.34375 182.632812 83.710938 C 181.734375 85.171875 180.101562 86.164062 179.496094 87.765625 C 179.238281 88.535156 179.140625 89.351562 179.207031 90.160156 C 179.207031 90.636719 179.261719 91.117188 179.300781 91.59375 L 179.300781 91.554688 C 179.390625 92.824219 179.414062 94.03125 178.730469 95.050781 C 178.261719 95.75 177.507812 96.273438 177.25 97.066406 C 177.175781 97.289062 177.144531 97.519531 177.152344 97.753906 C 177.203125 98.445312 177.347656 99.132812 177.585938 99.789062 C 177.585938 99.773438 177.585938 99.761719 177.585938 99.75 C 177.742188 100.230469 177.777344 100.746094 177.691406 101.246094 C 177.40625 102.515625 175.867188 103.574219 175.941406 104.785156 C 175.9375 104.945312 175.960938 105.101562 176.011719 105.253906 C 176.308594 105.847656 176.820312 106.300781 177.445312 106.523438 C 178.421875 107.078125 179.542969 107.328125 180.664062 107.234375 C 181.082031 107.15625 181.488281 107.019531 181.867188 106.820312 C 181.425781 107.84375 180.96875 108.851562 180.503906 109.808594 C 180.4375 109.960938 180.359375 110.113281 180.285156 110.265625 C 180.285156 110.265625 176.367188 107.644531 174.144531 112.984375 C 173.492188 114.09375 173.03125 115.300781 172.769531 116.5625 C 172.65625 117.066406 172.5 117.558594 172.300781 118.03125 C 171.3125 119.707031 169.835938 121.035156 168.066406 121.839844 C 163.53125 123.917969 145.203125 146.792969 144.878906 152.714844 C 144.722656 155.027344 144.332031 157.320312 143.714844 159.550781 C 142.273438 164.8125 141.902344 170.3125 142.625 175.71875 C 142.851562 177.464844 143.226562 179.191406 143.746094 180.875 C 145.691406 186.789062 146.992188 197.832031 146.992188 197.832031 L 149.09375 216.996094 C 149.015625 219.640625 149.132812 222.289062 149.4375 224.917969 C 147.289062 227.371094 138.664062 237.601562 141.960938 240.386719 C 144.496094 242.578125 148.929688 242.21875 151.421875 241.765625 C 149.324219 246.960938 146.019531 255.992188 145.585938 262.195312 C 144.949219 271.371094 146.667969 283.527344 149.386719 288.195312 C 152.105469 292.863281 161.164062 304.835938 161.164062 304.835938 C 161.164062 304.835938 160.742188 321.261719 163.980469 327.230469 C 167.21875 333.195312 168.523438 345.574219 168.523438 345.574219 C 168.523438 345.574219 171.546875 356.027344 170.03125 359.871094 C 168.515625 363.714844 172.839844 366.910156 168.300781 369.464844 C 163.765625 372.019531 157.960938 429.625 157.960938 429.625 C 157.960938 429.625 155.621094 467.375 157.960938 469.296875 C 158.085938 469.386719 158.21875 469.46875 158.359375 469.53125 L 158.359375 482.214844 C 158.359375 482.214844 156.738281 484.878906 163.332031 485.417969 C 167.851562 485.78125 180.65625 486.597656 188.253906 487.074219 L 194.140625 487.441406 C 194.140625 487.441406 208.082031 490.21875 214.242188 487.441406 C 220.402344 484.664062 231.320312 484.726562 229.695312 477.390625 C 229.480469 476.390625 229.195312 475.410156 228.835938 474.453125 C 227.054688 469.898438 224.03125 469.378906 218.460938 468.113281 C 218.136719 468.042969 217.828125 467.976562 217.542969 467.925781 C 211.675781 466.90625 209.75 469.640625 206.460938 466.082031 C 203.601562 463.007812 194.503906 459.5625 191.40625 458.472656 C 191.480469 458.242188 191.574219 458.023438 191.652344 457.789062 C 190.773438 457.636719 189.957031 457.238281 189.300781 456.640625 L 197.695312 457.171875 L 202.695312 457.484375 C 202.695312 457.484375 214.546875 459.847656 219.804688 457.484375 C 225.066406 455.117188 234.316406 455.179688 232.933594 448.945312 C 232.753906 448.097656 232.507812 447.261719 232.207031 446.449219 C 230.691406 442.578125 228.117188 442.15625 223.386719 441.082031 C 223.113281 441.027344 222.859375 440.96875 222.605469 440.925781 C 217.617188 440.054688 215.984375 442.375 213.191406 439.359375 C 210.792969 436.785156 203.234375 433.898438 200.515625 432.914062 C 200.515625 431.507812 198.617188 429.503906 197.417969 427.492188 C 196.011719 425.144531 198.609375 416.933594 198.609375 416.933594 L 200.09375 382.859375 C 200.65625 382.605469 201.253906 382.4375 201.867188 382.351562 C 201.867188 382.351562 208.570312 375.945312 207.054688 369.121094 C 206.746094 367.058594 206.585938 364.976562 206.574219 362.890625 C 208.78125 360.839844 211.816406 357.816406 212.675781 355.949219 C 214.082031 352.914062 212.675781 338.195312 212.675781 338.195312 L 212.675781 281.910156 L 223.890625 283.046875 L 234.070312 284.09375 L 237.167969 284.410156 L 247.34375 285.4375 L 270.734375 287.800781 L 291.808594 283.808594 L 300.925781 282.082031 L 319.675781 278.53125 L 319.675781 232.617188 Z M 184.71875 77.261719 L 183.414062 77.121094 C 183.84375 77.140625 184.300781 77.222656 184.71875 77.261719 Z M 184.71875 77.261719 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(93.72549%,71.764706%,72.54902%);fill-opacity:1;" d="M 293.59375 259.21875 C 287.257812 268.296875 264.476562 263.488281 264.476562 263.488281 L 246.824219 246.953125 L 244.449219 244.714844 L 248.433594 236.242188 C 248.433594 236.242188 249.703125 236.59375 251.875 237.214844 C 263.289062 240.53125 298.945312 251.589844 293.59375 259.21875 Z M 293.59375 259.21875 " />
                                    <use xlink:href="#surface12" mask="url(#mask2)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(86.27451%,90.196078%,94.901961%);fill-opacity:1;" d="M 191.316406 141.667969 C 191.316406 141.667969 175.042969 148.890625 175.839844 166.628906 C 176.417969 178.058594 177.660156 189.441406 179.566406 200.722656 C 179.566406 200.722656 176.242188 227.414062 190.09375 234.296875 C 203.945312 241.175781 216.761719 246.835938 216.761719 246.835938 C 216.761719 246.835938 238.433594 249.167969 241.128906 250.132812 C 243.820312 251.097656 252.234375 236.359375 250.683594 234.0625 C 249.132812 231.765625 229.242188 226.953125 226.707031 223.121094 C 224.171875 219.292969 218.308594 216.925781 218.308594 216.925781 C 218.308594 216.925781 212.257812 213.261719 211.847656 209.949219 C 211.433594 206.640625 213.03125 204.171875 213.4375 202.722656 C 213.84375 201.269531 214.867188 187.246094 214.867188 187.246094 C 214.867188 187.246094 221.699219 137.335938 191.316406 141.667969 Z M 191.316406 141.667969 " />
                                    <use xlink:href="#surface15" mask="url(#mask3)" />
                                    <use xlink:href="#surface18" mask="url(#mask4)" />
                                    <use xlink:href="#surface21" mask="url(#mask5)" />
                                    <use xlink:href="#surface24" mask="url(#mask6)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(58.823529%,36.470588%,48.235294%);fill-opacity:1;" d="M 181.949219 75.09375 C 181.328125 75.214844 180.734375 75.445312 180.195312 75.773438 C 179.5625 76.296875 179.5625 77.199219 179.402344 77.984375 C 179.214844 79.078125 178.78125 80.117188 178.136719 81.015625 C 178.855469 81.070312 179.578125 80.949219 180.246094 80.667969 C 180.136719 81.535156 179.925781 82.386719 179.613281 83.203125 C 180.417969 83.222656 181.160156 82.769531 181.511719 82.042969 C 181.847656 81.328125 182.113281 80.582031 182.304688 79.816406 C 182.363281 79.589844 182.46875 79.375 182.609375 79.183594 C 183.191406 78.492188 184.277344 78.804688 185.175781 78.890625 C 186.699219 79.019531 188.175781 78.3125 189.027344 77.039062 C 189.984375 75.585938 190.042969 71.871094 187.761719 71.476562 C 185.378906 71.085938 183.894531 74.371094 181.949219 75.09375 Z M 181.949219 75.09375 " />
                                    <use xlink:href="#surface27" mask="url(#mask7)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(86.27451%,90.196078%,94.901961%);fill-opacity:1;" d="M 201.023438 127.46875 L 210.6875 139.101562 L 209.425781 150.839844 L 197.746094 132.542969 Z M 201.023438 127.46875 " />
                                    <use xlink:href="#surface30" mask="url(#mask8)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(93.72549%,71.764706%,72.54902%);fill-opacity:1;" d="M 215.699219 111.722656 C 212.429688 112.660156 209.304688 115.882812 206.585938 119.796875 C 204.75 122.496094 203.105469 125.324219 201.667969 128.257812 C 200.777344 130.042969 199.992188 131.761719 199.335938 133.257812 L 198.882812 134.324219 C 197.777344 136.929688 197.164062 138.675781 197.164062 138.675781 C 197.164062 138.675781 172.132812 119.839844 176.09375 118.570312 C 177.425781 118.148438 179.175781 115.292969 180.90625 111.699219 L 181.121094 111.242188 C 182.214844 108.933594 183.292969 106.359375 184.25 103.933594 C 186.207031 98.957031 187.660156 94.632812 187.660156 94.632812 C 187.660156 94.632812 225.679688 108.871094 215.699219 111.722656 Z M 215.699219 111.722656 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(26.666667%,25.098039%,32.54902%);fill-opacity:1;" d="M 230.671875 93.574219 C 230.671875 93.574219 236.453125 104.035156 244.214844 102.609375 C 251.976562 101.183594 248.78125 96.992188 248.78125 96.992188 Z M 230.671875 93.574219 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(63.921569%,39.215686%,40.784314%);fill-opacity:1;" d="M 219.476562 455.78125 C 214.355469 458.125 202.777344 455.78125 202.777344 455.78125 L 197.898438 455.480469 C 191.5625 455.074219 180.957031 454.386719 177.203125 454.082031 C 171.730469 453.632812 173.074219 451.386719 173.074219 451.386719 L 173.074219 437.824219 L 199.636719 431.089844 C 199.636719 431.089844 210.136719 434.683594 213.011719 437.824219 C 215.742188 440.816406 217.339844 438.515625 222.214844 439.378906 C 222.453125 439.421875 222.707031 439.472656 222.972656 439.535156 C 227.597656 440.59375 230.109375 441.011719 231.589844 444.851562 C 231.890625 445.65625 232.128906 446.484375 232.308594 447.324219 C 233.675781 453.5 224.589844 453.457031 219.476562 455.78125 Z M 219.476562 455.78125 " />
                                    <use xlink:href="#surface33" mask="url(#mask9)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(63.921569%,39.215686%,40.784314%);fill-opacity:1;" d="M 214.0625 485.460938 C 208.042969 488.214844 194.421875 485.460938 194.421875 485.460938 L 188.6875 485.125 C 181.257812 484.652344 168.75 483.859375 164.335938 483.484375 C 157.890625 482.953125 159.472656 480.3125 159.472656 480.3125 L 159.472656 464.324219 L 190.734375 456.398438 C 190.734375 456.398438 203.089844 460.628906 206.472656 464.324219 C 209.683594 467.84375 211.542969 465.136719 217.300781 466.152344 C 217.585938 466.203125 217.886719 466.265625 218.195312 466.335938 C 223.640625 467.605469 226.589844 468.078125 228.335938 472.59375 C 228.6875 473.542969 228.96875 474.515625 229.175781 475.507812 C 230.75 482.773438 220.082031 482.714844 214.0625 485.460938 Z M 214.0625 485.460938 " />
                                    <use xlink:href="#surface36" mask="url(#mask10)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(26.666667%,25.098039%,32.54902%);fill-opacity:1;" d="M 200.441406 375.757812 L 198.75 415.601562 C 198.75 415.601562 196.214844 423.738281 197.589844 426.066406 C 198.964844 428.394531 201.28125 430.714844 200.441406 432.089844 C 199.597656 433.464844 189.460938 448.34375 186.183594 442.636719 C 182.90625 436.929688 179.675781 412.195312 179.675781 412.195312 L 182.699219 381.648438 Z M 200.441406 375.757812 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(26.666667%,25.098039%,32.54902%);fill-opacity:1;" d="M 207.777344 276.480469 L 212.480469 282.773438 L 212.480469 337.488281 C 212.480469 337.488281 213.855469 352.074219 212.480469 355.089844 C 211.105469 358.101562 204.132812 364.125 204.132812 364.125 L 198.273438 334.003906 L 199.539062 302.132812 Z M 207.777344 276.480469 " />
                                    <use xlink:href="#surface39" mask="url(#mask11)" />
                                    <use xlink:href="#surface42" mask="url(#mask12)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(26.666667%,25.098039%,32.54902%);fill-opacity:1;" d="M 212.480469 253.144531 L 212.480469 282.742188 L 207.203125 305.78125 C 207.203125 305.78125 205.507812 361.378906 206.984375 368.140625 C 208.460938 374.898438 201.917969 381.25 201.917969 381.25 C 201.917969 381.25 198.113281 381.671875 198.113281 384.628906 C 198.113281 387.582031 191.777344 396.042969 191.777344 396.042969 L 191.988281 412.53125 C 191.988281 412.53125 194.738281 443.398438 190.511719 449.316406 C 186.285156 455.230469 191.988281 456.082031 191.988281 456.082031 C 186.707031 473.414062 161.363281 469.398438 159.074219 467.496094 C 156.789062 465.59375 159.074219 428.175781 159.074219 428.175781 C 159.074219 428.175781 164.738281 371.101562 169.175781 368.566406 C 173.609375 366.027344 169.390625 362.855469 170.867188 359.050781 C 172.34375 355.246094 169.390625 344.890625 169.390625 344.890625 C 169.390625 344.890625 168.125 332.625 164.957031 326.710938 C 161.785156 320.792969 162.207031 304.511719 162.207031 304.511719 C 162.207031 304.511719 153.332031 292.671875 150.699219 288.023438 C 148.0625 283.375 146.363281 271.328125 146.996094 262.230469 C 147.429688 256.085938 150.652344 247.140625 152.699219 241.988281 C 153.683594 239.523438 154.390625 237.925781 154.390625 237.925781 L 154.992188 238.082031 L 189.605469 247.152344 Z M 212.480469 253.144531 " />
                                    <use xlink:href="#surface45" mask="url(#mask13)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(93.72549%,71.764706%,72.54902%);fill-opacity:1;" d="M 228.53125 95.867188 C 228.546875 105.378906 222.628906 113.886719 213.714844 117.175781 C 204.800781 120.46875 194.78125 117.839844 188.625 110.597656 C 182.46875 103.355469 181.480469 93.039062 186.152344 84.757812 C 186.839844 83.53125 187.640625 82.371094 188.546875 81.296875 C 190.039062 79.511719 191.796875 77.96875 193.753906 76.714844 C 200.484375 72.4375 208.964844 72.011719 216.085938 75.597656 C 223.207031 79.183594 227.921875 86.25 228.5 94.207031 C 228.511719 94.765625 228.53125 95.316406 228.53125 95.867188 Z M 228.53125 95.867188 " />
                                    <use xlink:href="#surface48" mask="url(#mask14)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(86.27451%,90.196078%,94.901961%);fill-opacity:1;" d="M 217.371094 206.089844 L 216.21875 243.230469 L 216.015625 249.847656 C 216.015625 249.847656 202.355469 248.578125 189.605469 247.183594 C 179.339844 246.0625 169.664062 244.847656 168.175781 244.140625 C 166.273438 243.246094 162.199219 242.554688 158.984375 242.117188 C 156.503906 241.78125 154.550781 241.601562 154.550781 241.601562 C 154.550781 241.601562 153.820312 241.816406 152.699219 242.019531 C 150.253906 242.464844 145.957031 242.828125 143.453125 240.652344 C 140.253906 237.867188 148.664062 227.753906 150.761719 225.324219 L 151.222656 224.796875 L 150.433594 217.472656 L 148.371094 198.476562 C 148.371094 198.476562 147.105469 187.539062 145.203125 181.671875 C 144.695312 180.003906 144.328125 178.296875 144.109375 176.566406 C 143.402344 171.210938 143.761719 165.765625 145.171875 160.546875 C 145.773438 158.332031 146.15625 156.0625 146.3125 153.769531 C 146.628906 147.902344 164.53125 125.230469 168.964844 123.167969 C 170.960938 122.238281 172.566406 120.636719 173.503906 118.640625 C 173.8125 118.015625 174.042969 117.351562 174.195312 116.667969 C 176.09375 108.425781 180.90625 111.699219 180.90625 111.699219 C 182.0625 118.148438 200.015625 135.21875 200.015625 135.21875 L 200.371094 135.574219 C 202.152344 137.402344 210.085938 145.976562 209.519531 153.292969 C 209.40625 156.015625 209.816406 158.738281 210.71875 161.308594 C 214.371094 172.816406 216.46875 184.761719 216.960938 196.824219 Z M 217.371094 206.089844 " />
                                    <use xlink:href="#surface51" mask="url(#mask15)" />
                                    <use xlink:href="#surface54" mask="url(#mask16)" />
                                    <use xlink:href="#surface57" mask="url(#mask17)" />
                                    <use xlink:href="#surface60" mask="url(#mask18)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(86.27451%,90.196078%,94.901961%);fill-opacity:1;" d="M 200.371094 135.542969 L 188.183594 140.84375 L 173.476562 118.609375 C 173.785156 117.984375 174.019531 117.320312 174.167969 116.636719 C 176.070312 108.394531 180.878906 111.664062 180.878906 111.664062 C 182.039062 118.117188 199.992188 135.1875 199.992188 135.1875 Z M 200.371094 135.542969 " />
                                    <use xlink:href="#surface63" mask="url(#mask19)" />
                                    <use xlink:href="#surface66" mask="url(#mask20)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(58.823529%,36.470588%,48.235294%);fill-opacity:1;" d="M 183.191406 85.359375 C 182.3125 86.804688 180.722656 87.789062 180.125 89.375 C 179.25 91.675781 180.726562 94.542969 179.371094 96.597656 C 178.921875 97.289062 178.179688 97.804688 177.925781 98.59375 C 177.496094 99.933594 178.675781 101.359375 178.371094 102.738281 C 178.066406 104.113281 176.253906 105.273438 176.734375 106.617188 C 177.019531 107.203125 177.519531 107.660156 178.128906 107.886719 C 179.089844 108.4375 180.195312 108.683594 181.296875 108.589844 C 183.027344 108.304688 184.3125 106.605469 186.070312 106.476562 C 187.496094 106.375 188.855469 107.367188 190.277344 107.183594 C 190.515625 107.175781 190.742188 107.078125 190.910156 106.910156 C 191.019531 106.769531 191.089844 106.601562 191.121094 106.425781 C 192.183594 102.179688 193.113281 97.898438 193.90625 93.59375 C 194.070312 92.386719 194.390625 91.210938 194.859375 90.089844 C 195.335938 88.960938 196.25 88.074219 197.390625 87.628906 C 199.085938 87.085938 200.984375 88.011719 202.070312 89.425781 C 203.152344 90.839844 203.5625 92.648438 203.855469 94.402344 C 204.148438 96.160156 204.332031 97.96875 205.046875 99.597656 C 205.265625 100.203125 205.667969 100.722656 206.199219 101.082031 C 207.152344 101.632812 208.429688 101.195312 209.160156 100.371094 C 209.828125 99.488281 210.261719 98.453125 210.425781 97.359375 C 210.59375 96.269531 210.957031 95.21875 211.496094 94.257812 C 212.5 92.761719 214.332031 92.082031 216.078125 91.65625 C 217.828125 91.234375 219.671875 90.933594 221.148438 89.886719 C 222.308594 88.953125 223.253906 87.777344 223.925781 86.445312 C 224.863281 84.808594 225.734375 83.03125 225.660156 81.148438 C 225.578125 79.09375 224.359375 77.261719 223.0625 75.664062 C 220.527344 72.554688 217.097656 69.722656 213.089844 69.613281 C 211.535156 69.679688 209.988281 69.835938 208.457031 70.082031 C 206.253906 70.183594 204.046875 70.097656 201.859375 69.828125 C 201.328125 69.765625 200.789062 69.785156 200.261719 69.886719 C 199.648438 70.074219 199.078125 70.386719 198.582031 70.800781 C 196.753906 72.164062 195.09375 73.738281 193.636719 75.492188 C 192.695312 76.742188 191.675781 77.925781 190.582031 79.042969 C 189.863281 79.757812 189 80.308594 188.046875 80.648438 C 187.414062 80.824219 186.777344 80.699219 186.175781 80.894531 C 184.308594 81.484375 184.058594 83.925781 183.191406 85.359375 Z M 183.191406 85.359375 " />
                                    <use xlink:href="#surface69" mask="url(#mask21)" />
                                    <use xlink:href="#surface72" mask="url(#mask22)" />
                                    <use xlink:href="#surface75" mask="url(#mask23)" />
                                    <use xlink:href="#surface78" mask="url(#mask24)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(26.666667%,25.098039%,32.54902%);fill-opacity:1;" d="M 207.226562 62.816406 C 207.226562 62.816406 190.59375 61.863281 185.917969 70.902344 L 185.164062 78.910156 L 183.894531 78.769531 L 183.640625 84.21875 C 183.640625 84.21875 209.066406 83.109375 214.851562 85.722656 C 220.636719 88.335938 238.613281 101.5 245.816406 99.28125 C 253.023438 97.0625 245.183594 95 245.183594 95 C 245.183594 95 235.265625 90.796875 235.265625 87.496094 C 235.265625 84.199219 232.808594 66.777344 207.226562 62.816406 Z M 207.226562 62.816406 " />
                                    <use xlink:href="#surface81" mask="url(#mask25)" />
                                    <use xlink:href="#surface84" mask="url(#mask26)" />
                                    <use xlink:href="#surface87" mask="url(#mask27)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 209.71875 220.269531 L 258.507812 212.324219 L 258.507812 258.554688 L 212.152344 256.125 Z M 209.71875 220.269531 " />
                                    <use xlink:href="#surface90" mask="url(#mask28)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 258.507812 212.324219 L 317.023438 216.703125 L 313.785156 256.9375 L 258.507812 258.554688 Z M 258.507812 212.324219 " />
                                    <use xlink:href="#surface93" mask="url(#mask29)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 276.5 198.210938 L 258.507812 212.324219 L 317.023438 216.703125 L 326.582031 202.265625 Z M 276.5 198.210938 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 192.050781 204.859375 L 235.976562 199.503906 L 258.507812 212.324219 L 209.71875 220.269531 Z M 192.050781 204.859375 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 269.207031 224.328125 L 269.207031 287.535156 L 246.347656 285.191406 L 236.40625 284.175781 L 233.378906 283.859375 L 223.441406 282.835938 L 209.71875 281.429688 L 209.71875 220.269531 L 258.503906 223.59375 Z M 269.207031 224.328125 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 317.023438 216.703125 L 317.023438 278.347656 L 298.703125 281.867188 L 289.792969 283.578125 L 269.207031 287.535156 L 269.207031 224.328125 Z M 317.023438 216.703125 " />
                                    <use xlink:href="#surface96" mask="url(#mask30)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 192.050781 233.574219 L 209.71875 220.269531 L 269.207031 224.328125 L 260.449219 239.089844 Z M 192.050781 233.574219 " />
                                    <use xlink:href="#surface99" mask="url(#mask31)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 317.023438 216.703125 L 269.207031 224.328125 L 284.769531 238.28125 L 335.988281 229.679688 Z M 317.023438 216.703125 " />
                                    <use xlink:href="#surface102" mask="url(#mask32)" />
                                    <use xlink:href="#surface105" mask="url(#mask33)" />
                                    <use xlink:href="#surface108" mask="url(#mask34)" />
                                    <use xlink:href="#surface111" mask="url(#mask35)" />
                                    <use xlink:href="#surface114" mask="url(#mask36)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(93.72549%,71.764706%,72.54902%);fill-opacity:1;" d="M 262.589844 270.585938 C 255.777344 279.304688 233.28125 273.28125 233.28125 273.28125 L 216.566406 255.828125 L 214.296875 253.460938 L 218.734375 245.21875 C 218.734375 245.21875 220 245.636719 222.117188 246.371094 C 233.320312 250.289062 268.324219 263.246094 262.589844 270.585938 Z M 262.589844 270.585938 " />
                                    <use xlink:href="#surface117" mask="url(#mask37)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(86.27451%,90.196078%,94.901961%);fill-opacity:1;" d="M 166.75 147.746094 C 166.75 147.746094 150.113281 154.085938 149.957031 171.84375 C 149.917969 183.285156 150.554688 194.71875 151.859375 206.089844 C 151.859375 206.089844 147.105469 232.566406 160.570312 240.175781 C 174.035156 247.785156 186.550781 254.128906 186.550781 254.128906 C 186.550781 254.128906 208.0625 257.617188 210.707031 258.726562 C 213.347656 259.835938 222.53125 245.566406 221.105469 243.1875 C 219.679688 240.808594 200.09375 234.945312 197.765625 230.980469 C 195.441406 227.015625 189.710938 224.347656 189.710938 224.347656 C 189.710938 224.347656 183.871094 220.359375 183.636719 217.027344 C 183.402344 213.699219 185.125 211.320312 185.613281 209.894531 C 186.101562 208.464844 187.867188 194.515625 187.867188 194.515625 C 187.867188 194.515625 197.324219 145.015625 166.75 147.746094 Z M 166.75 147.746094 " />
                                    <use xlink:href="#surface120" mask="url(#mask38)" />
                                    <use xlink:href="#surface123" mask="url(#mask39)" />
                                    <use xlink:href="#surface126" mask="url(#mask40)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 414.269531 71.273438 C 414.269531 71.273438 390.191406 69.824219 393.003906 86.730469 C 393.003906 86.730469 392.441406 89.71875 395.144531 91.074219 C 395.144531 91.074219 395.191406 89.804688 397.617188 90.242188 C 398.480469 90.390625 399.359375 90.429688 400.234375 90.371094 C 401.417969 90.292969 402.546875 89.824219 403.441406 89.042969 C 403.441406 89.042969 410.214844 86.25 412.851562 75.164062 C 412.851562 75.164062 414.800781 72.738281 414.75 72.117188 L 410.683594 73.863281 C 410.683594 73.863281 412.070312 76.800781 410.976562 79.242188 C 410.976562 79.242188 410.847656 73.96875 410.0625 74.089844 C 409.902344 74.089844 407.953125 75.113281 407.953125 75.113281 C 407.953125 75.113281 410.339844 80.222656 408.535156 83.945312 C 408.535156 83.945312 409.21875 77.640625 407.203125 75.480469 L 404.339844 77.152344 C 404.339844 77.152344 407.136719 82.4375 405.242188 86.75 C 405.242188 86.75 405.726562 80.132812 403.738281 77.558594 L 401.140625 79.582031 C 401.140625 79.582031 403.769531 84.796875 402.167969 88.371094 C 402.167969 88.371094 401.957031 80.671875 400.578125 80.089844 C 400.578125 80.089844 398.308594 82.09375 397.964844 82.917969 C 397.964844 82.917969 399.757812 86.722656 398.644531 88.695312 C 398.644531 88.695312 397.960938 83.566406 397.375 83.539062 C 397.375 83.539062 395.113281 86.9375 394.878906 89.246094 C 394.988281 87.09375 395.660156 85.011719 396.824219 83.199219 C 395.523438 83.445312 394.320312 84.070312 393.367188 84.992188 C 393.367188 84.992188 393.714844 82.589844 397.382812 82.378906 C 397.382812 82.378906 399.285156 79.796875 399.753906 79.640625 C 399.753906 79.640625 396.101562 79.335938 393.890625 80.320312 C 393.890625 80.320312 395.835938 78.054688 400.425781 79.050781 L 402.960938 76.957031 C 402.960938 76.957031 398.15625 76.324219 396.117188 77.027344 C 396.117188 77.027344 398.460938 75.023438 403.648438 76.480469 L 406.4375 74.8125 C 406.4375 74.8125 402.34375 73.925781 399.90625 74.25 C 399.90625 74.25 402.476562 72.859375 407.253906 74.363281 L 409.25 73.46875 C 409.25 73.46875 406.246094 72.878906 405.375 72.785156 C 404.5 72.6875 404.449219 72.449219 404.449219 72.449219 C 406.347656 72.132812 408.300781 72.351562 410.082031 73.082031 C 410.082031 73.082031 414.359375 71.542969 414.269531 71.273438 Z M 414.269531 71.273438 " />
                                    <use xlink:href="#surface129" mask="url(#mask41)" />
                                    <use xlink:href="#surface132" mask="url(#mask42)" />
                                    <use xlink:href="#surface135" mask="url(#mask43)" />
                                    <use xlink:href="#surface138" mask="url(#mask44)" />
                                    <use xlink:href="#surface141" mask="url(#mask45)" />
                                    <use xlink:href="#surface144" mask="url(#mask46)" />
                                    <use xlink:href="#surface147" mask="url(#mask47)" />
                                    <use xlink:href="#surface150" mask="url(#mask48)" />
                                    <use xlink:href="#surface153" mask="url(#mask49)" />
                                    <use xlink:href="#surface156" mask="url(#mask50)" />
                                    <use xlink:href="#surface159" mask="url(#mask51)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 493.078125 106.402344 C 493.078125 106.402344 480.765625 85.609375 468.367188 97.441406 C 468.367188 97.441406 465.578125 98.644531 465.96875 101.652344 C 465.96875 101.652344 467.027344 100.980469 468.042969 103.230469 C 468.40625 104.03125 468.863281 104.785156 469.40625 105.476562 C 470.132812 106.410156 471.148438 107.082031 472.292969 107.378906 C 472.292969 107.378906 478.410156 111.425781 489.0625 107.378906 C 489.0625 107.378906 492.152344 107.640625 492.621094 107.226562 L 488.902344 104.828125 C 488.902344 104.828125 487.253906 107.625 484.621094 108.089844 C 484.621094 108.089844 488.910156 105.027344 488.371094 104.449219 C 488.257812 104.328125 486.34375 103.261719 486.34375 103.261719 C 486.34375 103.261719 483.445312 108.113281 479.371094 108.703125 C 479.371094 108.703125 484.972656 105.738281 485.625 102.855469 L 482.636719 101.449219 C 482.636719 101.449219 479.828125 106.730469 475.195312 107.574219 C 475.195312 107.574219 480.945312 104.269531 481.957031 101.183594 L 478.828125 100.167969 C 478.828125 100.167969 475.988281 105.242188 472.136719 105.9375 C 472.136719 105.9375 478.382812 101.449219 478.09375 99.984375 C 478.09375 99.984375 475.164062 99.222656 474.289062 99.402344 C 474.289062 99.402344 472.167969 103.007812 469.894531 103.207031 C 469.894531 103.207031 473.753906 99.769531 473.460938 99.285156 C 473.460938 99.285156 469.378906 99.320312 467.320312 100.429688 C 469.164062 99.316406 471.269531 98.703125 473.421875 98.652344 C 472.484375 97.710938 471.292969 97.0625 469.996094 96.789062 C 469.996094 96.789062 472.179688 95.730469 474.429688 98.652344 C 474.429688 98.652344 477.597656 98.761719 478.023438 99.082031 C 478.023438 99.082031 476.230469 95.914062 474.175781 94.605469 C 474.175781 94.605469 477.140625 94.949219 478.859375 99.324219 L 482.027344 100.277344 C 482.027344 100.277344 479.878906 95.925781 478.128906 94.644531 C 478.128906 94.644531 481.109375 95.460938 482.808594 100.582031 L 485.753906 101.957031 C 485.753906 101.957031 484.1875 98.070312 482.585938 96.25 C 482.585938 96.25 485.175781 97.601562 486.617188 102.40625 L 488.472656 103.5625 C 488.472656 103.5625 487.28125 100.738281 486.863281 99.960938 C 486.445312 99.179688 486.621094 99.007812 486.621094 99.007812 C 487.949219 100.40625 488.863281 102.144531 489.265625 104.03125 C 489.265625 104.03125 492.894531 106.613281 493.078125 106.402344 Z M 493.078125 106.402344 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 415.183594 150.128906 C 415.183594 150.128906 415.816406 125.964844 399.042969 129.371094 C 399.042969 129.371094 396.039062 128.910156 394.773438 131.660156 C 394.773438 131.660156 396.039062 131.660156 395.683594 134.101562 C 395.570312 134.972656 395.554688 135.855469 395.648438 136.730469 C 395.761719 137.914062 396.261719 139.027344 397.074219 139.898438 C 397.074219 139.898438 400.09375 146.582031 411.253906 148.855469 C 411.253906 148.855469 413.730469 150.726562 414.351562 150.625 L 412.453125 146.617188 C 412.453125 146.617188 409.566406 148.097656 407.089844 147.089844 C 407.089844 147.089844 412.351562 146.78125 412.203125 146.007812 C 412.203125 145.847656 411.113281 143.921875 411.113281 143.921875 C 411.113281 143.921875 406.082031 146.488281 402.3125 144.800781 C 402.3125 144.800781 408.648438 145.277344 410.722656 143.191406 L 408.953125 140.382812 C 408.953125 140.382812 403.769531 143.347656 399.398438 141.597656 C 399.398438 141.597656 406.019531 141.867188 408.527344 139.792969 L 406.417969 137.253906 C 406.417969 137.253906 401.304688 140.058594 397.679688 138.574219 C 397.679688 138.574219 405.359375 138.109375 405.917969 136.710938 C 405.917969 136.710938 403.839844 134.507812 403.003906 134.171875 C 403.003906 134.171875 399.289062 136.074219 397.261719 135.046875 C 397.261719 135.046875 402.332031 134.199219 402.363281 133.632812 C 402.363281 133.632812 398.898438 131.484375 396.558594 131.324219 C 398.714844 131.363281 400.824219 131.96875 402.675781 133.074219 C 402.386719 131.78125 401.726562 130.597656 400.773438 129.671875 C 400.773438 129.671875 403.1875 129.941406 403.515625 133.601562 C 403.515625 133.601562 406.160156 135.390625 406.332031 135.886719 C 406.332031 135.886719 406.515625 132.226562 405.457031 130.042969 C 405.457031 130.042969 407.789062 131.914062 406.914062 136.53125 L 409.085938 139.03125 C 409.085938 139.03125 409.582031 134.199219 408.789062 132.1875 C 408.789062 132.1875 410.867188 134.464844 409.585938 139.703125 L 411.34375 142.4375 C 411.34375 142.4375 412.089844 138.308594 411.691406 135.878906 C 411.691406 135.878906 413.160156 138.414062 411.816406 143.242188 L 412.78125 145.207031 C 412.78125 145.207031 413.269531 142.183594 413.332031 141.300781 C 413.394531 140.417969 413.636719 140.363281 413.636719 140.363281 C 414.019531 142.253906 413.867188 144.214844 413.199219 146.027344 C 413.199219 146.027344 414.902344 150.210938 415.183594 150.128906 Z M 415.183594 150.128906 " />
                                    <use xlink:href="#surface162" mask="url(#mask52)" />
                                    <use xlink:href="#surface165" mask="url(#mask53)" />
                                    <use xlink:href="#surface168" mask="url(#mask54)" />
                                    <use xlink:href="#surface171" mask="url(#mask55)" />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 553.382812 458.574219 C 553.382812 456.191406 541.976562 454.261719 527.90625 454.261719 C 513.832031 454.261719 502.425781 456.191406 502.425781 458.574219 C 502.425781 460.957031 513.832031 462.886719 527.90625 462.886719 C 541.976562 462.886719 553.382812 460.957031 553.382812 458.574219 Z M 553.382812 458.574219 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(99.607843%,59.607843%,0%);fill-opacity:1;" d="M 538.46875 451.515625 C 539.632812 450.570312 540.476562 449.289062 540.894531 447.847656 C 541.210938 446.390625 540.589844 444.648438 539.203125 444.113281 C 537.644531 443.519531 535.976562 444.597656 534.710938 445.6875 C 533.441406 446.777344 532.003906 448.027344 530.351562 447.800781 C 532.078125 446.230469 532.855469 443.867188 532.402344 441.578125 C 532.332031 441.109375 532.136719 440.671875 531.832031 440.308594 C 530.964844 439.382812 529.402344 439.78125 528.359375 440.511719 C 525.066406 442.832031 524.148438 447.3125 524.128906 451.34375 C 523.796875 449.890625 524.078125 448.375 524.070312 446.90625 C 524.066406 445.433594 523.652344 443.734375 522.390625 442.960938 C 521.617188 442.527344 520.742188 442.308594 519.859375 442.324219 C 518.375 442.273438 516.722656 442.421875 515.714844 443.503906 C 514.445312 444.851562 514.78125 447.113281 515.871094 448.578125 C 516.960938 450.042969 518.628906 450.988281 520.160156 452.015625 C 521.390625 452.75 522.4375 453.75 523.226562 454.941406 C 523.320312 455.105469 523.394531 455.28125 523.449219 455.460938 L 532.738281 455.460938 C 534.820312 454.410156 536.746094 453.085938 538.46875 451.515625 Z M 538.46875 451.515625 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(65.882353%,65.882353%,65.882353%);fill-opacity:1;" d="M 47.5625 462.214844 C 47.5625 462.214844 57.289062 461.914062 60.234375 459.824219 C 63.183594 457.730469 75.210938 455.238281 75.9375 458.59375 C 76.667969 461.949219 90.5625 475.265625 79.574219 475.355469 C 68.585938 475.441406 54.046875 473.640625 51.117188 471.851562 C 48.191406 470.066406 47.5625 462.214844 47.5625 462.214844 Z M 47.5625 462.214844 " />
                                    <use xlink:href="#surface174" mask="url(#mask56)" />
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-4">&nbsp;</div>
                    <?php
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