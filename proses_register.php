<?php
require 'config.php';
$npm            =$_POST["npm"];
$nama           =$_POST["nama"];
$password       =$_POST["password"];

$query_sql ="INSERT INTO user (npm,nama,password) VALUES('$npm', '$nama','$password')";



if (mysqli_query($conn, $query_sql)) {
    header("Location: login.php");
} else {
    echo "register gagal : " . mysqli_error($conn);
}
?>