<?php

session_start();



$username = $_POST['username'];
$password = $_POST['password'];

$somme = $username.$password;


if($somme == "adminadmin") {
	echo '<script>window.location.href="adminDashboard.php";</script>';
} else {
	echo '<script>alert("nom d utilisateur / mot de passe incorrect !")</script>';
	echo '<script>window.location.href="adminLogin.php";</script>';
}
	
?>