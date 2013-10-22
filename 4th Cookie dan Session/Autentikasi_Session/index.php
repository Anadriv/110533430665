<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Administrator -BlueNight- </title>
<link type="text/css" rel="stylesheet" href="index.css">
</head>

<body>
<?php
ini_set('display_errors', 1);
define('_VALID',1);

//include file eksternal
require_once('./auth.php');

init_login();
validate();
?>
<h2>BlueNight Admin Page</h2> 
<div class="div2">
<hr>
<div class="div3">
<a href="?blue=logout">Logout</a>
</div>
<div class="div4">
<p>
Admin Menus are here ...
</div>
</div>
</body>
</html>