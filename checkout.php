<?php include_once('header.php'); 
	
	 ?>
	
	<body class="methd2 bkgroundred defaultFirst" onload="checkremember()">
	
<?php include_once('navigator.php'); 
	$_SESSION["totalWD"] =$_SESSION["subtotal"];
	
	
	
	
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
	<form action="orderconfirmation.php" onsubmit="return errorValidation()" method="POST">
		
		<div class="checkoutlayout"></br>
		
		<div class="contactrow">
		<span class="contactlabel">First Name<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput" name="fname" type="text" id="first_name" placeholder="Enter your First Name" ></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="fnameError" class="errorfield"></span>
		</div>

		
		<div class="contactrow">
		<span class="contactlabel">Last Name<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  name="lname" type="text" id="last_name" placeholder="Enter your Last Name" pattern="^[a-zA-Z' -.]+$" ></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="lnameError" class="errorfield"></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Email Address<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput" name="email_address" type="email" id="email_address" placeholder="Enter your Email Address" ></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="emailError" class="errorfield"></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Phone Number<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  type="tel" id="phone_number" name="phone_number" pattern="^(\([0-9]{1,3}\)|[0-9]{1,3}|\+[0-9]{1,3})[ ]?\d{8,13}$" placeholder="Enter your Phone Number" ></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="phoneErrroMsg" class="errorfield"></span>
		</div>
		
		
		<div class="contactrow">
		<span class="contactlabel">Credit Card Number<label class="required"> *</label></span>
		<span class="checkoutfield"><input pattern="\d{4}[ ]?\d{4}[ ]?\d{4,5}[ ]?\d{1,5}" name="credit" class="contactinput" id="credit_card"></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="creditError" class="errorfield"></span>
		</div>	


		
		<div class="contactrow">
		<span class="contactlabel">Credit Card Expirty Month<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput"  name="month" type="number" min="1" max="12" id="expiry_month"></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="expError" class="errorfield"></span>
		</div>
		
		
		<div class="contactrow">
		<span class="contactlabel">Credit Card Expirty Year<label class="required"> *</label></span>
		<span class="checkoutfield"><input class="contactinput" name="year" type="number" id="expiry_year" min="2016" max="2030" pattern="\d{4}"></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="dateError" class="errorfield"></span>
		</div>	
		
		</br>		
		<div class="contactdescriptionrow">
		<span class="contactlabel">Address</span><label class="required">*</label>
		<span class="contactdescriptionfield"><textarea id="address" cols="40" rows="15" name="address" ></textarea></span>
		</div>
		
		<div class="checkoutrow">
		<span class="contactlabel"><label class="required"></label></span>
		<span id="addError" class="errorfield"></span>
		</div>	
		
		
		
		</br>
		<div class="contactrow">
		<span class="contactlabel">Delivery Method</span>
		<span class="checkoutfield"><select class="performancesize" name="deliveryMthd" id="deliveryOption" onchange="selectDelivery()">
				<option value = "d1" selected>Regular Delivery(free)</option>
				<option value ="d2">Regular Courier($7.00)</option>
				<option value = "d3">Express Courier($10.50)</option>
		</select></span>
		</div> 
		
		</br>
		<div class="contactrow">
		<span class="contactlabel">Total:</span>
		<span class="checkoutfield"><label class="contactinput" id="totalWD"></label></span>
		<input type="hidden" name="delivery" id="delivery">
		</div>
		</br>
		<div class="contactrow">Please remember me
		<input type="checkbox" id="remember"></div>
		
		
		
		
		</div>
		<input class="contactbutton" type="Submit" value="Order">
		
	</form>
	
	</section>
	</section>
<?php include_once('footer.php'); ?>

<script>

var totalWOD = "<?php echo $_SESSION["totalWD"]; ?>";
var totalWD = totalWOD;

