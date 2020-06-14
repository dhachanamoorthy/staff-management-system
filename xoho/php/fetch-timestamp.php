<?php
    include 'sessionManager.php';
    include'odbc_con.php';
    $json = array();
    $emp_id=$_SESSION['emp_id'];
    $sqlQuery="select DISTINCT AttendanceLogs.TotalDurationInHHMM as title,AttendanceLogs.AttendanceDateStr as start from Employees INNER JOIN AttendanceLogs ON AttendanceLogs.EmployeeId=Employees.EmployeeId and Employees.NumericCode='$emp_id'"; 
    $result=odbc_exec($odbc_con,$sqlQuery);
    $eventArray = array();
    while($row = odbc_fetch_array($result)){
        $row["title"]="WH :".$row['title'];
        $d=$row["start"];
        $newDate = date("Y-m-d", strtotime($d));
        $row['start']=$newDate;
        array_push($eventArray, $row);
    }
    $sqlQuery ="select DISTINCT AttendanceLogs.Intime as title,AttendanceLogs.AttendanceDateStr as start from Employees INNER JOIN AttendanceLogs ON AttendanceLogs.EmployeeId=Employees.EmployeeId and Employees.NumericCode='$emp_id' "; 
        $result=odbc_exec($odbc_con,$sqlQuery);
     while($row = odbc_fetch_array($result)){
        $row["title"]="C-IN:".$row['title'];
        $d=$row["start"];
        $newDate = date("Y-m-d", strtotime($d));
        $row['start']=$newDate;
        array_push($eventArray, $row);
    }
     $sqlQuery="select DISTINCT AttendanceLogs.OutTime as title,AttendanceLogs.AttendanceDateStr as start from Employees INNER JOIN AttendanceLogs ON AttendanceLogs.EmployeeId=Employees.EmployeeId and Employees.NumericCode='$emp_id' "; 
            $result=odbc_exec($odbc_con,$sqlQuery);
     while($row = odbc_fetch_array($result)){
        $row["title"]="C-OUT :".$row['title'];
        $d=$row["start"];
        $newDate = date("Y-m-d", strtotime($d));
        $row['start']=$newDate;
        array_push($eventArray, $row);
    }
    //mysqli_free_result($result);
    $time=strtotime("5");
    odbc_close($odbc_con);
    echo json_encode($eventArray);

?>