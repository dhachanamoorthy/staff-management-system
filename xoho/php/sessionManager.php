<?php
    session_start();
    if(!isset($_SESSION['username'])){
         header("Location:login.php");
         exit();
    }
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000)) {
	    session_unset();   
	    session_destroy();
        echo '<script>alert("session expired")</script>';
        header("Location:login.php");
        exit();
	}
	$_SESSION['LAST_ACTIVITY'] = time();
?>