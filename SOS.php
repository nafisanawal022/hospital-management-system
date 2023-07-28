<html lang="en">
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="About the site"/>
	<meta name="author" content="Author name"/>
	<title> Health++ </title>
	
	<!-- core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	
	
	
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/bootstrap.css">


	</head>
	
<body>
<div class="topnav">
    <a href="main_menu.php">Home</a>
    <a href="#reportstorage">Report Storage</a>
    <a href="cart.php">Medicine Cart</a>
    <a href="search.php">Search Medicine</a>
   
    <a href="ambulance.php"> Ambulance </a>
    <a class="active" href="SOS.php">S.O.S</a>
    <a href="premiumlogin.php">Consultation</a>
    <a href="#addtopremium">Add to Premium</a>
  </div>

  <div class="Homepage">
    <h1><a href="">CONTACT</a></h1></div>

    
    
    
  


  
<?php 

require_once "DBconnect.php";
session_start(); 
$user = $_SESSION['username'];


$sql = "SELECT * from trustedcontact where user_id='$user'";
$res = mysqli_query($conn, $sql);

?>
<div class='flex-box'>
<div class= "container-2"> 
    
<h2>
<table border="1" background=>
	<tr>
    
    
    <td class="col-md-2"><u>contact 1 </u></td><br>
    <td class="col-md-2"><u>contact 2</u></td><br>
    <td class="col-md-2"><u></u></td><br>
    
    
	</tr>
	<?php 
	$i=1;
	while($row=mysqli_fetch_assoc($res)){?>
	<tr>
		
		
        <td class="col-md-2"><a href=""><?php echo '0'.$row['contact_1']; ?></a></td>
        <td class="col-md-2"><a href=""><?php echo '0'.$row['contact_2']; ?></a></td>
        <td class="col-md-2"><a href="">text location</a></td>
			
		</td>
	</tr>
	<?php 
	$i++;
	} ?>

    </table>
</h2>
</div>


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