<?php 
session_start(); 
require_once "DBconnect.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
	$username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
		echo "Username is required<br>";
        header("Location: login.php?error=Username_is_required");
		
        exit();
    }else if(empty($password)){
		echo "Password is required<br>";
        header("Location: login.php?error=Password_is_required");
		
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: main_menu.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect_Username_or_password");
				exit();

            }

        }else{
            header("Location: login.php?error=Incorect_Username_or_password");
			

            exit();

        }

    }

}else{

    header("Location: login.php");

    exit();

}
?>
	