<?php
require_once "class.php";

if ($_POST['mode'] == "insert") {
    $date = $_POST['date'];
    $sob = $_POST['sob'];
    $description = $_POST['description'];
    $person = $_POST['person'];
    $selling_rate = $_POST['selling_rate'];
    $cost = $_POST['cost'];
    $revenue = $_POST['revenue'];
    $record = $crud->create('revenue', array(
        "date" => $date,
        "sob" => $sob,
        "description" => $description,
        "person" => $person,
        "selling_rate" => $selling_rate,
        "cost" => $cost,
        "revenue" => $revenue,
    ));
    if ($record) {
        header("Location: revenue.php");
    } else {
        echo "Error: Contact Administrator";
    }
} else if ($_POST['mode'] == "update") {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $sob = $_POST['sob'];
    $description = $_POST['description'];
    $person = $_POST['person'];
    $selling_rate = $_POST['selling_rate'];
    $cost = $_POST['cost'];
    $revenue = $_POST['revenue'];

    $record = $crud->update('revenue', $id, array(
        "date" => $date,
        "sob" => $sob,
        "description" => $description,
        "person" => $person,
        "selling_rate" => $selling_rate,
        "cost" => $cost,
        "revenue" => $revenue,
    ));
    if ($record) {
        header("Location: revenue.php");
    } else {
        echo "Error: Contact Administrator";
    }
} else if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $record = $crud->delete('revenue', $id);
    if ($record) {
        header("Location: revenue.php");
    } else {
        echo "Error: Contact Administrator";
    }
}
