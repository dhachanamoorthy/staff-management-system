<?php
    include('connection.php');
    include('sessionManager.php');
    $emp_id=$_SESSION['emp_id'];
    $sql="SELECT * FROM employee WHERE emp_id='$emp_id'";
    $result = mysqli_query($con,$sql);
    $row=$result->fetch_assoc();
    $CasualLeave=$row['CasualLeave'];
    $OnDuty=$row['OnDuty'];
    $compensationLeaves=$row['CompensationLeaves'];
    $permissions=$row['permissions'];
    $vl=$row['VL'];
    $emergencyLeaves=$row['emergencyLeaves'];
    $array = array('casual leaves' => $CasualLeave,'onduty' => $OnDuty,'compensationLeaves'=>$compensationLeaves,'permissions'=>$permissions,'vl'=>$vl,'emergencyLeaves'=>$emergencyLeaves );
    echo json_encode($array);
?>