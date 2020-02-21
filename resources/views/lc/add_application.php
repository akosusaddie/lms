<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												   NEW APPLICATION
												</h3>
											</div>
										</div>

										<!--begin::Form-->
				<form class="kt-form kt-form--label-right" method="post" action="javascript:;" method="post" onsubmit="getstep('add_new_application'); return fALSE;">
											<div class="kt-portlet__body">
                                            <div class="row">
												<div class="col-lg-5"></div>
<div class="col-lg-5"></div>
		<div class="col-lg-2 col-xl-2">
<div class="kt-avatar kt-avatar--outline kt-avatar--circle--" id="">
												
													<div class="kt-avatar__holder" style="background-image: url(<?php echo BASE_URL ?>assets/media/users/300_10.jpg)"></div>
														<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
														<i class="fa fa-pen"></i>
												<input type="file" name="passport">
													</label>
													<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
											<i class="fa fa-times"></i>
													</span>
													<p style="margin-top: 10px"> Upload Passport</p>
												</div>
												</div>
											</div>

											<div class="row">
								<div class="col-lg-6">
									<div class="kt-portlet kt-callout--info">
										<div class="kt-portlet__body">
											<div class="kt-callout__body">
												<div class="kt-callout__content">
												<h3 class=""> Application Types</h3>
	<div class="kt-checkbox-list">

	<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand mt-4" >
		<input type="checkbox" name="lease_prep"> Lease Preparation
	<span></span>
	</label>

	<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
		<input type="checkbox" name="lease_renew"> Lease Renewal
		<span></span>
	</label>
														
		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="change_use"> Consent to Change of use
				<span></span>
		</label>

		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="assignment"> Consent to Assignment
			<span></span>
		</label>

		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="mortgage"> Consent to Mortgage
			<span></span>
		</label>

		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="re_entry"> Re of Entry
			<span></span>
		</label>
				</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="kt-portlet kt-callout--warning">
										<div class="kt-portlet__body">
											<div class="kt-callout__body">
												<div class="kt-callout__content">
												<h3 class=""> Attachments</h3>
												<div id="alloc_row" class="row">
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12  mt-2">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
		<input type="checkbox" name="alloc_paper"> Allocation Paper
	<span></span>
	</label>
								</div>
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12">
								<div class="custom-file">
														<input type="file" name="attach_cadastral" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
								</div>
												</div>
												<div id="cadastral_row" class="row">
												<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12  mt-2">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
		<input type="checkbox" name="cadastral_plan"> Cadastral Plan
		<span></span>
	</label>
				
								</div>
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12">
								<div class="custom-file">
														<input type="file" name="attach_cadastral" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
								</div>
												</div>
												<div id="mortgage_row" class="row">
												<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12  mt-2">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="mortgage"> Deed of Mortgage
				<span></span>
		</label>
								</div>
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12">
								<div class="custom-file">
														<input type="file" name="attach_mortgage" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
								</div>
												</div>
												<div id="assignment_row" class="row">
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12  mt-2">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="assignment_deed"> Deed of Assignment
			<span></span>
		</label>
								</div>
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12">
								<div class="custom-file">
						<input type="file" name="attach_assignment" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
					</div>
		</div>
									<div id="letter_row" class="row">
									<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12  mt-2">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
			<input type="checkbox" name="cover_letter"> Cover Letter
			<span></span>
		</label>
								</div>
								<div class="col-lg-6 col-xl-6 col-d-12 col-sm-12">
								<div class="custom-file">
														<input type="file" name="attach_cover" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
												</div>
												
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>

											  <div class="form-group row">
													<div class="col-lg-4">
													<h4 class="kt-section__title mt-4"> Leasee Info:</h4>
													<div class="row">
												<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
												<label>Full Name:</label>
														<input type="text" name="name_leasee" class="form-control" placeholder="Enter full name">
														<!-- <span class="form-text text-muted">Please enter your full name</span> -->
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class="">Contact:</label>
														<input type="text" name="contact_leasee" class="form-control" placeholder="Enter contact number">
														<!-- <span class="form-text text-muted">Please enter your contact</span> -->
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label>Email:</label>
														<input type="email" name="email_leasee" class="form-control" placeholder="Enter email">
														<!-- <span class="form-text text-muted">Please enter your Email</span> -->
													</div>
											 </div>
											 <div class="row">
												<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
												<label>Address:</label>
														<input type="text" name="address_leasee" class="form-control" placeholder="Enter address">
														<!-- <span class="form-text text-muted">Please enter your Address</span> -->
													</div>
											 </div>
														
													</div>
													<div class="col-lg-4">
													<h4 class="kt-section__title mt-4"> Leasor Info:</h4>
													<div class="row">
												<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
												<label> Full Name:</label>
														<input type="text" name="name_leasor" class="form-control" placeholder="Enter full name">
														<!-- <span class="form-text text-muted">Please enter your full name</span> -->
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class="">Name of Stool:</label>
													<select name="stool_name" class="form-control kt-selectpicker" data-header="Select an option">
													<option >Select a Stool</option>
	<?php
	include ('conn.php');
