<!DOCTYPE html>
<html>
<head>
	<title>Universitas Gajah Yana Malang</title>
	<link rel="stylesheet" href="CSS/indexStyle.css" type="text/css">

	<link rel="stylesheet" type="text/css" href="
	https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
	
	<link rel="stylesheet" type="text/css" href="
	https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
</head>
<body>
	</br>
	<h2><center>Data Mahasiswa UNIGA</center></h2>
	<center>
	<div class="kotak">
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1" class="table table-striped table-bordered">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from MHS");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIM']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['JK']; ?></td>
				<td><?php echo $d['Jurusan']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['NoHp']; ?></td>
				<td>
					<a href="edit.php?NIM=<?php echo $d['NIM']; ?>">EDIT</a>
					<a href="hapus.php?NIM=<?php echo $d['NIM']; ?>" onclick="return confirm('are you sure?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	</center>
	<script type="text/javascript" src="
	https://code.jquery.com/jquery-3.5.1.js"></script>

	<script type="text/javascript" src="
	https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	
	<script type="text/javascript" src="
	https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>