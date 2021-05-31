<?php
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$kdhapus = $_REQUEST['kdhapus'];
	
$sql = "DELETE FROM matakuliah WHERE kd_matakuliah='$kdhapus'";
mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

echo "Data berhasil dihapus";
include "MatakuliahTampil.php";
?>
