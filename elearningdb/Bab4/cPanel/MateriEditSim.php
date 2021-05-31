<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$CmbMatakuliah = $_REQUEST['CmbMatakuliah'];
$TxtNama 	 = $_REQUEST['TxtNama'];
$TxtJudul 	 = $_REQUEST['TxtJudul'];
$TxtDefinisi = $_REQUEST['TxtDefinisi'];
$TxtFileH	 = $_REQUEST['TxtFileH'];
$TxtIdMat	 = $_REQUEST['TxtIdMat'];

# Validasi Form
if (trim($CmbMatakuliah)=="NULL") {
	echo "Matakuliah belum dipilih, ulangi kembali";
}
elseif (trim($TxtNama)=="") {
	echo "Nama bab belum diisi, ulangi kembali";
}
elseif (trim($TxtJudul)=="") {
	echo "Judul bab belum diisi, ulangi kembali";
}
elseif (trim($TxtDefinisi)=="") {
	echo "Definisi lengkap belum diisi, ulangi kembali";
}
else {
		// Mengkopi file gambar
		$file_data = $_FILES['TxtFile']['tmp_name'];
		$file_name = $_FILES['TxtFile']['name'];
		$file_name = stripslashes($file_name);
		$file_name = str_replace("'","",$file_name);
		$new_file  = $CmbMatakuliah.".".$file_name;
		copy($file_data,"../FileMateri/".$new_file);

		if ($file_name=="") {
			$NamaFile = $TxtFileH;		
		}
		else {
			$NamaFile = $new_file;
			$file_lama="../FileMateri/".$TxtFileH;
			if(file_exists($file_lama)) {
				unlink($file_lama);
			}
		}	
		
		$sql = "UPDATE materi SET 
			  kd_matakuliah='$CmbMatakuliah',
			  bab_nama='$TxtNama',
			  bab_judul='$TxtJudul',
			  definisi='$TxtDefinisi',
			  file_data='$NamaFile',
			  tanggal=NOW()
			WHERE id_materi='$TxtIdMat'";
			
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());	  

	header("Location: MateriTampil.php?idmat=$CmbMatakuliah");
}
?>
