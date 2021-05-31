<?php 
include "inc.koneksidb.php";
$kdmakul = $_REQUEST['kdmakul'];
?>
<html>
<head>
<title>Konsultasi dan Jawaban</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body>
<form name="form1" method="post" action="">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1">
<tr align="right" bgcolor="#22B5DD">
  <td height="54" colspan="2" align="center"><B>[ SISTEM TANYA JAWAB MATA PELAJARAN ] </B></td>
</tr>
<tr align="right" bgcolor="#22B5DD"> 
  <td colspan="2">[ <a href="KonsultasiTanyaFm.php" target="_self">Tanya Lagi</a> 
	]</td>
</tr>
<tr bgcolor="#77B6D0"> 
  <td width="93" ><b>Matakuliah</b></td>
  <td width="696"> 
  <select name="CmbMatakuliah" onChange="MM_jumpMenu('parent',this,0)">
  <option value="<?= $_SERVER['PHP_SELF'];?>">[ Kategori Matakuliah ]</option>
  <?php 
	$sql_makul = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry_makul = mysql_query($sql_makul, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data_makul=mysql_fetch_array($qry_makul)) {
		if ($data_makul['kd_matakuliah']==$kdmakul) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='index.php?kdmakul=$data_makul[kd_matakuliah]' $cek>$data_makul[nm_matakuliah]</option>";
	}
  ?>
 </select></td>
</tr>
<?php 
$sql = "SELECT konsultasi_tanya.*,konsultasi_jawab.* 
		FROM konsultasi_tanya,konsultasi_jawab 
		WHERE konsultasi_tanya.id_tanya=konsultasi_jawab.id_jawab
		AND konsultasi_tanya.kd_matakuliah='$kdmakul'
		ORDER BY konsultasi_tanya.id_tanya";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
while ($data=mysql_fetch_array($qry)) {
  $no++;
?>
<tr bgcolor="#DBEAF5"> 
  <td> <b>Pertanyaan</b></td>
  <td> <? echo $data['pertanyaan']; 
	      echo " <b>[ ".$data['penanya']." ]</b>"; ?>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td> <b>Jawaban</b></td>
  <td> <? echo $data['jawaban']; 
	      echo " <b>[ ".$data['penjawab']." ]</b>"; ?>
  </td>
</tr>
<tr> 
  <td colspan="2">&nbsp;</td>
</tr>
<?php
 }
?>
<tr>
  <td colspan="2" bgcolor="#DBEAF5">&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>
