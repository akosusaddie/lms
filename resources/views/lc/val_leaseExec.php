
<div class="kt-portlet kt-portlet--mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													ASSESSMENT OF CHARGES FOR LEASE EXECUTION
												</h3>
											</div>
										</div>
										<div class="row" style="display: none;">
										<div class="col"></div>
										<div class="col-lg-9 col-md-9 col-sm-12 mt-5">
														<div class="kt-radio-inline">
														<label class="kt-radio kt-radio--solid kt-radio--brand">
															<input onchange ="show_divLease();" type="radio" value="residential" class="leaseVal"> Residential
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--brand">
															<input onchange ="show_divLease();" type="radio" value="commercial" class="LeaseVal"> Commercial
															<span></span>
														</label>
													
														</div>
														<span class="form-text text-muted">Please select an option</span>
													</div>
													<div class="col"></div>
										</div>
										
										<div class="kt-portlet__body" id="lease_valResident">
										<form  method="POST" action="cal_process.php">
                                   <div class="row">
								   <div class="col">
								   <div class="form-group">
													<label for="exampleSelect1">Location of Land:</label>
													<select name="land_loc" class="form-control">
												<option selected disabled>SELECT LOCATION OF LAND: </option>
<?php
include ('public/members/login/conn.php');
$sql = "SELECT * FROM land_loc";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<option value=".$row['id'].">".$row['loc_name']."</option>";
}

?>
<option data-toggle="modal" data-target="#kt_modal_5"  >ADD LOCATION</option>

											
													</select>
												</div>
								   </div>
								   <div class="col">
								   <div class="form-group">
													<label for="exampleSelect1">Class:</label>
									
											<select onchange="show_rate();"; name="land_class" id="land_class" class="form-control">
													<option selected disabled>SELECT CLASS: </option>
<?php
include ('public/members/login/conn.php');
$sql = "SELECT * FROM land_class";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<option value=".$row['id'].">".$row['land_class']."</option>";
}

?>

													</select>
												</div>

												<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">ADD NEW LOCATION</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form action="process.php" method="POST">
												<div class="form-group">
													<label for="recipient-name" class="form-control-label">LOCATION</label>
													<input type="text" name="new_location" class="form-control">
												</div>
												
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" name="save_newloc" class="btn btn-primary">ADD LOCATION</button>
										</div>
									</div>
								</div>
							</div>
								   </div>
								   <div class="col">
								   <label >Rate:</label>
								   <span name="sr1" id="show_rate1" style="display: none;">GHC 100,000.00</span>
								   <span name="sr2" id="show_rate2" style="display: none;">GHC 60,000.00</span>
								   <span name="sr3" id="show_rate3" style="display: none;">GHC 20,000.00</span>
								   </div>
								   </div>

								   <div class="row">
								   <div class="col">
								   <div class="form-group">
													<label>Size of Land:</label>
													<input type="text" name="land_sizeVal" class="form-control" placeholder="Enter size of land">
												</div>
												</div>
								   <div class="col">
								   
								   </div>
								   <div class="col"></div> 
										</div>

										<div class="row">
										<div class="col">
								   <button type="button" name="cal_dmoney" value="cal_dmoney" class="btn btn-primary">Calculate Drink Money</button>
								   </div>
								   <div class="col"></div>
								   <div class="col"></div> 
										</div>
										</form>
										<div class="row">
										<div class="col mt-5">
								   <label>Drink Money to be Apportioned:</label>
								   <span>
			
								   </span>
								   </div>
								   <div class="col"></div>
								   <div class="col"></div> 
										</div>

										<div class="row">
										<div class="col mt-5 ">
								   <h5>Apportionment:</h5>
								   </div>
								   <div class="col"></div>
								   <div class="col"></div> 
										</div>

										<div class="row">
										<div class="col ">
										<div class="row">
								   <div class="col"> <label>Asantehene(1/3):</label> </div>
								   <div class="col"></div> 
										</div>

										<div class="row">
								   <div class="col"> <label>XXX Stool(2/3):</label></div>
								   <div class="col"></div> 
										</div>
								   </div>
								   <div class="col"></div>
								   <div class="col"></div> 
										</div>







									</div>
									</div>
