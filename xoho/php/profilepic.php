 <?php
include "sessionManager.php";
include "connection.php";
$empid=$_SESSION['emp_id'];
$sourcePath = $_FILES['file']['tmp_name'];	
$ext=explode("/",$_FILES['file']['type']);
$_FILES['file']['name']=$empid.'.'.$ext[1];	
$filename=$_FILES['file']['name'];	//saving images in directory til line 7
$targetPath='../images/'.$_FILES['file']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	
 	$sql="UPDATE employee set pic='$filename' where emp_id='$empid'";
    if(!$con){
		die("Connection failed :".mysqli_connect_error());
	}
	if(!mysqli_query($con,$sql)){
		$output = json_encode(array('type' => 'error', 'text' =>'Failed to upload img ' ));
		die($output);
	}
	else
	{
		$_SESSION['pic']=$filename;
		$output = json_encode(array('type' => 'message', 'text' =>'success','img'=>$targetPath));
		die($output);

	}
	$output = json_encode(array('type' => 'error', 'text' => $sql));
	die($output);
}
?>