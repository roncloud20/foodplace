<?php
// Adding pagetitle, header and database connection
$pagetitle = "Dashboard";
require_once "assets/header.php";
require_once "assets/db_connect.php";

if(!isset($_SESSION['id'])) {
    header('Location: login.php');
}
$name = $_SESSION['firstname'] . " " . $_SESSION['lastname'];
$role = $_SESSION['user_type']; 
?>
<h1>Welcome <?= $role ?> <?= $name ?> to your dashboard</h1>