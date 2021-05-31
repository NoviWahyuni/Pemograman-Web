<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$CmbKategori = $_REQUEST['CmbKategori'];
$TxtJudul 	 = $_REQUEST['TxtJudul'];
$TxtLengkap  = $_REQUEST['TxtLengkap'];
$TxtIdTut    = $_REQUEST['TxtIdTut'];

# Validasi Form
if (trim($CmbKategori)=="NULL") {
	echo "Kategori belum dipilih, ulangi kembali";
}
elseif (trim($TxtJudul)=="") {
	echo "Judul kategori belum diisi, ulangi kembali";
}
elseif (trim($TxtLengkap)=="") {
	echo "Tutorial lengkap belum diisi, ulangi kembali";
}
else {
	$sql = "UPDATE tut_tutorial SET 
			id_kategori='$CmbKategori',
			judul='$TxtJudul',
			lengkap='$TxtLengkap',
			tgl_masuk=NOW()
			WHERE id_tutorial='$TxtIdTut'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
		  
	header('Location: TutorialTampil.php');
}
?>
