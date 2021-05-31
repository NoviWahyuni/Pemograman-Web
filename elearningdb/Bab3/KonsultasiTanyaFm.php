<html>
<head>
<title>Konsulitasi Matakuliah</title>
</head>
<body>
<form action="KonsultasiTanyaSim.php" method="post" name="form1" target="_self">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr bgcolor="#77B6D0"> 
  <td colspan="2"><b>KONSULTASI MATAKULIAH</b></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td width="83">Matakuliah</td>
  <td width="356"> 
	<select name="CmbMatakuliah">
	<option value="NULL">[ Kategori Matakuliah ]</option>
	<?php 
	include "inc.koneksidb.php";
		
	$sql = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry = mysql_query($sql, $koneksi);
	while ($data=mysql_fetch_array($qry)) {
		if ($data['kd_matakuliah']==$CmbMatakuliah) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}

		echo "<option value='$data[kd_matakuliah]' $cek>$data[nm_matakuliah]</option>";
	}
	?>
	</select></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top" bgcolor="#DBEAF5">Pertanyaan</td>
  <td bgcolor="#DBEAF5"> 
	<textarea name="TxtPertanyaan" cols="35" rows="3"><?= $TxtPertanyaan; ?></textarea>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Penanya</td>
  <td><input name="TxtPenanya" type="text" value="<?= $TxtPenanya; ?>" size="46" maxlength="100"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>&nbsp;</td>
  <td> 
	<input type="submit" name="Submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
