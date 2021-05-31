<html>
<head>
<title>Hasil jawaban kuis</title>
</head>
<body>
<?php 
include "inc.koneksidb.php";
$RbJawaban = $_REQUEST['RbJawaban'];

if (! count($RbJawaban) >=1) {
	echo "<b>ANDA BELUM MEMILIH JAWABAN</b>";
	include "index.php";
	exit;
}

$benar = 0;
foreach($RbJawaban as $indeks=>$nilai) {
	$sql = "SELECT * FROM kuis WHERE id_kuis='$indeks'";
	$qry = mysql_query($sql, $koneksi);
	$data=mysql_fetch_array($qry);
	
	if ($data['kunci'] == $nilai) {
		$benar = $benar + 1;
	}
}

$sql_jum = "SELECT COUNT(*) FROM kuis";
$qry_jum = mysql_query($sql_jum, $koneksi);
$data_jum= mysql_fetch_row($qry_jum);
  $jumlah= $data_jum[0];
  $salah = $jumlah - $benar;
  $persen_benar = round(($benar/$jumlah)*100,2);
  $persen_salah = round(($salah/$jumlah)*100,2);

echo "<h3> Hasil Kuis : </h3> ";
echo "Jumlah Benar : $benar ($persen_benar %)";
echo "<br> Jumlah salah : $salah ($persen_salah %)";
?>
</body>
</html>