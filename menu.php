<?php
	require_once('auth.php');
?>
<!DOCTYPE html> 
<html> 
	<head> 
	<title>Voter App</title> 
	<link rel="stylesheet"  href="//code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" /> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head> 
<body> 
<div data-role="page">
<div data-role="header" data-position="inline">
	<a href="index.html" data-rel="back">Back</a>
	<h3>Menu</h3>
</div>
<br>
<br>
<center><img src="main_logo.png"></center>
<br>
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
				<li><a href="http://kinetiktek.com/nelsonelite-COMPLETE/new.php" style="text-decoration:none">Add Voter</a></li>
				<li><a href="http://kinetiktek.com/nelsonelite-COMPLETE/walkinglists.php" style="text-decoration:none">Walking List</a></li>
				<li><a href="http://kinetiktek.com/nelsonelite-COMPLETE/volunteer.php" style="text-decoration:none">Volunteer Lookup</a></li>
				<li><a href="http://kinetiktek.com/nelsonelite-COMPLETE/yardsign/dbase_interface.php" style="text-decoration:none">Yardsign Placed</a></li>
				<li><a href="about.php" data-rel="dialog" data-transition="flip">About</a></li>
				<li><a href="http://kinetiktek.com/nelsonelite-COMPLETE/logout.php" style="text-decoration:none">Logout</a></li>
		</ul>
	</div>
</div><!-- /page -->

</body>
</html>








