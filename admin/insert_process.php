<?php
$title = $_POST['title'];
$slug = $_POST['slug'];
$description = $_POST['description'];
$currency = $_POST['currency'];
$price = $_POST['price'];
$uom = $_POST['uom'];
$benefit = $_POST['benefit'];
$is_active = 0;

if ($_POST['is_active']) {
    $is_active = 1;
}

include "dbconnect.php";
$query = "INSERT INTO activity (title, slug, description, currency, price, uom, benefit, is_active) VALUES ('$title', '$slug', '$description', '$currency', $price, '$uom', '$benefit', $is_active)";
// $query = "UPDATE users SET nama_user = '$nama_user', alamat_user = '$alamat_user', notelp_user = '$notelp_user', tgllahir_user = '$tgllahir_user' WHERE kartu_user = '$kartu_user'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
}
?>