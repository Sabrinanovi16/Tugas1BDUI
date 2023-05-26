<?php
include "../koneksi.php";
?>

<?php

$id		    	= $_POST['id'];
$nama_anggota	= $_POST['nama_anggota'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$no_telp		= $_POST['no_telp'];

$query_insert= "INSERT INTO tb_anggota
            (id,nama_anggota,jabatan,tgl_masuk,no_telp)VALUES ('$id',
        '$nama_anggota',
        '$jabatan',
        '$tgl_masuk',
        '$no_telp')";


$query_insert_ok =mysqli_query($connect,$query_insert);


if ($query_insert_ok){
	
	header("location:home.php?pesan=SuksesTambah");
}else{
	header("location:home.php?pesan=GagalTambah");
}

?> 