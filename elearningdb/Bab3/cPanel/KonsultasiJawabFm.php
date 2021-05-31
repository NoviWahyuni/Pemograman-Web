<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idtanya = $_REQUEST['idtanya'];

# Penyimpanan
$sql = "SELECT * FROM konsultasi_tanya WHERE id_tanya='$idtanya'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error: ".mysql_error());
$data=mysql_fetch_array($qry);
?>
<html>
<head>
<title>Konsulitasi Matakuliah</title>
</head>
<body>
<form action="KonsultasiJawabSim.php" method="post" name="form1" target="_self">
<table width="450" border="0" cellspacing="1" cellpadding="2">
<tr bgcolor="#77B6D0"> 
  <td colspan="2"><b>HALAMAN UNTUK MENJAWAB</b></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td width="83">Pertanyaan</td>
  <td width="356"> 
    <? echo $data['pertanyaan']; ?>
	<input name="TxtIdTanya" type="hidden" value="<?= $data['id_tanya']; ?>">
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Jawaban</td>
  <td bgcolor="#DBEAF5"> 
	<textarea name="TxtJawaban" cols="35" rows="3"><?= $TxtJawaban; ?></textarea>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Penjawab</td>
  <td><input name="TxtPenjawab" type="text" value="<?= $TxtPenjawab; ?>" size="46" maxlength="100"></td>
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
