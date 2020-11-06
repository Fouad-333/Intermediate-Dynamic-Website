<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Payment page of the Fitness Club" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Shark Fitness Club Payment Page</title>
	</head>
	
	<body>


            <form  id="paymentform" method="post" action="manager_update.php" >
			<fieldset>
				    <legend> Update Status of Order</legend>
					
					<p>
						<label for="orderidone"> Order ID </label>
						<input id="orderidone" name="orderidone" type="text"  />
						
						<label for="inputstatus"> Input Status</label>
						<input id="inputstatus" name="inputstatus" type="text"  />
						
						
                    </p> <br/>
			</fieldset>	
			<p>
					    <button type="submit" name ="changestatus" value = "changestatus">Update Status</button>
						
						
					
						
				    </p>
			</form>	
			
			<form  id="paymentform" method="post" action="manager_delete.php" >
			<fieldset>
				    <legend> Delete Order</legend>
					
					<p>
						<label for="deleteorderid"> Order ID </label>
						<input id="deleteorderid" name="deleteorderid" type="text"  />
						
						
                    </p> <br/>
				
			</fieldset>	
			
			
					<p>
					  
						<button type="submit" name ="orderdeletion" value = "orderdeletion">Delete Order</button>
						
					
						
				    </p>
					
			</form>		
					
				

</body>
 </html>