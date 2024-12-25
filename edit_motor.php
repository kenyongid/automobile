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
	$result = mysqli_query($conn, "UPDATE data_motor SET nama='$nama',jenis='$jenis',no_rangka='$no_rangka',no_mesin='$no_mesin',tgl_produksi='$tgl_produksi',pabrikan='$pabrikan' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: motor.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM data_motor WHERE id=$id");
 
while($data_motor = mysqli_fetch_array($result))
{
		$nama = $data_motor['nama'];
		$jenis = $data_motor['jenis'];
		$no_rangka = $data_motor['no_rangka'];
		$no_mesin = $data_motor['no_mesin'];
		$tgl_produksi = $data_motor['tgl_produksi'];
		$pabrikan = $data_motor['pabrikan'];
}
?>
<html>
<head>	
<link rel="icon" 
      type="image/png" 
      href="images/icon aplikasi.png" /> 
	<title>Edit  Data</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>
</head>

 
<body>
	<br>
	<div class ="row">
			<div class ="col-md-4 mx-auto">
				
				<div class="card text-center">
				<div class="card-header bg-info text-light">
				Form Edit Data Motor
			</div>

			<div class="card-body">
			
			<form action="edit_motor.php" method="post" name="update_data">
			<div class="mb-14">
  					
				<div class="mb-14">
  					<div align='left'><label class="form-label"> Nama motor</label>
  					<input type="text" name="nama" value=<?php echo $nama;?> class="form-control"  placeholder="Masukan Nama Motor">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label"> Jenis Motor</label>
  					<input type="text" name="jenis" value=<?php echo $jenis;?> class="form-control" placeholder="Masukan Jenis Motor">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Rangka</label>
  					<input type="text"  name="no_rangka" value=<?php echo $no_rangka;?> class="form-control"  placeholder="Masukan no rangka">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Mesin</label>
  					<input type="text" name="no_mesin" value=<?php echo $no_mesin;?> class="form-control" placeholder="Masukan no mesin">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  Tanggal Produksi</label>
  					<input type="date"  name="tgl_produksi" value=<?php echo $tgl_produksi;?> class="form-control"  placeholder="Masukan tgl produksi">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  Nama Pabrikan</label>
  					<input type="text" name="pabrikan" value=<?php echo $pabrikan;?> class="form-control" placeholder="Masukan Nama Pabrikan">
				</div>

				</br>
				
				</br>
			</form>
			<br>
			<div class="card-footer bg-info">
        
        </div>
    </div>
	<br/>
	<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
	<button type="submit" name="update" class="btn btn-warning"><i class="fa fa-save"></i> Edit </button>
	<a href="motor.php" class="btn btn-info">
        <span class="text">kembali</span>
    </a>
	

</body>
</html>
