<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php empty($property) and show_404() or breadcrumb_start('Properties', 'list/properties', 'property_list'); ?>
<div class="row" id="cancel-row">
	<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
		<div class="widget-content widget-content-area br-6 shadow">
			<form class="p-3" method="POST" enctype="multipart/form-data">
				<div id="MainCtn">
					<!-- Propeties Details -->
					<div class="card">
						<div class="card-header" id="headFirst">
							<section class="mb-0 mt-0">
								<div role="menu" class="" data-toggle="collapse" data-target="#firstData" aria-expanded="false" aria-controls="firstData">
									Property Details
									<div class="icons">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
											<polyline points="6 9 12 15 18 9"></polyline>
										</svg>
									</div>
								</div>
							</section>
						</div>

						<div id="firstData" class="collapse show" aria-labelledby="headFirst" data-parent="#MainCtn">
							<div class="card-body">

								<div class="row">
									<div class="col-md-8">

										<input type="hidden" name="product_id" value="<?php is($property->id, 'show'); ?>">

										<!-- Property Title -->
										<div class="form-group mb-4">
											<input type="text" class="form-control" id="name" name="name" placeholder="Property Title *" value="<?php is($property->title, 'show'); ?>">
											<small class="form-text text-muted">
												<span class="text-danger mr-1">*</span>Required Fields
											</small>
										</div>

										<!-- Property Short Description -->
										<div class="form-group mb-4">
											<input type="text" class="form-control" id="srtDesc" name="srtDesc" placeholder="Property Tag Line *" value="<?php is($property->srt_description, 'show'); ?>">
											<small class="form-text text-muted">
												<span class="text-danger mr-1">*</span>Required Fields
											</small>
										</div>

										<!-- Property Description -->
										<div class="form-group">
											<textarea name="desc" id="desc" cols="30" rows="5" class="form-control" placeholder="Property Description"><?php is($property->description, 'show'); ?></textarea>
											<small class="form-text text-muted">
												<span class="text-danger mr-1">*</span>Required Fields
											</small>
										</div>

										<!-- Possession Date -->
										<div class="row">
											<div class="col-md-12">
												<label class="h5 mb-3 text-dark"> Possession Date : </label>
											</div>
											<div class="col-lg-6">
												<div class="n-chk" id="rtmo">
													<label class="new-control new-radio square-radio new-radio-text radio-secondary">
														<input type="radio" class="new-control-input" name="pdate" value="rtmo" <?php strtotime($property->extra_date) > time() or print('checked'); ?>>
														<span class="new-control-indicator"></span>
														<span class="new-radio-content">
															Ready To Move On
														</span>
													</label>
												</div>
											</div>

											<div class="col-lg-6">
												<div class="n-chk" id="uc">
													<label class="new-control new-radio square-radio new-radio-text radio-secondary">
														<input type="radio" class="new-control-input" name="pdate" value="uc" <?php strtotime($property->extra_date) > time() and print('checked'); ?>>
														<span class="new-control-indicator"></span>
														<span class="new-radio-content">
															Under Construction
														</span>
													</label>
												</div>
											</div>
											<div class="col-md-12 collapse" id="pdate">
												<div class="form-group mb-4">
													<input type="text" class="form-control" id="myFlatDate" name="ucdate" placeholder="Possession Date" value="<?php is($property->extra_date, 'show'); ?>">
													<small class="form-text text-muted">
														<span class="text-danger mr-1">*</span>Required Fields
													</small>
												</div>
											</div>
										</div>

									</div>

									<div class="col-md-4">

										<!-- Category -->
										<div class="form-group mb-4">
											<select class="selectpicker form-control" name="cat" data-live-search="true" title=" Select Category ">
												<?php if (is($category, 'array'))
													foreach ($category as $value) : ?>
													<?php if (is($relation, 'array') and is_array($relation))
															foreach ($relation as $cats); ?>
													<option <?php check_selected($value->id, $cats->category_id, 'selected') ?> value="<?php is($value->id, 'show'); ?>">
														<?php is($value->title, 'showCapital'); ?>
													</option>
												<?php endforeach; ?>
											</select>
											<small class="form-text text-muted">
												<span class="text-danger mr-1">*</span>Required Fields
											</small>
										</div>

										<!-- Size Of Property -->
										<div class="form-group mb-4">
											<input type="text" class="form-control" id="size" name="size" placeholder="Size of Property *" value="<?php is($property->extra_field, 'show'); ?>">
											<small class="form-text text-muted">
												<span class="text-danger mr-1">*</span>Required Fields
											</small>
										</div>

										<!-- Offers -->
										<div class="form-group mb-4">
											<input type="text" class="form-control" id="offers" name="offers" placeholder="Additional Offers" value="<?php is($property->offers, 'show'); ?>">
										</div>

										<!-- City -->
										<div class="form-group mb-4">
											<label for="city">City</label>
											<select class="tagging form-control" name="city" data-live-search="true" title=" Select A City ">
												<option selected disabled>Select A City</option>
												<?php if (is($city, 'array')) ?>
												<?php foreach ($city as $value) : ?>
													<option <?php check_selected($property->extra_field_1, $value->city, 'selected') ?> value="<?php is($value->city, 'show'); ?>">
														<?php echo ucwords(str_replace('-', ' ', $value->city)); ?>
													</option>
												<?php endforeach; ?>
											</select>
											<small class="form-text text-muted">
												<span class="text-danger mr-1">*</span>Required Fields
											</small>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Properties Filters -->
					<div class="card">
						<div class="card-header" id="headSecond">
							<section class="mb-0 mt-0">
								<div role="menu" class="collapsed" data-toggle="collapse" data-target="#secondData" aria-expanded="true" aria-controls="secondData">
									Filters & Other Stuffs
									<div class="icons">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
											<polyline points="6 9 12 15 18 9"></polyline>
										</svg>
									</div>
								</div>
							</section>
						</div>

						<div id="secondData" class="collapse" aria-labelledby="headSecond" data-parent="#MainCtn">
							<div class="card-body">
								<div class="row">

									<div class="col-md-8">

										<!-- Filters -->
										<div class="row">
											<?php if (is($filters, 'array'))
												foreach ($filters as $key => $filter) { ?>
												<div class="col-md-6">
													<div class="form-group">
														<label>
															<?php is($filter->filter_title, 'showCapital'); ?>
														</label>
														<select class="form-control <?php $filter->auto_add === '1' and print ('tagging') or print('withoutTagging'); ?>" <?php $filter->type === '1' and print('multiple="multiple"'); ?> data-tags="true" data-placeholder="Select a <?php is($filter->filter_title, 'showCapital') ?>" name="filter[<?php is($filter->id, 'show'); ?>][]">
															<?php $filter->type === '1' or print('<option selected hidden disabled>Select a ' . is($filter->filter_title, 'showCapital') . '</option>'); ?>

															<?php foreach ($filterValue as $key => $fvalue) { ?>
																<?php if ($fvalue->filter_key_id == $filter->id) : ?>

																	<?php $filterCheck[] = ''; ?>
																	<?php foreach ($relation as $ffval) {
																		$filterCheck[] = $ffval->value_id;
																	} ?>

																	<option <?php in_array($fvalue->id, $filterCheck) and print('selected'); ?> value="<?php echo (int) $fvalue->id ?>">
																		<?php is($fvalue->filter_value_title, 'showCapital') ?>
																	</option>
																<?php endif; ?>
															<?php } ?>
														</select>
													</div>
												</div>
											<?php } ?>

											<!-- Status -->
											<div class="col-md-6">
												<div class="form-group mb-4">
													<select class="selectpicker form-control" name="status" data-live-search="true" title=" Select Status ">
														<option <?php check_selected($property->status, 1, 'selected') ?> value="1">
															<?php is(get_status(1)->title, 'show'); ?>
														</option>
														<option <?php check_selected($property->status, 2, 'selected') ?> value="2">
															<?php is(get_status(2)->title, 'show'); ?>
														</option>
													</select>
													<small class="form-text text-muted">
														<span class="text-danger mr-1">*</span>Required Fields
													</small>
												</div>
											</div>
										</div>

									</div>

									<div class="col-md-4 mt-4">

										<!-- Price -->
										<div class="mb-4">
											<label class="h5 text-dark">Property Price </label>
											<div class="form-group mb-4">
												<input type="text" class="form-control" id="minPrice" name="minPrice" placeholder="Min Price *" value="<?php is($property->regular_price, 'show') ?>">
												<small class="form-text text-muted">
													<span class="text-danger mr-1">*</span>Required Fields
												</small>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="maxPrice" name="maxPrice" placeholder="Max Price " value="<?php is($property->sell_price, 'show') ?>">
											</div>
										</div>

										<!-- RERA ID -->
										<div class="mb-4">
											<div class="form-group mb-4">
												<input type="text" class="form-control" id="reraID" name="reraID" placeholder="Rera ID" value="<?php is($property->extra_id, 'show') ?>">
											</div>
										</div>

										<!-- Property Addtionals -->
										<div class="mb-4">
											<div class="row">
												<div class="col-md-12">
													<label class="h5 text-dark"> Properties : </label>
												</div>
												<div class="col-md-6">
													<div class="n-chk">
														<label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
															<input type="checkbox" name="featured" class="new-control-input" <?php check_selected('1', $property->is_featured, 'checked') ?>>
															<span class="new-control-indicator"></span> Featured Property
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="n-chk">
														<label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
															<input type="checkbox" name="hotDeals" class="new-control-input" <?php check_selected('1', $property->on_deal, 'checked') ?>>
															<span class="new-control-indicator"></span> Hot Deals
														</label>
													</div>
												</div>

												<div class="col-md-6 mt-4">
													<div class="form-group">
														<input type="number" class="form-control" name="rate" min="0" max="5" list="rateList" minlength="1" maxlength="1" id="rate" value="<?php is($property->avg_rate, 'show') ?>" placeholder="Property Rate">
														<datalist id="rateList">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</datalist>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="form-group">
														<input type="number" class="form-control" name="rateCount" id="rateCount" value="<?php is($property->rating_count, 'show') ?>" placeholder="Property Rate">
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Properties Images -->
					<div class="card">
						<div class="card-header" id="headThird">
							<section class="mb-0 mt-0">
								<div role="menu" class="collapsed" data-toggle="collapse" data-target="#thirdData" aria-expanded="false" aria-controls="thirdData">
									Property's Images
									<div class="icons">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
											<polyline points="6 9 12 15 18 9"></polyline>
										</svg>
									</div>
								</div>
							</section>
						</div>

						<div id="thirdData" class="collapse" aria-labelledby="headThird" data-parent="#MainCtn">
							<div class="card-body">

								<?php strpos($property->image, '@') and $images = explode('@', $property->image) or $images = $property->image;
								file_input('propertyImg[]', true, $images, '60', true) ?>

								<button type="submit" name="editProperty" value="dyhkiw3r" class="btn btn-primary mt-4">Update Property</button>
							</div>
						</div>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
