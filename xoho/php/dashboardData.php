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
    $permissions=$row['Permissions'];
    $vl=$row['VacationLeaves'];
    $emergencyLeaves=$row['EmergencyLeaves'];
    $array = array('casualLeaves' => $CasualLeave,'onduty' => $OnDuty,'compensationLeaves'=>$compensationLeaves,'permissions'=>$permissions,'vacationLeaves'=>$vl,'emergencyLeaves'=>$emergencyLeaves );
    echo json_encode($array);
?>