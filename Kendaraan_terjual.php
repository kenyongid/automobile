<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM data_jual ORDER BY id DESC");	
?>
 
<html>
<head>    
<link rel="icon" 
      type="image/png" 
      href="images/icon aplikasi.png" /> 
    <title>Jual</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

</head>

 
<body class="bg-gradient-primary">
    <div class ="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="mobil.php">Auto mobile</a>
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
          <a class="nav-link" href="mobil.php">Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="motor.php">Motor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kendaraan_terjual.php"> Data Kendaraan Terjual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_motor.php">Tambah Data Motor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<td colspan=3><marquee><behavior=altenate><h1><span style="color :#191970;">Data Kendaraan Terjual</span></h1></marquee></td><p>
<tbody>
   <div class ="row">
        <div class ="col-md-8 mx-auto">
            
            <div class="card text-center">
            <div class="card-header bg-info text-light">
            Form Data Kendaraan Terjual
        </div>
    
        
        <table class="table table-success table-hover">
 
    <tr>
        <th>id_kendaraan</th> <th>jenis</th> <th>no_rangka</th> <th>no_jual</th> <th>tgl_jual</th> <th>pabrikan</th> <th>Update</th> 
    </tr>
    <?php  
    while($data_jual = mysqli_fetch_array($result)) {     
        echo "<tr>";
        echo "<td>".$data_jual['id']."</td>";
        echo "<td>".$data_jual['jenis']."</td>";  
		echo "<td>".$data_jual['no_rangka']."</td>";  
		echo "<td>".$data_jual['no_jual']."</td>";
		echo "<td>".$data_jual['tgl_jual']."</td>";
		echo "<td>".$data_jual['pabrikan']."</td>";  
		
		
        echo "<td>
        <a href='edit_jual.php?id=$data_jual[id]'class='btn btn-warning' class='fa fa-pen'> Edit</a> | 
        <a href='delete_jual.php?id=$data_jual[id]'class='btn btn-danger' class='fa fa-trash'>Delete</a>
        </td></tr>";        
    }
    ?>
	 
    </table>
    <div class="card-footer bg-info">
        
        </div>
    </div>
      
</br>

</body>
</html>