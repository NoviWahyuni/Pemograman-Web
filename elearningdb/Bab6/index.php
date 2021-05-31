<?php
include "inc.koneksidb.php";
?>
<html>
<head>
<title>Tampilkan Kuisioner</title>
</head>
<body>
<form name="form1" method="post" action="KuisionerSim.php">
  <table width="600" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
    <tr> 
      <td colspan="7" bgcolor="#CCFF33"><b>DAFTAR PERTANYAAN</b></td>
    </tr>
    <tr> 
      <td width="24"><b>No</b></td>
      <td width="331"><b>Pertanyaan</b></td>
      <td width="29"><b>A</b></td>
      <td width="29"><b>B</b></td>
      <td width="29"><b>C</b></td>
      <td width="29"><b>D</b></td>
      <td width="29"><b>E</b></td>
    </tr>
    <?php 
	$sql = "SELECT * FROM kuisioner ORDER BY id_kuis";
	$qry = mysql_query($sql, $koneksi) 
		   or die ("SQL Error".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
    ?>
    <tr bgcolor="#FFFFFF"> 
      <td> <?php echo $no; ?> </td>
      <td> <?php echo $data['pertanyaan']; ?> </td>
      <td> <input type="radio" name="RbJawab[<?= $data['id_kuis']; ?>]" value="A"> </td>
      <td> <input type="radio" name="RbJawab[<?= $data['id_kuis']; ?>]" value="B"> </td>
      <td> <input type="radio" name="RbJawab[<?= $data['id_kuis']; ?>]" value="C"> </td>
      <td> <input type="radio" name="RbJawab[<?= $data['id_kuis']; ?>]" value="D"> </td>
      <td> <input type="radio" name="RbJawab[<?= $data['id_kuis']; ?>]" value="E"> </td>
    </tr>
    <?php
    }
    ?>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Pilih">
        <input type="reset" name="Submit2" value="Reset"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<br>
<table width="300" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
  <tr> 
    <td colspan="2"><strong>KETERANGAN</strong></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="24">A</td>
    <td width="265">Istimewa / Sangat Baik</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>B</td>
    <td>Sangat Setuju / Baik</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>C</td>
    <td>Setuju/ Cukup</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>D</td>
    <td>Kurang Setuju/ Buruk</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>E</td>
    <td>Sangat Kurang/ Sangat Buruk</td>
  </tr>
</table>
 </body>
</html>
