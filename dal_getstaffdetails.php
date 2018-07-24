<?php 
include_once '/config/database.php';
include_once '/objects/staff.php';

		$database = new Database();
		$db = $database->getConnection();

		$staff = new Staff($db);
		$staff->name=$_POST["param_name"];

		$result=$staff->fetchSingleStaffStaff();
 		echo json_encode($result);

	?>
	 