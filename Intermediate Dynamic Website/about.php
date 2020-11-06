<!--
filename: [about.html]
author: [Fouad Nazir Ahmad Saleemi]
created: [30/03/2020]
last modified: [05/04/2020]
description: [About page of the Fitness Club]
-->
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="About us page of the Fitness Club" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Shark Fitness Club About us Page</title>
	  <link rel="stylesheet"  href="styles/style.css" />
	</head>
	
	<body>
	
<?php
	$page="about_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
?>
		
		
		<section id="fig">
		
		    <figure id="mypic" >
				<img src="images/me.jpg" alt="myself" />
			</figure>
			
			<dl id="list">
				<dt><strong> Name:</strong> <br /> <strong> Student ID: </strong> 
				<br /> <strong> Course: </strong> <br /> <strong> Email: </strong> 
				<br /> <strong> Unit: </strong>
				</dt>
				
				<dd> Fouad Nazir Ahmad Saleemi <br /> s102845300
                <br />  Master of Information Technology
				<br /> <a href="mailto:102845300@student.swin.edu.au"> 102845300@student.swin.edu.au </a>
				<br /> Creating Web Applications
				</dd> 	
			</dl>
		</section> <br />
		
		<section class="infoaboutme">
			<h3 id="info"> Info: </h3> <br /> <em>My name is Fouad and I am from Pakistan. I did my bachelors <br />
			        in Telecommunications Engineering.I worked in a multinational <br /> 
					Chinese company ZTE as RF Engineer back in 2018. I am doing <br />
					Master of IT from the Swinburne University of Technology and <br />
					hope to pursue my career as an IT, specialist.
				</em> 
		</section> <br />
		
		<section id="timetable" class="infoaboutme"> <h3>Timetable:</h3> <br/>
			<table > 
				<thead>
					<tr>
					    <th colspan="2"> <strong>Monday </strong> </th>
						
						<th> <strong> Tuesday </strong> </th>
						<th> <strong> Wednesday </strong> </th>
						<th> <strong> Thursday </strong> </th>
						<th> <strong> Friday  </strong> </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> 8 am  </td>
						<td> </td>
						<td> </td>
						<td>  </td>
						<td rowspan="2"> COS70004 <br /> Lecture (1) </td>
						<td rowspan="2"> INF70005 <br /> Workshop 1(4)</td>
						
					</tr>
					<tr>
						<td> 9  </td>
						<td> </td>
						<td> </td>
						<td>  </td>
						
						
					</tr>
					
					<tr>
						<td> 10 </td>
						<td> </td>
						<td> </td>
						<td rowspan="2"> COS70006 <br /> Lecture 1 (1)</td>
						<td>  </td>
						<td rowspan="2"> COS70004 <br /> Tutorial 1 (4) </td>
						
					</tr>
					
					<tr>
						<td> 11 </td>
						<td> </td>
						<td> </td>
						
						<td>  </td>
						
						
					</tr>
					
					<tr>
						<td> 12 pm </td>
						<td> </td>
						<td> </td>
						<td rowspan="2"> COS70006 <br /> Workshop 1 (1) </td>
						<td rowspan="2"> COS70006 <br /> Lab 1 (2) </td>
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 1 </td>
						<td> </td>
						<td> </td>
						
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 2 </td>
						<td> </td>
						<td> </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 3 </td>
						<td> </td>
						<td> </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 4 </td>
						<td> </td>
						<td> </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 5 </td>
						<td rowspan="2">COS60004 <br /> Lecture 1 (1) </td>
						<td> </td>
						<td>  </td>
						<td rowspan="2"> INF70005 <br /> Lecture 1 (1) </td>
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 6 </td>
						
						<td> </td>
						<td>  </td>
					
						<td>  </td>
						
					</tr>
					
					<tr>
						<td> 7 </td>
						<td rowspan="2"> COS60004 <br /> Lab 1 (3)</td>
						<td> </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						
					</tr>
					
					<tr>
						<td>8</td>
						
						<td> </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						
					</tr>
				</tbody>
			</table> <br />
		</section>
		
		
		
		
<?php
	include_once "footer.inc";
?>
	</body>
 </html>