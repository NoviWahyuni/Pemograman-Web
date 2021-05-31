<?php 
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idhapus = $_GET['idhapus'];
	
$sql = "DELETE FROM kuis	WHERE id_kuis='$idhapus'";
mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

echo "Data berhasil dihapus";
include "SoalTampil.php";
?>
