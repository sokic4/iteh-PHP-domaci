<?php
include "connection.php";

session_start();

$user_check=$_SESSION['login_user'];

$sesql="select username from user where username='$user_check'";
$rez= $mysqli->query($sesql);
$red = $rez->fetch_object();

$login_session =$red->username;
if(!isset($login_session)){

header('Location: indexLog.php'); 
}
?>\