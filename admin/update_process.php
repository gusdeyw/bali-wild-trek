<?php
$id = $_POST['id'];
$title = $_POST['title'];
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
// $query = "INSERT INTO activity (title, description, currency, price, uom, benefit, is_active) VALUES ('$title', '$description', '$currency', $price, '$uom', '$benefit', $is_active)";
$query = "UPDATE activity SET title = '$title', description = '$description', currency = '$currency', price = $price, uom = '$uom' , benefit = '$benefit', is_active = $is_active WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
}
?>