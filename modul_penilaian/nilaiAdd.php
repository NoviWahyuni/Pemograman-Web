<?php
	include("koneksi.php");
?>

<h3>TAMBAH DATA NILAI</h3>
<br/><hr/>
<p>
	<?php
	if(!isset($_POST['submit']))
	{
	?>
	<form enctype="multipart/form-data" method="post">
		<table width="50%" border="0">
			<tr>
				<td height="50">NAMA MAHASISWA</td>
				<td>:</td>
				<td>
					<label>
						<select name="mhs">
							<option value="">-=PILIH=-</option>
							<?php
								$queryMhs = "SELECT nim,nama FROM mahasiswa";
								$resultMhs = mysqli_query($koneksi, $queryMhs);
								while($dataMhs = mysqli_fetch_array($resultMhs))
								{
									echo "<option value='$dataMhs[0]'>$dataMhs[1]</option>";
								}
							?>
						</select>
					</label>
				</td>
			</tr>
			<tr>
				<td height="50">NAMA MAHASISWA</td>
				<td>:</td>
				<td>
					<label>
						<select name="mhs">
							<option value="">-=PILIH=-</option>
							<?php
								$queryMhs = "SELECT nim,nama FROM mahasiswa";
								$resultMhs = mysqli_query($koneksi, $queryMhs);
								while($dataMhs = mysqli_fetch_array($resultMhs))
								{
									echo "<option value='$dataMhs[0]'>$dataMhs[1]</option>";
								}
							?>
						</select>
					</label>
				</td>
			</tr>
		</table>
	</form>
<?php
} else {
	$mhs = $_POST["mhs"];
	$dosen = $_POST["dosen"];
	$tugas = $_POST["tugas"];
	$uas = $_POST["uas"];

	//Input Data Nilai
	$insertNilai = "INSERT INTO nilai VALUES ('$tugas','$uts','$uas','$mhs','$dosen')";
	$queryNilai = mysqli_query($koneksi,$insertNilai);

		if($queryNilai)
		{
			echo "<script>alert('Data Nilai Berhasil Di Simpan!')</script>";
			echo "<script>window.location = 'nilaiView.php'</script>";
		} else
		{
			echo "<script>alert('Data Nilai Gagal Di Simpan!')</script>";
			echo "<script>window.location = 'nilaiView.php'</script>";
		}
	}
	?>
	<a href="nilaiView.php">&raquo;KEMBALI</a>
