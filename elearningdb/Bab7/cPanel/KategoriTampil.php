<html>
<head>
<title>Tampilkan Kategori</title>
</head>
<body>
<table width="450" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
  <tr> 
    <td colspan="3" bgcolor="#CCFF33"><b>DAFTAR KATEGORI TUTORIAL</b></td>
  </tr>
  <tr> 
    <td width="30"><b>No</b></td>
    <td width="358"><b>Kategori</b></td>
    <td width="96" align="center"><b>Pilihan</b></td>
  </tr>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM tut_kategori ORDER BY id_kategori";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td><?php echo $no; ?></td>
    <td><?php echo $data['kategori']; ?></td>
    <td align="center">
	    <a href="KategoriEditFm.php?idubah=<?= $data['id_kategori']; ?>" target="_self">Ubah</a> 
      | <a href="KategoriHapus.php?idhapus=<?= $data['id_kategori']; ?>" target="_self">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><a href="KategoriAddFm.php" target="_self">Tambah</a></td>
  </tr>
</table>
</body>
</html>
