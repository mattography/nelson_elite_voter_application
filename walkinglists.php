<?php
	require_once('auth.php');
?>
<!DOCTYPE html> 
<html> 
	<head> 
	<title>Nelson Elite | Voter Application</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head> 
<body> 

<div data-role="page">
<div data-role="header" data-position="inline">
	<a href="menu.php" data-rel="back">Back</a>
	<h3>Walking List</h3>
</div>
	<br>
	<br>
	<center><img src="main_logo.png"></center>
	<div data-role="content">	
		<ul data-role="listview" data-inset="true">
			<li><a href="http://kinetiktek.com/nelsonelite/search.html" style="text-decoration:none">Lookup by Street</a></li>
			<li><a href="http://kinetiktek.com/nelsonelite/logout.php" style="text-decoration:none">Logout</a></li>
		</div>
	</div><!-- /content -->
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>







<!--<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8" /> 
	<title>Page Title</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css" />  
	<link rel="stylesheet" href="_assets/css/jqm-docs.css"/>
	<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script><script type="text/javascript" src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script>
	<script type="text/javascript" src="../docs/docs.js"></script></head> 
<body> 

<!-- Start of first page -->
<!--<div data-role="page" id="menu">

	<div data-role="header">
		<h1>Nelson Elite | Voter App</h1>
	</div><!-- /header -->

<!--	<div data-role="page">	
	<center><img src="main_logo.png"></center>
		<ul data-role="listview" data-inset="true" data-theme="a">
            <li><a href="#add" data-transition="flip"><center>Add a Voter</center></a></li>
            <li><a href="#search"><center>Seach for Voter</center></a></li>
            <li><a href="#walkinglist"><center>Walking List</center></a></li>
            <li><a href="#about"><center>About</center></a></li>
        </ul>
	</div><!-- /content -->
<!--	<center><a href="logout.php">Logout</a></center>
	<div data-role="footer">
		<h4></h4>
	</div><!-- /footer -->
<!--</div><!-- /page -->


<!-- Start of second page -->
<!--<div data-role="page" id="add">

	<div data-role="header">
		<h1>Add Voter</h1>
	</div><!-- /header -->

<!--	<div data-role="content">	
		<h2>Add a Voter</h2>
		<p>I'm first in the source order so I'm shown as the page.</p>		
		<p><a href="#menu">Back to menu</a></p>	
	</div><!-- /content -->
	
<!--	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
<!--</div><!-- /page -->

<!--</body>
</html>

<style type="text/css">
.ui-page {
background: #eee;
}
</style>
