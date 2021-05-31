<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idubah = $_REQUEST['idubah'];

# Menampilkan data
$sql = "SELECT * FROM tut_tutorial WHERE id_tutorial='$idubah'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
$data=mysql_fetch_array($qry);
?>
<html>
<head>
<title>Ubah Data Tutorial</title>
</head>
<body>
<form name="form1" method="post" action="TutorialEditSim.php">
  <table width="450" border="0" cellspacing="4" cellpadding="0">
    <tr bgcolor="#CCFF66"> 
      <td colspan="2"><b>MERUBAH DATA TUTORIAL</b></td>
    </tr>
    <tr> 
      <td width="95">Kategori</td>
      <td width="343">
	 <select name="CmbKategori">
	  <option value="NULL">[ Kategori Tutorial ]</option>
	  <?php 
	  include "inc.koneksidb.php";
		
	  $sql_kat = "SELECT * FROM tut_kategori ORDER BY id_kategori";
	  $qry_kat = mysql_query($sql_kat, $koneksi) 
			 or die ("SQL Error: ".mysql_error());
	  while ($data_kat=mysql_fetch_array($qry_kat)) {
		 if ($data['id_kategori']==$data_kat['id_kategori']) {
			 $pilih =" selected";
		 }
		 else {
			 $pilih ="";
		 }
			
		 echo "<option value='$data_kat[id_kategori]' $pilih>$data_kat[kategori]</option>";
	  }
	 ?>
	</select></td>
    </tr>
    <tr>
      <td>Judul</td>
      <td><input name="TxtJudul" type="text" value="<?= $data['judul']; ?>" size="50" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Lengkap</td>
      <td><textarea name="TxtLengkap" cols="45" rows="5"><?= $data['lengkap']; ?>
      </textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan">
	  <input name="TxtIdTut" type="hidden" value="<?= $data['id_tutorial']; ?>"></td>
    </tr>
  </table>
</form>
</body>
</html>
