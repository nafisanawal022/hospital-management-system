 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
     <section id = "section 1">
          
           <form action="signin.php" class="form_design" method="post" >
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control " placeholder="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="registration.php">Click to register</a>.</p>
        </form>
	</section>

    </div>
</body>
</html>

