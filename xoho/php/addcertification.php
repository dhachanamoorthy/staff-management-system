<?php
    include ('connection.php');
    include('sessionManager.php');
    if(isset($_POST["mark"])){
    $emp_id =$_SESSION['emp_id'];
    $name_of_certificate=$_POST['name'];
    $specialiazion=$_POST["spec"];
    $mark=$_POST["mark"];
    $course_type=$_POST["type"];
    $class_passed=$_POST["c_passed"];
    $authority_name=$_POST["a_name"];
    $duration=$_POST["duration"];
    $year_passed=$_POST["y_passed"];
    $certificate_no=$_POST["c_no"];
    $sql="INSERT INTO certification(emp_id,name_of_certificate,specialiazion,mark,course_type,class_passed,authority_name,duration,year_passed,certificate_no) VALUES('$emp_id','$name_of_certificate','$specialiazion','$mark','$course_type','$class_passed','$authority_name','$duration','$year_passed','$certificate_no')";
    if(!$con)
    {
        $output = json_encode(array('type' => 'error', 'text' => 'Not 1'));
        die("Connection failed :".mysqli_connect_error());
    }
    if(!($con->query($sql)))
    {
        $output = json_encode(array('type' => 'error', 'text' => $sql));
        die($output);
    }
    else
    {
        $output = json_encode(array('type' => 'message', 'text' => 'Successfully Submitted'));
        die($output);
    }
}
?>