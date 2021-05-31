<?php 
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtSoal 	= $_REQUEST['TxtSoal'];
$TxtJawabA 	= $_REQUEST['TxtJawabA'];
$TxtJawabB 	= $_REQUEST['TxtJawabB'];
$TxtJawabC 	= $_REQUEST['TxtJawabC'];
$TxtJawabD 	= $_REQUEST['TxtJawabD'];
$CmbKunci  	= $_REQUEST['CmbKunci'];

# Validasi Form
if (trim($TxtSoal)=="") {
	echo "Soal kuis masih kosong, ulangi kembali";
	include "SoalAddFm.php";
}
elseif (trim($TxtJawabA)=="") {
	echo "Jawab A masih kosong, ulangi kembali";
	include "SoalAddFm.php";
}
elseif (trim($TxtJawabB)=="") {
	echo "Jawab B masih kosong, ulangi kembali";
	include "SoalAddFm.php";
}
elseif (trim($TxtJawabC)=="") {
	echo "Jawab C masih kosong, ulangi kembali";
	include "SoalAddFm.php";
}
elseif (trim($TxtJawabD)=="") {
	echo "Jawab D masih kosong, ulangi kembali";
	include "SoalAddFm.php";
}
elseif (trim($CmbKunci)=="KOSONG") {
	echo "Kunci Jawab belum dipilih, ulangi kembali";
	include "SoalAddFm.php";
}
else {
	$sql = "INSERT INTO kuis SET 
			soal='$TxtSoal',
			jawab_a='$TxtJawabA',
			jawab_b='$TxtJawabB',
			jawab_c='$TxtJawabC',
			jawab_d='$TxtJawabD',
			kunci='$CmbKunci'";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

	$pesan= "Data berhasil disimpan";
	header("Location: SoalAddFm.php?pesan=$pesan");
}
?>
