<?php
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idhapus = $_REQUEST['idhapus'];
	
$sql = "DELETE FROM tut_kategori WHERE id_kategori='$idhapus'";
mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

echo "Data berhasil dihapus";
include "KategoriTampil.php";
?>
