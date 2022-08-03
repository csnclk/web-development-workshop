<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'database.php';

    $sql = " INSERT INTO user (email,password) VALUES ('$email','$password') ";
    $conn->query($sql);

    session_start();
    $_SESSION['user'] = $email;
    header("Location: home.php");
?>