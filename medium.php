
<?php
session_start(); 

require_once "DBconnect.php";


if (isset($_POST['name']) && isset($_POST['location']) ) {

    $med = $_POST['name'];
    $location = $_POST['location'];
    

    $sql = "SELECT * FROM pharmacylist WHERE item_name ='$med' AND _location ='$location'";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)!=0){

    $_SESSION['med']=$med;
	$_SESSION['location']=$location;
    $_SESSION['id']=$id;
    header("location: result.php");
    }
    else{

    header("Location: search.php");
    }
}

?>
