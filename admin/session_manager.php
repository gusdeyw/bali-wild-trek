<?php
session_start();
if (!isset($_SESSION['su'])) {
    header("Location: login.php");
}
