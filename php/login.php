<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$encrypt=base64_encode($password);
  include('connection.php');
	$sql="SELECT * FROM employee WHERE email='$username' and password='$encrypt'";
	$result = mysqli_query($con,$sql);
	$row = $result->num_rows;
   if ($row=$result->fetch_assoc()){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['emp_id']=$row['emp_id'];
        $_SESSION["name"]=$row["name"];
          if($row['mobile']==NULL || $row['position']==NULL || $row['dept']==NULL){
              $output = json_encode(array('type' => '201', 'text' => 'login successful'));
              die($output);
          }
          else{
          $_SESSION["position"]=$row["position"];
          $_SESSION["department"]=$row["dept"];
          $_SESSION["img"]=$row["pic"];
        $output = json_encode(array('type' => 'success', 'text' => 'login successful'));
        die($output);
      }
    }
   else {
   	  $output = json_encode(array('type' => 'error', 'text' => 'username or password doesnt match'));
      die($output);
   }
 }
?>