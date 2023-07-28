<?php
require_once("DBconnect.php");
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
	header("Location:main_menu.php");
}

if (isset($_POST['registration'])){
	//$id=$_POST['id'];
	$name=$_POST['name'];
	$phone_no=$_POST['phone_no'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$created_at=$_POST['created_at'];
	
	
}


mysqli_query($conn,"insert into user (id,name,phone_no,email,username,password) values ('$id','$name','$phone_no','$email','$username','$password')");
//mysqli_query($conn, "Insert into user values ('{$name}','{$phone_no}','{$email}','{$username}','{$password}')");

$query = mysqli_query($conn, "Select * from user where username='{$username}'and password='{$password}'");
if (mysqli_num_rows($query)==1){
	$success = true;
	header("Location:login.php");
	
	
	
}
else{
	$error_msg="An error occured. Please try again.";
	header("Location:registration.php?error");
	
}

?>

