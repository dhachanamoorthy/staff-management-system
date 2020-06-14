<?php
require 'PHPMailer/PHPMailerAutoload.php';
require 'connection.php';
$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$psw = array(); //remember to declare $pass as an array
$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
for ($i = 0; $i < 8; $i++) {
	$n = rand(0, $alphaLength);
	$psw[] = $alphabet[$n];
}
$password=implode($psw);
$email=$_POST["email"];
$sql="SELECT * FROM employee WHERE email='$email'";
$result = mysqli_query($con,$sql);
$row = $result->num_rows;
if($row==0){
	$output = json_encode(array('type' => 'error', 'text' => 'user not found'));
	die($output);
}
else{
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP

		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server

		$mail->SMTPAuth = true;                               // Enable SMTP authentication

		$mail->Username = 'no-reply@siet.ac.in';                   // SMTP username

		$mail->Password = 'srishakthi06';               // SMTP password

		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

		$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS

		$mail->setFrom('no-reply@siet.ac.in', 'SIET');     //Set who the message is to be sent from

		$mail->addReplyTo('ashokkumar@siet.ac.in', 'SIET');  //Set an alternative reply-to address



		//$mail->addBCC('bcc@example.com');



		$mail->isHTML(true);	// Set email format to HTML

		$mail->addAddress($email, "");  // Add a recipient   

		$mail->Subject = "New Password";

		$mail->Body    = "Please use the following password to login<br><b>" .$password. "</b> To Change Password Visit settings after Login";

		if(!$mail->send()) {
			$output= json_encode(array( 'type'=>'error','text' => $mail->ErrorInfo));
			die($output);
			exit;

		}
		else{
			$output = json_encode(array('type' => 'success', 'text' => 'New password has been successfully sended to your mail'));
			$encrypt=base64_encode($password);
            $sql="UPDATE `employee` SET `password`='$encrypt' where email='$email'";
            mysqli_query($con,$sql);
            die($output);
		}
	}

?>