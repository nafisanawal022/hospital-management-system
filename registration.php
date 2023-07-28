<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
		
<div>
<p>
<p>Create a new account</p>
		<form method="POST" action="register.php">
		
			<label>Name</label>
			<br>
			<input type="text" name="name" value="" placeholder="Enter your name" autocomplete="off" required />
			<br>
			<br>
			<label>Contact No.</label>
			<br>
			<input type="text" name="phone_no" value="" placeholder="Enter your contact number" autocomplete="off" required maxlength ="11"/>
			<br>
			<br>
			<label>Email</label>
			<br>
			<input type="text" name="email" value="" placeholder="Enter your email" autocomplete="off" required maxlength="100"/>
			<br>
			<br>
			<label>Username</label>
			<br>
			<input type="text" name="username" value="" placeholder="enter a username" autocomplete="off" required maxlength ="10"/>
			<br>
			<br>
			<label>Password</label>
			<br>
			<input type="password" name="password" value="" placeholder="Enter a password" autocomplete="off" required maxlength ="255"/>
            <br>	
            <br>
			<br>
	        <input type="submit" name="registration" value="Create account" />
    </div>
		</form>
		</p>
	</div>
       
