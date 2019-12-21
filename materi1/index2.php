<?php 
// koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari mysql
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data(fetch) dari mahasiswa
while ($mhs = mysqli_fetch_assoc($result)) {
	var_dump($mhs);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Table Mahasiswa</h1>
	<table border="2" cellpadding="10" cellspacing="0">
		<tr>
			<th>No. </th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>		
		<tr>
			<td>1</td>
			<td>
				<a href="">Edit</a> |
				<a href="">Hapus</a>
			</td>
		</tr>
	</table>
</body>
</html>