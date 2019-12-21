<?php 
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
		<?php 
			$no=1;
			foreach ($mahasiswa as $row){?>
			<tr>
			<td><center> <?php echo $no;$no++; ?></td>
			<td>
				<a href="">Edit</a> |
				<a href="">Hapus</a>
			</td>
			<td>
				<img src="<?php echo $row["gambar"]; ?>" width=50>
			</td>
			<td> <?php echo $row["nrp"]; ?></td>
			<td> <?php echo $row["nama"]; ?></td>
			<td> <?php echo $row["email"]; ?></td>
			<td> <?php echo $row["jurusan"]; ?></td>
		</tr>	
			
		<?php }?>
	</table>
</body>
</html>