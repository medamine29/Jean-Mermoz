<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'JeanMermoz');

$email = $_POST['email'];
$password = $_POST['password'];

$loginQuery = " select * from utilisateurs where email = '$email' && password = '$password'";

$result = mysqli_query($con, $loginQuery);

$num = mysqli_num_rows($result);

if($num == 1 ) {
	
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$_SESSION['id_session'] = $row['id_user'];
	header('location:index.php');

} else {
	echo "<script>alert('email ou mot de passe incorrect');document.location='login.php'</script>";
}
	
?>