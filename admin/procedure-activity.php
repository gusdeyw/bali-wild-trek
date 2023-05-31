<?php
require_once "class.php";

if ($_POST['mode'] == "insert") {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $currency = $_POST['currency'];
    $price = $_POST['price'];
    $uom = $_POST['uom'];
    $benefit = $_POST['benefit'];
    $is_active = 0;
    $record = $crud->create('activity', array(
        "title" => $title,
        "slug" => $slug,
        "description" => $description,
        "currency" => $currency,
        "price" => $price,
        "uom" => $uom,
        "benefit" => $benefit,
        "images" => "",
        "is_active" => $is_active
    ));
    if ($record) {
        header("Location: index.php");
    } else {
        echo "Error: Contact Administrator";
    }
} else if ($_POST['mode'] == "update") {
    $id = $_POST['id'];
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
    } else {
        echo "Error: Contact Administrator";
    }

    $record = $crud->update('activity', $id, array(
        "title" => $title,
        "slug" => $slug,
        "description" => $description,
        "currency" => $currency,
        "price" => $price,
        "uom" => $uom,
        "benefit" => $benefit,
        "is_active" => $is_active
    ));
    if ($record) {
        header("Location: index.php");
    } else {
        echo "Error: Contact Administrator";
    }
} else if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $record = $crud->delete('activity', $id);
    if ($record) {
        header("Location: index.php");
    } else {
        echo "Error: Contact Administrator";
    }
}
