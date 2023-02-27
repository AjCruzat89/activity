<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<title>Sign Up</title>
</head>
<body>
	<form action="/activity/save.php" method="post">
		<div class="top">
			<div class="box">
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter name..." required> 
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter username..." required> 
            <label>Age</label>
			<input type="text" name="age" placeholder="Enter username..." required> 
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password..." required>
			<label>Section</label>
			<input type="text" name="section" placeholder="Enter section..." required> <br>
			<input type="submit" name="submit">
            <a href="/activity/login.php">Already have an account? Click Here</a>
			</div>

		</div>

</body>
</html>