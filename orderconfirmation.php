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
	
	
		
if(isset($_POST['year']) && isset($_POST['month']) && !empty($_POST['year']) && !empty($_POST['month'])){
	
	if(!($_POST['year'] > date("Y")))
{
	if(!(($_POST['year'] == date("Y")) && ($_POST['month'] >= date("m")))){
		echo "Your card is expired. please use valid card";
	exit;
	}
}

$credit=$_POST['credit'];


if(!is_numeric(preg_replace('/ /','',$_POST['credit'])))	
{
	
	echo "Please provide valid credit card and numeric";
	exit;
	
}

if(!preg_match('/^\d{13,18}$/',preg_replace('/ /','',$_POST['credit'])))
	{
		
		echo "Please provide valid credit card";
		exit;
	}
}

else{
	
	echo "Please enter Credit card details";
	exit;
}
	
		
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// Print the cart detials in table -->
	if(((isset($_SESSION["joshBR"])) || (isset($_SESSION["joshDVD"])))   && $_SESSION["subtotal"] > 0 )
	{
	echo "Your order is successful";	
	echo "<table class=tablelayout>";
	echo "<tr><th>ITEM</th><th>Media Type</th><th>QUANTITY</th><th>PRICE</th></tr>";
	fwrite($file,"=========================================\n");
	fwrite($file,"First Name: ".$_POST['fname']."\nLast Name: ".$_POST['lname']."\nEmail Address: ".$_POST["email_address"]."\nPhone Number: ".$_POST["phone_number"]."\nAddress: ".$_POST["address"]."\nTimeStamp: ".date("Y-m-d h:i:sa")."\n");
	fwrite($file,"SEASON,MEDIA TYPE,QUANTITY,PRICE\n");
		if(isset($_SESSION["joshDVD"]))
		{
			foreach($_SESSION["seasonPrices"] as $key => $value){
				 if($_SESSION["joshDVD"][$key]["quantity"] != 0){
				 echo "<tr><td>".$_SESSION["joshDVD"][$key]["name"]."</td><td>DVD</td><td>".$_SESSION["joshDVD"][$key]["quantity"]."</td><td>".$_SESSION["totalDVD"][$key]."</td></tr>";
				 fwrite($file,$_SESSION["joshDVD"][$key]["name"].",DVD,".$_SESSION["joshDVD"][$key]["quantity"].",".$_SESSION["totalDVD"][$key]."\n");}
					
			
			}
		}
	
		if(isset($_SESSION["joshBR"]))
		{
			foreach($_SESSION["seasonPrices"] as $key => $value){
				
				 if($_SESSION["joshBR"][$key]["quantity"] != 0){
					 echo "<tr><td>".$_SESSION["joshBR"][$key]["name"]."</td><td>BLUE RAY</td><td>".$_SESSION["joshBR"][$key]["quantity"]."</td><td>".$_SESSION["totalBR"][$key]."</td></tr>";
				 fwrite($file,$_SESSION["joshBR"][$key]["name"].",BLUE RAY,".$_SESSION["joshBR"][$key]["quantity"].",".$_SESSION["totalBR"][$key]."\n");	}
			
			}
		}
	
	
	
	echo "<tr><td>Delivery</td><td>--</td><td>--</td><td>".$_POST['delivery']."</td></tr>";
	fwrite($file,"Delivery: ".$_POST["delivery"]."\nTotal Cost: ".number_format((floatval($_POST['delivery']))+floatval(($_SESSION["subtotal"])),2)."\n");
	echo "<tr><td>TOTAL</td><td>--</td><td>--</td><td>".number_format((floatval($_POST['delivery'])+floatval($_SESSION["subtotal"])),2)."</td></tr>";
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