<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
  <section id ="header">
<div class = "col-md-2" style="font-size: 70px;background-color:#000080; color: #E0FFFF; text-align:center;"> View Report </div>
<br>
<label for="" > Enter the details accurately! </label> <br>
<br>
<br>
<form method="post" action="show.php" enctype="multipart/form-data" style=" width: 50vw; margin-left : 25vw;">
<label>Username</label>
			<br>
			<input type="text" name="username" value="" placeholder="Enter your username" autocomplete="off" required maxlength ="10"/>
			<br>
<label>Password</label>
			<br>
			<input type="password" name="password" value="" placeholder="Enter the password" autocomplete="off" required maxlength ="255"/>
            <br>
<input type="submit" name="submit" value="Submit" />
<?php
include 'DBconnect.php';
if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
}

      $sql="SELECT pdf from user WHERE username='$username' AND password='$password'";
      $query=mysqli_query($conn,$sql);
	  while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    


  </body>
</html>