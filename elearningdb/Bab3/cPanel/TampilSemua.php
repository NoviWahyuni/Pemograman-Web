<html>
<head>
<title>Konsultasi dan Jawaban</title>
</head>
<body>
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr align="right" bgcolor="#22B5DD"> 
    <td colspan="2">[ <a href="index.php" target="_self">Pertanyaan</a> ]</td>
  </tr>
  <?php 
    include "inc.koneksidb.php";
	$sql = "SELECT konsultasi_tanya.*,konsultasi_jawab.* 
			FROM konsultasi_tanya,konsultasi_jawab 
			WHERE konsultasi_tanya.id_tanya=konsultasi_jawab.id_jawab
			ORDER BY konsultasi_tanya.id_tanya";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	  $no++;
  ?>
  <tr> 
    <td width="112"><b>Pertanyaan</b></td>
    <td width="677"> 
	<? echo $data['pertanyaan']; 
	   echo " <b>[ ".$data['penanya']." ]</b>";
	?>
	</td>
  </tr>
  <tr> 
    <td valign="top"><b>Jawaban</b></td>
    <td><? echo $data['jawaban']; 
	       echo " <b>[ ".$data['penjawab']." ]</b>";
		?>
	</td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>
