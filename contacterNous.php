<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'JeanMermoz');


$fullname = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];

	$reg = " insert into contacternous(fullname , email , phone , message) values ('$fullname' , '$email' , '$phone' , '$message')";
	mysqli_query($con, $reg);
	
$messageForEmail = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
				  Envoyé par : '.$fullname.' ( son Email : '.$email.' )<br/>
				  Son numéro : '.$phone.' <br/>
				  Message : <br/>
                 '.$message.'<br/>
				</div>
			</body>
			</html>';
	
require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'service.eleve.jeanmermoz@gmail.com';
$mail->Password = 'JOjo1234';
$mail->setFrom($email);
$mail->Subject = 'Contacter Nous';
$mail->Body = $messageForEmail;
$mail->AddAddress('service.eleve.jeanmermoz@gmail.com');

$mail->Send();

    echo '<script>alert("message sent successfully !")</script>';
	echo '<script>window.location.href="index.php";</script>';
	
	

   
?>





