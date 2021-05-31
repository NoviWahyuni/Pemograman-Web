<?php
include "inc.koneksidb.php";

$RbJawab = $_REQUEST['RbJawab'];
if (count($RbJawab)==0) {
	echo "Belum ada yang dipilih, silahkan ulangi";
	exit;
}	
else {
	foreach ($RbJawab as $indeks=>$nilai) {
		//echo "Indeks = $indeks : $nilai <br>";
		if ($nilai=="A") {
			$sql_add ="nilai_a= nilai_a + 1 ";
		}
		elseif ($nilai=="B") {
			$sql_add ="nilai_b= nilai_b + 1 ";
		}
		elseif ($nilai=="C") {
			$sql_add ="nilai_c= nilai_c + 1 ";
		}
		elseif ($nilai=="D") {
			$sql_add ="nilai_d= nilai_d + 1 ";
		}
		else{
			$sql_add ="nilai_e= nilai_e + 1 ";
		}
		
		$sql  = "UPDATE kuisioner SET ";
		$sql .= $sql_add;
		$sql .=	" WHERE id_kuis='$indeks'";
		
		mysql_query($sql, $koneksi) or die ("SQL Error: ".mysql_error());
	}
}
header('Location: sukses.htm');
echo "Trimakasih boss, data sudah disimpan";
?> 