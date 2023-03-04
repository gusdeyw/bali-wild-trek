<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bali_wild_trek";

// $host = "localhost";
// $user = "bfxxalev_health";
// $pass = "WEBgusde123!";
// $db = "bfxxalev_health";
$koneksi = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset($koneksi, "utf8");

if (!$koneksi) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>