<html>
<head>
<title>Tampilkan Matakuliah</title>
</head>
<body>
<table width="450" border="0" cellpadding="2" cellspacing="1" bgcolor="#99FFCC">
  <tr bgcolor="#00FFFF"> 
    <td colspan="3"><b>DAFTAR MATAKULIAH</b></td>
  </tr>
  <tr> 
    <td width="22"><b>No</b></td>
    <td width="366"><b>Nama Matakuliah</b></td>
    <td width="96" align="center"><b>Pilihan</b></td>
  </tr>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM matakuliah ORDER BY kd_matakuliah";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nm_matakuliah']; ?></td>
    <td align="center">
	    <a href="MatakuliahEditFm.php?kdubah=<? echo $data['kd_matakuliah']; ?>">Ubah</a> 
      | <a href="MatakuliahHapus.php?kdhapus=<? echo $data['kd_matakuliah']; ?>">Hapus</a>
	  </td>
  </tr>
  <?php
  }
  ?>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><a href="MatakuliahAddFm.php" target="_self">Tambah</a></td>
  </tr>
</table>
 </body>
</html>
