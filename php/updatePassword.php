<?php
  include('sessionManager.php');
  $user=$_SESSION['username'];
	$current=$_POST['password'];
	$new=$_POST['newpassword'];
	$current=base64_encode($current);
  $en_new=base64_encode($new);
  include('connection.php');
  $sql="SELECT * FROM employee WHERE email='$user'";
  $result = mysqli_query($con,$sql);
  $row=$result->fetch_assoc();
  $psw=$row['password'];
  if(strcmp($psw,$current)==0){
    $sql="UPDATE `employee` SET password='$en_new' WHERE email='$user'";
    if (mysqli_query($con,$sql)){
        $output = json_encode(array('type' => 'success', 'text' => 'Updated SuccessFully'));
        die($output);
    }
    else{
       $output = json_encode(array('type' => 'error', 'text' => 'error in updating password'));
        die($output);
    }
  }
   else {
   	  $output = json_encode(array('type' => 'error', 'text' => 'Current Password not matched'));
      die($output);
   }
?>