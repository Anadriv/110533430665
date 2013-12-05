<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Welcome </title>
<link type="text/css" rel="stylesheet" href="x_tugas_praktikum.css"/>

</head>
<body>

<?php
$defuser="blue";
$defpass="night";

$user = $_POST['Username'];
$password = $_POST['Password'];

/* (Tidak dipakai) Validasi untuk inputan kosong
if (empty($user)){
die ("<script> alert('Username is still empty !'); window.location='x_tugas_praktikum.html'; </script>");
}
if (empty($password)){
die ("<script> alert('Password is still empty !'); window.location='x_tugas_praktikum.html'; </script>");
}
*/

// Validasi untuk mengecek username dan password
if (isset($user)){
	if($user == $defuser && $password == $defpass){
	echo "<h1>";
	echo "Welcome to the site, " .$user. " !"; 
	echo "</h1>";
		}
	else{
	die ("<script> alert('Sorry, wrong Username or Password !'); window.location='x_tugas_praktikum.html'; </script>");
		}
}


// Validasi untuk memastikan nilai adalah string

if (is_string($user)){
die ("<script> alert('Your username is string'); </script>");
}else{
die ("<script> alert('Your username contains a number'); </script>");
}
if (is_string($password)){
die ("<script> alert('Your password is string'); </script>");
}else{
die ("<script> alert('Your password contains a number'); </script>");
}


/* (Tidak dipakai)
$checkstring1 = (int)$user;
$checkstring2 = (int)$password;
if (empty($checkstring1)){
die ("<script> alert('Your username is string'); </script>");
}else{
die ("<script> alert('Your username contains a number'); </script>");
}
if (empty($checkstring2)){
die ("<script> alert('Your password is string'); </script>");
}else{
die ("<script> alert('Your password contains a number'); </script>");
}
*/

?>