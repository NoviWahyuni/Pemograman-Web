<html>
<head>
<title>Masukkan Matakuliah</title>
</head>
<body>
<form action="MatakuliahAddSim.php" method="post" name="form1" target="_self">
  <table width="400" border="0" cellspacing="1" cellpadding="2">
    <tr bgcolor="#99FFCC"> 
      <td colspan="2"><b>MASUKKAN MATAKULIAH BARU</b></td>
    </tr>
    <tr>
      <td>Kode</td>
      <td><input name="TxtKode" type="text" value="" size="6" maxlength="6"></td>
    </tr>
    <tr> 
      <td width="95">Matakuliah</td>
      <td width="343"><input name="TxtMatakuliah" type="text" value="" size="40" maxlength="100"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan"></td>
    </tr>
  </table>
</form>
</body>
</html>
