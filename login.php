<?php 
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user=="admin" && $pass=="admin") {
	header("location:menu.php");
}
else{
	echo "<script>alert('Email dan Password Anda Salah')</script>";
	include 'index.php';
}
 ?>
