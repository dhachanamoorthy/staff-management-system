<?php 
include('sessionManager.php');
        include 'odbc_con.php';
       $from=$_POST['from'];
       //$from='2020-03-12';
        $dept=$_POST['dept'];
        //$dept=8;
        //$emp=$_SESSION['emp_id'];
        $to=$_POST['to'];
        //$to='2020-03-30';

        $sqlQuery ="select
  Employees.EmployeeName as name,
  AttendanceLogs.AttendanceDateStr as date,AttendanceLogs.InTime as intime,Departments.DepartmentFName as dept
from
  Employees
  INNER JOIN AttendanceLogs ON AttendanceLogs.EmployeeId = Employees.EmployeeId INNER JOIN Departments ON Employees.DepartmentId= Departments.DepartmentId
WHERE
  convert(date,AttendanceLogs.AttendanceDateStr) >= '$from'
  AND convert(date,AttendanceLogs.AttendanceDateStr) <= '$to' 
  and CAST(AttendanceLogs.Intime as time) >CAST('08:31' as time) AND  CAST(AttendanceLogs.Intime as time) <CAST('16:35' as time)  and Employees.DepartmentId='$dept'"; 
       $result=odbc_exec($odbc_con,$sqlQuery);
       if(odbc_num_rows($result)>0){
            $array = array();
            while($row = odbc_fetch_array($result)){
                $dt=$row['date'];
                $dt1 = strtotime($dt);
                $dt2 = date("l", $dt1);
                $dt3 = strtolower($dt2);
                $row['day']=$dt3;
                array_push($array, $row);
            }
            echo json_encode($array);
        }
         else{
          $row = array('name' =>'nill' ,'dept'=>'nill' );
          $array = array();
          array_push($array,$row);
          echo json_encode($array);
        }
?>

