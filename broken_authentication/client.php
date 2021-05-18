<?php
//database name is 'employees' and table name is 'users'
// admin:charlie1
// ashutosh:LuciferMorningstar
// mayank:c@llMeDevil
session_start();

if(isset($_POST['submit']) && !empty($_POST['user'])){
	require_once 'connection.php';
	$user = mysqli_real_escape_string($link, ($_POST['user']));
	$pass = md5($_POST['pass']);
	$query = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' LIMIT 1";

	if($result = mysqli_query($link,$query)){
		$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if($rows){
			$_SESSION['user'] = $rows['username'];
			header('Location:welcome.php');
		}
		else{
			echo "<h2 style='color: red;'>You are not an authenticated user</h2>";
		}
	}
	else{
		echo mysqli_error($link);
	}
	mysqli_close($link);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		body {
			text-align: center;
			background-color: #F7D192;
		}
		form {
			display: inline-block;
			padding-top: 20%;
		}
		h1{
			margin-top: 5%;
		}
		.form-box{
			border-style: solid;
			border-width: 7px;
			margin-left: 35%;
			margin-right: 35%;
			padding-bottom: 5%;
			background-color: #FDF5B8;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<div class='form-box'>
		<form action='#' method='POST'>	
			<input type="text" name="user" placeholder="Username" required></br></br>
			<input type="password" name="pass" placeholder="Password" required></br></br>
			<input type="submit" name="submit" value='Login'>
		</form>
	</div>
</body>
</html>



