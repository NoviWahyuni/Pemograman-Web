<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$CmbKategori = $_REQUEST['CmbKategori'];
$TxtJudul 	 = $_REQUEST['TxtJudul'];
$TxtLengkap  = $_REQUEST['TxtLengkap'];

# Validasi Form
if (trim($CmbKategori)=="NULL") {
	echo "Kategori belum dipilih, ulangi kembali";
	include "TutorialAddFm.php";
}
elseif (trim($TxtJudul)=="") {
	echo "Judul kategori belum diisi, ulangi kembali";
	include "TutorialAddFm.php";
}
elseif (trim($TxtLengkap)=="") {
	echo "Tutorial lengkap belum diisi, ulangi kembali";
	include "TutorialAddFm.php";
}
else {
	$sql = "INSERT INTO tut_tutorial (id_kategori,judul,lengkap,tgl_masuk)
			VALUES ('$CmbKategori','$TxtJudul','$TxtLengkap',CURDATE())";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
		  
	header('Location: TutorialTampil.php');
}
?>
