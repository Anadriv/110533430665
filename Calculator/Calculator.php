<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link type="text/css" rel="stylesheet" href="Calculator.css"/>
<title> Calculator -BlueNight- </title>
</head>

<body onload ="document.forms[0].angka.focus()">
<form action="Calculator_x.php" method="post">
 
<div id="div1">
<h1>Simple Calculator</h1>
<p>Number : </p>
<p><input type="text" id="txt1" name="angka" /></p>
<p>Result : </p>
<p><input type="text" id="txt2" name="result" value="<?php if (isset($_GET['result'])) echo $_GET['result']?>" readonly="readonly"/></p>

<div id="div2"><center>
<input type="submit" id="button" value="+" name="act"  />
<input type="submit" id="button" value="-" name="act"  />
<input type="submit" id="button" value="*" name="act"  />
<input type="submit" id="button" value="/" name="act"  />
<input type="submit" id="button" value="%" name="act"  /><br/>
<input type="submit" id="AC" value="AC" name="act" />
</center>
</div>

<h2>Copyrighted by -BlueNight-</h2>
</div>
</form>

</body>
</html>