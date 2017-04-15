<?php include_once('header.php'); ?>
	
	
	
	<body class="methd2 bkgroundred defaultFirst">
	
<?php include_once('navigator.php'); ?>	
	
	<section class="headtemp thomascontact"> </section>
	<section class="maincontent"> 
	<header>
	<h1 class="defaultSecond">Fill out the form below to make a booking enquiry.</h1>
	</header>
	<form class="contactform" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
		
		<div class="contactlayout"></br>
		
		<div class="contactrow">
		<span class="contactlabel">First Name<label class="required"> *</label></span>
		<span class="contactfield"><input class="contactinput"  type="text" name="first_name" placeholder="Enter your First Name" pattern="^[a-zA-Z' -.]+$" Required></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Last Name<label class="required"> *</label></span>
		<span class="contactfield"><input class="contactinput"  type="text" name="last_name" placeholder="Enter your Last Name" pattern="^[a-zA-Z' -.]+$" Required></span>
		</div>
		
		
		<div class="contactrow">
		<span class="contactlabel">Email Address<label class="required"> *</label></span>
		<span class="contactfield"><input class="contactinput"  type="email" name="email_address" placeholder="Enter your Email Address" Required></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Phone Number<label class="required"> *</label></span>
		<span class="contactfield"><input class="contactinput"  type="tel" name="phone_number" pattern="^(\([0-9]{1,3}\)|[0-9]{1,3}|\+[0-9]{1,3})[ ]?\d{8,13}$" placeholder="Enter your Phone Number" Required></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Event Date<label class="required"> *</label></span>
		<span class="contactfield"><input class="contactinput"  type="date" name="event_date" Required></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Event Time<label class="required"> *</label></span>
		<span class="contactfield"><input class="contactinput"  type="time" name="event_time" Required></span>
		</div>
		
		<div class="contactrow">
		<span class="contactlabel">Flexibility Range<span class="flexibilitylabel"> (Flexibe to change Date & Time?)</span></span>
		<span class="contactfield"><input class="contactinput"  type="range" name="flexibility" min="1" max="3">
		<span class="inflexible">Inflexible</span>
		<span class="flexible">Flexible</span>
		<span class="superflexible">Super-flexible</span></span>
		</div></br>
			
		<div class="contactrow">
		<span class="contactlabel">Event Location</span>
		<span class="contactfield"><input class="contactinput"  type="text" name="event_location" placeholder="Enter your Event Location"></span>
		</div>
		
		<div class="contactdescriptionrow">
		<span class="contactdescriptionlabel">Event Description</span>
		<span class="contactdescriptionfield"><textarea cols="40" rows="15"name="event_description"></textarea></span>
		</div>
		
		
		<div class="contactrow">
		<span class="contactlabel">Performance Required</span>
		<span class="contactfield"><select class="performancesize" name="performance_required">
				<option value = "-None-" selected>-None-</option>
				<option value ="MC">MC</option>
				<option value = "Comedy Spot">Comedy Spot</option>
				<option value = "Full Show">Full Show</option>
				<option value = "Other">Other</option>
			</select></span>
		</div> 
		
		</div>
		<input class="contactbutton" type="submit" value="SUBMIT">
	</form>
	</section>
	</section>
<?php include_once('footer.php'); ?>	

	</body>
</html>