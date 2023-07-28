<?php
include('DBconnect.php');
session_start(); 


$id=mysqli_real_escape_string($conn,$_GET['id']);
if($id==''){
	header('location:mainmenu.php');
	die();
}


$q=$row['quantity'];

mysqli_query($conn,"delete from cart where id='$id'");
header('location:cart.php');
die();

?>