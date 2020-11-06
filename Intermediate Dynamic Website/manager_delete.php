<?php

    //********************************************************** To allow the manager to delete order.****************************************//
		
		error_reporting (E_ALL ^ E_NOTICE); // Eradicate undefined index errors that left unchecked.
		
		// Getting values from manager_modification.php.
		$pending = "PENDING";
		
		$deleteorderid=trim($_POST["deleteorderid"]);
		$orderdeletion=trim($_POST["orderdeletion"]);
	
	
	
    if($orderdeletion = "orderdeletion") // Delete order if its true.
	{
		$query = "delete from orders where order_id like '$deleteorderid' and order_status like '$pending' ;";
	}
	

	
	// Establish Connection
	require_once ("settings.php");
	
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn)
	{
		echo "<p>Database connection failed!!!!!!!</p>";
	}
	else // Send query if its yes.
    {
		
		
		$result = mysqli_query($conn, $query);
		if(!$result)
		{
			echo "<p>Somethimng wrong with query ", $query, "</p>";
		}
		else
		{
			
				echo "<p>Deletion Successful.</p>";
			
		}
			
		
		
		mysqli_close($conn); // Close connection.
	}
	
?>