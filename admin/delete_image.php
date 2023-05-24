<?php
session_start();
$id = $_GET['id'];
$img = $_GET['img'];
include "dbconnect.php";
$sql = "SELECT images FROM activity WHERE id = $id";
$result = mysqli_query($koneksi, $sql);

unlink("$img");

$image = "";
while ($row = mysqli_fetch_assoc($result)) {
    $image = $row['images'];
}
$arr = explode(", ", $image);

$hasil = array_search($img, $arr);
print_r($hasil);
if ($hasil !== false) {
    // Remove from array
    unset($arr[$hasil]);
}

$hasilakhir = implode(", ", $arr);
mysqli_query($koneksi, "UPDATE activity SET images = '$hasilakhir' WHERE id= $id");
header("Location:drag_drop.php?id=$id");
?>