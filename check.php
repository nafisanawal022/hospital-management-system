<html lang="en">
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="About the site"/>
	<meta name="author" content="Author name"/>
	<title> Health++ </title>
	
	<!-- core CSS -->
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    

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
  
<div class="row">
  <div class="col-75">
    <div class="container-2">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-5">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Faiza Bushra">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="faiza@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Dhanmondi,Dhaka">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Dhaka">

            <div class="row">
              <div class="col-5">
                <label for="state">Area</label>
                <input type="text" id="area" name="state" placeholder="Area">
              </div>
              <div class="col-5">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="1205">
              </div>
            </div>
          </div>

          <div class="col-5">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
			<form action="/action_page.php">
  
			<p>Please choose your method of payment:</p>
  <input type="radio" id="BKash" name="pay" value="BKash">
  <label for="BKash">BKash</label><br>
  <input type="radio" id="Card" name="pay" value="Card">
  <label for="Card">Credit/Debit Card</label><br>
  <input type="radio" id="Cash On Delivery" name="pay" value="CashOnDelivery">
  <label for="CashOnDelivery">Cash On Delivery</label>
  <br>  
  
</form>

            
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
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