<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Language" content="sr"/>
<meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<title>Login Knjizara</title>

<style>

body{
	background: url("https://s26162.pcdn.co/wp-content/uploads/2017/11/bookstore-slide-2MCD-superJumbo.jpg");
	background-size: 100%;
	
}
#main{
	width:960px;
	margin:50px auto;
	font-family:raleway
}
h1{
	background-color:#d6d6c2;
	text-align:center;
	border-radius:10px;
	margin: 70px 70px 70px 30px;
	padding:20px 40px 25px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
#login{
	width:400px;
	text-align:center;
	float:center;
	border-radius:10px;
	font-family: "Times New Roman", Times, serif;
	font-size:16px;
	border:2px solid #ccc;
	padding:10px 40px 25px;
	margin: 70px 250px 100px 250px;

}
h2{
	background-color:#d6d6c2;
	text-align:center;
	border-radius:10px 10px 0 0;
	margin:-10px -40px;
	margin-bottom:7px;
	padding:15px;
	font-family: "Times New Roman", Times, serif
}
input[type=text],input[type=password]{
	width:99.5%;
	padding:10px;
	margin-top:5px;
	margin-bottom:10px;
	border:1px solid #ccc;
	padding-left:5px;
	font-size:16px;
	font-family: "Times New Roman", Times, serif
}
label{
	color:#ffffff;
	font-family: "Times New Roman", Times, serif
}
input[type=submit]{
	width:70%;
	background-color:#ccccff;
	color:black;
	border:2px solid #ccccff;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-top:15px;
	margin-bottom:15px
}
span {
color:red
}

</style>

</head>
<body>
<div id="main">
	<h1>Knjizara</h1>
	<div id="login">
		<h2>Login</h2>
		
		<form action="" method="post" >
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			<input name="submit" type="submit" value=" Login ">
			<span><?php echo $error; ?></span>
		</form>
		
	</div>
</div>
</body>
</html>