<?php

    //********************************************************** To allow the manager to update status.****************************************//
		
		error_reporting (E_ALL ^ E_NOTICE); // Eradicate undefined index errors that left unchecked.
		
		// Getting values from manager_modification.php.
		
		$orderid=trim($_POST["orderidone"]);
		$inputstatus=trim($_POST["inputstatus"]);
		$changestatus=trim($_POST["changestatus"]);
	

	
	if($changestatus = "changestatus") // Update order if its true.
	{
		$query = "update orders set order_status = '$inputstatus' where order_id like '$orderid' ;";
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
			
				echo "<p>Update Successful.</p>";
			
		}
			
		
		
		mysqli_close($conn); // Close connection.
	}
	
?>