<?php 
$des = $_POST['des'];
include 'database.php';

session_start();
$user = $_SESSION['user'];

$sql = " INSERT INTO posts (des,email) VALUES ('$des','$user') ";
$conn->query($sql);
header("Location: home.php");
?>