<section class="ptb50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-6 col-12">
				<h4 class="grey-color lg40 md40 sm40 xs32 mb5 xsmb2 w600 mb-4 text-capitalize">
					Are You a Property Owner ?
					<h5 class="mb-4">Post Your Free Ads</h5>
				</h4>
				<?php show_alert(); ?>
				<form action="<?php echo SITE_URL ?>contact" method="post" id="myForm">
					<div class="form-group row">
						<div class="col-md-6 col-sm-6 col-12 mb-3 mb-md-0">
							<label>Name *</label>
							<input required minlength="3" type="text" name="name" placeholder="Name *" class="form-control">
							<!-- <div class="invalid-feedback">
								Please enter your name.
							</div> -->
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<label>Email *</label>
							<input required minlength="3" type="email" name="email" placeholder="Email *" class="form-control">
							<!-- <div class="invalid-feedback">
								Please enter your email.
							</div> -->
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12 col-sm-12 col-12">
							<label>Subject *</label>
							<input required minlength="3" maxlength="45" type="text" name="subject" placeholder="Subject *" class="form-control">
							<!-- <div class="invalid-feedback">
								Please enter your subject.
							</div> -->
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12 col-sm-12 col-12">
							<label>Message</label>
							<textarea maxlength="160" class="form-control" name="msg" placeholder="Message" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" value="kjh" class="btn clearAll-btn btn-40">SUBMIT</button>
						<a href="javascript:void(0);" onclick="document.getElementById('myForm').reset();" class="pink-color w600 ml-4 btn-40">RESET</a>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12">
				<div class="contactus-box mb-5">
					<div class="media">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div class="media-body">
							<h5 class="mt-0 w700">Mobile Number</h5>
							<div class="mb4 xsmb4">+91
								<?php is($data['site_mobile'], 'show') ?>
							</div>
						</div>
					</div>
					<div class="media mediaMarginbottom0">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<div class="media-body">
							<h5 class="mt-0 w700">Email Address</h5>
							<div class="mb4 xsmb4">
								<?php is($data['site_mail'], 'show'); ?>
							</div>
						</div>
					</div>
				</div>
				<style>
					.nav-pills .nav-link.active,
					.nav-pills .show>.nav-link {
						background: var(--danger);
					}
				</style>
				<div class="contactus-box mt-5 bg-dark text-white">
					<h3>Regional Offices :</h3>
					<ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active text-white" id="north-tab" data-toggle="pill" href="#north" role="tab" aria-controls="north" aria-selected="true">North Zone</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" id="west-tab" data-toggle="pill" href="#west" role="tab" aria-controls="west" aria-selected="false">West Zone</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" id="south-tab" data-toggle="pill" href="#south" role="tab" aria-controls="south" aria-selected="false">South Zone</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" id="east-tab" data-toggle="pill" href="#east" role="tab" aria-controls="east" aria-selected="false">East Zone</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="north" role="tabpanel" aria-labelledby="north-tab">
							<h4>Jaipur :</h4>
							<p class="text-white-50">
								Balaji Majestic Heights, Jagatpura, Jaipur, 302025
							</p>
							<h4>Kota :</h4>
							<p class="text-white-50 text-justify">
								43, Ground Floor, Jogmaya Residency, Jaishree Vihar, Deoli Arab Road, Borkheda, 324004
							</p>

						</div>
						<div class="tab-pane fade" id="west" role="tabpanel" aria-labelledby="west-tab">
							<h4>Pune :</h4>
							<p class="text-white-50">
								205, Mouli Apartment, New Kalyani Nagar, Pune, 411014
							</p>
						</div>
						<div class="tab-pane fade" id="south" role="tabpanel" aria-labelledby="south-tab">
							<h4>Kochi :</h4>
							<p class="text-white-50">
								1st Floor, Dhawani, Edapally, Kochi, 682024
							</p>
						</div>
						<div class="tab-pane fade" id="east" role="tabpanel" aria-labelledby="east-tab">
							<h2>Coming Soon</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt6 xsmt4">
			<div class="col-12">
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe width="100%" height="500" id="gmap_canvas" src="<?php is($data['site_map'], 'show'); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
					<style>
						.mapouter {
							position: relative;
							text-align: right;
							height: 500px;
							width: 100%;
						}

						.gmap_canvas {
							overflow: hidden;
							background: none !important;
							height: 500px;
							width: 100%;
						}
					</style>
				</div>
			</div>
		</div>
	</div>
</section>
