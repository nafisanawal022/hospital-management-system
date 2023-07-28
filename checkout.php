
<?php
session_start(); 

require_once "DBconnect.php";

$a=$_SESSION['username'];
if (isset($_POST['checkout']) ) {

    $a=$_SESSION['username'];
    
	

    $sql = "SELECT * FROM cart";
	$result = mysqli_query($conn, $sql);
	$sql1="insert into confirm_list(id,customer_id,item_name,price,quantity,pharmacy,status) select C.id,C.customer_id,C.item_name,C.price,C.quantity,C.pharmacy,'pending' from cart C where C.customer_id='$a'";
	mysqli_query($conn,$sql1);


mysqli_query($conn,"delete from cart");
header("location: check.php");
}

?>

