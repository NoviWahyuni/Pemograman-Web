<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idubah = $_REQUEST['idubah'];

# Penyimpanan
$sql = "SELECT * FROM materi WHERE id_materi='$idubah'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
$data=mysql_fetch_array($qry);
?>
<html>
<head>
<title>Ubah Data Materi</title>
</head>
<body>
<form action="MateriEditSim.php" method="post" enctype="multipart/form-data" name="form1" target="_self">
<table width="450" border="0" cellspacing="1" cellpadding="2">
<tr bgcolor="#77B6D0"> 
  <td colspan="2"><b>MERUBAH DATA MATERI</b></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td width="91">Matakuliah</td>
  <td width="348">
  <select name="CmbMatakuliah">
  <option value="NULL">[ Materi Matakuliah ]</option>
  <?php 
	include "inc.koneksidb.php";
	
	$sql_mat = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry_mat = mysql_query($sql_mat, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data_mat=mysql_fetch_array($qry_mat)) {
		if ($data_mat['kd_matakuliah']==$data['kd_matakuliah']) {
			$cek = "selected";
		}
		else {
			$cek = "";
		}
	 echo "<option value='$data_mat[kd_matakuliah]' $cek>$data_mat[nm_matakuliah]</option>";
	}
  ?>
  </select>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>Nama Bab</td>
  <td><input name="TxtNama" type="text" value="<? echo $data['bab_nama']; ?>" size="10" maxlength="25">
	Ex: Bab 1, Bab 2, ....</td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>Judul Bab</td>
  <td> <input name="TxtJudul" type="text" value="<? echo $data['bab_judul']; ?>" size="54" maxlength="100"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Definisi </td>
  <td> <textarea name="TxtDefinisi" cols="41" rows="4"><? echo $data['definisi']; ?></textarea></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>File Lama</td>
  <td><input name="TxtFileLama" type="text" value="<? echo $data['file_data']; ?>" size="54" maxlength="100" disabled> </td>
</tr>
<tr bgcolor="#DBEAF5">
  <td>File Baru</td>
  <td><input name="TxtFile" type="file" size="41"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>&nbsp;</td>
  <td> <input type="submit" name="Submit2" value="Ubah Data">
	<input name="TxtFileH" type="hidden" value="<?php echo $data['file_data']; ?>">
  <input name="TxtIdMat" type="hidden" value="<?php echo $data['id_materi']; ?>"></td>
</tr>
</table>
  </form>
</body>
</html>
