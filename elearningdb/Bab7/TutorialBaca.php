<?php
include "inc.koneksidb.php";

$idtut = $_REQUEST['idtut'];
$sql = "SELECT tut_kategori.* FROM tut_kategori, tut_tutorial 
		WHERE tut_kategori.id_kategori=tut_tutorial.id_kategori 
		AND tut_tutorial.id_tutorial='$idtut'";
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
  <tr> 
    <td align="center"><b>BACA TUTORIAL</b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"><a href="index.php" target="_self">Home</a>\
	<a href="TutorialDetail.php?idkat=<? echo $data['id_kategori']; ?>" target="_self"><? echo $data['kategori']; ?> </a>\
	Baca</td>
  </tr>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM tut_tutorial 
			WHERE id_tutorial='$idtut'";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	  $no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td width="468"> 
      <?php 
	  	echo "<h3>".$data['judul']; 
		echo "[ ".$data['tgl_masuk']." ] </h3>"; 
		echo $data['lengkap'];
	  ?>
    </td>
    <?php
  }
  ?>
</table>
</body>
</html>
