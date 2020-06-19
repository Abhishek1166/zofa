<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="row" id="cancel-row">
	<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
		<div class="widget-content widget-content-area br-6">

			<div class="table-responsive mb-4 mt-4">
				<table id="multi-column-ordering" class="style-3 table table-hover" style="width:100%">
					<thead>
						<tr class="">
							<th>#</th>
							<!-- <th class="text-left">Order ID</th> -->
							<th class="">name <br> email</th>
							<!-- <th>Lastname</th> -->
							<th class="">Price</th>
							<th class="">Product_id</th>
							<!-- <th class="">Category_id</th> -->
							<th class="">Created On</th>

							<th>Action</th>
						</tr>
					</thead>
					<tbody class="">
						<?php if (is($BookOrder) and is($BookOrder)) :
							$i = 1;
							foreach ($BookOrder as  $value) : ?>
								<tr>
									<td><?php echo $i++; ?>.</td>

									<!-- <td class="text-left pb-4">
										<?php is($value->id, 'show'); ?>
									</td> -->

									<td>
										<b><?php is($value->first_name, 'showCapital') . ' ' . is($value->last_name, 'showCapital'); ?></b><br>
										<?php is($value->email, 'showCapital'); ?><br>
										<?php is($value->mobile, 'showCapital'); ?>
									</td>
									<td class="">
										<?php is($value->price, 'showCapital'); ?>
									</td>

									<!-- <td class="">
										<?php is($value->price, 'showCapital'); ?>
									</td> -->

									<td class="">
										<?php is($value->p_title, 'showCapital'); ?>
									</td>

									<!-- <td class="">
										<?php is($value->category_id, 'showCapital'); ?>
									</td> -->

									<td class="">
										<p class="mb-0 admin-name">
											<?php is($value->created_on, 'date'); ?>
										</p>
									</td>

									<!-- <td>
										<?php if (!is_null($value->created_date)) : ?>
											<?php echo date('M d, Y', strtotime($value->created_date)),
												' At<br>',
												date('h: i A', strtotime($value->created_date)); ?>
										<?php endif; ?>
									</td> -->

									<td class="">
										<ul class="table-controls">
											<li>
												<a href="<?php echo SITE_URL . 'book_order/list' . $value->id; ?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye p-1 br-6 mb-1">
														<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
														<circle cx="12" cy="12" r="3" />
													</svg>
												</a>
											</li>

											<?php if (user_can('order_edit')) : ?>
												<!-- <li>
													<a href="/*<?php echo SITE_URL . 'edit/order/' . $value->order_group_id; ?>*/" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
															<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
															</path>
														</svg>
													</a>
												</li> -->
											<?php endif; ?>

											<?php if (user_can('order_delete')) : ?>
												<li>
													<a href="<?php echo SITE_URL . 'delete/order/' . $value->id; ?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
															<polyline points="3 6 5 6 21 6"></polyline>
															<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
															</path>
														</svg>
													</a>
												</li>
											<?php endif; ?>
										</ul>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
					<!-- <tfoot>
						<tr class="">
							<th>#</th>
							<th class="text-left">Order ID</th>
							<th class="">Customer</th>
							<th>Price</th>
							<th class="">Payment Mode</th>
							<th class="">Payment Status</th>
							<th class="">Created By</th>
							<th>Created date</th>
							<th>Action</th>
						</tr>
					</tfoot> -->
				</table>
			</div>