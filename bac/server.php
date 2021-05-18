<?php
/*
//database name is 'employees' and table name is 'users'
// admin:password123
// ashutosh:LuciferMorningstar
// mayank:c@llMeDevil

require_once 'connection.php';
$user = mysqli_real_escape_string($link, ($_POST['user']));
$pass = md5($_POST['pass']);
$query = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' LIMIT 1";

if($result = mysqli_query($link,$query)){
	$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($rows){
		$cookie_name = 'isAdmin';
		if ($rows['username'] == 'admin') {
			$cookie_value = 1;
		}
		else{
			$cookie_value = 0;
		}
		setcookie($cookie_name, $cookie_value, time()+86400, '/');
		if($_COOKIE[$cookie_name] == 1){
			header('Location:admin.php');
		}
		else{
			header('Location:user.php');
		}
	}
	else{
		echo "<h2 style='color: red;'>You are not an authenticated user</h2>";
	}
}
else{
	echo mysqli_error($link);
}
mysqli_close($link);
*/

//SECURE CODE STARTS FROM HERE

session_start();
require_once 'connection.php';
$user = mysqli_real_escape_string($link, ($_POST['user']));
$pass = md5($_POST['pass']);
$query = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' LIMIT 1";

if($result = mysqli_query($link,$query)){
	$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($rows){
		if ($rows['username'] == 'admin') {
			$_SESSION['isAdmin'] = 1;
		}
		else{
			$_SESSION['isAdmin'] = 0;
		}
		if($_SESSION['isAdmin'] == 1){
			header('Location:admin.php');
		}
		else{
			header('Location:user.php');
		}
	}
	else{
		echo "<h2 style='color: red;'>You are not an authenticated user</h2>";
	}
}
else{
	echo mysqli_error($link);
}
mysqli_close($link);

?>