<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idubah = $_REQUEST['idubah'];

# Perintah SQL untuk mengambil data
$sql = "SELECT * FROM tut_kategori WHERE id_kategori='$idubah'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
$data=mysql_fetch_array($qry);
?>
<html>
<head>
<title>Ubah Data Kategori</title>
</head>
<body>
<form name="form1" method="post" action="KategoriEditSim.php">
  <table width="450" border="0" cellspacing="4" cellpadding="0">
    <tr bgcolor="#CCFF66"> 
      <td colspan="2"><b>MERUBAH KATEGORI BARU</b></td>
    </tr>
    <tr> 
      <td width="95">Kategori</td>
      <td width="343"><input name="TxtKategori" type="text" value="<? echo $data['kategori']; ?>" size="50" maxlength="100"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan">
	   <input name="TxtIdKat" type="hidden" value="<?= $data['id_kategori']; ?>">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
