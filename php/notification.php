<?php
    include('connection.php');
    include('sessionManager.php');
    $dept=$_SESSION['dept'];
    if($_SESSION['position']=='hod'){
        $sql="SELECT * FROM leaveapplications WHERE dept ='$dept' and notify=0";
    }
    else{
        $sql="SELECT * FROM leaveapplications WHERE notify='1'";
    }
    $result = mysqli_query($con,$sql);
    $approvals=mysqli_num_rows($result);
    $array = array('approvals' => $approvals,'sql' => $sql );
    echo json_encode($array);
?>  