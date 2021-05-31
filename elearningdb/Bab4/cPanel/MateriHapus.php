<?php
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$idhapus = $_REQUEST['idhapus'];

$sql = "SELECT * FROM materi WHERE id_materi='$idhapus'";
$qry = mysql_query($sql, $koneksi);
$data= mysql_fetch_array($qry);
$file_materi="../FileMateri/".$data['file_data'];
if(file_exists($file_materi)) {
	unlink($file_materi);
}
	
$sql_del = "DELETE FROM materi WHERE id_materi='$idhapus'";
mysql_query($sql_del, $koneksi) 
		  or die ("SQL Error: ".mysql_error());

header("Location: MateriTampil.php?kdmat=$data[kd_matakuliah]");
?>
