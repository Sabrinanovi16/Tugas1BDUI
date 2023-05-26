<?php

session_start();

include 'koneksi.php';

$id	= $_POST['id'];
$password	= $_POST['password'];

$data	= mysqli_query($connect,"select * from tb_user where id='$id' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){

	$row = mysqli_fetch_assoc($data);
	$_SESSION['id'] = $id;
	$_SESSION['level'] = $row['nama_anggota'];
	$_SESSION['status'] = "login";

	if($row['level']=="1"){
		header("location:daftar_anggota/home.php");
	}else{
		header("location:daftar_anggota/home.php");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>