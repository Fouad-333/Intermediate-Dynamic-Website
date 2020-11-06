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

    //********************************************************** To send query to the database and show popular items in tabular form.****************************************//
   


   $page="latesttrend_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
   
   
	require_once ("settings.php");
	error_reporting (E_ALL ^ E_NOTICE);// Eradicate undefined index errors that left unchecked.
	
	
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db); /// Establishing connection.
	if(!$conn)
	{
		echo "<p>Database connection failed!!!!!!!</p>";
	}
	else // If no problem, then initiate query.
    {
		
		
		$query = "SELECT product, COUNT(*), totalmonths, COUNT(*),  state, COUNT(*), order_cost, COUNT(*) FROM orders GROUP BY product, totalmonths, state, order_cost;";
		$result = mysqli_query($conn, $query);
		if(!$result)
		{
			echo "<p>Somethimng wrong with query ", $query, "</p>";
		}
		else // If query is correct, make table and show the data in the table. It includes fetching of data from database.
		{
			echo "<table border='1'>\n";
			echo "<tr><th>Product</th><th>Total</th><th>Duration</th><th>Total</th><th>State</th><th>Total</th><th>Price</th><th>Total</th>\n";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>",$row["product"], "</td>\n";
				echo "<td>", $row["COUNT(*)"], "</td>\n";
				echo "<td>",$row["totalmonths"], "</td>\n";
				echo "<td>", $row["COUNT(*)"], "</td>\n";
				echo "<td>",$row["state"], "</td>\n";
				echo "<td>", $row["COUNT(*)"], "</td>\n";
				echo "<td>",$row["order_cost"], "</td>\n";
				echo "<td>", $row["COUNT(*)"], "</td>\n";
				
				
				
			}
			echo  "<table>\n";
			mysqli_free_result($result);
		
		}
		
		
		mysqli_close($conn);// Close connection.
	}
	
	?>
			
<?php
	include_once "footer.inc";
?>
	</body>
 </html>
		
		
		

