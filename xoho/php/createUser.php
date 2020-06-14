<?php
  include('connection.php');
  if(isset($_POST['emp_id']) && isset($_POST['email']) && isset($_POST['name'])){
  $emp_id=$_POST['emp_id'];
  $email=$_POST['email'];
  $name=$_POST['name'];
  $psw=base64_encode($emp_id);
	$sql="INSERT into employee (emp_id,name,email,password) VALUES ('$emp_id','$name','$email','$psw')";
   if (mysqli_query($con,$sql)){
      	$output = json_encode(array('type' => 'success', 'text' => 'User Created successfully'));
        die($output);
    }
   else {
   	  $output = json_encode(array('type' => 'error', 'text' => 'failed  to  create user'));
      die($output);
   }
 }
?>