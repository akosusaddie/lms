<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
			
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											VISITS
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="dropdown dropdown-inline">
											<a href="javascript:;" onclick="getstep('new_visit');" type="submit" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="flaticon2-plus"></i> Add New
                                            </a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Search Form -->
									<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Status:</label>
															</div>
															<div class="kt-form__control">
																<div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																	<option value="">All</option>
																	<option value="1">Pending</option>
																	<option value="2">Delivered</option>
																	<option value="3">Canceled</option>
																	<option value="4">Success</option>
																	<option value="5">Info</option>
																	<option value="6">Danger</option>
																</select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" data-id="kt_form_status" title="All"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
															</div>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile"></div>
												</div>
											</div>
											<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
												<a href="#" class="btn btn-default kt-hidden">
													<i class="la la-cart-plus"></i> New Order
												</a>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->
								</div>
								<div class="kt-portlet__body kt-portlet__body--fit">

<!--begin: Datatable -->
<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"><table class="kt-datatable__table" id="html_table" style="display: block; min-height: 500px;" width="100%">
										<thead class="kt-datatable__head">
											
										<tr class="kt-datatable__row" style="left: 0px;">
										<!-- <th class="kt-datatable__cell kt-datatable__toggle-detail"><span></span></th> -->
										<th  class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">#</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Visitor Name</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Visitor Contact</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Purpose of Visit</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Complaint</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort" style="display: none;"><span style="width: 112px;">Officer</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;"> Time of Visit</span></th>
										<th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Action</span></th>
										</tr>
										</thead>
										<tbody style="" class="kt-datatable__body">
										
	<?php
	include ('conn.php');
$sql = "SELECT * FROM visits_table";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);
$action ='<a href=""><i class="fa fa-trash"></i> Permissions Del </a> |
<a href=""><i class="fa fa-edit"></i> Edit </a>';

foreach ($rows as $row) {?>

										
										<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
										
										<!-- <td class="kt-datatable__cell kt-datatable__toggle-detail"><a class="kt-datatable__toggle-detail" href=""><i class="fa fa-caret-right"></i></a></td> -->
										<td data-field="Order ID" class="kt-datatable__cell"><span style="width: 112px;"><?php echo $row["id"]; ?></span>
										</td>
										<td data-field="Car Make" class="kt-datatable__cell"><span style="width: 112px;"><?php echo $row["visitor_name"]; ?></span>
										</td>
										<td data-field="Car Model" class="kt-datatable__cell"><span style="width: 112px;"><?php echo $row["visitor_contact"]; ?></span>
										</td>
										<td data-field="Color" class="kt-datatable__cell"><span style="width: 112px;"><?php echo $row["purpose_of_visit"]; ?></span>
										</td>
										<td data-field="Deposit Paid" class="kt-datatable__cell"><span style="width: 112px;"><?php echo $row["complaint"]; ?></span>
										</td>
										<td data-field="Order Date" class="kt-datatable__cell" style="display: none;"><span style="width: 112px;"><?php echo $row["appointment_officer"]; ?></span></td>
										 <td data-field="Status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill"><?php echo $row["time_of_visit"]; ?></span></span>
										</td> 
										<td  class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success"><a href="appointment.php">Book Appointment</a></span></span>
										</td>
										</tr>

<?php } ?>
										
										
										</tbody>
									</table>
									
									
									
									<div class="kt-datatable__pager kt-datatable--paging-loaded"><ul class="kt-datatable__pager-nav"><li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li><li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li><li style=""></li><li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li><li></li><li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li><li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="15"><i class="flaticon2-fast-next"></i></a></li></ul><div class="kt-datatable__pager-info"><div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98"><option class="bs-title-option" value=""></option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Select page size"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">10</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 143</span></div></div></div>


<!--end: Datatable -->
</div>
							</div>
						</div>