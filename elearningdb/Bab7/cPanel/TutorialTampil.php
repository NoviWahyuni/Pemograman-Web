<html>
<head>
<title>Tampilkan Tutorial</title>
</head>
<body>
<table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
  <tr> 
    <td colspan="4" bgcolor="#CCFF33"><b>DAFTAR TUTORIAL</b></td>
  </tr>
  <tr> 
    <td width="22"><b>No</b></td>
    <td width="366"><b>Judul Tutorial</b></td>
    <td width="96" align="center"><strong>Tanggal</strong></td>
    <td width="96" align="center"><b>Pilihan</b></td>
  </tr>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM tut_tutorial ORDER BY id_tutorial";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	  $no++;
	  
	  $tgl    =$data['tgl_masuk'];
	  $tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td><?php echo $no; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td align="center"><?php echo $tgl_ind; ?></td>
    <td align="center"> <a href="TutorialEditFm.php?idubah=<? echo $data[id_tutorial]; ?>" target="_self">Ubah</a> 
      | <a href="TutorialHapus.php?idhapus=<? echo $data[id_tutorial]; ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><a href="TutorialAddFm.php" target="_self">Tambah</a></td>
  </tr>
</table>
</body>
</html>
