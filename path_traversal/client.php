<!DOCTYPE html>
<html>
<head>
	<title>Employee information</title>
</head>
<body>
	<p>Records availble for employees given below: </p>
	<ol>
		<li>Ashutosh</li>
		<li>Mayank</li>
		<li>Rohit</li>
		<li>Arvinder</li>
		<li>Virat</li>
	</ol>
	<p style="color: red;">Enter a name (in small letters) to get information</p>
	<form method="GET" action="server.php">
		<input type="text" name="name"> </br></br>
		<input type="submit" value="Get info">
	</form>
</body>
</html>