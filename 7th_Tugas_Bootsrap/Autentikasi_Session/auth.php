<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Login -BlueNight- </title>
<!-- <link type="text/css" rel="stylesheet" href="index.css"> -->


<!-- BOOTSRAP -->
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

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
	<form action="" method="post" class="form-horizontal" role="form">
	
	<h3> Please Log In</h3> <hr>
	
	<img src="Red5.jpg" alt="Red" class="img-rounded">
	
	<div class="input-group">
    <label for="exampleInputEmail1" class="col-lg-2 control-label">Username</label>
    <input type="text" class="form-control" placeholder="Username" name="nama">
	</div>
	
	<div class="input-group">
	<label for="InputPassword1" class="col-lg-2 control-label">Password</label>
	<input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="pass">
    
	</div>
	
	<br	>
	<div class="btn-group">
			<button type="submit" class="btn btn-default">Login</button>
		</div></td>
	</form>
	</div>
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