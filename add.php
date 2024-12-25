<html>
<head>
<link rel="icon" 
      type="image/png" 
      href="images/icon aplikasi.png" /> 
	<title>Tambah Data</title>
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
				Form Tambah Data Kendaraan
			</div>

			<div class="card-body">
			
			<form action="add.php" method="post" name="form1">
			<div class="mb-14">
  					<div align='left'><label class="form-label"> ID Mobil</label>
  					<input type="text" name="id" class="form-control"  placeholder="Masukan ID Mobil">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label"> Nama Mobil</label>
  					<input type="text" name="nama" class="form-control"  placeholder="Masukan Nama Mobil">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label"> Jenis Mobil</label>
  					<input type="text" name="jenis" class="form-control" placeholder="Masukan Jenis Mobil">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Rangka</label>
  					<input type="text"  name="no_rangka"class="form-control"  placeholder="Masukan no rangka">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  No Mesin</label>
  					<input type="text" name="no_mesin" class="form-control" placeholder="Masukan no mesin">
				</div>

				<div class="mb-14">
  					<div align='left'><label class="form-label">  Tanggal Produksi</label>
  					<input type="date"  name="tgl_produksi"class="form-control"  placeholder="Masukan tgl produksi">
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
<a href="mobil.php" class="btn btn-info">
        <span class="text">kembali</span>
    </a>
	<br></br>
 
	
	
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
		$result = mysqli_query($conn, "INSERT INTO data_mobil(id,nama,jenis,no_rangka,no_mesin,tgl_produksi,pabrikan) VALUES('$id','$nama','$jenis','$no_rangka','$no_mesin','$tgl_produksi','$pabrikan')");
		
		// Show message when user added
		echo "Data Berhasil Di simpan. <a href='mobil.php 'class='btn btn-success'>Liat Data</a>";
	}
	?>
</body>
</html>