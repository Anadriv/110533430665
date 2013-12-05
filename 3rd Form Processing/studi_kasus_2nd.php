<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Data Checkbox Preselect -BlueNight- </title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Judul Anime
<input type="checkbox" name="anime[]" value="Ao no Exorcist" /> Ao no Exorcist
<input type="checkbox" name="anime[]" value="Guilty Crown" checked/> Guilty Crown
<input type="checkbox" name="anime[]" value="Katekyo Hitman Reborn!" checked/> Katekyo Hitman Reborn!
<input type="checkbox" name="anime[]" value="Ookiku Furikabutte" /> Ookiku Furikabutte
<input type="checkbox" name="anime[]" value="Zettai Shounen" checked/> Zettai Shounen <br />

<input type="submit" value="OK" />
</form>

<?php
//Ekstraksi nilai
if (isset($_POST['anime'])){
foreach ($_POST['anime'] as $key => $val) {
echo $key . '->' .$val. '<br />';
}
}
?>

</body>
</html>