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
		<form action='server.php' method='POST'>	
			<input type="text" name="user" placeholder="Username" required></br></br>
			<input type="password" name="pass" placeholder="Password" required></br></br>
			<input type="submit" name="submit" value='Login'>
		</form>
	</div>
</body>
</html>



