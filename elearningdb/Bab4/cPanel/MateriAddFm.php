<html>
<head>
<title>Masukan Materi Kuliah</title>
</head>
<body>
<form action="MateriAddSim.php" method="post" enctype="multipart/form-data" name="form1" target="_self">
<table width="450" border="0" cellspacing="1" cellpadding="2">
<tr bgcolor="#77B6D0"> 
  <td colspan="2"><b>MASUKKAN MATERI BARU</b></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td width="83">Matakuliah</td>
  <td width="356">
  <select name="CmbMatakuliah">
  <option value="NULL">[ Materi Matakuliah ]</option>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry = mysql_query($sql, $koneksi) 
		   or die ("SQL Error: ".mysql_error());
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
  <td>Nama Bab</td>
  <td><input name="TxtNama" type="text" value="<?= $TxtNama; ?>" size="10" maxlength="25">
	Ex: Bab 1, Bab 2, ....</td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>Judul Bab</td>
  <td> <input name="TxtJudul" type="text" value="<?= $TxtJudul; ?>" size="54" maxlength="100"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Definisi</td>
  <td><textarea name="TxtDefinisi" cols="41" rows="4"><?= $TxtDefinisi; ?>
  </textarea></td>
</tr>
<tr bgcolor="#DBEAF5">
  <td>File Materi</td>
  <td><input name="TxtFile" type="file" size="41"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>&nbsp;</td>
  <td> <input type="submit" name="Submit" value="Simpan"></td>
</tr>
</table>
  </form>
</body>
</html>



