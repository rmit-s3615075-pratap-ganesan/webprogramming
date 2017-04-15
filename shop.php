<?php include_once('header.php'); ?>
	
	<body class="methd2 bkgroundred defaultFirst" onload="loadprice()">
	
<?php include_once('navigator.php'); ?>		
	
	<section class="headtemp thomasshop"> </section>
	<section class="maincontent">
	<header>
	<h1 class="defaultSecond">ONLINE SHOPPING</h1>
	</header>
	
<?php
$price =array(
			"s1"=>floatval("17.00"),
			"s2"=>22.50,
			"s3"=>26.75,
);
	
?>	

<p>Inspired by Josh’s award-winning stand-up comedy, Please Like Me is a TV comedy about growing up quickly and realising that your parents are not heroes, but dopes with no idea what's going on.. </p>
  <!--   <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post"> -->
  <form action="cart.php" method="post">
	<div class="SeasonItem">
		<div class="SeasonName">
			<div style="float:left">
				<div><a Style="border:2px solid red; text-decoration:none" id="season1front" href="javascript:changePic('season1','images/season1front.jpg','season1front','season1back')"><img src="images/season1front.jpg"></a></div></br>
				<div><a Style="border:2px solid pink; text-decoration:none" id="season1back" href="javascript:changePic('season1','images/season1back.jpg','season1back','season1front')"><img src="images/season1back.jpg"></a></div>
			</div>
			<img id="season1" class="SeasonImage" src="images/season1front.jpg">
			</br>
			</br>
			<label><b>QTY:&nbsp</b></label>
			<select id="plm[s1]" name="plm[s1]" style="width:40px" onchange="changePrice('plm[s1]','t1',17.00)">
				<option value="0" selected>0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			
			<b>&nbsp;&nbsp;&nbsp;&nbsp;Price: &nbsp;$</b><label id="t1"></label>
			
		</div>
		<div class="SeasonDesc">
			<h2 class="defaultSecond" Style="text-align:center">Please Like Me - Season 1</h2>
			<b>Actors:</b>Josh Thomas, David Robertson, Caitlin Stasey, Judi Farr, Debra Lawrance
			<div><b>Running Time:</b>166 mins</div>
			<div><b>Price:</b>$<?php echo $price["s1"] ?></div>
			<div><b>Description:</b>
			Josh’s life is turned upside down when he’s dumped by his girlfriend, finds a weird new boyfriend and has to move back in with his mother after she overdoses on painkillers. Inspired by the award-winning standup comedy of Josh Thomas, PLEASE LIKE ME is a charming and bittersweet comedy/drama about cavoodles, custard tarts, boyfriends and girlfriends.
				<details>
					<summary style="color:blue; text-decoration:underline">click to view more info</summary></br>
						With his 21st birthday just around the corner, life finally seems to be coming together for Josh (Josh Thomas). He’s sharing a house with his best (and only) friend, Tom (Tom Ward), his dog, John, and Tom’s rabbit, $haniqua, and he’s doing adult things like cooking roast chickens and eating asparagus, and introduced to a decidedly odd but very attractive man, Geoffrey (Wade Briggs). And when his divorced mum, Rose (Debra Lawrance), overdoses on pain killers, Josh is forced to move back into the family home to keep an eye on her. If that’s not enough, he has to deal with his dad Alan’s (David Roberts) guilt over his ex-wife and clumsy attempts to hide his new, younger girlfriend, Mae (Renee Lim).
				</details>
			</div>
		</div>
	</div>
	<hr>
	
	
	
	<div class="SeasonItem">
		<div class="SeasonName">
			<div style="float:left">
				<div><a Style="border:2px solid red; text-decoration:none" id="season2front" href="javascript:changePic('season2','images/season2front.jpg','season2front','season2back')"><img src="images/season2front.jpg"></a></div></br>
				<div><a Style="border:2px solid pink; text-decoration:none" id="season2back" href="javascript:changePic('season2','images/season2back.jpg','season2back','season2front')"><img src="images/season2back.jpg"></a></div>
			</div>
			<img id="season2" class="SeasonImage" src="images/season2front.jpg">
			</br>
			</br>
			
			
			
			<label><b>QTY:&nbsp</b></label>
			<select id="plm[s2]" name="plm[s2]" style="width:40px" onchange="changePrice('plm[s2]','t2',22.50)">
				<option value="0" selected>0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			
			
			<b>&nbsp;&nbsp;&nbsp;&nbsp;Price: &nbsp;$</b><label id="t2"></label>
			
			
			
		</div>
		<div class="SeasonDesc">
			<h2 class="defaultSecond" Style="text-align:center">Please Like Me - Season 2</h2>
			<b>Actors:</b>Josh Thomas, Thomas Ward, Debra Lawrance, David Roberts, Caitlin Stacey, Wade Briggs, Nikita Leigh-Pritchard, Renee Lim, Keegan Joyce, Charles Cottier
			<div><b>Running Time:</b>250 mins</div>
			<div><b>Price:</b>$<?php echo $price["s2"] ?></div>
			<div><b>Description:</b>The coming-of-age comedy returns having received critical acclaim in Australia and the USA, where it was hailed as “best new comedy”. The award-winning Please Like Me is back for a second season, written by and starring Josh Thomas. 
				<details>
					<summary style="color:blue; text-decoration:underline">click to view more info</summary></br>
					The award-winning Please Like Me, created by Josh Thomas, is back. In Season Two, Josh tries to get through the day without upsetting anyone. There's a new dog, a new rabbit and a new baby. There’s no big twist. It isn't Lost. At the house, Naimh, whom Tom has been enjoying a friends-with-benefits situation after Claire leaves to go to Germany, shows up. Patrick also has a Grindr hookup, annoying Josh. When Grace needs a diaper change, an inept Josh takes her into the shower. Alan and Mae arrive to pick up Grace, finding the house full of people. Soon after, a manic Rose arrives with a new hairdo, dress, and puppy, announcing she has quit her medication.
				</details>
			</div>
		</div>
	</div>
	<hr>
	
	
	<div class="SeasonItem">
		<div class="SeasonName">
			<div style="float:left">
				<div><a Style="border:2px solid red; text-decoration:none" id="season3front" href="javascript:changePic('season3','images/season3front.jpg','season3front','season3back')"><img src="images/season3front.jpg"></a></div></br>
				<div><a Style="border:2px solid pink; text-decoration:none"id="season3back" href="javascript:changePic('season3','images/season3back.jpg','season3back','season3front')"><img src="images/season3back.jpg"></a></div>
			</div>
			<img id="season3" class="SeasonImage" src="images/season3front.jpg">
			</br>
			</br>
			 
			<label><b>QTY:&nbsp</b></label>
			<select id="plm[s3]" name="plm[s3]" style="width:40px" onchange="changePrice('plm[s3]','t3',26.75)">
				<option value="0" selected>0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			
			
			<b>&nbsp;&nbsp;&nbsp;&nbsp;Price: &nbsp;$</b><label id="t3"></label>
			
			
		</div>
		<div class="SeasonDesc">
			<h2  class="defaultSecond" Style="text-align:center">Please Like Me - Season 3</h2>
			<b>Actors:</b>Josh Thomas, Thomas Ward, Debra Lawrance, David Roberts, Caitlin Stacey, Wade Briggs, Nikita Leigh-Pritchard, Renee Lim, Keegan Joyce, Charles Cottier
			<div><b>Running Time:</b>250 mins</div>
			<div><b>Price:</b>$<?php echo $price["s3"] ?></div>
			<div><b>Description:</b>Josh Thomas, is back, as an unconventionally astute twentysomething makes sense of his friends and family and a cast of intriguing characters competes for screen time with John the Cavoodle. 
				<details>
					<summary style="color:blue; text-decoration:underline">click to view more info</summary></br>
					“Hilariously awkward”, “ridiculously funny”, “refreshing”, “terrific”, “incisive”, “sweet, sharp, sad, funny and astute”, “unlike anything else”, “one of the best shows on TV” and “the perfect coming-of-age story for people who’ll never grow up”. That’s how critics from Entertainment Weekly to Vogue, Time, The New Yorker, The Atlantic, The Los Angeles Times, The Age, The Sydney Morning Herald and The Australian have raved about the award-winning comedy drama Please Like Me and its creator, writer and star, Josh Thomas.Kicking off with a half-hour romcom and ending with an unforgettable family Christmas lunch, this season is filled with food, sex, drugs, dancing, singing, secrets and a transgender chicken.
				</details>
			</div>	
		</div>
		
	</div>
	</br>
	<div>
	<a style="margin-left:190px" class="txttrylink txttryvisited txttryhover txttryactive" href="https://play.google.com/store/tv/show/Please_Like_Me?id=lSwaQscC1Os&hl=en" target="_blank">Buy in Google Play store</a>
	<label style="margin-left:70px"><b>Total Price:&nbsp$</b></label><label id="totalSeasons"></label>
	<label style="margin-left:70px"><b>Type:&nbsp</b></label>
			<select name="media" style="width:70px">
				<option value="DVD">DVD</option>
				<option value="Blue Ray">Blue Ray</option>
			</select>
			<a style="margin-left:70px" class="txttrylink txttryvisited txttryhover txttryactive" href="https://itunes.apple.com/au/tv-season/please-like-me-season-3/id1047334958" target="_blank">Buy in iTunes</a>
	</br></br></br>
	<input id="addCart" type="submit" value="Add to cart" style="background-color:rgb(128, 0, 96); color:white;margin-left:570px">
	</br></br></br></br>
	</div>		
	</form>
	</section>
	</section>
	
	
	
	
	
	
	
	<?php include_once('footer.php'); ?>	
	
	<script>
	
	function changePrice(id,target,amt)
	{
			document.getElementById(target).innerHTML  = (parseFloat(document.getElementById(id).value)*amt).toFixed(2);
			activeAddCart();
	
		
	}
	
	
	
	
	function changePic(id,pic,target,detarget){
	document.getElementById(id).src=pic;
	document.getElementById(target).style.border="2px solid red";
	document.getElementById(detarget).style.border="2px solid pink";
	}
	
	function loadprice(){
		initialPrice=0;
		document.getElementById("t1").innerHTML=initialPrice.toFixed(2);
		document.getElementById("t2").innerHTML=initialPrice.toFixed(2);
		document.getElementById("t3").innerHTML=initialPrice.toFixed(2);
		document.getElementById("plm[s1]").value=0;
		document.getElementById("plm[s2]").value=0;
		document.getElementById("plm[s3]").value=0;
		activeAddCart();
		calculateTotal();
	}
	
	
	function activeAddCart(){
		var active = false;
		if(document.getElementById("plm[s1]").value!=0)
			active = true;
		if(document.getElementById("plm[s2]").value!=0)
			active = true;
		if(document.getElementById("plm[s3]").value!=0)
			active = true;
		
		if(active)
			document.getElementById("addCart").disabled = false;
		else
			document.getElementById("addCart").disabled = true;
		
		calculateTotal();
		
	}
	
	
	function calculateTotal(){
		
		document.getElementById("totalSeasons").innerHTML = (parseFloat(document.getElementById("t1").innerHTML)+parseFloat(document.getElementById("t2").innerHTML)+parseFloat(document.getElementById("t3").innerHTML)).toFixed(2);
	}
	
	
	
	</script>
	
	
	
	</body>
</html>
