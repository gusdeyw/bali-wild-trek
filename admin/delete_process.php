<?php
$id = $_GET['id'];

include "dbconnect.php";
$query = "DELETE FROM activity WHERE id=$id";
// $query = "UPDATE users SET nama_user = '$nama_user', alamat_user = '$alamat_user', notelp_user = '$notelp_user', tgllahir_user = '$tgllahir_user' WHERE kartu_user = '$kartu_user'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
}
?>