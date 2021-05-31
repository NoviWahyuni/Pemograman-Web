<html>
<head>
<title>Halaman Utama Kuis</title>
</head>
<body>
<form name="form1" method="post" action="">
  <table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
    <tr bgcolor="#CCFF33"> 
      <td colspan="2"><b>DAFTAR SEMUA SOAL KUIS</b></td>
    </tr>
    <tr> 
      <td width="24"><b>No</b></td>
      <td width="315"><b>Pertanyaan Soal</b></td>
    </tr>
    <?php 
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "smartsel";
	$db_data = "eLearning";
	
	$koneksi = mysql_connect($db_host, $db_user, $db_pass)
				or die ("Koneksi gagal".mysql_error());
	mysql_select_db($db_data, $koneksi) 
		or die ("Baca DB gagal".mysql_error());

	$sql = "SELECT * FROM kuis ORDER BY id_kuis";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
    <tr bgcolor="#FFFFFF"> 
      <td valign="top"><?php echo $no; ?></td>
      <td><?php 
	  	echo "$data[pertanyaan]"; 
        echo "<input type='radio' name='RbJawaban[$data[id_kuis]]' value='JawabA'>";
        echo "$data[jawab_a]"; 
		?> 
      </td>
    </tr>
    <?php
  }
  ?>    
  <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan Jawaban"></td>
    </tr>
  </table>
</form>
</body>
</html>
