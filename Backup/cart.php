<?php include_once('header.php');
	
$quantity = $_POST['plm'];
$mediaType = $_POST['media'];
$priceType = $_POST['price'];
$season1Total;
$season2Total;
$subtotal=0;

	
?>	
	
	<body class="methd2 bkgroundred defaultFirst">
	
<?php include_once('navigator.php'); ?>		
	
	<section class="headtemp thomasshop"> </section>
	<section class="maincontent">
	<header>
	<h1 class="defaultSecond">CART</h1>
	</header>
	welcome :<?php
	
	
	if(!isset($_SESSION["joshCart2"]))
	{
	foreach($quantity as $key => $value){
		
		 $_SESSION["joshCart2"][$key] =  array("quantity" => $quantity[$key], "price" => $priceType[$key]);
		 
		
	
	}echo "Initiating the session variable joshCar2";
	}
	else{
		foreach($quantity as $key => $value){	
			$_SESSION["joshCart2"][$key]["quantity"] = $value;
			$_SESSION["joshCart2"][$key]["price"] = $priceType[$key];
		}echo "Just assigning the session variable joshCar2";	
	}
	

	var_dump($_SESSION["joshCart2"]);
	//unset($_SESSION["joshCart2"]);
	
	
	
	
	
	//var_dump($quantity);
	echo "</br>";
	//var_dump($priceType);
	
	foreach($quantity as $key => $value){
		
	$total[$key] = floatval($value)*floatval($priceType[$key]);
	$subtotal = $subtotal+$total[$key];
	}
	//var_dump($subtotal);
	//var_dump($total);
	
	echo "Total price of Season1 is " .$total["s1"] ."</br>";
	echo "Total price of Season1 is " .$total["s2"] ."</br>";
	echo "Total price of Season1 is " .$total["s3"] ."</br>";
	echo "Subtotal is " .$subtotal;
	
	
	echo "</br>";
	
	
	echo "pratap";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	
	$test = array();
	$test1 = array();
	$i=0;
	foreach($quantity as $key => $value){
		
	$test[$key]  = array("quantity" => floatval($value), "price" => floatval($priceType[$key]));
	$test1[$key]  = array("quantity" => floatval(7+$i), "price" => floatval(100));
	$i++;
	}
	
	echo("</br>");
	
	echo("</br>");
	var_dump($test1);
	echo("</br>");
	
	
	foreach($quantity as $key => $value){
		
		$test1[$key]["quantity"] = floatval($quantity[$key]);
		$test1[$key]["price"] = floatval($priceType[$key]);	
	
	}
	
	
	echo("</br>");
	
	echo("</br>");
	var_dump($test1);
	
	
	
	?>
	<!-- Print the cart detials in table -->
	
	<table>
	<tr><th>SEASON</th><th>QUANTITY</th><th>PRICE</th><th>TOTAL PRICE</th></tr>
	<?php foreach($quantity as $key => $value){
		
		 if($_SESSION["joshCart2"][$key]["quantity"] != 0)
			 echo "<tr><td><$key></td><td>".$_SESSION["joshCart2"][$key]["quantity"]."</td><td>".$_SESSION["joshCart2"][$key]["price"]."</td></tr>";
			
	
	}
	?>
	
	
	
	</table>
	
	<?php
		

	var_dump($_POST['plm']);
	
	foreach($quantity as $season => $season_value)
	{
		echo "season is " .$season. " and quanity is " .$season_value;
		echo "</br>";
	}

	foreach($mediaType as $season => $season_value)
	{
		echo "season is " .$season. " and media is " .$season_value;
		echo "</br>";
	}
	
	foreach($priceType as $season => $season_value)
	{
		echo "season is " .$season. " and price is " .$season_value;
		echo "</br>";
	}
	
	echo " Product is " .$_POST['season'];
	echo "the individual quantity is " .$quantity[$season];
	
	echo "</br>";
	
	echo var_dump($priceType);
	echo "</br>";
	
	echo $priceType[$season];
	echo "</br>";
	
	
	if (!isset($_SESSION["joshCart"]) || count($_SESSION["joshCart"]) < 1) { 
	    $_SESSION["joshCart"] = array($season => array("quantity" => $quantity[$season], "price" => $priceType[$season]));
	
	}
	
	//unset($_SESSION["joshCart"]);
	echo var_dump($_SESSION["joshCart"]);
	
	
	
	
	
	
	
	?>
	
	</section>
	</section>


	
	
	
	<?php include_once('footer.php'); ?>	
	
		
	</body>
	</html>