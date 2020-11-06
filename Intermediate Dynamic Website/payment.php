<!--
filename: [payment.php]
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

    //********************************************************** To take input from the customer and send it to process_order.php.****************************************//
	
	
	
	$page="payment_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
	error_reporting (E_ALL ^ E_NOTICE);
	
?>
		
		<section id="paymentdetails">
		
		     <p id="timeout" > 3:00</P>
		     <h2 id="paymentenquiry"> <strong>Payment Form</strong> </h2> <br />
			
			<form  id="paymentform" method="post" action="process_order.php" novalidate >
			
				<fieldset>
				    <legend> Customer Details</legend>
					
					<p>
						<label for="firstname"> First Name </label>
						<input id="firstname" name="firstname" type="text" readonly />
						
						<label for="lasttname"> Last Name </label>
						<input id="lasttname" name="lasttname" type="text"  readonly/>
                    </p> <br/>
					
					<p>
						<label for="postcode"> Postcode </label>
						<input id="postcode" name="postcode" type="text" readonly />
						
						<label for="state"> State </label>
						<input id="state" name="state" type="text" readonly />
					</p> <br />
					
					<p>
						<label for="email"> Email Address </label>
						<input id="email" name="email" type="email"  readonly />
						
						<label for="phonenumber"> Phone Number </label>
						<input id="phonenumber" name="phonenumber" type="text" readonly /> <br />
						
						
					</p><br />
			        <p>
						<label for="product"> Product </label>
						<input id="product" name="product" type="text" readonly />
					 
					    <label for="membershipduration"> Number of Months </label>
						<input id="membershipduration" name="membershipduration" type="text" readonly /> 
					
						
						
						
						
						
					</p> <br />
					
					<p>
						
		                <label for="totalprice"> Total Price $ </label>
						<input id="totalprice" name="totalprice" type="text" readonly /> <br>
						 <label for="price"> Price $ </label>
						<input id="price" name="price" type="text" readonly />
						
						
					</p> <br />
					
					
					
					
			    </fieldset>
			
			
			    <fieldset>
				    <legend> Credit Card Type</legend>
					
					<p> <br />
						<input name="cardtype" id="visa" value ="visa" type="radio" /> Visa <br/> 
						<input name="cardtype" id="mastercard" value="mastercard" type="radio" /> Mastercard <br/> 
						<input name="cardtype" id="americanexpress" value="americanexpress" type="radio" /> American Express <br/> 
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
						<input id="cardnumber" name="cardnumber" type="text"  />
					</p><br />
					
					<p>
						<label for="cardexpirydate"> Card Expiry Date(mm-yy) </label>
						<input id="cardexpirydate" name="cardexpirydate" type="text" />
					</p><br />
					
					<p>
						<label for="cardverificationnumber"> Card Verification Number(CVV) </label>
						<input id="cardverificationnumber" name="cardverificationnumber" type="text" />
					</p><br />
				</fieldset>
				
				
                      <p>
						<button type="submit" name = "submitButton" id="submit">Check Out</button>
						<button type="reset" name="cancelorder" id="cancelorder">Cancel Order</button>
				    </p>
		
			</form>
		</section> <br />
		
<?php
	include_once "footer.inc";
?>
	</body>
 </html>