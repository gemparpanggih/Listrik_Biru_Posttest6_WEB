<?php
		include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/form.css">
</head>
<body>
	<div class="bekgron">
		<h2>Manajemen Pelanggan</h2>
	</div>
	<div class="gambar">
		
	</div>
	<br>
		<center>
			<input type="button" value="TAMBAH DATA" onclick="location.href='tambahpelanggan.php'">
		</center>
		<br>
		<center>
		<table border="0" cellpadding="10">
			<div class="biru">
			<tr>
				<th>NO</th>

				<th>ID PELANGGAN</th>
				<th>FOTO PROFIL</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>NAMA</th>
				<th>ID TARIF</th>
				<th>AKSI</th>
			</tr>
			</div>
			<?php
				$no=1;
				$sql="SELECT * FROM user";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[id]"; ?></td>
						<td><img src="../foto/<?php echo $data['foto']; ?>" width=200 height="200"></td>
						<td><?php echo "$data[username]"; ?></td>
						<td><?php echo "$data[password]"; ?></td>
						<td><?php echo "$data[nama]"; ?></td>
						<td><?php echo "$data[idtarif]"; ?></td>
						<td>
							<a class="edit" href="editpelanggan.php?id=<?php echo"$data[id]"; ?>">EDIT</a>
							<a class="hapus" href="hapuspelanggan.php?id=<?php echo"$data[id]"; ?>" onclick="return confirm('YAKINNN !!!')">HAPUS</a>
						</td>
					</tr>
					<?php
					$no++;
				}
			?>
		</table><br>
		<a class="tombol" href="../index.html">KEMBALI</a>
		</center>
		<div class="footer">
		Copyright By Gempar Panggih Dwi Putra &copy; 2022. All right reserved.
		</div>
</body>
</html>