<?php
include "inc.koneksidb.php";
$sql = "SELECT * FROM tut_kategori WHERE id_kategori='".$_GET['idkat']."'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
$data=mysql_fetch_array($qry);

?>
<html>
<head>
<title>Aplikasi Tutorial Online</title>
</head>
<body>
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
  <tr align="center"> 
    <td colspan="2"><b>DAFTAR TUTORIAL</b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"><a href="index.php" target="_self">Home</a>\<? echo $data[kategori]; ?> </td>
  </tr>
  <?php 
	$idkat = $_REQUEST['idkat'];
	$sql_kat = "SELECT * FROM tut_tutorial 
			WHERE id_kategori='$idkat' ORDER BY id_tutorial";
	$qry_kat = mysql_query($sql_kat, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data_kat=mysql_fetch_array($qry_kat)) {
	  $no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td width="20"><?php echo $no; ?></td>
    <td width="468"><a href="TutorialBaca.php?idtut=<?= $data_kat['id_tutorial']; ?>" target="_self"> 
      <?php echo $data_kat['judul']; ?> </a> </td>
    <?php
  }
  ?>
</table>
</body>
</html>
