<?php 

include("includes/includedFiles.php");



?>

<!DOCTYPE html>
	<html>
	
	<head>
		<title></title>
		<style type="text/css">


			body {
  				margin: 0;
  				font-family: Arial, Helvetica, sans-serif;
			}

			.topnav {
  				overflow: hidden;
 				background-color: #333;
			}

			.topnav a {
  				float: left;
  				color: #f2f2f2;
  				text-align: center;
  				padding: 14px 16px;
  				text-decoration: none;
 				font-size: 17px;
			}

			.topnav a:hover {
 				background-color: #ddd;
  				color: black;
			}

			.topnav a.active {
 				background-color: #4CAF50;
  				color: white;
			}
		</style>

	</head>

	<body>

		<div class="topnav">
  			<a class="active" href="admin.php">Home</a>
 			<a href="artistadmin.php">Artists</a>
 			<a href="albumadmin.php">Albums</a>
 			<a href="songadmin.php">Songs</a>
		</div>