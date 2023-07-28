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
    <a href="insert.php">Report Storage</a>
    <a class="active" href="cart.php">Medicine Cart</a>
    <a href="search.php">Search Medicine</a>
   
    <a href="ambulance.php"> Ambulance </a>
    <a href="SOS.php">S.O.S</a>
    <a href="premiumlogin.php">Consultation</a>
    <a href="#addtopremium">Add to Premium</a>
  </div>

  <div class="Homepage">
    <h1><a href="">Your Cart</a></h1></div>

    
    
    
  


  
<?php 

require_once "DBconnect.php";
session_start(); 
$b = $_SESSION['id'];
$u = $_SESSION['med'];
$l = $_SESSION['location'];

$sql = "SELECT * from cart ";
$res = mysqli_query($conn, $sql);

?>
<div class='flex-box'>
<div class= "container-2"> 
    

<table border="1" background=>
	<tr>
    <td class="col-md-2"><u>Item Name</u></td><br>
    
    <td class="col-md-2"><u>Price(Tk.) </u></td><br>
    <td class="col-md-2"><u>Quantity</u></td><br>
    <td class="col-md-2"><u>Remove Item</u></td><br>
    
	</tr>
	<?php 
	$i=1;
	while($row=mysqli_fetch_assoc($res)){?>
	<tr>
		
		<td class="col-md-2"><?php echo $row['item_name']. "-".$row['pharmacy']; ?></td>
        <td class="col-md-2"><?php echo $row['price']; ?></td>
        <td class="col-md-2"><?php echo $row['quantity']; ?></td>
        <td class="col-md-2">
			<a href="delete.php?id=<?php echo $row['id']?>">Remove from cart</a></td>
			
		</td>
	</tr>
	<?php 
	$i++;
	} ?>

    </table>

</div>


  </div>
  <form action="checkout.php"  class ="form-design" method ="post">
    
    
      
      <a href="" text-align: center> <h2>Proceed to checkout</h2></a>
      <input type="submit" value="checkout" name="checkout" class="btn btn-primary">
      
    </form>
</div>


    
  <section id="footer">

</section>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/row-merge-bundle.min.js"></script>

</body>
</html>