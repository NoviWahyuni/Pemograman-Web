<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtMatakuliah = $_REQUEST['TxtMatakuliah'];
$TxtKodeH  	   = $_REQUEST['TxtKodeH'];
# Validasi Form
if (trim($TxtMatakuliah)=="") {
	echo "Matakuliah masih kosong, ulangi kembali";
}
else {
	$sql = "UPDATE matakuliah SET nm_matakuliah='$TxtMatakuliah'
			WHERE kd_matakuliah='$TxtKodeH'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
		  
	echo "DATA MATAKULIAH TELAH DIPERBARUI";
	include "MatakuliahTampil.php";
}
?>
