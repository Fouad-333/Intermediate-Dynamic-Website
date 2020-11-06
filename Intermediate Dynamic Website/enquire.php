<!--
filename: [enquire.php]
author: [Fouad Nazir Ahmad Saleemi]
created: [30/03/2020]
last modified: [05/04/2020]
description: [Product enquiry page of the Fitness Club]
-->
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Enquire page of the Fitness Club" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Shark Fitness Club Enquire Page</title>
	  <link rel="stylesheet"  href="styles/style.css" />
	  <script src= "scripts/part2.js"> </script>
	 
	</head>
	
	<body>
	
<?php
	$page="enquire_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
?>
		<section id="personaldetails">
			
			<h2 id="productenquiry"> <strong>Product Enquiry Form</strong> </h2> <br />
			<form id="enquireform" method="post" action="payment.php" novalidate >
				<fieldset>
				    <legend> Personal Details </legend>
					
					<p>
						<label for="firstname"> First Name </label>
						<input id="firstname" name="firstname" type="text" maxlength="25" pattern="^[a-zA-Z \s]*$" required="required"/>
						
						<label for="lasttname"> Last Name </label>
						<input id="lasttname" name="lasttname" type="text" maxlength="25" pattern="^[a-zA-Z \s]*$" required="required"/>
                    </p> <br/>
					
					
					<p>
						<label for="email"> Email Address </label>
						<input id="email" name="email" type="email" required="required"/>
					</p><br />
				</fieldset>
				
				<fieldset>
					<legend> Address Details </legend>
					
					<p>
						<label for="streetaddress"> Street Address </label>
						<input id="streetaddress" name="streetaddress" type="text"  maxlength="40" required="required" />
					</p> <br />
					
					<p>
						<label for="suburbortown"> Suburb/Town </label>
						<input id="suburbortown" name="suburbortown" type="text"  maxlength="20"  required="required"/>
					</p> <br />
					
					<p>
						<label for="state"> State </label>
							<select id="state">
								<option selected="selected"> VIC </option>
								<option> NSW </option>
								<option> QLD </option>
								<option> NT </option>
								<option> WA </option>
								<option> SA </option>
								<option> TAS </option>
								<option> ACT </option>
							</select> 
					</p> <br />
					
					<p>
						<label for="postcode"> Postcode </label>
						<input id="postcode" name="postcode" type="text"  pattern="^[0-9]{4}$" maxlength="4" required="required"/>
					</p> <br />
			
			     </fieldset>
				
				<fieldset>
				    <legend> Contact Details </legend>
					<p>
						<label for="phonenumber"> Phone Number </label>
						<input id="phonenumber" name="phonenumber" type="text" pattern="^[0-9]{10}$" maxlength="10" placeholder="0405678768" required="required"/>
					</p> <br />
					
					<p> Preferred Contact: <br />
						<input name="preferrdcontact" type="radio" checked="checked"/> Email <br/> 
						<input name="preferrdcontact" type="radio" /> Phone <br/> 
						<input name="preferrdcontact" type="radio" /> Post <br/> 
					</p>
			
			    </fieldset>
				 
				<fieldset>
				    <legend> Product Details </legend>
					<p>
						<label for="product"> Product </label>
							<select id="product"> 
								<option selected="selected">  Platinum </option>
								<option> Gold  </option>
								<option>   Silver </option>
							</select>
					</p><br />
					
					<p> Product Features:  <br />
						<label for="gym">  </label>
						<input id="gym" name="gym" type="checkbox" checked="checked" />Gym <br/> 
					
						<label for="swimmingpool">  </label> 
						<input id="swimmingpool" name="swimmingpool" type="checkbox" />  Swimming Pool <br/> 
						
						<label for="squash">  </label> 
						<input id="squash" name="squash" type="checkbox" /> Squash <br/> 
			    </fieldset> <br />
				
				
				
				
				<fieldset>
				    <legend> Price Details </legend>
					
					<p> Price/Monthly: <br />
						<input name="price" id="platinum1" type="radio" /> Platinum $120 <br/> 
						<input name="price" id="gold1" type="radio" /> Gold $90 <br/> 
						<input name="price" id= "silver1" type="radio" /> Silver $70 <br/> 
					</p> <br />
					
					
					<p> Please Enter Number of Months:  <br />
						<label for="membershipduration">  </label>
						<input id="membershipduration" name="membershipduration" type="text" />
					
			    </fieldset> <br />
				
				
				
				
				
				
				
				
			
					 
				    <p>
						<label for="comments">	Comments </label> <br />
						<textarea id="comments" name="comments" rows="4" cols="40" placeholder=" Please write here..."></textarea>
					</p>
				    
					<p>
						<button type="submit" id="submit">Pay Now</button>
						<input id="reset" name="reset" type="reset"/>
				    </p>
			</form>
		</section> <br />
	
<?php
	include_once "footer.inc";
?>
	</body>
 </html>