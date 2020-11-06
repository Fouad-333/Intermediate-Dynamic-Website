<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Process_order.php" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Processing Orders</title>
	</head>
	
	<body>

<?php


    //********************************************************** It allows manager to query data related to the orders.****************************************//
        
		
		
		error_reporting (E_ALL ^ E_NOTICE); // Eradicate undefined index errors that left unchecked.
		
		//*************************** Getting values from .
		$firstname=trim($_POST["firstnameone"]);
		$lastname=trim($_POST["lastnameone"]);
		$product=trim($_POST["producttype"]);
		$orderstatus=trim($_POST["orderstatus"]);
		$ordercost=trim($_POST["ordercost"]);
		$orders=trim($_POST["allorders"]);
		$count = 0;
		
		
	// Query data based on conditions.
	if($firstname != "" && $lastname != "" && $product == "" && $orderstatus == "" && $ordercost == "")
	{
		$query = "select order_id, firstname, lastname, order_cost, product, totalmonths, order_time, order_status from orders where firstname like '%$firstname%' and lastname like '%$lastname%';";
		$count = 1;
	}
	
	else if($product != "" && $firstname == "" && $lastname == "" && $orderstatus == "" && $ordercost == "" )
	{
		$query = "select order_id, firstname, lastname, order_cost, product, totalmonths, order_time, order_status from orders where product like '%$product%';";
		$count = 1;
	}
	
	
	else if($orderstatus != "" && $firstname == "" && $lastname == "" && $ordercost == "" && $product == "")
	{
		$query = "select order_id, firstname, lastname, order_cost, product, totalmonths, order_time, order_status from orders where order_status like '%$orderstatus%';";
		$count = 1;
	}
	
	else if($ordercost != "" && $firstname == "" && $lastname == "" && $orderstatus == "" && $product == "")
	{
		$query = "select order_id, firstname, lastname, order_cost, product, totalmonths, order_time, order_status from orders where order_cost like '%$ordercost%';";
		$count = 1;
	}
	else if($orders == "allorders")
	{
		$query = "select * from orders;";
		$count = 1;
	}
	
	
	else
	{
		echo "<p>please fill the correct fields for specific query</p>";

	}
		
	
	if($count > 0)
	{
	// Establish Connection
	require_once ("settings.php");
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn)
	{
		echo "<p>Database connection failed!!!!!!!</p>";
	}
	else
    {
		
		$result = mysqli_query($conn, $query);
		if(!$result)
		{
			echo "<p>Somethimng wrong with query ", $query, "</p>";
		}
		else // If yes, fetch data and show the manager in tabular form.
		{
			$record = mysqli_fetch_assoc ($result);
			
			if($record){
		        echo "<table border='1'>\n";
				echo "<tr><th>OrderId</th><th>Firstname</th><th>Lastname</th><th>TotalPrice</th><th>Product</th><th>Totalmonths</th><th>Ordertime</th><th>Orderstatus</th>\n";
				while($record)
				{
					echo "<tr><td>",$record["order_id"], "</td>\n";
					echo "<td>", $record["firstname"], "</td>\n";
					echo "<td>",$record["lastname"],"</td>\n";
					echo "<td>", $record["order_cost"], "</td>\n";
					
					
					echo "<td>", $record["product"], "</td>\n";
					echo "<td>", $record["totalmonths"], "</td>\n";
					
					echo "<td>", $record["order_time"], "</td>\n";
					echo "<td>", $record["order_status"], "</td></tr>\n";
					$record = mysqli_fetch_assoc($result);
					
					
				}
				echo  "<table>\n";
				mysqli_free_result($result);
			}
			else{
				echo "<p>Record doesn't exist</p>";
			}
			
			
		}
		
		
		mysqli_close($conn); // Close connection.
	}
	}
	
?>
   <form  id="paymentform" method="post" action="manager_modification.php" >
			
			
			
					<p>
					    <button type="submit" name ="updateordelete" value = "updateordelete">Update Status or Delete Order</button>
						
						
					
						
				    </p>
					
			</form>		
					
				

</body>
 </html>        