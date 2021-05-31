<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtKategori = $_REQUEST['TxtKategori'];
$TxtIdKat  	 = $_REQUEST['TxtIdKat'];
# Validasi Form
if (trim($TxtKategori)=="") {
	echo "Kategori masih kosong, ulangi kembali";
}
else {
	$sql = "UPDATE tut_kategori SET kategori='$TxtKategori'
			WHERE id_kategori='$TxtIdKat'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
		  
	header('Location: KategoriTampil.php');
}
?>
