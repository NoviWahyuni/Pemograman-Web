<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtSoal 	= $_POST['TxtSoal'];
$TxtJawabA 	= $_POST['TxtJawabA'];
$TxtJawabB 	= $_POST['TxtJawabB'];
$TxtJawabC 	= $_POST['TxtJawabC'];
$TxtJawabD 	= $_POST['TxtJawabD'];
$CmbKunci  	= $_POST['CmbKunci'];
$TxtIdKuis 	= $_POST['TxtIdKuis'];

# Validasi Form
if (trim($TxtSoal)=="") {
	echo "Soal kuis masih kosong, ulangi kembali";
}
elseif (trim($TxtJawabA)=="") {
	echo "Jawab A masih kosong, ulangi kembali";
}
elseif (trim($TxtJawabB)=="") {
	echo "Jawab B masih kosong, ulangi kembali";
}
elseif (trim($TxtJawabC)=="") {
	echo "Jawab C masih kosong, ulangi kembali";
}
elseif (trim($TxtJawabD)=="") {
	echo "Jawab D masih kosong, ulangi kembali";
}
elseif (trim($CmbKunci)=="KOSONG") {
	echo "Kunci Jawab belum dipilih, ulangi kembali";
}
else {
	$sql = "UPDATE kuis SET 
			soal='$TxtSoal',
			jawab_a='$TxtJawabA',
			jawab_b='$TxtJawabB',
			jawab_c='$TxtJawabC',
			jawab_d='$TxtJawabD',
			kunci='$CmbKunci'
			WHERE id_kuis='$TxtIdKuis'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

	echo "Data berhasil diubah";
	include "SoalTampil.php";
}
?>
