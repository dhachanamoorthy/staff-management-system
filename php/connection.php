<?php
		$con=new mysqli("localhost","root","root1234","staff_management_system");
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}
?>
