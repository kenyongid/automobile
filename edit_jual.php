<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
		$id = $_POST['id'];
		$jenis = $_POST['jenis'];
		$no_rangka = $_POST['no_rangka'];
		$no_jual = $_POST['no_jual'];
		$tgl_jual = $_POST['tgl_jual'];
		$pabrikan = $_POST['pabrikan'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE data_jual SET jenis='$jenis',no_rangka='$no_rangka',no_jual='$no_jual',tgl_jual='$tgl_jual',pabrikan='$pabrikan' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: kendaraan_terjual.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM data_jual WHERE id=$id");
 
while($data_jual = mysqli_fetch_array($result))
{

		$jenis = $data_jual['jenis'];
		$no_rangka = $data_jual['no_rangka'];
		$no_jual = $data_jual['no_jual'];
		$tgl_jual = $data_jual['tgl_jual'];
		$pabrikan = $data_jual['pabrikan'];
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
				Form Edit Data Jual
			</div>

			<div class="card-body">
			
			<form action="edit_jual.php" method="post" name="update_data">
			<div class="mb-14">
  					
				<div class="mb-14">
  					<div align='left'><label class="form-label"> Jenis Kendaraan</label>
  					<input type="text" name="jenis" value=<?php echo $jenis;?> class="form-control" placeholder="Masukan Jenis Kendaraan">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Rangka</label>
  					<input type="text"  name="no_rangka" value=<?php echo $no_rangka;?> class="form-control"  placeholder="Masukan no rangka">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Jual</label>
  					<input type="text" name="no_jual" value=<?php echo $no_jual;?> class="form-control" placeholder="Masukan no Jual">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  Tanggal Jual</label>
  					<input type="date"  name="tgl_jual" value=<?php echo $tgl_jual;?> class="form-control"  placeholder="Masukan tgl jual">
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
	<a href="kendaraan_terjual.php" class="btn btn-info">
        <span class="text">kembali</span>
    </a>
	

</body>
</html>
