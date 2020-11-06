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
	

		
		<section id="paymentdetails">
		
		    
		     <h2 id="paymentenquiry"> <strong>Query Form</strong> </h2> <br />
			
			<form  id="paymentform" method="post" action="manager_query.php" >
			
				<fieldset>
				    <legend> Customer Based Query</legend>
					
					<p>
						<label for="firstnameone"> First Name </label>
						<input id="firstnameone" name="firstnameone" type="text"  />
						
						<label for="lastnameone"> Last Name </label>
						<input id="lastnameone" name="lastnameone" type="text"  />
                    </p> <br/>
					
				</fieldset>	
						
				
                <fieldset>
				    <legend> Product Based Query</legend>				
			        <p>
						<label for="producttype"> Product </label>
						<input id="producttype" name="producttype" type="text" />
					 
					</p> <br />
				</fieldset>	
					
					
				<fieldset>
				    <legend> Order Status Based Query</legend>				
			        <p>
						<label for="orderstatus"> Order Status </label>
						<input id="orderstatus" name="orderstatus" type="text"/>
					 
					</p> <br />
				</fieldset>		
					
					
				<fieldset>
				    <legend> Order Cost Based Query</legend>				
			        <p>
						<label for="ordercost"> Order Cost </label>
						<input id="ordercost" name="ordercost" type="text"/>
					 
					</p> <br />
				</fieldset>		
			   
				
				
                      <p>
						<button type="submit" value = "search">Query</button>
						<button type="submit" name = "allorders" value = "allorders">All orders</button>
					
						
				    </p>
		
			</form><br />
			
			<form  id="paymentform" method="post" action="manager_logout.php" >
			
				 <p>
						<button type="submit" value = "logout">Log Out</button>
						
					
						
				    </p>
		
			</form>
		</section> <br />
		

	</body>
 </html>