$sql = "SELECT * FROM stool_table";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
	echo "<option value=".$row['stool_name'].">".$row['stool_name']."</option>";
}
	?>
	<option data-toggle="modal" data-target="#kt_modal_6"  >Add New Stool</option>
</select>
						
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class="">Contact:</label>
														<input type="text" name="contact_leasor" class="form-control" placeholder="Enter contact number">
														<!-- <span class="form-text text-muted">Please enter your contact</span> -->
													</div>
											 </div>
											 <div class="row">
												<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
												<label>Email</label>
														<input type="email" name="email_leasor" class="form-control" placeholder="Enter email">
														<!-- <span class="form-text text-muted">Please enter your full name</span> -->
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class=""> Address:</label>
														<input type="text" name="address_leasor" class="form-control" placeholder="Enter address">
														<!-- <span class="form-text text-muted">Please enter your contact</span> -->
													</div>
											 </div>
													</div>
											<div class="col-lg-4">
													<h4 class="kt-section__title mt-4"> Land & Other Info:</h4>
													<div class="row">
												<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
												<label> Plot No.:</label>
														<input type="text" name="plot_no" class="form-control" placeholder="Enter plot number">
														<!-- <span class="form-text text-muted">Please enter your full name</span> -->
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class="">Location:</label>
													<select name="land_loc" class="form-control kt-selectpicker" data-header="Select an option">
													<option >Select land location</option>
	<?php
	include ('conn.php');
$sql = "SELECT * FROM land_loc";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
	echo "<option value=".$row['loc_name'].">".$row['loc_name']."</option>";
}
	?>
	<option data-toggle="modal" data-target="#kt_modal_5"  >ADD NEW LOCATION</option>
</select>
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class="">Land Use:</label>
													<select name="land_use" class="form-control kt-selectpicker" data-header="Select an option">
													<option data-subtext="French's">Select Land Use</option>
													<option data-subtext="Heinz">Residential</option>
													<option data-subtext="Sweet">Commercial</option>
												</select>
														<!-- <span class="form-text text-muted">Please enter your contact</span> -->
													</div>
											 </div>
											 <div class="row">
												<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
												<label>Date of allocation:</label>
												<input type="text" name="alloc_date" class="form-control" id="kt_inputmask_1" im-insert="true">
												<span class="form-text text-muted">Custom date format: <code>yyyy-mm-dd</code></span>
														<!-- <span class="form-text text-muted">Please enter your full name</span> -->
													</div>
													<div class="col-lg-12 col-sm-4 col-xl-12 mt-4">
													<label class="">Old File No.:</label>
														<input name="old_file_no" type="text" class="form-control" placeholder="Enter old file number">
														<!-- <span class="form-text text-muted">Please enter your contact</span> -->
													</div>
												
											 </div>
														</div>
												
													</div>
												</div>
				
												
											</div>
                                             <!-- Begin Modal -->
											<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
	<div style="background-color: #fbce44;" class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">ADD NEW LOCATION</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
</button>
</div>
	<div class="modal-body">
<form action="javascript:;" method="post" onsubmit="getstep('new_location'); return fALSE;">
	<div class="form-group">
<label for="recipient-name" class="form-control-label">LOCATION</label>
<input type="text" name="new_location" class="form-control">
	</div>
												
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" name="save_newloc" class="btn btn-primary">ADD LOCATION</button>
										</div>
										</form>
									</div>
								</div>
							</div>

							 <!-- End Modal -->


							  <!-- Begin Modal -->
							  <div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
	<div style="background-color: #fbce44;" class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">ADD NEW STOOL</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
</button>
</div>
	<div class="modal-body">
<form action="javascript:;" method="post" onsubmit="getstep('new_stool'); return fALSE;">
	<div class="form-group">
<label for="recipient-name" class="form-control-label">STOOL NAME</label>
<input type="text" name="new_stool" class="form-control">
	</div>							
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" name="save_newStool" class="btn btn-primary">ADD STOOL</button>
										</div>
										</form>
									</div>
								</div>
							</div>

							 <!-- End Modal -->

											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-4"></div>
														<div class="col-lg-8">
															<button type="submit" name="add_application" class="btn btn-primary">Add New Application</button>
														</div>
													</div>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>


									