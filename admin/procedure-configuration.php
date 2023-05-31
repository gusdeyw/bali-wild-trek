<?php
require_once "class.php";

if ($_POST['mode'] == "update") {
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];

    $record = $crud->updateConfig('configuration', 1, array(
        "whatsapp" => $whatsapp,
        "email" => $email,
        "instagram" => $instagram,
        "facebook" => $facebook
    ));
    if ($record) {
        header("Location: configuration.php");
    } else {
        echo "Error: Contact Administrator";
    }
}
