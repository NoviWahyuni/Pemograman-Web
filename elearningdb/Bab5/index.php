<html>
<head>
<title>Aplikasi Kuis Online</title>
</head>
<body>
<?php 
include "inc.koneksidb.php";

$sql = "SELECT * FROM kuis ORDER BY id_kuis";
$qry = mysql_query($sql, $koneksi) 
	 or die ("SQL Error".mysql_error());
	 
if (! mysql_num_rows($qry) >=1 ) {
	echo "BELUM ADA SOAL YANG DIINPUT";
	exit;
}

echo "<form name='form1' method='post' action='JawabHasil.php'>";
while ($data=mysql_fetch_array($qry)) {
	$no++;
	echo "$no. $data[soal] <br>";  
	echo "A.<input type='radio' name='RbJawaban[$data[id_kuis]]' value='A'>";
	echo "$data[jawab_a] <br>";  
	
	echo "B.<input type='radio' name='RbJawaban[$data[id_kuis]]' value='B'>";
	echo "$data[jawab_b] <br>"; 
	
	echo "C.<input type='radio' name='RbJawaban[$data[id_kuis]]' value='C'>";
	echo "$data[jawab_c] <br>"; 
	
	echo "D.<input type='radio' name='RbJawaban[$data[id_kuis]]' value='D'>";
	echo "$data[jawab_d] <br><br>";  
}
echo "<input type='submit' name='Submit' value='Jawab'>";
echo "</form>";
?>
</body>
</html>