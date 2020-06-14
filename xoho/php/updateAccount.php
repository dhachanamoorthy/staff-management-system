<?php
  session_start();
  $emp_id=$_SESSION['emp_id'];
  if(isset($_POST['mobile']) && isset($_POST['position']) && isset($_POST['dept']) && isset($_POST['dob']) && isset($_POST['doj'])){
    	$mobile=$_POST['mobile'];
    	$position=$_POST['position'];
    	$dept=$_POST['dept'];
      $dob=$_POST['dob'];
      $doj=$_POST['doj'];
      $_SESSION['position']=$position;
      $_SESSION['dept']=$dept;
      $gender=$_POST['gender'];
      include('connection.php');
    	$sql="UPDATE `employee` SET `dob`='$dob',`gender`='$gender',`mobile`='$mobile',`position`='$position',`doj`='$doj',`dept`='$dept' WHERE emp_id='$emp_id'";
       if (mysqli_query($con,$sql)){
            $output = json_encode(array('type' => 'success', 'text' => 'Updated SuccessFully','sql'=>$sql));
            die($output);
        }
       else {
       	  $output = json_encode(array('type' => 'error', 'text' => 'Failed to Update'));
          die($output);
   }
 }
?>