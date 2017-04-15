<?php include_once('header.php');
session_start();
if(isset($_POST["plm"]))	
$quantity = $_POST['plm'];
if(isset($_POST["media"]))
$mediaType = $_POST['media'];
$_SESSION["totalDVD"] = array();
$_SESSION["totalBlueRay"] = array();
$_SESSION["subtotal"]=0;
$totalqty=0;
$mintotalqty=1;
$maxtotalqty=5;
$_SESSION["seasonPrices"] = array("s1" => array("name"=> "Season1", "price" =>"17.00"),
								  "s2" => array("name"=> "Season2", "price" => "22.50"),
								  "s3" => array("name"=> "Season3", "price" => "26.75"));

$_SESSION["priceType"] = array("s1"=>"17.00", "s2" => "22.50", "s3" => "26.75");								  
								  


	
	
	



	
?>	
	
	<body class="methd2 bkgroundred defaultFirst">
	
<?php include_once('navigator.php'); ?>		
	
	<section class="headtemp thomasshop"> </section>
	<section class="maincontent">
	<header>
	<h1 class="defaultSecond">CART</h1>
	</header>
	<?php


if(isset($_POST['plm']))	
{
	
foreach($_SESSION["seasonPrices"] as $key => $value){
	$totalqty+= $_POST['plm'][$key];	
if (filter_var($_POST['plm'][$key], FILTER_VALIDATE_INT, array("options" => array("max_range"=>$maxtotalqty))) === false) {
    echo "Quantity Cannot be greater than 5";
	
	
}
}

//echo $totalqty;
if (filter_var($totalqty, FILTER_VALIDATE_INT, array("options1" => array("min_range"=>$mintotalqty))) === false) {
    echo "Quantity cannot be null";
	
}
}
	
	
	if(isset($_POST["media"])){
	if($mediaType=="DVD"){
		if(!isset($_SESSION["joshDVD"]))
		{
			//echo "Initiating the session variable joshDVD";
			foreach($_SESSION["seasonPrices"] as $key => $value){
			
			 $_SESSION["joshDVD"][$key] =   array("name" => $_SESSION["seasonPrices"][$key]["name"], 
													"quantity" => $_POST['plm'][$key],
													"price" => $_SESSION["seasonPrices"][$key]["price"],
													"itemName" => $key."DVD");
			}
		}
		else{
			//echo ("Just Initializing the values for joshDVD");
			foreach($_SESSION["seasonPrices"] as $key => $value){
				$_SESSION["joshDVD"][$key]["name"] = $_SESSION["seasonPrices"][$key]["name"];
				$_SESSION["joshDVD"][$key]["quantity"] = $_POST['plm'][$key];
				$_SESSION["joshDVD"][$key]["price"] = $_SESSION["seasonPrices"][$key]["price"];
				
			}
		
		
		
		}
	
	
	}
	else if($mediaType=="Blue Ray")
	{
		if(!isset($_SESSION["joshBR"]))
		{
			//echo "Initiating the session variable joshBR";
		foreach($_SESSION["seasonPrices"] as $key => $value){
			
			 $_SESSION["joshBR"][$key] =  array("name" => $_SESSION["seasonPrices"][$key]["name"], 
													"quantity" => $_POST['plm'][$key],
													"price" => $_SESSION["seasonPrices"][$key]["price"],
													 "itemName" => $key."BR");
			}
		}
		else{
		//	echo ("Just Initializing the values for joshBR");
			foreach($_SESSION["seasonPrices"] as $key => $value){
				$_SESSION["joshBR"][$key]["name"] = $_SESSION["seasonPrices"][$key]["name"];
				$_SESSION["joshBR"][$key]["quantity"] = $_POST['plm'][$key];
				$_SESSION["joshBR"][$key]["price"] = $_SESSION["seasonPrices"][$key]["price"];
				
			}
		
		
		
		}
		
	}
	}
	
	
	

	/*		
	echo "</br>";
	var_dump($_SESSION["joshDVD"]);
	echo "</br>";
	var_dump($_SESSION["joshBR"]);
	
	*/

	
	
	

	
	
	
	
	
	
	
	
	
	if(isset($_GET["deleteBtn"]))
	{
		//echo "entered to delete";
		foreach($_SESSION["seasonPrices"] as $key => $value){
			if(isset($_SESSION["joshDVD"]))
			if($_SESSION["joshDVD"][$key]["itemName"] == $_GET["deleteBtn"]){
				$_SESSION["joshDVD"][$key]["quantity"]="0";
				break;
				}
				
			if(isset($_SESSION["joshBR"]))
			if($_SESSION["joshBR"][$key]["itemName"] == $_GET["deleteBtn"]){
				$_SESSION["joshBR"][$key]["quantity"]="0";
				break;
			}	
			
		}
		
		
	}
	
	
	
	
	
	
	
	//Calculating the total
	
	if(isset($_SESSION["joshDVD"])){
	foreach($_SESSION["seasonPrices"] as $key => $value){
		
	$_SESSION["totalDVD"][$key] = number_format(floatval($_SESSION["joshDVD"][$key]["price"])*floatval($_SESSION["joshDVD"][$key]["quantity"]),2);
	$_SESSION["subtotal"] = number_format($_SESSION["subtotal"]+$_SESSION["totalDVD"][$key]);
	}}
	
	
	
	if(isset($_SESSION["joshBR"])){
	foreach($_SESSION["seasonPrices"] as $key => $value){
		
	$_SESSION["totalBR"][$key] = number_format(floatval($_SESSION["joshBR"][$key]["price"])*floatval($_SESSION["joshBR"][$key]["quantity"]),2);
	$_SESSION["subtotal"] = number_format($_SESSION["subtotal"]+$_SESSION["totalBR"][$key],2);
	}}
	
	
	

	
	
	
	// Print the cart detials in table -->
	if(((isset($_SESSION["joshBR"])) || (isset($_SESSION["joshDVD"])))   && $_SESSION["subtotal"] > 0 )
	{
	echo "<table class=contactlayout>";
	echo "<tr><th>SEASON</th><th>Media Type</th><th>QUANTITY</th><th>PRICE</th><th></th></tr>";
		if(isset($_SESSION["joshDVD"]))
		{
			foreach($_SESSION["seasonPrices"] as $key => $value){
				 if($_SESSION["joshDVD"][$key]["quantity"] != 0)
				 echo "<tr><td>".$_SESSION["joshDVD"][$key]["name"]."</td><td>DVD</td><td>".$_SESSION["joshDVD"][$key]["quantity"]."</td><td>".$_SESSION["totalDVD"][$key]."</td><td>
				<form><input type=hidden name=deleteBtn value=".$key."DVD><input type=submit value=REMOVE onclick=cart.php method=POST></form>	
					</td></tr>";
					
			
			}
		}
	
		if(isset($_SESSION["joshBR"]))
		{
			foreach($_SESSION["seasonPrices"] as $key => $value){
				
				 if($_SESSION["joshBR"][$key]["quantity"] != 0)
					 echo "<tr><td>".$_SESSION["joshBR"][$key]["name"]."</td><td>BLUE RAY</td><td>".$_SESSION["joshBR"][$key]["quantity"]."</td><td>".$_SESSION["totalBR"][$key]."</td><td>
					<form><input type=hidden name=deleteBtn value=".$key."BR><input type=submit value=REMOVE onclick=cart.php method=POST></form>	
					</td></tr>";
					
			
			}
		}
	
	
	
	
	echo "</table>";
	
	echo "</br></br><form action=checkout.php method=POST><input class=contactbutton type=submit value=Order></form>";
	
	}
	
	else
		echo "No Item in the Cart";
	?>
	
	
	
	
	
	<?php
	
		
	
	
	
	
	
	?>
	
	</section>
	</section>


	
	
	
	<?php include_once('footer.php'); ?>	
		
	</body>
	</html>