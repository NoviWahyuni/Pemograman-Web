<html>
<head>
<title>Masukkan Soal Kuis</title>
</head>
<body>
<form name="form1" method="post" action="SoalAddSim.php">
  <table width="450" border="0" cellspacing="4" cellpadding="0">
    <tr bgcolor="#CCFF66"> 
      <td colspan="2"><b>MASUKKAN SOAL KUIS</b></td>
    </tr>
    <tr> 
      <td width="95">Soal</td>
      <td width="343"><textarea name="TxtSoal" cols="40" rows="2"></textarea></td>
    </tr>
    <tr> 
      <td>Jawaban A</td>
      <td><input name="TxtJawabA" type="text" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Jawaban B</td>
      <td><input name="TxtJawabB" type="text" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Jawaban C</td>
      <td><input name="TxtJawabC" type="text" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Jawaban D</td>
      <td><input name="TxtJawabD" type="text" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>Kunci</td>
      <td><select name="CmbKunci">
          <option value="KOSONG"></option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan"></td>
    </tr>
  </table>
</form>
</body>
</html>
