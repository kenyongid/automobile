<?php
session_start();
require 'config.php';
?>

<?php
    if(isset($_POST['npm'])) {
        $npm            = $_POST['npm'];
        $password       = $_POST['password'];
        

        $query = mysqli_query($conn, "SELECT * FROM user  WHERE npm ='$npm' AND password = '$password'");


    if(mysqli_num_rows($query)>0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        echo '<script>alert("selamat datang,' .$data['nama'].'");
            location.href="home.php";</script>';

        }else {
            '<script>alert("npm/password tidak sesuai."); </script>';
        }
}
else //jika data tidak ditemukan ?>
    <script type="text/javascript">window
        alert(' Data Tidak ditemukan silakan Register!!!.');
        window.location.assign('register.php');
    </script>

