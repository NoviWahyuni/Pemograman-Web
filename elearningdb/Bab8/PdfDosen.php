<html>
<head>
<title>Form Data Dosen</title>
</head>
<body>
<form action="PdfDosenSim.php" method="post" name="form1" target="_self">
  <table width="400" border="0" cellpadding="2" cellspacing="1">
    <tr align="center" bgcolor="#CCFF66"> 
      <td colspan="2"><b>DATA DOSEN</b></td>
    </tr>
    <tr> 
      <td width="121" align="right">User ID :</td>
      <td width="268"><input name="TxtUid" type="text" value="<?= $TxtUid; ?>" size="25" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="right">Password :</td>
      <td><input name="TxtPass" type="password" size="25" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="right">Ulangi Password :</td>
      <td><input name="TxtPass2" type="password" size="25" maxlength="30"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td align="right">Nama Depan :</td>
      <td><input name="TxtNamaA" type="text" value="<?= $TxtNamaA; ?>" size="25" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="right">Nama Belakang :</td>
      <td><input name="TxtNamaB" type="text" value="<?= $TxtNamaB; ?>" size="25" maxlength="30"></td>
    </tr>
	<tr>
	  <td align="right">NIDN :</td>
	  <td><input name="Txtnidn" type="text" value="<?= $Txtnidn; ?>" size="15" maxlength="20"></td>
	</tr>
    <tr> 
      <td align="right">Kelamin :</td>
      <td><input name="RbKelamin" type="radio" value="P" checked>
        Pria 
        <input type="radio" name="RbKelamin" value="W">
        Wanita</td> 
    </tr>
    <tr> 
      <td align="right">Alamat : </td>
      <td><textarea name="TxtAlamat" cols="30" rows="2"><?= $TxtAlamat; ?>
      </textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Daftar Sekarang"></td>
    </tr>
  </table>
 </form>
</body>
</html>
