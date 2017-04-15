<?php include_once('header.php');
session_start();



	$file = fopen("orderHistory.txt","a");
	
								  


	
	
	



	
?>	
	
	<body class="methd2 bkgroundred defaultFirst">
	
<?php include_once('navigator.php');


?>
	
	
	<section class="headtemp thomasshop"> </section>
	<section class="maincontent">
	<header>
	<h1 class="defaultSecond">ORDER CONFIRMATION</h1>
	</header>
	<?php
	/*
	if(isset($_POST['fname'])){
		echo "First Name: "+$_POST['fname'];
	}

	if(isset($_POST['lname'])){
		echo "Last Name: "+$_POST['lname'];
	}
	
	if(isset($_POST['fname'])){
		echo "First Name: "+$_POST['fname'];
	}
	
	if(isset($_POST['email_address'])){
		echo "Email address: "+$_POST['email_address'];
	}
	
	if(isset($_POST['phone_number'])){
		echo "Phone Number: "+$_POST['phone_number'];
	}
	
	if(isset($_POST['address'])){
		echo "Address: "+$_POST['address'];
	}
	
	*/
	
	
if(isset($_POST['year']) && isset($_POST['month']) && !empty($_POST['year']) && !empty($_POST['month'])){
	
	if(!($_POST['year'] > date("Y")))
{
	if(!(($_POST['year'] == date("Y")) && ($_POST['month'] >= date("m")))){
	
	}
}

$credit=$_POST['credit'];


if(!is_numeric(preg_replace('/ /','',$_POST['credit'])))	
{
	
	echo "Please provide valid credit card and numeric";

	
}

if(!preg_match('/^\d{13,18}$/',preg_replace('/ /','',$_POST['credit'])))
	{
		
		echo "Please provide valid credit card";
		
	}
}

else{
	
	echo "Please enter Credit card details";
	
}
	
		
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// Print the cart detials in table -->
	if(!((isset($_SESSION["joshBR"])) || (isset($_SESSION["joshDVD"])))   || !	$_SESSION["subtotal"] > 0 )
	{
	echo "Your order is successful";	
	echo "<table class=tablelayout>";
	echo "<tr><th>SEASON</th><th>Media Type</th><th>QUANTITY</th><th>PRICE</th></tr>";
	fwrite($file,"SEASON,MEDIA TYPE,QUANTITY,PRICE\n");
		if(!isset($_SESSION["joshDVD"]))
		{
			echo "<tr><td>season1</td><td>DVD</td><td>20</td><td>350.00</td></tr>";
			foreach($_SESSION["seasonPrices"] as $key => $value){
				 if($_SESSION["joshDVD"][$key]["quantity"] != 0){
				 echo "<tr class=contactrow><td>season1</td><td>DVD</td><td>20</td><td>350.00</td></tr>";
				 fwrite($file,$_SESSION["joshDVD"][$key]["name"].",DVD,".$_SESSION["joshDVD"][$key]["quantity"].",".$_SESSION["totalDVD"][$key]."\n");}
					
			
			}
		}
	
		if(isset($_SESSION["joshBR"]))
		{
			foreach($_SESSION["seasonPrices"] as $key => $value){
				
				 if($_SESSION["joshBR"][$key]["quantity"] != 0){
					 echo "<tr class=contactrow><td>".$_SESSION["joshBR"][$key]["name"]."</td><td>BLUE RAY</td><td>".$_SESSION["joshBR"][$key]["quantity"]."</td><td>".$_SESSION["totalBR"][$key]."</td></tr>";
				 fwrite($file,$_SESSION["joshBR"][$key]["name"].",BLUE RAY,".$_SESSION["joshBR"][$key]["quantity"].",".$_SESSION["totalBR"][$key]."\n");	}
			
			}
		}
	
	
	
	
	echo "</table>";
	}
	
	else
		echo "Your order is unsuccessfull.";
	?>
	
	
	
	
	
	<?php
	
		unset($_SESSION["totalDVD"]);
		unset($_SESSION["totalBR"]);
		unset($_SESSION["subtotal"]);
		unset($_SESSION["joshDVD"]);
		unset($_SESSION["joshBR"]);
		
		
	
	
		fclose($file);	
	
	
	
	?>
	
	</section>
	</section>


	
	
	
	<?php include_once('footer.php'); ?>	
		
	</body>
	</html>