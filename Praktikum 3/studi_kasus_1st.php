<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Data Selection Preselect -BlueNight- </title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Job
<select name="job">
<option value="Assassin"> Assassin
<option value="Lancer"> Lancer
<option value="Paladin"> Paladin
<option value="Warrior" selected> Warrior
<option value="Wizard"> Wizard
</select> <br />

<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['job'])) {
echo $_POST['job'];
}
?>

</body>
</html>