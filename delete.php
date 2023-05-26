<?php
include "home.php";

$id_db_gempita = $_GET['id'];

$query_delete = "delete from tb_anggota where no= '$id_db_gempita'";

$query_delete_ok = mysqli_query($connect,$query_delete);

if ($query_delete_ok){
	
	header("location: http://localhost/Aplikasi Karang Taruna/daftar_anggota/home.php?status=SuksesDelete");
}else{
	header("location: http://localhost/Aplikasi Karang Taruna/daftar_anggota/home.php?status=GagalDelete");
}

?>