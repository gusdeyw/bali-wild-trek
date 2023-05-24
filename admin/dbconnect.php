<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "bali_wild_trek";

// $host = "localhost";
// $user = "baliwild_bali_wild_trek";
// $pass = "WEBgusde123!";
// $db = "baliwild_bali_wild_trek";
$koneksi = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset($koneksi, "utf8");

if (!$koneksi) {
    die("Connection Failed: " . mysqli_connect_error());
}
