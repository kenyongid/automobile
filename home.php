<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database

?>
 
<html>
<head>    
<link rel="icon" 
      type="image/png" 
      href="images/icon aplikasi.png" /> 
    <title>Homepage</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

</head>

 
<body class="bg-gradient-primary">
    <div class ="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Auto Mobile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Tambah Data Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_motor.php">Tambah Data Motor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_jual.php">Tambah Data Jual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kendaraan_terjual.php">Data Kendaraan Terjual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<td colspan=3><marquee><behavior=altenate><h1><span style="color :#00FFFF;">Selamat Datang</span></h1></marquee></td><p>
<tbody>
    
   <div class ="row">
        <div class ="col-md-8 mx-auto">
            
            <div class="card text-center">
            <div class="card-header bg-info text-light">
            Form Data Kendaraan
        </div>
    
        
        <table class="table table-success table-hover">
 
        <div class="service_container">
        <div class="row align-items-start">
        <div class=" col">
          <img src="images/mobil.jpg"  alt="Responsive image" class="img-thumbnail">
          <h6 class="visible_heading">
          <p class="text-warning bg-dark"> Mobil
          <a href="mobil.php">
              <img src="images/link.png" alt="Responsive image">
            </a>
          </h6>
        </div>
        <div class=" col">
          <img src="images/motor.jpg"  alt="Responsive image" class="img-thumbnail">
          <h6 class="visible_heading">
          <p class="text-warning bg-dark"> Motor
          <a href="motor.php">
          <img src="images/link.png" alt="Responsive image">
          </h6>
        </div>
        </div>
	 
    </table>
    <div class="card-footer bg-info">
        
        </div>
    </div>
      
</br>

</body>
</html>