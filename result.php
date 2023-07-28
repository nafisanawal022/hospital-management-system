<html lang="en">
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="About the site"/>
	<meta name="author" content="Author name"/>
	<title> Health++ </title>
	
	<!-- core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/animate.min.css" rel="stylesheet"/>
	<link href="css/animate.css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/boootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap-dropdownhover.css">
	<link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">

	</head>
	
<body>
<div class="topnav">
    <a href="main_menu.php">Home</a>
    <a href="insert.php">Report Storage</a>
    <a href="cart.php">Medicine Cart</a>
    <a class="active" href="search.php">Search Medicine</a>
    <a href="ambulance.php"> Ambulance </a>
    <a href="SOS.php">S.O.S</a>
    <a href="premiumlogin.php">Consultation</a>
    <a href="#addtopremium">Add to Premium</a>
  </div>

  <div class="Homepage">
    
    <h1><a href="">Your List</a></h1></div>
    <div class= "container-2"> 
    
    <div class="flex-box">

	<div class= "font">
		
    

    
      
    
    
  
<?php 

require_once "DBconnect.php";
session_start(); 
$b = $_SESSION['id'];
$u = $_SESSION['med'];
$l = $_SESSION['location'];

$sql = "SELECT * from pharmacylist where item_name='$u' AND _location='$l' AND _availability ='1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
    ?>
    <div class="col-md-3"><u>Store Name</u> </div>
        <div class="col-md-3"><u>Item Name</u></div>
        <div class="col-md-3"><u>Price </u></div>
        <div class="col-md-3"><u> Select</u> </div>
        
        

        <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col-md-3"><?php echo $row[1]; ?></div>
        <div class="col-md-3"><?php echo $row[3]." ".$row[6]."  - ".$row[9]; ?></div>
        <div class="col-md-3"><?php echo $row[5]; ?></div>
        <div class="col-md-3">
        <a href="select.php?id=<?php echo $row['id']?>">Select</a>
        <br>
        </div>
       
        
        

<?php
}
}
?>





  </div>
    </div>

    
  <section id="footer">

</section>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/row-merge-bundle.min.js"></script>

</body>
</html>