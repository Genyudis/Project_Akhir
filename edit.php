<!DOCTYPE html>
<html>

<head>
	<title>Edit Data</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<body>
	<div class="container col-md-6 mt-4 ">
		<h1>Absen Siswa</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Absen Siswa
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id'];

				$data = mysqli_query($koneksi, "select * from db_absen where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>nis</label>
						<input type="text" name="nis" class="form-control" value="<?= $row['nis']; ?>">
					</div>

					<div class="form-group">
						<label>rayon</label>
						<textarea class="form-control" name="rayon"><?= $row['rayon']; ?></textarea>
					</div>

					<div class="form-group">
						<label>rombel </label>
						<input type="text" name="rombel" class="form-control" value="<?= $row['rombel']; ?>">
					</div>
					<div class="form-group">
						<label>keterangan </label>
						<input type="text" name="keterangan" class="form-control" value="<?= $row['keterangan']; ?>">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$nis = $_POST['nis'];
					$rayon = $_POST['rayon'];
					$rombel = $_POST['rombel'];
					$keterangan = $_POST['keterangan'];

					mysqli_query($koneksi, "update db_absen set nama='$nama', nis='$nis', rayon='$rayon',rombel='$rombel', keterangan='$keterangan' where id ='$id'") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil diupdate.');window.location='box.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>