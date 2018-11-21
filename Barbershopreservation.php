<!DOCTYPE html>
<html lang="en">
<meta charset=UTF-8>
<meta name="author" content="Preston Ross">
<meta name="descripton" content="Find a barbershop">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,BarberShop,GPS,FindABarbershop,NewApp">
<title>Barbershop Reservation</title>
<body style="background-color:white;">
	
	
	 <link rel="stylesheet" type="text/css" href="stylesheet.css">

<h1 style="color:black;"><b> Barbershop Reservation</b> </h1>
<form action="" method="get"> 
<label>Name: 
<input type="text" name="name">
</label><br><br>

<label>Email:
<input type="email" name="email">
</label><br><br>

<label>Time of Appointment: 
<input type="date" name="appt"> 
</label><br><br>


<label>
<input type="submit" name="submit" value="Continue">
</label>
</form>


<?php

	if(isset($_GET["submit"])) {
	$name = $_GET["name"];
	$email = $_GET["email"];  
	$appt = $_GET["appt"];
	
	
	 
	
echo $name. "<br>" .$email ."<br>". $appt."<br>";
}
?>

</body>
</html>