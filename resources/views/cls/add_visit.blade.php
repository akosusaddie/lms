<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													NEW VISIT RECORD
												</h3>
											</div>
										</div>

										<!--begin::Form-->
								
								
										<form class="kt-form" action="javascript:;" method="post" onsubmit="getstep('new_visit'); return FALSE;">
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<h3 class="kt-section__title"> Visitor Info:</h3>
													<div class="kt-section__body">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Full Name:</label>
															<div class="col-lg-6">
																<input type="text" name="visitor_name" class="form-control" placeholder="Enter full name">
																
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Phone:</label>
															<div class="col-lg-6">
																<input type="text" name="visitor_contact" class="form-control" placeholder="Enter phone number">
																
															</div>
														</div>
														<div class="form-group row ">
															<label class="col-lg-3 col-form-label">Purpose of Visit:</label>
												<div class="form-group row">
												<div class="kt-radio-list col-lg-9" >
														<label class="col-lg-9 kt-radio kt-radio--bold kt-radio--brand">
															<input onclick="app();" type="radio" name="pov" value="Application" >Application 
															<span></span>
														</label>	
														<label class="col-lg-9 kt-radio kt-radio--bold kt-radio--brand">
															<input onclick="show_vo();" type="radio" name="pov" value="Complaint" >Complaint 
															<span></span>
														</label> 
														<div id="complaint" style="display: none">
															<div class="col-lg-12">
																<textarea name="complaint" class="form-control" placeholder="Enter complaint" style="width:300px;"></textarea>
															</div>
															</div>
														<label class="col-lg-9 kt-radio kt-radio--bold kt-radio--brand">
															<input onclick="show_app();" type="radio" name="pov" value="Appointment"  >Appointment
															<span></span>
														</label>
														<div id="appointment_officer" style="display: none">
															<div class="col-lg-12">
																<input type="text" name="officer_appointment" class="form-control" placeholder="Enter Officer's full name" style="width:300px;">
															</div>
															</div>

														<label class="col-lg-9 kt-radio kt-radio--bold kt-radio--brand">
															<input onclick="follow();" type="radio" name="pov" value="Follow Up">Follow Up
															<span></span>
														</label>
														
													</div>
															
														</div>
													</div>
												</div>
													</div>
													<div> <?php echo $msg;?></div>
		
														</div>
														<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="submit" name="new_visit" id="new_visit" class="btn btn-success">Add New Visit Record</button>
												
														</div>
													</div>
												</div>
											</div>
											</form>
											<!--end::Form-->
													</div>
						
											
										

										



