<?php include_once('header.php'); 
	
	 ?>
	
	<body class="methd2 bkgroundred defaultFirst" onload="checkremember()">
	
<?php include_once('navigator.php'); 
	$fnameError='';
	$lnameError='';
	$emailError='';
	$phoneError='';
	$creditnoError='';
	$creditmthError='';
	$credityrError='';
	$addressError='';
	
	
	
	if (count($_POST)>0) 
   { 
      if (empty($_POST['fname']) && $_POST['fname']!==0) 
        $fnameError=' <span style="color:white">Cannot be blank</span>'; 
      else if(!(preg_match("^[a-zA-Z' -.]+$",$_POST['fname']))){
        $fnameError='<span style="color:white;font:10px">Can contain only letters,characters form list[ ,-\'.]</span>';  
		
	  }
       
    }
	
	
	
	
	
	
	
	
?>	
	<section class="headtemp thomascontact"> </section>
	<section class="maincontent"> 
	<header>
	<h1 class="defaultSecond">Checkout Page</h1>
	</header>
	<form action="checkout.php" method="post">
		
		<div class="checkoutlayout"></br>
		
		<div class="contactrow">
		<span class="contactlabel">First Name<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput" name="fname" type="text" id="first_name" placeholder="Enter your First Name" ></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $fnameError; ?></span>
		</div>

		
		<div class="contactrow">
		<span class="contactlabel">Last Name<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  type="text" id="last_name" placeholder="Enter your Last Name" pattern="^[a-zA-Z' -.]+$" ></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $lnameError; ?></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Email Address<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  type="email" id="email_address" placeholder="Enter your Email Address" ></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $emailError; ?></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Phone Number<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  type="tel" id="phone_number" pattern="^(\([0-9]{1,3}\)|[0-9]{1,3}|\+[0-9]{1,3})[ ]?\d{8,13}$" placeholder="Enter your Phone Number" ></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $phoneError; ?></span>
		</div>
		
		
		<div class="contactrow">
		<span class="contactlabel">Credit Card Number<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput" id="credit_card" pattern="\d{4}[ ]?\d{4}[ ]?\d{4,5}[ ]?\d{1,5}" ></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $creditnoError; ?></span>
		</div>	


		
		<div class="contactrow">
		<span class="contactlabel">Credit Card Expirty Month<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  type="number" min="1" max="12" id="expiry_month" ></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $creditmthError; ?></span>
		</div>
		
		
		<div class="contactrow">
		<span class="contactlabel">Credit Card Expirty Year<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  type="number" id="expiry_year" min="2016" pattern="\d{4}"></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $credityrError; ?></span>
		</div>	
		
		</br>		
		<div class="contactdescriptionrow">
		<span class="contactlabel">Address</span><label class="required">*</label>
		<span class="contactdescriptionfield"><textarea id="address" cols="40" rows="15" id="address" ></textarea></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span class="errorfield"><?php echo $addressError; ?></span>
		</div>	
		
		
		
		</br>
		<div class="contactrow">
		<span class="contactlabel">Delivery Method</span>
		<span class="checkoutfield"><select class="performancesize" name="deliveryMthd">
				<option value = "RD" selected>Regular Delivery(free)</option>
				<option value ="RC">Regular Courier($7.00)</option>
				<option value = "EC">Express Courier($10.50)</option>
		</select></span>
		</div> 
		
		<div class="contactrow">Please remember me
		<input type="checkbox" id="remember" onchange="rememberdetail()"></div>
		
		
		
		
		</div>
		<input class="contactbutton" type="submit" value="Order" onclick="rememberdetail()">
		
	</form>
	
	</section>
	</section>
<?php include_once('footer.php'); ?>

<script>
function rememberdetail(){
	if(document.getElementById("remember").checked==true){
				
    localStorage.setItem("fname", document.getElementById("first_name").value);
	localStorage.setItem("lname", document.getElementById("last_name").value);
	localStorage.setItem("email", document.getElementById("email_address").value);
	localStorage.setItem("address", document.getElementById("address").value);
	localStorage.setItem("phone", document.getElementById("phone_number").value);
	localStorage.setItem("remember",document.getElementById("remember").checked);
    
   
	//console.log(localStorage.getItem("lfirstname"));
	}
	else{
			localStorage.removeItem("fname");
			localStorage.removeItem("lname");
			localStorage.removeItem("email");
			localStorage.removeItem("address");
			localStorage.removeItem("phone");
			localStorage.removeItem("remember");
		
	}
	
	
}
	
function checkremember(){
document.getElementById("first_name").value=localStorage.getItem("fname");
document.getElementById("last_name").value=localStorage.getItem("lname");	
document.getElementById("email_address").value=localStorage.getItem("email");	
document.getElementById("address").value=localStorage.getItem("address");
document.getElementById("phone_number").value=localStorage.getItem("phone");
document.getElementById("remember").checked = localStorage.getItem("remember");

	
}	
	
	
</script>
	</body>
</html>