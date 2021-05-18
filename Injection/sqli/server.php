<?php
//database name is 'members' and table name is 'users'

require_once 'connection.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
// $user = mysqli_real_escape_string($link, $_POST['user']);	//uncomment for security
// $pass = mysqli_real_escape_string($link, $_POST['pass']);	//uncomment for security
$query = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' LIMIT 1";

if($result = mysqli_query($link,$query)){
	$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($rows){
		echo "<h2>Welcome ".$rows['username']." to your main page</h2>";
	}
	else{
		echo "<h2>You are not an authenticated user</h2>";
	}
}
else{
	echo mysqli_error($link);
}
mysqli_close($link);
?>