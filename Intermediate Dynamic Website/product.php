<!--
filename: [product.html]
author: [Fouad Nazir Ahmad Saleemi]
created: [30/03/2020]
last modified: [05/04/2020]
description: [Product Types page of the Fitness Club]
-->
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Product page of the Fitness Club" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Shark Fitness Club Product Page</title>
	  <link rel="stylesheet"  href="styles/style.css" />
	</head>
	
	<body>
	
<?php
	$page="product_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
?>
		<section>
			<aside id="card">
				<img id="platinum" src="images/platinum.png" alt="platinum"/><br />
				<label for="platinummembers">Platinum Members</label>
                <meter id="platinummembers" value="20" min="0" max="200"></meter><br>
				
				<img id="gold" src="images/gold.png" alt="gold"/><br />
				<label for="goldmembers">Gold Members</label>
                <meter id="goldmembers" value="50" min="0" max="200"></meter><br>
				
				<img id="silver" src="images/silver.png" alt="silver"/> <br />
				<label for="silvermembers">Silver Members</label>
                <meter id="silvermembers" value="130" min="0" max="200"></meter><br>
			</aside>
		</section>
		
		<section id="producttypes">
			<aside id="note">
				<p><em>"Our Silver membership is specially designed
				         for students who can't afford to join 
						 expensive fitness clubs. Plus, every student 
						 will get a 30% discount upon registering 
						 for Silver membership". 
					 </em> 
				</p>
					  
			   
			</aside>
			
			<h2 id ="membership"> Membership Types: </h2> <br />
			<p>
				The Shark Fitness Club offers four categories of memberships. Each membership has a different level of access to Shark Fitness Club' facilities.
			</p> <br />
			<ol>
				<li> Platinum <br />
				<br />
					The Platinum membership allows our customers to fully experience all facilities provided by the Shark Fitness Club. It includes a Gym, Swimming Pool and Squash courts.
				<br /></li>
				
				<li> Gold <br />
				<br />	The Gold membership allows our customers to get a gold touch by enjoying some state-of-the-art facilities provided by the Shark Fitness Club. They have access to the Gym and Swimming Pool.
				<br /></li>
				
				<li> Silver <br /> 
				<br />	Our Silver membership is specially tailored for the people who want to enjoy fitness facilities in low budget.  By becoming a Silver member, a member can enjoy Gym and Squash.
				<br /></li>
			</ol> <br />
		</section> <br />
		
		
		<section id="facilities">
			
			<h3> Facilities:  </h3> <br />
			<ul>
				<li> Gym <br />
				<br />	We have a huge 6000 sq. feet weight training area. There is a big dumbbell rack with dumbbells going up to 40kgs. To ease the members that are new to weight training, we have a stretching area. There are treadmills, rowers and steppers in our cardiac deck. <br />
				<img class = "facilitiespics" src="images/workout.jpg"  alt="gympic"></li>
				
				<li> Swimming Pool <br />
				<br />	Our Swimming Pool is beautiful and clear like crystal. It offers recreational swimming and lap swimming that is specially designed for our customers. There are specific areas for children. <br />
				<img class = "facilitiespics" src="images/pool.jpg" alt="polpic"> </li>
				
				<li> Squash <br />
				<br />	Our Squash courts are fully equipped with state-of-the-art equipment. The Squash courts are newly constructed. <br />
				<img class = "facilitiespics" src="images/squash.jfif" alt="squashpic"> </li>
			</ul> <br />
		</section>
		
		
		<section id="fees">
			
			<h3> Fees:  </h3> <br />
			
			<table id="table">
				<thead>
					<tr>
						<th> <strong> Membership </strong> </th>
						<th> <strong> Facilities </strong> </th>
						<th> <strong> Duration </strong> </th>
						<th> <strong> Price/monthly </strong> </th>
						<th> <strong> Price/fortnightly  </strong> </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>  Platinum  </td>
						<td>  Gym, Swimming Pool, Squash  </td>
						<td>  1 year  </td>
						<td>  $120  </td>
						<td>  $60  </td>
					</tr>
					
					<tr>
						<td>  Gold </td>
						<td>  Gym, Swimming Pool  </td>
						<td>  1 year  </td>
						<td>  $90  </td>
						<td>  $45 </td>
					</tr>
					
					<tr>
						<td> Silver  </td>
						<td>  Gym, Squash  </td>
						<td>  6 months  </td>
						<td>  $70  </td>
						<td>  $35  </td>
					</tr>
				</tbody>
			</table> <br />
		</section>
		
		
		
		<section id="paymenttypes">
			
			<h3> Flexible Payment Options: </h3> <br />
			<p>
				All the members of the Shark Fitness Club are eligible to choose their payment option from our flexible payments options. 
			</p> <br />
			<ul>
				<li> Monthly <br />
				<br />	Customers can pay their membership cost monthly. The payment can be made by Credit card or Direct Debit.
				
				</li>
				<li> Fortnitely <br />
				
				<br />	Customers can pay their membership cost fortnightly(two weeks). The payment can be made by Credit card or Direct Debit.
				</li>
			</ul> <br />
		</section>
		
		
<?php
	include_once "footer.inc";
?>
	</body>
 </html>