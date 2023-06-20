<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

 <style>
	body{
		background-color: #1F6E8C;
	}
</style>

<body>
	<div class="content" style=" background-color: white;box-shadow:2px 4px 2px 4px rgba(0,0,0,0.8); margin: 100px;">

		<div class="container col-md-13 mt-4 ">
			<h1 class="text-center">Daftar Absen Siswa</h1>
			<div class="card">
				<div class="card-header bg " style="background-color: yellow">
					<a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
					<a href="index.php" class="btn btn-sm btn-primary float-right">back</a>
				</div>
				<div class="card-body">
					<table class="table table-bordered bg-blue">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Nis</th>
								<th>Rayon</th>
								<th>Rombel</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include('koneksi.php'); 
								$datas = mysqli_query($koneksi, "SELECT * FROM db_absen") 
								or die(mysqli_error($koneksi));
								$no = 1;
								while($row = mysqli_fetch_assoc($datas)) {
							?>	
						<tr>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $row['nama'];?></td>
							<td><?= $row['nis']; ?></td>
							<td><?= $row['rayon']; ?></td>
							<td><?= $row['rombel']; ?></td>
							<td><?= $row['keterangan']; ?></td>
							<td>
	
									<a href="edit.php?id=<?= $row['id']?>" class="btn btn-outline-primary">edit</a>
									<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
							</td>
						</tr>
	
							<?php $no++; } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>