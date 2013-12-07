<h2>Sorting Table -BlueNight-</h2>
<table border=2 cellpadding='5' cellspacing='2'>    
 
<?php
require_once('Koneksi.php');
$query1="select * from mahasiswa order by nim ";
 
$mode='asc';
$mode2='asc';
if(isset($_GET['orderby'])){
  $orderby=$_GET['orderby'];
  $mode=$_GET['mode'];
   
  $query1="SELECT * FROM  mahasiswa order by $orderby $mode ";
  if($mode=='asc'){
    $mode2='desc';
     
  }else{
    $mode2='asc';
  }
}
?>
<th>
        <td><a href='TR_Sorting.php?orderby=nim&mode=<?=$mode2;?>'>NIM</a></td>
        <td><a href='TR_Sorting.php?orderby=nama&mode=<?=$mode2;?>'>NAMA</a></td>
		<td><a href='TR_Sorting.php?orderby=alamat&mode=<?=$mode2;?>'>ALAMAT</a></td>
        </th>
         
<?php
//query database
$result=mysql_query($query1) or die(mysql_error());
$no=1; //penomoran
 
 
while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $rows -> nim;?></td>
        <td><?php echo $rows -> nama;?></td>
        <td><?php echo $rows -> alamat;?></td>
      </tr>
      <?php $no++; }?>
    </table>  