<?php
include "connection.php";
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);



$query = "select * from user where password='$password' AND username='$username'";
$rezultat = $mysqli->query($query);

if ($rezultat == 1) {
$_SESSION['login_user']=$username; 
header("location: index.php"); 
} else {
$error = "Username or Password is invalid";
}

}
}
?>