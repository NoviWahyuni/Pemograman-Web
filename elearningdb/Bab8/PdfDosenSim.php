<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";  
$db_data = "eLearningdb";

$koneksi = mysql_connect($db_host, $db_user, $db_pass)
			or die ("Koneksi gagal".mysql_error());
mysql_select_db($db_data, $koneksi) 
	or die ("Baca DB gagal".mysql_error());
	
# Baca variabel Form (If Register Global ON)
$TxtUid   = $_REQUEST['TxtUid'];
$TxtPass  = $_REQUEST['TxtPass'];
$TxtPass2 = $_REQUEST['TxtPass2'];
$TxtNamaA = $_REQUEST['TxtNamaA'];
$TxtNamaB = $_REQUEST['TxtNamaB'];
$TxtNidn  = $_REQUEST['Txtnidn'];
$RbKelamin= $_REQUEST['RbKelamin'];
$TxtAlamat= $_REQUEST['TxtAlamat'];

# Validasi Form
if (strlen(trim($TxtUid))<=4) {
	echo "User ID harus diisi minimal 5 digit, ulangi kembali";
	include "PdfDosen.php";
}
elseif (strlen(trim($TxtPass))<=5) {
	echo "Password harus diisi minimal 6 digit, ulangi kembali";
	include "PdfDosen.php";
}
elseif (strlen(trim($TxtPass2))<=5) {
	echo "Password 2 harus diisi minimal 6 digit, ulangi kembali";
	include "PdfDosen.php";
}
elseif (trim($TxtPass) != trim($TxtPass2)) {
	echo "Password 1 dan 2 harus sama, ulangi kembali";
	include "PdfDosen.php";
}
elseif (trim($TxtNamaA)=="") {
	echo "Nama Depan masih kosong, ulangi kembali";
	include "PdfDosen.php";
}
elseif (trim($TxtNamaB)=="") {
	echo "Nama Belakang masih kosong, ulangi kembali";
	include "PdfDosen.php";
}
elseif (trim($TxtNidn)=="") {
	echo "NIDN masih kosong, ulangi kembali";
	include "PdfDosen.php";
}
elseif (trim($TxtAlamat)=="") {
	echo "Alamat masih kosong, ulangi kembali";
	include "PdfDosen.php";
}
else {
	$TxtUid = strtolower($TxtUid);
	$sql_cek="SELECT * FROM dosen WHERE user_id='$TxtUid'";
	$qry_cek=mysql_query($sql_cek, $koneksi);
	$jum_cek=mysql_num_rows($qry_cek);
	if ($jum_cek >= 1) {
		echo "USER ID : <b>$TxtUid</b> SUDAH ADA";
		echo "<br> SLAHKAN GUNAKAN YANG LAIN";
		include "PdfDosen.php";
		exit;
	}
	
	/*$sql = "INSERT INTO dosen (user_id,user_psw,nama, nidn,
				   kelamin,alamat)
			VALUES ('$TxtUid',PASSWORD('$TxtPass'),
				   '$TxtNamaA $TxtNamaB','$TxtNidn','$RbKelamin',
				   '$TxtAlamat')";
	*/

	$sql = "INSERT INTO dosen SET 
				user_id ='$TxtUid',
				user_psw =PASSWORD('$TxtPass'),
				nama ='$TxtNamaA $TxtNamaB',
				kelamin ='$RbKelamin',
				nidn ='$TxtNidn',
				alamat ='$TxtAlamat'";
				mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
   
	echo "PROSES PENDAFTARAN SUKSES, DATA SUDAH MASUK";
}
?>
