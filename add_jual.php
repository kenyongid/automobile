<html>
<head>
<link rel="icon" 
      type="image/png" 
      href="images/icon aplikasi.png" /> 
	<title>Tambah Data Jual</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>
</head>
 
<body>
<div class ="row">
			<div class ="col-md-4 mx-auto">
				
				<div class="card text-center">
				<div class="card-header bg-info text-light">
				Form Tambah Data Jual
			</div>

			<div class="card-body">
			
			<form action="add_jual.php" method="post" name="form1">
			<div class="mb-14">
  					<div align='left'><label class="form-label"> ID Jual</label>
  					<input type="text" name="id" class="form-control"  placeholder="Masukan ID Jual">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label"> Jenis Kendaraan</label>
  					<input type="text" name="jenis" class="form-control" placeholder="Masukan Jenis Kendaraan">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Rangka</label>
  					<input type="text"  name="no_rangka"class="form-control"  placeholder="Masukan no rangka">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Jual</label>
  					<input type="text" name="no_jual" class="form-control" placeholder="Masukan no jual">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  Tanggal Jual</label>
  					<input type="date"  name="tgl_jual"class="form-control"  placeholder="Masukan tgl jual">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  Nama Pabrikan</label>
  					<input type="text" name="pabrikan" class="form-control" placeholder="Masukan Nama Pabrikan">
				</div>

				</br>
				
				</br>
			</form>
			<br>
			<div class="card-footer bg-info">
        
        </div>
    </div>
</br>
<button type="submit" name="Submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN </button>
<button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> KOSONGKAN </button>
<a href="kendaraan_terjual.php" class="btn btn-info">
        <span class="text">kembali</span>
    </a>
	<br></br>
 
	
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$jenis = $_POST['jenis'];
		$no_rangka = $_POST['no_rangka'];
		$no_jual = $_POST['no_jual'];
		$tgl_jual = $_POST['tgl_jual'];
		$pabrikan = $_POST['pabrikan'];
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO data_jual(id,jenis,no_rangka,no_jual,tgl_jual,pabrikan) VALUES('$id','$jenis','$no_rangka','$no_jual','$tgl_jual','$pabrikan')");
		
		// Show message when user added
		echo "Data Berhasil Di simpan. <a href='kendaraan_terjual.php 'class='btn btn-success'>Liat Data</a>";
	}
	?>
</body>
</html>