<?php
  $value=$_POST['value'];
  $leave=$_POST['leave'];
  include('sessionManager.php');
  include('connection.php');
if($_SESSION['position']=='hod'){
      if($value==2){
        $sql="UPDATE leaveapplications set notify='4', hod='2',principal='2' where leave_id='$leave'";
        $result=$con->query($sql);
        if($result){
            $output = json_encode(array('type' => 'success', 'text' => $leave,'msg' =>'reject'));
            die($output);
        }
        else {
            $output = json_encode(array('type' => 'error', 'text' => $leave));
            die($output);
        }
      }
      else if($value==1){
        $leave=$_POST['leave'];
        $sql="UPDATE leaveapplications set hod='1',notify='1' where leave_id='$leave'"; 
        $result=$con->query($sql);
        if($result){
           $output = json_encode(array('type' => 'success', 'text' => $leave,'msg' =>'approve'));
            die($output);
        }
        else {
            $output = json_encode(array('type' => 'error', 'text' => $leave));
            die($output);
        }
      }
    }
      //approval of principal.....
    elseif ($_SESSION['position']=='principal') {
      if($value==2){
        $sql="UPDATE leaveapplications set notify='4',principal='2' where leave_id='$leave'";
        $result=$con->query($sql);
        if($result){
             $output = json_encode(array('type' => 'success', 'text' => $leave,'msg' =>'rejected'));
            die($output);
        }
        else {
             $output = json_encode(array('type' => 'success', 'text' => $leave));
            die($output);
            # code...
        }
      }
      else if($value==1){
        $sql="UPDATE leaveapplications set principal='1',notify='-1' where leave_id='$leave'"; 
        $result=$con->query($sql);
        if($result){
           $output = json_encode(array('type' => 'success', 'text' => $leave,'msg' =>'approve'));
            die($output);
        }
        else {
            $output = json_encode(array('type' => 'error', 'text' => $leave));
            die($output);
        }
      }
    } 
?>