<?php 
$email = $_POST['email'];
$password = $_POST['password'];

include 'database.php';

$sql = " SELECT * from user WHERE email='$email' AND password='$password'  ";
$result = $conn->query($sql);

if( $result->num_rows == 0 ){
    header("Location:index.php");
}else{
    session_start();
    $_SESSION['user']=$email;
    header("Location: home.php");
}
?>