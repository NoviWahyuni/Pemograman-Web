<?php 
include "inc.koneksidb.php";
$kdmat = $_REQUEST['kdmat'];
?>
<html>
<head>
<title>Tampilkan Materi</title>
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
    <td colspan="4">
	<select name="CmbMatakuliah" onChange="MM_jumpMenu('parent',this,0)">
	<option value="NULL">[ Materi Matakuliah ]</option>
	<?php 
	$sql_mat = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry_mat = mysql_query($sql_mat, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data_mat=mysql_fetch_array($qry_mat)) {
		if ($data_mat['kd_matakuliah']==$kdmat) {
			$cek = "selected";
		}
		else {
			$cek = "";
		}
	 echo "<option value='MateriTampil.php?kdmat=$data_mat[kd_matakuliah]' $cek>$data_mat[nm_matakuliah]</option>";
	}
	  ?>
      </select></td>
  </tr>
  <tr bgcolor="#77B6D0"> 
    <td colspan="4"><b>DAFTAR MATERI</b></td>
  </tr>
  <tr> 
    <td width="21"><b>No</b></td>
    <td width="64"><b>Bab</b></td>
    <td width="308"><b>Judul</b></td>
    <td width="86" align="center"><b>Pilihan</b></td>
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
    <td><?php echo $no; ?></td>
    <td><?php echo $data['bab_nama']; ?></td>
    <td><?php echo $data['bab_judul']; ?></td>
    <td align="center"> <a href="MateriEditFm.php?idubah=<? echo $data['id_materi']; ?>" target="_self">Ubah</a> 
      | <a href="MateriHapus.php?idhapus=<? echo $data['id_materi']; ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><a href="MateriAddFm.php" target="_self">Tambah</a></td>
  </tr>
</table>
</form>
</body>
</html>
