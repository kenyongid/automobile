<html>
<head>
	<title>Tambah Pengguna</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
 
<body>
	<a href="mobil.php">kembali</a>
	<br/><br/>
 
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr> 
				<td>no_rangka</td>
				<td><input type="text" name="no_rangka"></td>
			</tr>
			<tr> 
				<td>no_mesin</td>
				<td><input type="text" name="no_mesin"></td>
			<tr> 
				<td>tgl_produksi</td>
				<td><input type="date" name="tgl_produksi"></td>
			</tr>
			<tr> 
				<td>pabrikan</td>
				<td><input type="text" name="pabrikan"></td>
			</tr>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		$no_rangka = $_POST['no_rangka'];
		$no_mesin = $_POST['no_mesin'];
		$tgl_produksi = $_POST['tgl_produksi'];
		$pabrikan = $_POST['pabrikan'];
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO data_kendaraan(id,nama,jenis,no_rangka,no_mesin,tgl_produksi,pabrikan) VALUES('$id','$nama','$jenis','$no_rangka','$no_mesin','$tgl_produksi','$pabrikan')");
		
		// Show message when user added
		echo "User added successfully. <a href='mobil.php'>View Users</a>";
	}
	?>
</body>
</html>