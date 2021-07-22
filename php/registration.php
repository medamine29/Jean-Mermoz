<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'JeanMermoz');

$email = $_POST['email'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$loginQuery = " select * from utilisateurs where email = '$email'";

$result = mysqli_query($con, $loginQuery);

$num = mysqli_num_rows($result);

$mastID = mysqli_insert_id($con);

if($num == 1 ) {
echo "<script>alert('Il exite déja un compte avec cet email');document.location='register.php'</script>";
} else {
	$reg = " insert into utilisateurs(fullname , email , phone , password) values ('$fullname' , '$email' , '$phone' , '$password')";
	mysqli_query($con, $reg);
	//$mastID = mysqli_insert_id($con);
	//echo "$mastID";
	header('location:login.php');
}
	
?>