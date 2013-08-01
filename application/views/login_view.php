<html>
<head>
	<meta charset="UTF-8">
	<title>login_view</title>
</head>
<body>
	<form id="login" action="/user/login" method="post">
		<label>Email</label>
		<input type="text" name="email" />
		<label>Password</label>
		<input type="password" name="password" />
		<input type="submit" value="login" />
	</form>
	<form id="login" action="/user/register" method="post">
		<label>First Name</label>
		<input type="text" name="first_name"/>
		<label>Last Name</label>
		<input type="text" name="last_name" />
		<label>Email</label>
		<input type="text" name="email" />
		<label>Password</label>
		<input type="password" name="password" />
		<label>Confirm Password</label>
		<input type="text" name="confirm_password" />

		<input type="submit" value="register" />
	</form>
</body>
</html>