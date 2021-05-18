<!DOCTYPE html>
<html>
<head>
	<title>Command Injection</title>
</head>
<body>
	<h2>Enter an IP to ping</h2>
	<form method='GET' action='server.php'>
		<input type="text" name="ip">
		<input type="submit" name="ping" value="Ping">
	</form>
</body>
</html>