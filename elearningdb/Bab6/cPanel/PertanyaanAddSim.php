<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtPertanyaan 	= $_REQUEST['TxtPertanyaan'];

# Validasi Form
if (trim($TxtPertanyaan)=="") {
	echo "Pertanyaan masih kosong, ulangi kembali";
	include "PertanyaanAddFm.php";
}
else {
	$sql = "INSERT INTO kuisioner (pertanyaan)
			VALUES ('$TxtPertanyaan')";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());
		  
	header('Location: PertanyaanTampil.php');
}
?>
