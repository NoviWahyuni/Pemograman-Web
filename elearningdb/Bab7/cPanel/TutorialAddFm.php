<html>
<head>
<title>Masukan Tutorial</title>
</head>
<body>
<form name="form1" method="post" action="TutorialAddSim.php">
<table width="450" border="0" cellspacing="4" cellpadding="0">
<tr bgcolor="#CCFF66"> 
  <td colspan="2"><b>MASUKKAN TUTORIAL BARU</b></td>
</tr>
<tr> 
  <td width="95">Kategori</td>
  <td width="343">
  <select name="CmbKategori">
  <option value="NULL">[ Kategori Tutorial ]</option>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM tut_kategori ORDER BY id_kategori";
	$qry = mysql_query($sql, $koneksi);
	while ($data=mysql_fetch_array($qry)) {
		if ($data['id_kategori']==$CmbKategori) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}

	 echo "<option value='$data[id_kategori]' $cek >$data[kategori]</option>";
	}
  ?>
</select>
</td>
</tr>
<tr>
  <td>Judul</td>
  <td><input name="TxtJudul" type="text" value="<?= $TxtJudul; ?>" size="50" maxlength="100"></td>
</tr>
<tr> 
  <td>Lengkap</td>
  <td><textarea name="TxtLengkap" cols="45" rows="5"><?= $TxtLengkap; ?></textarea></td>
</tr>
<tr> 
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
