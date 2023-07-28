<?php
include('DBconnect.php');
session_start(); 


$id=mysqli_real_escape_string($conn,$_GET['id']);
if($id==''){
	header('location:main_menu.php');
	die();
}

$a= $_SESSION['username'];


mysqli_query($conn,"insert into cart(item_name,pharmacy,price,quantity,customer_id) select P.item_name,P.storename,P.price,'1','$a' from pharmacylist P where P.id='$id' and '$a'!=''");

header('location:result.php');
die();
?>