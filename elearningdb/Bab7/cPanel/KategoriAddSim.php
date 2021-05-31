<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtKategori 	= $_REQUEST['TxtKategori'];

# Validasi Form
if (trim($TxtKategori)=="") {
	echo "Kategori masih kosong, ulangi kembali";
	include "KategoriAddFm.php";
}
else {
	$sql = "INSERT INTO tut_kategori (kategori)
			VALUES ('$TxtKategori')";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
		  
	header('Location: KategoriTampil.php');
}
?>
