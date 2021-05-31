<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idubah = $_REQUEST['idubah'];

# Penyimpanan
$sql = "SELECT * FROM kuis WHERE id_kuis='$idubah'";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error".mysql_error());
$data=mysql_fetch_array($qry);

# Terpilih pada ComboBox
if($data['kunci']=="A") {
	$cek_a ="selected"; 
}
elseif($data['kunci']=="B") {
	$cek_b ="selected";
}
elseif($data['kunci']=="C") {
	$cek_c ="selected"; 
}
elseif($data['kunci']=="D") {
	$cek_d ="selected"; 
}

?>
<html>
<head>
<title>Masukan Soal Kuis</title>
</head>
<body>
<form name="form1" method="post" action="SoalEditSim.php">
  <table width="450" border="0" cellspacing="4" cellpadding="0">
    <tr bgcolor="#CCFF66"> 
      <td colspan="2"><b>UBAH SOAL KUIS</b></td>
    </tr>
    <tr> 
      <td width="95">Soal</td>
      <td width="343"><textarea name="TxtSoal" cols="40" rows="2"><?= $data['soal']; ?>
      </textarea></td>
    </tr>
    <tr> 
      <td>Jawaban A</td>
      <td><input name="TxtJawabA" type="text" value="<?= $data['jawab_a']; ?>" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Jawaban B</td>
      <td><input name="TxtJawabB" type="text" value="<?= $data['jawab_b']; ?>" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Jawaban C</td>
      <td><input name="TxtJawabC" type="text" value="<?= $data['jawab_c']; ?>" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Jawaban D</td>
      <td><input name="TxtJawabD" type="text" value="<?= $data['jawab_d']; ?>" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Kunci</td>
      <td><select name="CmbKunci">
          <option value="KOSONG"></option>
          <option value="A" <? echo $cek_a; ?>>A</option>
          <option value="B" <? echo $cek_b; ?>>B</option>
          <option value="C" <? echo $cek_c; ?>>C</option>
          <option value="D" <? echo $cek_d; ?>>D</option>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan Kembali">
        <input name="TxtIdKuis" type="hidden" value="<?= $data['id_kuis']; ?>"></td>
    </tr>
  </table>
</form>
</body>
</html>
