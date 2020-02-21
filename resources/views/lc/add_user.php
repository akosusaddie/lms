<?php
session_start();

?>
<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													ADD USER
												</h3>
											</div>
										</div>

										<div> <?php echo $msg;?></div>
										<!--begin::Form-->
<form class="kt-form kt-form--label-right" action="javascript:;" method="post" onsubmit="getstep('new_user'); return fALSE;">
	<div class="kt-portlet__body">
				<div class="form-group row">
													<div class="col-lg-4">
														<label>Full Name:</label>
														<input type="text" name="fname_user" class="form-control" placeholder="Enter full name">
														
													</div>
													<div class="col-lg-4">
														<label class="">Email:</label>
														<input type="email" name="email_user" class="form-control" placeholder="Enter email">
														<!-- <span class="form-text text-muted">Please enter your email</span> -->
													</div>
													<div class="col-lg-4">
														<label>Username:</label>
														<div class="input-group">
															<div class="input-group-prepend"></div>
															<input type="text" name="username" class="form-control" placeholder="Enter username">
														</div>
														<!-- <span class="form-text text-muted">Please enter your username</span> -->
													</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-4">
														<label class="">Contact:</label>
														<input type="text" name="contact_user" class="form-control" placeholder="Enter contact number">
														<!-- <span class="form-text text-muted">Please enter your contact</span> -->
													</div>
													<div class="col-lg-4">
														<label class="">Region:</label>
														<select  name="region_user" class="form-control kt-selectpicker" data-header="Select an option">
													<option data-subtext="French's" selected disabled >Select Region</option>
<?php
include ('conn.php');
$sql = "SELECT * FROM region_table";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<option value=".$row['region_name'].">".$row['region_name']."</option>";
}

?>
												</select>
														<!-- <span class="form-text text-muted">Please enter fax</span> -->
			</div>
<div class="col-lg-4">
<label> Password:</label>
<div class="kt-input-icon kt-input-icon--right">
<input id="pass" name="password_user" type="password" class="form-control" placeholder="Enter your password">
		</div>
<!-- <span class="form-text text-muted">Passwords must contain at least a number</span> -->
			</div>
</div>

				<div class="form-group row">
	<div class="col-lg-4">
	<label class="">Division:</label>
	<select onclick ="show_dept();"  id="division" name="division_user" class="form-control kt-selectpicker">
	<option  selected disabled >Select Division</option>
	<option  value="ALS" >ALS</option>
	<option  value="LC" >LC</option>



</select>
	</div>
<div id="cls_dept" class="col-lg-4">
<label class="">Department:</label>
<select name="dept_user" class="form-control kt-selectpicker" data-header="Select an option">
<option >Choose Department</option>
	<?php
include ('conn.php');
$sql = "SELECT * FROM department_cls";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<option value=".$row['department_name'].">".$row['department_name']."</option>";
}

?>	</select>
																								
</div>

<div id="lc_dept" class="col-lg-4" style="display: none">
<label class="">Department:</label>
<select name="dept_user" class="form-control kt-selectpicker" data-header="Select an option">
<option >Choose Department</option>
<?php
include ('public/members/login/conn.php');
$sql = "SELECT * FROM department_lc";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<option value=".$row['department_name'].">".$row['department_name']."</option>";
}

?>
</select>
														
</div>

		<div class="col-lg-4">
<label> Confirm Password:</label>
	<div class="kt-input-icon kt-input-icon--right" >
	<input id="conf_pass" type="password" class="form-control" placeholder="Confirm Password" onkeyup="checkpassmatch();">
		</div>
		<div id="checkpassmatch"></div>
		

														
	</div>
</div>

	<div class="form-group row">
<div id="clsRole_div" class="col-lg-4">
	<label class="">Role:</label>
<select name="role_user" class="form-control kt-selectpicker" data-header="Select an option">
	<option data-subtext="French's">Choose Role</option>
		<?php
include ('conn.php');
$sql = "SELECT * FROM role_tbl";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "<option value=".$row['role_name'].">".$row['role_name']."</option>";
}

?>
												</select>
													</div>
													<div  class="col-lg-4"></div>
													<div class="col-lg-4"></div>
												</div>
					
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="submit" name="new_user" class="btn btn-primary">ADD NEW USER</button>
														</div>
														<div class="col-lg-3"></div>

													</div>
												</div>
											</div>

											
										</form>
										

										<!--end::Form-->
									</div>
									