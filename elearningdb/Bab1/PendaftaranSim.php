<?php

$koneksi = mysqli_connect("localhost","root","","eLearningdb");
	if(!$koneksi)
		die("Koneksi Gagal");
	
# Baca variabel Form (If Register Global ON)
$TxtUid   = @$_POST['TxtUid'];
$TxtPass  = @$_POST['TxtPass'];
$TxtPass2 = @$_POST['TxtPass2'];
$TxtNamaA = @$_POST['TxtNamaA'];
$TxtNamaB = @$_POST['TxtNamaB'];
$RbKelamin= @$_POST['RbKelamin'];
$TxtAlamat= @$_POST['TxtAlamat'];
$TxtEmail = @$_POST['TxtEmail'];
$TxtTelpon= @$_POST['TxtTelpon'];

# Validasi Form
if (strlen(trim($TxtUid))<=4) {
	echo "User ID harus diisi minimal 5 digit, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (strlen(trim($TxtPass))<=5) {
	echo "Password harus diisi minimal 6 digit, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (strlen(trim($TxtPass2))<=5) {
	echo "Password 2 harus diisi minimal 6 digit, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (trim($TxtPass) != trim($TxtPass2)) {
	echo "Password 1 dan 2 harus sama, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (trim($TxtNamaA)=="") {
	echo "Nama Depan masih kosong, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (trim($TxtNamaB)=="") {
	echo "Nama Belakang masih kosong, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (trim($TxtAlamat)=="") {
	echo "Alamat masih kosong, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (trim($TxtEmail)=="") {
	echo "E-Mail  masih kosong, ulangi kembali";
	include "Pendaftaran.php";
}
elseif (trim($TxtTelpon)=="") {
	echo "Telpon  masih kosong, ulangi kembali";
	include "Pendaftaran.php";
}
else {
	$TxtUid = strtolower($TxtUid);
	$querycek="SELECT * FROM anggota WHERE user_id='$TxtUid'";
	$resultcek=mysql_query($koneksi, $querycek);
	$countcek=mysql_num_rows($resultcek);
	if ($countcek >= 1) {
		echo "USER ID : <b>$TxtUid</b> SUDAH ADA";
		echo "<br> SLAHKAN GUNAKAN YANG LAIN";
		include "Pendaftaran.php";
		exit;
	}
	
	/*$sql = "INSERT INTO anggota (user_id,user_psw,nama,
				   kelamin,alamat,email,telpon,tgl_daftar)
			VALUES ('$TxtUid',PASSWORD('$TxtPass'),
				   '$TxtNamaA $TxtNamaB','$RbKelamin',
				   '$TxtAlamat','$TxtEmail','$TxtTelpon',NOW())";
	*/

	$sql = "INSERT INTO anggota SET 
				user_id ='$TxtUid',
				user_psw =PASSWORD('$TxtPass'),
				nama ='$TxtNamaA $TxtNamaB',
				kelamin ='$RbKelamin',
				alamat ='$TxtAlamat',
				email ='$TxtEmail',
				telpon ='$TxtTelpon',
				foto ='',
				profil ='',
				tgl_daftar =NOW()";
	mysqli_query($koneksi, $sql) 
		  or die ("SQL Error: ".mysql_error());
   
	echo "PROSES PENDAFTARAN SUKSES, DATA SUDAH MASUK";
}
?>
