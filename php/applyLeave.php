<?php
include 'connection.php';
include 'sessionManager.php';
	$no_of_days=$_POST['no'];
	$type_of_leave=$_POST['type'];
	$starts_from=$_POST['from'];
	$starts_from_session=$_POST['start'];
	$ends_on=$_POST["to"];
	$ends_on_session=$_POST["end"];
	$reason=$_POST["reason"];
	$adjustment=$_POST["adj"];
	$emp_id=$_SESSION['emp_id'];
	$name=$_SESSION['name'];
	$dept_name=$_SESSION['department'];
	$sql="SELECT * FROM employee WHERE dept='$dept_name'";
	$result=mysqli_query($con,$sql);
	$sql="INSERT INTO leaveapplications (no_of_days,starts_from,starts_from_session,ends_on,ends_on_session,reason,adjustment,emp_id,type_of_leave,dept,name) VALUES('$no_of_days','$starts_from','$starts_from_session','$ends_on','$ends_on_session','$reason','$adjustment','$emp_id','$type_of_leave','$dept_name','$name')";
	if(!$con){
		die("Connection failed :".mysqli_connect_error());
	}
	if ($con->query($sql)){
			$output = json_encode(array('type' => 'success', 'text' => 'your application was successfully sumbitted.Please wait for the confirmation'));
        	die($output);
    }
   else {
   	        $output = json_encode(array('type' => 'error', 'text' => 'failed to submit your application'));
		    	die($output);
   }
   if($_SESSION['position']=='hod'){
		   	$sql="UPDATE leaveapplications set hod=1,notify=1 where emp_id='$emp_id'";
		   	if ($con->query($sql)){
		   		$output = json_encode(array('type' => 'message', 'text' => 'your application was successfully sumbitted.Please wait for the confirmation'));
        			die($output);
		    }
		    else {
		   	  	$output = json_encode(array('type' => 'error', 'text' => 'failed to submit your application'));
		    	die($output);
		   	}
		} 	
?> 
