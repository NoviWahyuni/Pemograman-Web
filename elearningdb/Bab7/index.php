<html>
<head>
<title>Program Tutorial Online</title>
</head>
<body>
<table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
  <tr align="center"> 
    <td colspan="2"><b>KATEGORI TUTORIAL</b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2">Home\ </td>
  </tr>
  <?php 
	include "inc.koneksidb.php";
	
	$sql = "SELECT * FROM tut_kategori ORDER BY id_kategori";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error: ".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	  $no++;
	  $sql_count = "SELECT COUNT(*) AS jum FROM tut_tutorial 
	  				WHERE id_kategori='$data[id_kategori]'";
	  $qry_count = mysql_query($sql_count, $koneksi);
	  $hsl_count = mysql_fetch_array($qry_count);
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td width="20"><?php echo $no; ?></td>
    <td width="468"><a href="TutorialDetail.php?idkat=<?= $data[id_kategori]; ?>" target="_self"> 
      <?php echo $data['kategori']." (".$hsl_count['jum'].")"; ?> </a> </td>
    <?php
  }
  ?>
</table>
</body>
</html>
