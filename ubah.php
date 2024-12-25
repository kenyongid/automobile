<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		$no_rangka = $_POST['no_rangka'];
		$no_mesin = $_POST['no_mesin'];
		$tgl_produksi = $_POST['tgl_produksi'];
		$pabrikan = $_POST['pabrikan'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE data_kendaraan SET nama='$nama',jenis='$jenis',no_rangka='$no_rangka',no_mesin='$no_mesin',tgl_produksi='$tgl_produksi',pabrikan='$pabrikan' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: mobil.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_kendaraan WHERE id=$id");
 
while($data_kendaraan = mysqli_fetch_array($result))
{
		$nama = $data_kendaraan['nama'];
		$jenis = $data_kendaraan['jenis'];
		$no_rangka = $data_kendaraan['no_rangka'];
		$no_mesin = $data_kendaraan['no_mesin'];
		$tgl_produksi = $data_kendaraan['tgl_produksi'];
		$pabrikan = $data_kendaraan['pabrikan'];
}
?>
<html>
<head>	
	<title>Edit  Data</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

 
<body>
	<br>
<a href="mobil.php" class="w3-button w3-white w3-border w3-border-red w3-round-large">
        <span class="text">kembali</span>
    </a>
	<br/><br/>
	
	<form name="update_data" method="post" action="ubah.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>jenis</td>
				<td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
			</tr>
			<tr> 
				<td>no_rangka</td>
				<td><input type="text" name="no_rangka" value=<?php echo $no_rangka;?>></td>
			</tr>
			<tr> 
				<td>no_mesin</td>
				<td><input type="text" name="no_mesin" value=<?php echo $no_mesin;?>></td>
			</tr>
			<tr> 
				<td>tgl_produksi</td>
				<td><input type="date" name="tgl_produksi" value=<?php echo $tgl_produksi;?>></td>
			</tr>
			<tr> 
				<td>pabrikan</td>
				<td><input type="text" name="pabrikan" value=<?php echo $pabrikan;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
