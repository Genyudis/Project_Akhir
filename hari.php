<!DOCTYPE html>
<html>

<head>
	<title>Input Absen</title>
</head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Absen Siswa</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Absensi
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>nis</label>
						<input type="number" name="nis" class="form-control">
					</div>

					<div class="form-group">
						<label>rayon</label>
						<input class="form-control" name="rayon"></input>
					</div>

					<div class="form-group">
						<label>rombel</label>
						<input class="form-control" name="rombel"></input>
					</div>
					<div class="form-group">
						<label>keterangan</label>
						<input class="form-control" name="keterangan"></input>
					</div>
					<button type="submit" class="btn btn-primary mt-4" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				if (isset($_POST['submit'])) {

					$nama = $_POST['nama'];
					$nis = $_POST['nis'];
					$rayon = $_POST['rayon'];
					$rombel = $_POST['rombel'];
					$keterangam = $_POST['keterangam'];

					$datas = mysqli_query($koneksi, "insert into db_absen (nama,nis,rayon,rombel,keterangan)values('$nama', '$nis', '$rayon', '$rombel', '$keterangan')") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>