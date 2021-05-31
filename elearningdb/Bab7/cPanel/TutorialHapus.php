<?php
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idhapus = $_REQUEST['idhapus'];
	
$sql = "DELETE FROM tut_tutorial WHERE id_tutorial='$idhapus'";
mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());

echo "Data berhasil dihapus";
include "TutorialTampil.php";
?>
