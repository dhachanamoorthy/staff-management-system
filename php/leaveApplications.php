<?php
    include('connection.php');
    include('sessionManager.php');
    $_SESSION['dept']='information_technology';
    $dept='information_technology';
    if($_SESSION['position']=='hod'){
        $sql="SELECT * FROM leaveapplications WHERE dept ='$dept' and notify=0";
    }
    else{
        $sql="SELECT * FROM leaveapplications WHERE notify='1'";
    }
    $result = mysqli_query($con,$sql);
    $array=array();
    while($row=$result->fetch_assoc()){
        array_push($array,$row);
    } 
    echo json_encode($array);
?>  