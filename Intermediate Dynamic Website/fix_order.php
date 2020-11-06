<!--
filename: [payment.html]
author: [Fouad Nazir Ahmad Saleemi]
created: [27/04/2020]
last modified: [04/05/2020]
description: [Payment page of the Fitness Club]
-->



<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Payment page of the Fitness Club" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Shark Fitness Club Payment Page</title>
	  <link rel="stylesheet"  href="styles/style.css" />
	  <script src= "scripts/part2.js"> </script>
	  <script src= "scripts/enhancements.js"> </script>
	</head>
	
	<body>
	
<?php

     //********************************************************** It shows the errors and make fields available to input te data and submit it again.****************************************//
	
	$page="payment_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
?>
  <h2>Please Fix the Errors</h2>
<?php
	// Redirection if  not from process_order.php
	if (!isset($_GET["errorMessage"])) {
		header("location:enquire.php");
		exit();// terminiate 
	}
	error_reporting (E_ALL ^ E_NOTICE); // Eradicate undefined index errors that left unchecked.
	
	
	// Display error message  
	echo "<div class='error'>";
	echo $_GET["errorMessage"];
	echo "</div>";
	
	session_start(); // Start Session.
	
	// Getting values from temporary storage by process_order.php.
	if (isset($_SESSION["firstname"]))    
		$firstname=$_SESSION["firstname"];
	else 
		$firstname="";
	
	if (isset($_SESSION["lasttname"]))    
		$lastname=$_SESSION["lasttname"];
	else 
		$lastname="";
	
	if (isset($_SESSION["email"]))    
		$email=$_SESSION["email"];
	else 
		$email="";
	
	if (isset($_SESSION["state"]))    
		$state=$_SESSION["state"];
	else 
		$state="";
	
	if (isset($_SESSION["postcode"]))    
		$postcode=$_SESSION["postcode"];
	else 
		$postcode="";
	
	if (isset($_SESSION["phonenumber"]))    
		$phonenumber=$_SESSION["phonenumber"];
	else 
		$phonenumber="";
	
	if (isset($_SESSION["price"]))    
		$price=$_SESSION["price"];
	else 
		$price="";
	
	if (isset($_SESSION["membershipduration"]))    
		$totalmonths=$_SESSION["membershipduration"];
	else 
		$totalmonths="";
	
	
	if (isset($_SESSION["totalprice"]))    
		$totalprice=$_SESSION["totalprice"];
	else 
		$totalprice="";
	
	
?>


  
		
		<section id="paymentdetails">
		
		     <p id="timeout" > 3:00</P>
		     <h2 id="paymentenquiry"> <strong>Payment Form</strong> </h2> <br />
			
			<form  id="paymentform" method="post" action="process_order.php">
			
				<fieldset>
				    <legend> Customer Details</legend>
					
					<p>
						<label for="firstname"> First Name </label>
						<input id="firstname" name="firstname" type="text" value="<?php echo $firstname; ?>" />
						
						<label for="lasttname"> Last Name </label>
						<input id="lasttname" name="lasttname" type="text"  value="<?php echo $lastname; ?>" />
                    </p> <br/>
					
					<p>
						<label for="postcode"> Postcode </label>
						<input id="postcode" name="postcode" type="text" value="<?php echo $postcode; ?>" />
						
						<label for="state"> State </label>
						<input id="state" name="state" type="text" value="<?php echo $state; ?>" />
					</p> <br />
					
					<p>
						<label for="email"> Email Address </label>
						<input id="email" name="email" type="email"  value="<?php echo $email; ?>" />
						
						<label for="phonenumber"> Phone Number </label>
						<input id="phonenumber" name="phonenumber" type="text" value="<?php echo $phonenumber; ?>" /> <br />
						
						
					</p><br />
			        <p>
						<label for="product"> Product </label>
						<input id="product" name="product" type="text" value="<?php echo $product; ?>" />
					 
					    <label for="membershipduration"> Number of Months </label>
						<input id="membershipduration" name="membershipduration" type="text" value="<?php echo $totalmonths; ?>" /> 
					
						
						
						
						
						
					</p> <br />
					
					<p>
						
		                <label for="totalprice"> Total Price $ </label>
						<input id="totalprice" name="totalprice" type="text" value="<?php echo $totalprice; ?>" /> <br?>
						 <label for="price"> Price $ </label>
						<input id="price" name="price" type="text" value="<?php echo $price; ?>" />
						
						
					</p> <br />
					
					
					
					
			    </fieldset>
			
			
			    <fieldset>
				    <legend> Credit Card Type</legend>
					
					<p> <br />
						<input name="cardtype" id="visa" type="radio" /> Visa <br/> 
						<input name="cardtype" id="mastercard" type="radio" /> Mastercard <br/> 
						<input name="cardtype" id="americanexpress" type="radio" /> American Express <br/> 
					</p>
			
			    </fieldset>
			
			
		        <fieldset>
				    <legend> Credit Card Details </legend>
					
					<p>
						<label for="cardname"> Name on Card </label>
						<input id="cardname" name="cardname" type="text" /> 

                    </p> <br/>
					
					
					<p>
						<label for="cardnumber"> Card Number </label>
						<input id="cardnumber" name="cardnumber" type="text" />
					</p><br />
					
					<p>
						<label for="cardexpirydate"> Card Expiry Date(mm-yy) </label>
						<input id="cardexpirydate" name="cardexpirydate" type="text" />
					</p><br />
					
					<p>
						<label for="cardverificationnumber"> Card Verification Number(CVV) </label>
						<input id="cardverificationnumber" name="cardverificationnumber" type="text"  />
					</p><br />
				</fieldset>
				
				
                      <p>
						<button type="submit" name = "submitButton" id="submit">Check Out</button>
						<button type="reset" id="cancelorder">Cancel Order</button>
				    </p>
		
			</form>
		</section> <br />
		
<?php
	include_once "footer.inc";
?>
	</body>
 </html>