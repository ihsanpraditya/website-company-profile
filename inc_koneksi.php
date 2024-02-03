<!-- Membuat koneksi antara PHP dan database -->
<?php

$host = "localhost";
$user = "root";
$pass = "123";
$db   = "companyprofile";

$koneksi = mysqli_connect($host,$user,$pass,$db);
?>
