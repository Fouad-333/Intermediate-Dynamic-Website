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

    //********************************************************** To check the login data against database and direct to the manager.php.****************************************//
	
	error_reporting (E_ALL ^ E_NOTICE); // Eradicate undefined index errors that left unchecked.
	
	$page="manager_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";

	// Get values from enhancements4.php and checking for errors.
	$userid = trim($_POST['userid']); 
	$password = trim($_POST['password']);
	
	if($userid != "")
	{
	// Establish connection.
	    require_once ("settings.php");
		
		$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
		if(!$conn)
		{
			echo "<p>Database connection failed!!!!!!!</p>";
		}
		else // Write query and send it to database.
		{
			$query = "select user_id, password from login where user_id like '$userid' and password like '$password' ;";
			$result = mysqli_query ($conn, $query);
			
			if(!$result)
			{
				echo "<p>Something wrong with query ", $query, "</p>";
			}
			else // If query is correct, fetch data from database.
			{
				if (mysqli_num_rows($result)==0) { echo "<p>Please enter correct credentials. UserID should numeric and 9 digists long, and password should be numeric and 10 digits long.</p>";}
				
				else { // If fectching data is ok, then direct to manager.php.
					
					header("location:manager.php");
				}
			}
		}
		mysqli_close($conn); // Close connection.
	}
		
	
	?>
		
		<section id="paymentdetails">
		
		    
		     <h2 id="paymentenquiry"> <strong>Log-in Details</strong> </h2> <br />
			
			<form  id="paymentform" method="post" action="enhancements4.php" >
			
				<fieldset>
				    <legend> Log-in details</legend>
					
					<p>
						<label for="userid"> User ID </label>
						<input id="userid" name="userid" type="text"  />
						
						<label for="password"> Password </label>
						<input id="password" name="password" type="text"  />
                    </p> <br/>
					
				</fieldset>	
						
				
              
				
				
                      <p>
						<button type="submit" value = "login">Log in</button>
						
					
						
				    </p>
		
			</form>
		</section> <br />
		
<?php
	include_once "footer.inc";
?>
	</body>
 </html>