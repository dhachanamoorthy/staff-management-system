<?php
session_start();
session_unset();
 session_destroy();
 $output = json_encode(array('type' => 'success', 'text' => 'logout successful'));
die($output);
 
?>