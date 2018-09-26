<?php
session_start();

$hobi = $_POST['hobby'];
$travel = $_POST['traveling'];

$_SESSION['hobby'] = $_POST['hobby'];
$_SESSION['traveling'] = $_POST['traveling'];

header("location:halamanakhir.php");
?>
