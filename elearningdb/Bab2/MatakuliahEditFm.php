<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$kdubah = $_REQUEST['kdubah'];

# Penyimpanan
$sql = "SELECT * FROM matakuliah WHERE kd_matakuliah='$kdubah'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
$data=mysql_fetch_array($qry);
?>
<html>
<head>
<title>Ubah Data Matakuliah</title>
</head>
<body>
<form action="MatakuliahEditSim.php" method="post" name="form1" target="_self">
  <table width="400" border="0" cellspacing="4" cellpadding="0">
    <tr bgcolor="#99FFCC"> 
      <td colspan="2"><b>MERUBAH DATA MATAKULIAH</b></td>
    </tr>
    <tr>
      <td>Kode</td>
      <td><input name="TxtKode" type="text" value="<?= $data['kd_matakuliah']; ?>" size="6" maxlength="4" disabled="disabled">
      <input name="TxtKodeH" type="hidden" value="<?= $data['kd_matakuliah']; ?>"></td>
    </tr>
    <tr> 
      <td width="95">Matakuliah</td>
      <td width="343">
	    <input name="TxtMatakuliah" type="text" value="<?= $data['nm_matakuliah']; ?>" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan"></td>
    </tr>
  </table>
</form>
</body>
</html>
