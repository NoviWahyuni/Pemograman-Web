<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtPertanyaan 	= $_REQUEST['TxtPertanyaan'];
$TxtIdKuis 		= $_REQUEST['TxtIdKuis'];

# Validasi Form
if (trim($TxtPertanyaan)=="") {
	echo "Pertanyaan masih kosong, ulangi kembali";
}
else {
	$sql = "UPDATE kuisioner SET pertanyaan='$TxtPertanyaan'
			WHERE id_kuis='$TxtIdKuis'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

	echo "Data berhasil diubah";
	include "PertanyaanTampil.php";
}
?>
