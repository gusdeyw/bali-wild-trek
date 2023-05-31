<?php

require_once "../class.php";

$record = $crud->all('revenue');

if (count($record) != 0) {
    echo json_encode($record);
} else {
    echo 0;
}
