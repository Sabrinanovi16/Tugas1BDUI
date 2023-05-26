<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDIT DATA ANGGOTA</title>



	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">Edit Data Anggota</h3>
	<a class="btn btn-primary" href="home.php" role="button">Kembali</a>

<?php



$id_db_gempita = $_GET['id'];

	$query_nilai ="select * from tb_anggota where no='$id_db_gempita'";
	$query_nilai_ok = mysqli_query($connect, $query_nilai);
	if (!$query_nilai_ok){
		printf("eror: %s\n",mysqli_error($connect));
		exit();
	}

	while ($query_result = mysqli_fetch_array($query_nilai_ok))
	
	{ 

	$id_ok = $query_result['id'];
	$nama_anggota_ok = $query_result['nama_anggota'];
	$jabatan_ok = $query_result['jabatan'];
	$tgl_masuk_ok = $query_result['tgl_masuk'];
	$no_telp_ok = $query_result['no_telp'];


?>

	<form method="POST" action="">
		<div class="form-group">
		<label for="id">ID</label>
			<input type="text" class="form-control" name="id" id="id_ok" value="<?php echo $id_ok;?>">
		</div>

		<div class="form-group">
		<label for="nama_anggota">Nama Anggota</label>
			<input type="text" class="form-control" name="nama_anggota" id="nama_anggota_ok" value="<?php echo $nama_anggota_ok;?>">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan_ok" value="<?php echo $jabatan_ok;?>">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk_ok" value="<?php echo $tgl_masuk_ok;?>">
		</div>

		<div class="form-group">
		<label for="no_telp">No Telp</label>
			<input type="text" class="form-control" name="no_telp" id="no_telp_ok" value="<?php echo $no_telp_ok;?>">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>

</div>
</div>

<?php
}

?>

<?php
if (isset($_POST['id'])){

$id				= $_POST['id'];
$nama_anggota	= $_POST['nama_anggota'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$no_telp		= $_POST['no_telp'];



$query_update= "
update tb_anggota
set

	id	 			= '$id',
	nama_anggota 	= '$nama_anggota',
	jabatan 		= '$jabatan',
	tgl_masuk 		= '$tgl_masuk',
	no_telp 		= '$no_telp'

	where no ='$id_db_gempita'
	";

$query_update_ok = mysqli_query($connect, $query_update);
	
if ($query_update_ok){

	header("location: http://localhost/Aplikasi Karang Taruna/daftar_anggota/home.php?status=SuksesUpdate");
}else{

	header("location: http://localhost/Aplikasi Karang Taruna/daftar_anggota/home.php?status=GagalUpdate");

}

}
else{
}
?>

</body>

</html>