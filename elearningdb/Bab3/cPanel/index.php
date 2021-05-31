<html>
<head>
<title>Konsultasi dan Jawaban</title>
</head>
<body>
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr align="right" bgcolor="#22B5DD"> 
    <td colspan="2">[ <a href="TampilSemua.php" target="_self">Tampil Semua</a>]</td>
  </tr>
  <?php 
    include "inc.koneksidb.php";
	$sql = "SELECT  * 
			FROM konsultasi_tanya
			WHERE id_tanya 
				  NOT IN(SELECT id_tanya FROM konsultasi_jawab)
			GROUP BY  id_tanya";
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
  <tr bgcolor="#DBEAF5"> 
    <td valign="top"><b>Jawaban</b></td>
    <td bgcolor="#DBEAF5"><a href="KonsultasiJawabFm.php?idtanya=<? echo $data['id_tanya']; ?>">
     Jawab Pertanyaan ini</a></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php
  }
  ?>
  <tr bgcolor="#DBEAF5"> 
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
