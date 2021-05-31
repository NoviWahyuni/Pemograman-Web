<?php
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idubah = $_REQUEST['idubah'];

# Penyimpanan
$sql = "SELECT * FROM kuisioner WHERE id_kuis='$idubah'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error".mysql_error());
$data=mysql_fetch_array($qry);
?>
<html>
<head>
<title>Merubah Pertanyaan</title>
</head>
<body>
 <form action="PertanyaanEditSim.php" method="post" name="form1" target="_self">
  <table width="450" border="0" cellspacing="4" cellpadding="0">
    <tr bgcolor="#CCFF66"> 
      <td colspan="2"><b>PERBAIKI PERTANYAAN LAMA</b></td>
    </tr>
    <tr> 
      <td width="95">Pertanyaan</td>
      <td width="343"><textarea name="TxtPertanyaan" cols="40" rows="2"><?= $data['pertanyaan']; ?>
      </textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan">
	      <input name="TxtIdKuis" type="hidden" value="<?= $data['id_kuis']; ?>"></td>
    </tr>
  </table>
 </form>
</body>
</html>
