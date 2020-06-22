<!--Use class "navbar-fixed" or "navbar-default" -->
<!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

<!-- ======================== Navigation ======================== -->

<!--/navigation-top-->

<!-- ==========  Main navigation ========== -->


<!--/navigation-main-->

<!-- ==========  Search wrapper ========== -->



<!-- ==========  Login wrapper ========== -->



<!-- ==========  Cart wrapper ========== -->



<!-- ========================  Main header ======================== -->


<!-- ========================  Blog ======================== -->

<section class="blog">

	<div class="container">

		<div class="pre-header hidden">
			<div>
				<h2 class="h3 title">
					Category name
				</h2>
			</div>
			<div>
				<div class="sort-bar pull-right">
					<div class="sort-results">
						<!--Items counter-->
						<span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
						<!--Showing result per page-->
						<select>
							<option value="1">10</option>
							<option value="2">50</option>
							<option value="3">100</option>
							<option value="4">All</option>
						</select>
						<!--Grid-list view-->
						<span class="grid-list">
							<a href="blog-grid.html"><i class="fa fa-th-large"></i></a>
							<a href="blog-list.html"><i class="fa fa-align-justify"></i></a>
							<a href="javascript:void(0);" class="toggle-filters-mobile"><i class="fa fa-search"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- === blog-content === -->

			<div class="col-md-12">

				<div class="row">

					<!-- === blog-item === -->



					<!-- === blog-item === -->



					<!-- === blog-item === -->



					<!-- === blog-item === -->



					<!-- === blog-item === -->



					<!-- === blog-item === -->



					<!-- === blog-item === -->
					<?php

					if (!empty($data['Blogs'])) {
						foreach ($data['Blogs'] as $blog) {
					?>
							<div class="col-sm-4">
								<article>
									<a href="<?php echo SITE_URL ?>blog/<?php echo $blog->slug ?>">
										<div class="image" style="background-image:url(<?= $blog->post_image ?>)">
											<img src="<?= $blog->post_image ?>" alt="" />
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
									</a>
								</article>
							</div>
					<?php }
					} ?>
					<!-- === blog-item === -->



					<!-- === pagination === -->


					<!--/pagination-->

				</div>

				<!-- === blog-menu === -->

				<div class="col-md-3">

					<aside>

						<!-- === box-search === -->



						<!-- === box-categories === -->



						<!-- === box-posts === -->



						<!-- === box-tags === -->



					</aside>
				</div>


			</div>
			<!--/row-->


		</div>
		<!--/container-->
</section>

<!-- ================== Footer  ================== -->


</div>
<!--/wrapper-->