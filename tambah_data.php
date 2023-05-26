<head>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center"><b>TAMBAH DATA ANGGOTA</b></h3>

	<a class="btn btn-primary" href="home.php" role="button">Kembali</a>

	<form action="proses-tambah.php" method="post">
		<div class="form-group">
		<label for="id">ID</label>
			<input type="text" class="form-control" name="id" id="id">
		</div>

		<div class="form-group">
		<label for="nama_anggota">Nama Anggota</label>
			<input type="text" class="form-control" name="nama_anggota" id="nama_anggota">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
		</div>

		<div class="form-group">
		<label for="no_telp">No Telp</label>
			<input type="text" class="form-control" name="no_telp" id="no_telp">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>

</div>
</div>
</body>