function selectDelivery(){
	var selectedDelivery;
	
	if(document.getElementById("deliveryOption").value=="d2"){
			selectedDelivery =7.00;			
	}
	
	else if(document.getElementById("deliveryOption").value=="d3"){
			selectedDelivery=10.50;	
	}
	
	else if(document.getElementById("deliveryOption").value=="d1"){
		selectedDelivery=0;		
	}
	
	totalWD = (parseFloat(totalWOD) + selectedDelivery).toFixed(2);
	document.getElementById("totalWD").innerHTML="$"+totalWD;
	document.getElementById("delivery").value = (selectedDelivery).toFixed(2);
	
	
	}








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
	selectDelivery();
document.getElementById("first_name").value=localStorage.getItem("fname");
document.getElementById("last_name").value=localStorage.getItem("lname");	
document.getElementById("email_address").value=localStorage.getItem("email");	
document.getElementById("address").value=localStorage.getItem("address");
document.getElementById("phone_number").value=localStorage.getItem("phone");
document.getElementById("remember").checked = localStorage.getItem("remember");
}	


function errorValidation(){
	
	document.getElementById("fnameError").innerHTML="";
	document.getElementById("lnameError").innerHTML="";
	document.getElementById("emailError").innerHTML="";
	document.getElementById("phoneErrroMsg").innerHTML="";
	document.getElementById("creditError").innerHTML="";
	document.getElementById("expError").innerHTML="";
	document.getElementById("dateError").innerHTML="";
	document.getElementById("addError").innerHTML="";
	
	
	
	rememberdetail();
	
	var isDatecorrect = true;
	console.log(document.getElementById("first_name").value);
	
	
	var name = new RegExp("^[A-Za-z-.' ]*$");
	var addname = new RegExp("^[0-9A-Za-z-.' ]*$");
	
	
	if(!name.test(document.getElementById("first_name").value))
	{
		isDatecorrect = false;
		document.getElementById("fnameError").innerHTML = "Can have only letters, and special characters like \"  ,-'";
		
	}
	
	
	if(document.getElementById("first_name").value=="")
	{
		isDatecorrect=false;
		document.getElementById("fnameError").innerHTML = "Cannot be blank";
	}
	
	
	
	
	
	if(!name.test(document.getElementById("last_name").value))
	{
		isDatecorrect = false;
		document.getElementById("lnameError").innerHTML = "Can have only letters, and special characters like \"  ,-'";
		
	}
	
	
	if(document.getElementById("last_name").value=="")
	{
		isDatecorrect=false;
		document.getElementById("lnameError").innerHTML = "Cannot be blank";
	}
	
	
	
	if(document.getElementById("email_address").value=="")
	{
		isDatecorrect=false;
		document.getElementById("emailError").innerHTML = "Cannot be blank";
	}
	
	
	if(document.getElementById("phone_number").value=="")
	{
		isDatecorrect=false;
		document.getElementById("phoneErrroMsg").innerHTML = "Cannot be blank";
	}
	
	
	if(document.getElementById("credit_card").value=="")
	{
		isDatecorrect=false;
		document.getElementById("creditError").innerHTML = "Cannot be blank";
	}
	
	if(document.getElementById("expiry_month").value=="")
	{
		isDatecorrect=false;
		document.getElementById("expError").innerHTML = "Cannot be blank";
	}
	
	if(document.getElementById("expiry_year").value=="")
	{
		isDatecorrect=false;
		document.getElementById("dateError").innerHTML = "Cannot be blank";
	}
	
	if(document.getElementById("address").value=="")
	{
		isDatecorrect=false;
		document.getElementById("addError").innerHTML = "Cannot be blank";
	}
	
	
	if(!addname.test(document.getElementById("address").value))
	{
		isDatecorrect = false;
		document.getElementById("addError").innerHTML = "Can have only letters, and special characters like \"  ,-'";
		
	}
	
	
	
	
	return isDatecorrect;
}






	
	
</script>
	</body>
</html>