<?php 
include "inc.koneksidb.php";
$kdmat = $_REQUEST['kdmat'];
?>
<html>
<head>
<title>Download Materi Kuliah</title>
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
<table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
<tr bgcolor="#77B6D0"> 
  <td> 
  <select name="CmbMatakuliah" onChange="MM_jumpMenu('parent',this,0)">
  <option value="NULL">[ Materi Matakuliah ]</option>
  <?php 
	$sql_mat = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry_mat = mysql_query($sql_mat, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data_mat=mysql_fetch_array($qry_mat)) {
		if ($data_mat['kd_matakuliah']==$kdmat) {
			$pilih = "selected";
		}
		else {
			$pilih = "";
		}
	 echo "<option value='index.php?kdmat=$data_mat[kd_matakuliah]' $pilih>$data_mat[nm_matakuliah]</option>";
	}
  ?>
  </select></td>
</tr>
<tr bgcolor="#77B6D0"> 
  <td><b>DAFTAR MATERI TIAP MATAKULIAH</b></td>
</tr>
<tr> 
  <td width="21">&nbsp;</td>
</tr>
<?php 
if ($kdmat == "") {
	$sql = "SELECT * FROM materi ORDER BY id_materi";
}
else {
	$sql = "SELECT * FROM materi WHERE kd_matakuliah='$kdmat' ORDER BY id_materi";
}
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
while ($data=mysql_fetch_array($qry)) {
  $no++;
?>
<tr bgcolor="#FFFFFF"> 
  <td> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td width="22%">Bab</td>
	<td width="2%">:</td>
	<td width="76%"><?php echo $data['bab_nama']; ?></td>
  </tr>
  <tr> 
	<td valign="top">Judul bab</td>
	<td>:</td>
	<td valign="top"><?php echo $data['bab_judul']; ?></td>
  </tr>
  <tr> 
	<td valign="top">Definisi</td>
	<td valign="top">:</td>
	<td><?php echo $data['definisi']; ?></td>
  </tr>
  <tr> 
	<td>File Data</td>
	<td>:</td>
	<td><?php echo "<a href='FileMateri/$data[file_data]'>$data[file_data]</a>"; ?></td>
  </tr>
  <tr> 
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
  </table>
  </td>
</tr>
<?php
}
?>
</table>
</form>
</body>
</html>
