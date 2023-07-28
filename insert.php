<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title> Store your reports </title>
<style media="screen">

form{
	margin-left:100px;
}
label{
	font-size:20px;
	font-weight: bold;
}

</style>
</head>
<body>
<section id ="header">
<div class = "col-md-2" style="font-size: 70px;background-color:#000080; color: #E0FFFF; text-align:center;"> Report Storage </div>
<br>

  

<form method="post" action="insert.php" enctype="multipart/form-data" >
<fieldset>
  <legend>Upload report:</legend>
  <br>
  <br>
<label>Username</label>
			<br>
<input type="text" name="username" value="" placeholder="enter your username" autocomplete="off" required maxlength ="10"/>
<br>
<br>
<label for="" > Select the pdf version of your report </label> <br>
<input id="pdf" type="file" name="pdf" value="" required><br><br>
<input id="upload" type="submit" name="submit" value="Upload">
 </fieldset>
</form>
</body>
</html>
<?php
include 'DBconnect.php';

if (isset($_POST['submit'])){
	 $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
	$username=$_POST['username'];

          move_uploaded_file($pdf_tem_loc,$pdf_store);
	
	//$sql="INSERT INTO FILE(username,pdf) values ('$username','$pdf')";
	$sql="UPDATE user SET pdf='$pdf' WHERE username='$username'";
	$query=mysqli_query($conn,$sql);

if($query){
	echo "Successful";
}
else{
	echo "Error";
}
}	
?>

<a href="show.php" style="font-size: 25px; margin-left: 600px" >View reports</a>
