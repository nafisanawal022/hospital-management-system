<?php 
session_start(); 
require_once "DBconnect.php";
if (isset($_POST['username']) && isset($_POST['pre_password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
	$username = validate($_POST['username']);
    $password = validate($_POST['pre_password']);
    if (empty($username)) {
		echo "Username is required<br>";
        header("Location: login.php?error=Username_is_required");
		
        exit();
    }else if(empty($password)){
		echo "Password is required<br>";
        header("Location: login.php?error=Password_is_required");
		
        exit();
    }else{
        $sql = "SELECT * FROM premium WHERE user_id='$username' AND premium_pass='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_id'] === $username && $row['premium_pass'] === $password) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['premium_pass'] = $row['premium_pass'];
                header("Location: user_booking.php");
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
	