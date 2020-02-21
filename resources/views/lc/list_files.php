<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head">
	<div class="kt-portlet__head-label">
	<h3 class="kt-portlet__head-title">
LIST OF FILES
</h3>
</div>
</div>
<div class="kt-portlet__body">
<?php
	include ('conn.php');
$sql = "SELECT * FROM visits_table";
$results= $conn-> query($sql);
$rows = $results-> fetchAll(PDO::FETCH_ASSOC);
$action ='<a href=""><i class="fa fa-trash"></i> Permissions Del </a> |
<a href=""><i class="fa fa-edit"></i> Edit </a>';

foreach ($rows as $row) {?>
<div class="kt-demo-icon__preview">
<i style ="font-size: 100px;" class="fa fa-folder"></i><br>
<small><?php echo $row["visitor_name"]?></small>
</div>

<?php }?>
	
	
			
</div>
</div>