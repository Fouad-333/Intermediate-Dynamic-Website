<!--
filename: [index.html]
author: [Fouad Nazir Ahmad Saleemi]
created: [30/03/2020]
last modified: [05/04/2020]
description: [Home page of the Fitness Club]
-->
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
	
	<body class="backgroundpic">
	
<?php
	$page="index_page"; // used by nav.inc to know which page is the current page
	include_once "header.inc";
	include_once "nav.inc";
?>
		
		
		
<?php
	include_once "footer.inc";
?>
	</body>
 </html>