<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Paging dan Limitasi Data</title>
</head>
<body>
<form method="post" action="" name="frm_select">
Tampilkan

<?php $topic = isset($_POST['row_page']) ? htmlspecialchars($_POST['row_page']) : ''?>
<?php $attr = 'selected="selected"'; ?>
<select name="row_page" onchange="document.forms.frm_select.submit();""> 
	<option <?php echo $topic == 1 ? $attr : ''; ?>>-- pilih --</option>
    <option value="5" <?php echo $topic == 5 ? $attr : ''; ?>>5</option>
    <option value="10" <?php echo $topic == 10 ? $attr : ''; ?>>10</option>
    <option value="20" <?php echo $topic == 20 ? $attr : ''; ?>>20</option>
    <option value="50" <?php echo $topic == 50 ? $attr : ''; ?>>50</option>
    <option value="100" <?php echo $topic == 100 ? $attr : ''; ?>>100</option>
</select> baris per halaman.
</form>




	<?php
if (isset($_POST['row_page']) && $_POST['row_page']) {
require_once './Koneksi.php';
// Batas baris data
$row = $_POST['row_page'];
// LENGKAPI
// Variabel $sql berisi pernyataan SQL retrieve dg limitasi


$sql = 'SELECT * FROM mahasiswa';
$record_num = isset($row) ? $row : 0;
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$offset = $page ? ($page - 1) * $record_num : 0;
$query = $sql. ' LIMIT ' . $offset . ', ' . $record_num;
$res = mysql_query($query);



//***************** Setup paging
$sql = 'SELECT * FROM mahasiswa';
$self = $_SERVER['PHP_SELF'];

// Jumlah link counter, misal (prev 1 2 3 next) = 3
$link_num = 5;

// Item pertama yang akan ditampilkan
$offset = $page ? ($page - 1) * $record_num : 0;

$total_rows = mysql_num_rows(mysql_query($sql));

$max_page = ceil($total_rows/$record_num);
// Reset jika page tidak sesuai
if ($page > $max_page || $page <= 0) {
$page = 1;
}
//***************** Generate paging
$paging = '';
if($max_page > 1) {
//*** Render link previous
if ($page > 1) {
$paging .= ' <a href="'.$self.'?page='.($page-1).'">previous</a>
';
} else {
$paging .= ' previous ';
}
//*** Render link counter halaman
for ($counter = 1; $counter <= $max_page; $counter += $link_num) {
if ($page >= $counter) {
$start = $counter;
}
}
if ($max_page > $link_num) {
$end = $start + $link_num;
if ($end > $max_page) {
$end = $max_page + 1;
}
} else {
$end = $max_page;
}
for ($counter = $start; $counter < $end; $counter++) {
if ($counter == $page) {
$paging .= $counter;
} else {
$paging .= ' <a href="'.$self.'?page='.$counter.'">' .$counter.
'</a> ';
}
}
//*** Render link next
if ($page < $max_page) {
$paging.= ' <a href="' .$self.'?page='.($page+1).'">next</a> ';
} else {
$paging.= ' next ';
}
}
?>
<table border=1 cellspacing=1 cellpadding=5>
<tr>
<th>#</th>
<th width=100>NIM</th>
<th width=150>Nama</th>
<th>Alamat</th>
</tr>
<?php
$i = 1;
while ($row = mysql_fetch_row($res)) { ?>
<tr>
<td>
<?php echo $i;?>
</td>
<td>
<?php echo $row[0];?>
</td>
<td>
<?php echo $row[1];?>
</td>
<td>
<?php echo $row[2];?>
</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
//***************** Tampilkan navigasi
echo $paging;
?>



<?php
$i = 1;
while ($row = mysql_fetch_row($res)) { ?>
<tr>
<td>
<?php echo $i;?>
</td>
<td>
<?php echo $row[0];?>
</td>
<td>
<?php echo $row[1];?>
</td>
<td>
<?php echo $row[2];?>
</td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
} else {
echo 'Data Tidak Ditemukan';
}

?>
</body>
</html>











