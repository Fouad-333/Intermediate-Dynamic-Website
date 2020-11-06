<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Home page of the Fitness Club" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Shark Fitness Club Home Page</title>
	  <link rel="stylesheet"  href="styles/style.css" />
	</head>
	
	<body>
	
<?php
  
    //********************************************************** To process data of the payment.php and direct to receipt.php.****************************************//

    // A method to delete irregular characters and spaces..

    function sanitise_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	
	return $data; 
	}
	
	
	error_reporting (E_ALL ^ E_NOTICE); // Eradicate undefined index errors that left unchecked.
	
	// Redirecting to payment.php in case of direct approach to the process_order.php.
	if (!isset($_POST["submitButton"])) {
		header("location:payment.php");
		exit();
	}
	
	
	
	
	// Array to hold all error messages.
	$errorMessage = "";
  
	// getting some values from payment.php.
	$totalprice = trim($_POST["totalprice"]);
	$product = trim($_POST["product"]);
	$state = trim($_POST["state"]);
	$status = "PENDING";
	
	//First name
	if (!isset($_POST["firstname"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$firstname = $_POST["firstname"];
		$firstname = sanitise_input($firstname);
		if ($firstname=="") 
		{
				$errorMessage .= "<p>Please enter first name!.</p>";
		}
		
		else if (!preg_match("/^[a-zA-Z \s]{0,26}$/",$firstname)) 
		
		{
				$errorMessage .= "<p>First name can only contain max 25 alpha characters!.</p>";
		}
	}
	
	
	//last name
	if (!isset($_POST["lasttname"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$lastname = $_POST["lasttname"];
		$lastname = sanitise_input($lastname);
		if ($lastname=="") 
		{
				$errorMessage .= "<p>Please enter last name!.</p>";
		}
		
		else if (!preg_match("/^[a-zA-Z \s]{0,26}$/",$lastname)) 
		
		{
				$errorMessage .= "<p>Last name can only contain max 25 alpha characters!.</p>";
		}
	}
	
	
	
	//email
	if (!isset($_POST["email"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$email = $_POST["email"];
		$email = sanitise_input($email);
		if ($email=="") 
		{
				$errorMessage .= "<p>Please enter email address.</p>";
		}
		
		else if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$email)) 
		
		{
				$errorMessage .= "<p>Email address can only contain max 25 alpha and numeric characters.</p>";
		}
	}	

	
	
	
	
	
	//state
	if (!isset($_POST["state"])) {
		header("location:enquire.php");
		exit();
	}
	else{
				$state = $_POST["state"];
			$state = sanitise_input($state);
			$postcode = $_POST["postcode"];
			$postcode = sanitise_input($postcode);
			
			$pcode = substr($postcode, 0, 1);
			echo "<p>$state</p>";
			
			
			
			if($state == "ACT")
			{
				if($pcode == 0)
				{
					
				}
				else{
					$errorMessage .= "<p>You have selected ACT.Please enter postcode staring with 0!!!.</p>";
					
				}
			}

			else if($state == "VIC")
			{
				if($pcode == 3 || $pcode == 8)
				{
					
				}
				else{
					$errorMessage .="<p>You have selected VIC. Please enter postcode staring with 3 or 8.</p>";
					
				}
			}
			
			else if($state == "NSW")
			{
				if($pcode == 1 || $pcode == 2)
				{
					
				}
				else{
					$errorMessage .="<p>You have selected NSW. Please enter postcode staring with 1 or 2.</p>";
					
				}
			}
			
			else if($state == "QLD")
			{
				if($pcode == 4 || $pcode == 9)
				{
					
				}
				else{
					$errorMessage .="<p>.You have selected QLD. Please enter postcode staring with 4 or 9.</p>";
					
				}
			}
			
			else if($state == "WA")
			{
				if($pcode == 6 )
				{
					
				}
				else{
					$errorMessage .= "<p>You have selected WA. Please enter postcode staring with 6.</p>";
					
				}
			}
			
			else if($state == "NT")
			{
				if($pcode == 0 )
				{
					
				}
				else{
					$errorMessage .= "<p>You have selected NT. Please enter postcode staring with 0.</p>";
					
				}
			}
			
			else if($state == "SA")
			{
				if($pcode == 5 )
				{
					
				}
				else
				{
					$errorMessage .="<p>You have selected SA. Please enter postcode staring with 5.</p>";
					
				}
			}
			
			else if($state == "TAS")
			{
				if($pcode == 7 )
				{
					
				}
				else{
					$errorMessage .= "<p>You have selected TAS. Please enter postcode staring with 7.</p>";
					
				}
			}
	
	}
	
	
	//postcode
	if (!isset($_POST["postcode"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$postcode = $_POST["postcode"];
		$postcode = sanitise_input($postcode);
		if ($postcode=="") 
		{
				$errorMessage .= "<p>Please enter postcode.</p>";
		}
		
		else if (!preg_match("/^[0-9]{4}$/",$postcode)) 
		
		{
				$errorMessage .= "<p>The postcode should be 4 digits long.</p>";
		}
	}
	
	
	//***************phonenumber
	if (!isset($_POST["phonenumber"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$phonenumber = $_POST["phonenumber"];
		$phonenumber = sanitise_input($phonenumber);
		if ($phonenumber=="") 
		{
				$errorMessage .= "<p>Please enter phonenumber.</p>";
		}
		
		else if (!preg_match("/^[0-9]{10}$/",$phonenumber)) 
		
		{
				$errorMessage .= "<p>The phonenumber should contain only max 10 digits.</p>";
		}
		
	}
	
	
	
	//price
	if (!isset($_POST["price"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$price = $_POST["price"];
		$price = sanitise_input($price);
		if ($price=="") 
		{
				$errorMessage .= "<p>Please select a price plan.</p>";
		}
		
		
	}
	
	
	
	//totalprice
	if (!isset($_POST["totalprice"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$totalprice = $_POST["totalprice"];
		$totalprice = sanitise_input($totalprice);
		if ($totalprice=="") 
		{
				$errorMessage .= "<p>Please select a price plan.</p>";
		}
		
		
	}
	
	
	
	
	//totalmonths
	if (!isset($_POST["membershipduration"])) {
		header("location:enquire.php");
		exit();
	}
	else
	{
		$totalmonths = $_POST["membershipduration"];
		$totalmonths = sanitise_input($totalmonths);
		if ($totalmonths=="") 
		{
				$errorMessage .= "<p>Please enter value in membership duration.</p>";
		}
		
		else if ($totalmonths < 0) 
		
		{
				$errorMessage .= "<p>You have entered a negative number. Please enter a positive number.</p>";
		}
	
		else if (!preg_match("/^[0-9]{0,10}$/",$totalmonths)) 
		
		{
				$errorMessage .= "<p> Please enter a digit.</p>";
		}
		
	}
	


    //cardnumber
	 if (!isset($_POST["cardnumber"])) {
		header("location:payment.php");
		exit();
	}
	else
	{
		$cardtype = $_POST["cardtype"];
		$cardtype = sanitise_input($cardtype);
		$cardnumber = $_POST["cardnumber"];
		$cardnumber = sanitise_input($cardnumber);
		$number = substr($cardnumber,0,1); 
	
		
		
		
    if(preg_match("/^[0-9]{15,16}$/",$cardnumber))
			{
		
				if($cardtype == "visa" )
				{
					if(preg_match("/^[0-9]{16}$/",$cardnumber)&& $number == 4)
					{
						
					}
					else{
						$errorMessage .= "<p>Your card number doesnot match with visa card.</p>";
						
					}
					
				}
				
				else if($cardtype == "mastercard" )
				{
					if(preg_match("/^(?:5[1-5][0-9]{14})$/",$cardnumber))
					{
						
					}
					else{
						$errorMessage .= "<p>Your card number doesnot match with mastercard.</p>";
						
					}
					
				}
				
				else if($cardtype == "americanexpress")
				{
					if(preg_match("/^(?:3[47][0-9]{13})$/",$cardnumber))
					{
						
					}
					else{
						$errorMessage .= "<p>Your card number doesnot match with Americanxpress.</p>";
						
					}
					
				}
			}		
			
			else
				{
					$errorMessage .= "<p>Please enter a valid card number.</p>";
				
			 }
		
	}
		
	//cardtype
	if (!isset($_POST["cardtype"])) {
		header("location:payment.php");
		exit();
	}
	else
	{
	
		$cardtype = $_POST["cardtype"];
		$cardtype = sanitise_input($cardtype);
		
        if($cardtype == "")	
		{$errorMessage .= "<p>Please select a card type.</p>";}
         
	}
	
     //cardname
	if (!isset($_POST["cardname"])) {
		header("location:payment.php");
		exit();
	}
	else
	{
		$cardname = $_POST["cardname"];
		$cardname = sanitise_input($cardname);
		if ($cardname=="") 
		{
				$errorMessage .= "<p>Please enter card name.</p>";
		}
		
		else if (!preg_match("/^[a-zA-Z \s]{0,26}$/",$cardname)) 
		
		{
				$errorMessage .= "<p>Please enter max 25 alpha characters in card name.</p>";
		}
	
	}
	


    
		
	
	
	
	



    //cardexpiry
	if (!isset($_POST["cardexpirydate"])) {
		header("location:payment.php");
		exit();
	}
	else
	{
		$date = '04';
		$year = 20;
		$cardexpiry = $_POST["cardexpirydate"];
		$cardexpiry = sanitise_input($cardexpiry);
		
		$res = substr($cardexpiry,0, 2);
		$res1 = substr($cardexpiry,3, 5);

		
		if ($cardexpiry=="") 
		{
				$errorMessage .= "<p>Card expiry cannot be left empty.</p>";
		}
		
		else if($res < $date  || $res1 < $year)
		{
			$errorMessage .= "<p>Incorrect expiry date. Please enter a valid expiry date.</p>";
			
		}
		else if( preg_match("/^[0-9]{2}-[0-9]{2}$/", $cardexpiry))
		{
			if($res < '01' || $res > 12)
			{
				$errorMessage .="<p>Please enter a valid expiry month.</p>";
				
				
			}
			}
		
	    else{
			
			$errorMessage .= "<p>Please enter expiry date in correct format.</p>";
		
		}
		
		
		
	}

	
	
	
	//cvv
	
	if (!isset($_POST["cardverificationnumber"])) {
		header("location:payment.php");
		exit();
	}
	else
	{
		$cvv = $_POST["cardverificationnumber"];
		$cvv = sanitise_input($cvv);
		
		$visa = "visa";
		$master = "mastercard";
		$american = "americanexpress";
		
		
		echo "<p> $cvv</p>";
		if ($cvv=="") 
		{
				$errorMessage .= "<p>Card verification number (CVV) cannot be left empty!!!.</p>";
		}
		
		else if ($cardtype == $visa || $cardtype == $master ) 
		{
			
				if(preg_match("/^[0-9]{3}$/",$cvv))
				{
					
				}
				else{
					$errorMessage .= "<p>Visa or Master cards CVV only contains 3 digits.</p>";
					
				}
		
		}
		else if($cardtype == $american  )
			{
				 if(preg_match("/^[0-9]{4}$/",$cvv))
				{
					
				}
				else{
					$errorMessage .= "<p>Americanexpress CVV only contains 4 digits.</p>";
					
				}
				
			}
		
	}
	
	
	// Directing to fix_order.php if errors array is not empty. 
	if ($errorMessage!="")
		{
			
		
		session_start();
		// Temporary holding the values. 
		$_SESSION['firstname'] = $firstname;
		$_SESSION['lasttname'] = $lasttname;
		$_SESSION['email'] = $email;
		$_SESSION['state'] = $state;
		$_SESSION['postcode'] = $postcode;
		
		$_SESSION['phonenumber'] = $phonenumber;
		$_SESSION['price'] = $price;
		$_SESSION['membershipduration'] = $totalmonths;
		$_SESSION['totalprice'] = $totalprice;
	
				
		header("location:fix_order.php?errorMessage=$errorMessage"); 
		exit();
			
			
	}
	
	else // If errors array is empty, then make connection.
	{
		require_once ("settings.php");
		
		$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
		if(!$conn)
		{
			echo "<p>Database connection failed!!!!!!!</p>";
		}
		
		else
		{
			// create table if not exists
		    $query = "CREATE TABLE IF NOT EXISTS orders (
					order_id INT AUTO_INCREMENT PRIMARY KEY, 
					firstname VARCHAR(25),
					lastname VARCHAR(25),
					order_cost INT (15),
					email VARCHAR(25),
					product VARCHAR (25), 
					postcode INT (15),
					phonenumber INT (15),
					state VARCHAR (25),
					totalmonths INT (15),
					cardtype VARCHAR (15),					
					cardname VARCHAR(25),
					cardnumber INT (15),
					cardexpiry VARCHAR (25),
					cvv INT (15),
					order_time TIME (6),
					order_status VARCHAR (25)
					);";
			$result = mysqli_query ($conn, $query);
			if($result) // If query is successful, then insert the values.
			{
				$order_cost = trim($_POST["totalprice"]);
				$date = date('Y-m-d H:i:s');
				
				$query = "insert into orders (firstname, lastname,order_cost, email, product, postcode, phonenumber, state, totalmonths, cardtype, cardname, cardnumber, cardexpiry, cvv, order_status, order_time)
						   values ('$firstname', '$lastname', '$order_cost', '$email', '$product', '$postcode', '$phonenumber', '$state', '$totalmonths', '$cardtype', '$cardname', '$cardnumber', '$cardexpiry', '$cvv', '$status', '$date')";
				
				$insert_result = mysqli_query($conn, $query);
				if(!$insert_result)
				{
					echo "<p>Something wrong with query ", $query, "</p>";
				}
				else
				{
					echo "<p>Successfully added query!!!!!</p>";
				
				}
				
				echo "<p>Database connection successful!!!!!!!</p>";
				
				mysqli_close($conn); // Close the connection.
			}
			else
			{
				echo "<p>Table Error</p>";
				
				
			}
			
		}
	}

	$em = ""; // Demo value for checking that receipt.php will not directly accessed.
	header("location:receipt.php?em=$em"); // Redirecting to receipt.php along with demo value.
	
?>
		
		
		

	</body>
 </html>