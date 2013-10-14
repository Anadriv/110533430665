<?php

if (empty($_POST['angka'])) {
die ("<script> alert('Inputan tidak boleh kosong !'); window.location='Calculator.php'; </script>");
}else if (is_numeric($_POST['angka'])==false){
die ("<script> alert('Inputan harus angka !'); window.location='Calculator.php';</script>");
}

else{ 
$x=$_POST['angka'];
$z=$_POST['result'];
$a=$x;
$c=$_POST['act'];

switch($c){
case '+':
$hasil = $z + $a;
break;

case '-':
$hasil = $z - $a;
break;

case '/':
$hasil = $z / $a;
break;

case '*':
$hasil = $z * $a;
break;

case '%':
$hasil = $z % $a;
break;

case 'AC':
$hasil= 0;
break;

}
header ("location:Calculator.php?result=$hasil");
}
?>