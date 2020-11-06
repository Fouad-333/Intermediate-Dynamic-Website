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

   //********************************************************** To show the data of payment.php after the process.php processing is done.****************************************//
    
	
	echo "<h2>Receipt</h2>";
	require_once ("settings.php");
	error_reporting (E_ALL ^ E_NOTICE);
	
	if (!isset($_GET["em"])) {// Redirecting to enquire.php if its not from process_order.php.
		header("location:enquire.php");
		exit();
	}
	else // Make connection.
	{
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn)
	{
		echo "<p>Database connection failed!!!!!!!</p>";
	}
	else
    {
		
		
		$query = "select order_id, firstname, lastname, order_cost, postcode, state, email, phonenumber, product, totalmonths, cardtype, cardname, cardnumber, cardexpiry, cvv, order_time, order_status from orders;";
		$result = mysqli_query($conn, $query);
		if(!$result)
		{
			echo "<p>Somethimng wrong with query ", $query, "</p>";
		}
		else // If query is correct, then make table and print them as recipt.
		{
			echo "<table border='1'>\n";
			echo "<tr><th>OrderId</th><th>Firstname</th><th>Lastname</th><th>TotalPrice</th><th>Postcode</th><th>State</th><th>Email</th><th>Phonenumber</th><th>Product</th><th>Totalmonths</th><th>Cardtype</th><th>Cardname</th><th>Cardnumber</th><th>Cardexpiry</th><th>CVV</th><th>Ordertime</th><th>Orderstatus</th>\n";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>",$row["order_id"], "</td>\n";
				echo "<td>", $row["firstname"], "</td>\n";
				echo "<td>",$row["lastname"],"</td>\n";
				echo "<td>", $row["order_cost"], "</td>\n";
				echo "<td>", $row["postcode"], "</td>\n";
				echo "<td>", $row["state"], "</td>\n";
				echo "<td>", $row["email"], "</td>\n";
				echo "<td>", $row["phonenumber"], "</td>\n";
				echo "<td>", $row["product"], "</td>\n";
				echo "<td>", $row["totalmonths"], "</td>\n";
				echo "<td>", $row["cardtype"], "</td>\n";
				echo "<td>", $row["cardname"], "</td>\n";
				echo "<td>", $row["cardnumber"], "</td>\n";
				echo "<td>", $row["cardexpiry"], "</td>\n";
				echo "<td>", $row["cvv"], "</td>\n";
				echo "<td>", $row["order_time"], "</td>\n";
				echo "<td>", $row["order_status"], "</td></tr>\n";
				
				
			}
			echo  "<table>\n";
			mysqli_free_result($result);
		
		}
		
		
		mysqli_close($conn);// Close connection.
	}
	}
	
	
?>
		
		
		

	</body>
 </html>