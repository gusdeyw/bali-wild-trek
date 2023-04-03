<?php
$whatsapp = $_POST['whatsapp'];
$email = $_POST['email'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];

include "dbconnect.php";
$query = "UPDATE configuration SET whatsapp = '$whatsapp', email = '$email', instagram = '$instagram', facebook = '$facebook' WHERE id = 1";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: configuration.php");
}
