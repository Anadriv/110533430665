<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Login -BlueNight- </title>
<link type="text/css" rel="stylesheet" href="index.css">
</head>

<body>

<?php

session_start();

defined('_VALID') or die('Not Allowed');

function init_login() {
	//Account Data simulation
	$nama = 'blue';
	$pass = 'night';
	
	if (isset($_POST['nama']) && isset($_POST['pass'])){
	$n = trim($_POST['nama']);
	$p = trim($_POST['pass']);
	
	if (($n===$nama) && ($p===$pass)){
	//if create session
	$_SESSION['id']= $n;
	$_SESSION['pass']= $p;
	
	//redirect
	?>
	<script type="text/javascript">
	document.location.href="./";
	</script>
	
	<?php
	}else {
	die ("<script> alert('Invalid Username or Password !'); window.location='./'; </script>");
	//return false;
	}
}
}

function validate(){
if (!isset($_SESSION['id']) || !isset($_SESSION['pass'])){ ?>
	<div class="inner">
	<form action="" method="post">
	<table border=0 cellpadding=5>
	<h3> Please Log In</h3> <hr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="nama" id="txt" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass" id="txt" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="LOGIN" id="button" /></td>
	</tr>
	</table>
	</div>
	
	
<?php
ini_set('display_errors',1);
// Meng-include file koneksi dan data handler
require_once './0_Koneksi.php';
// Konstanta nama tabel
define('MHS', 'mahasiswa');
// Memanggil fungsi data handler
//data_handler('?m=data');

$sql = 'SELECT nim, nama, alamat FROM ' . MHS;
$res = mysql_query($sql);
if ($res) {
$num = mysql_num_rows($res);
if ($num) {
?>
<div class="tabeldata">
<table border=1 width=700 cellpadding=4 cellspacing=0>
<tr>
<th>#</th>
<th width=120>NIM</th>
<th width=200>Nama</th>
<th width=200>Alamat</th>
</tr>
<?php
$i = 1;
while ($row = mysql_fetch_row($res)) {
$bg = (($i % 2) != 0) ? '' : 'even';
$id = $row[0]; ?>
<tr class="<?php echo $bg;?>">
<td width="2%"><?php echo $i;?></td>
<td>
<?php echo $id;?>
</td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2]?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
<?php
} else {
echo 'Belum ada data, isi <a href="'.$root.'&amp;act=add">di sini</a>';
}
@mysql_close($res);
} ?>
	
	
	
	</form>
	<?php
exit;
}

if (isset($_GET['blue']) && $_GET['blue'] == 'logout'){
//Hapus Session
if (isset($_SESSION['id'])) {
unset($_SESSION['id']);
}
if (isset($_SESSION['pass'])) {
unset($_SESSION['pass']);
}

//Redirect
?>
<script type="text/javascript">
document.location.href="./";
</script>
<?php
}
}
?>









</body>
</html>