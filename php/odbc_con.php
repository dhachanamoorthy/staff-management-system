 
 <?php
 	$servername="ATTSER\SQLEXPRESS";
    $dbname="SmartOfficedb";
    $username="sa";
    $password="admin123";
    $odbc_con=odbc_connect("Driver={SQL Server};Server=$servername;Database=$dbname",$username,$password);
    ?>