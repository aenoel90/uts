<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
	<link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body Style="background: url(img/unig.jpg) no-repeat fixed; background-size: 100% 100%;">
	<div class="kotak">
		<p class="note">Tambah data mahasiswa baru</p>
		<form action="tambah_aksi.php" method="post" onSubmit="return validasi()">
			<input type="text" name="NIM" class="form_in" placeholder="NIM" id="NIM">

            <input type="text" name="Nama" class="form_in" placeholder="Nama" id="Nama">

			<select name=jk>
				<option value="Jenis kelamin">Jenis kelamin</option>
				<option value="Laki - laki">Laki - laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>

            <select name=Jurusan>
				<option value="Jurusan">Jurusan</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Phisika">Phisika</option>
			</select>
            
			<input type="text" name="Alamat" class="form_in" placeholder="Alamat" id="Alamat">
			
			<input type="text" name="NoHp" class="form_in" placeholder="No Hp" id="NoHp">
 
			<input type="submit" class="tombol" value="TAMBAH">
			<br/>
            <p class="kembali"onclick="history.back(-1)">Kembali</p>
			<br/>
		</form>
	</div>
</body>
</html>