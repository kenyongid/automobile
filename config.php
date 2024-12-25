<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'db_kendaraan';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>