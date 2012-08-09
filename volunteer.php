<?php
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
<title>Nelson>Elite</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />


<link href="mrt_base_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div data-role="header" data-position="inline">
	<a href="index.html" data-rel="back">Back</a>
	<h3>Volunteers</h3>
</div>
<center>
	<!---CONTENT---->
	<?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');
  
		// get results from database
        $result = mysql_query("select * from information where Volunteer = '1'  
								order by id ASC") // EDIT HERE and specify your table and field names for the SQL query) 
                or die(mysql_error());  
       
		
        /*echo "<table border='0' cellpadding='1'>";
        echo "<tr> <td>ID</td><tr> <td>First Name</td><tr> <td>Last Name</td><tr> <td>Street</td><tr> <td>Yard Sign</td><tr> <td>Endorse</td></tr>";
		*/
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                echo '<div id="defaultWrapper">
          <div class="master_main clearfix">                      
			  <div id="status_message"></div>
				  <div class="acct_section_title"><label for="CurrentPurchases">' . $row['FIRSTNAME'] . ' ' . $row['LASTNAME'] . '<div class="clr"></div></div>
					  <div class="acct_section_content no_pad">
						  <div class="acct_info_row">
						  <div class="acct_sub_section">
						  <span class="mrt_label">ID:</span> ' . $row['id'] . '<br>
						  <span class="mrt_label">Street:</span> ' . $row['ADDR_NUM'] . ' ' . $row['ADDR_STR'] . '  ' . $row['ADDR_TYPE'] . '<br>
						  <span class="mrt_label">Endorse:</span> ' . $row['Endorse'] . '<br>
						  <span class="mrt_label">Contribution:</span> ' . $row['Contribution'] . '<br>
						  <span class="mrt_label">Yard Sign:</span> ' . $row['YardSign'] . '<br>
						  <span class="mrt_label">Volunteer:</span> ' . $row['Volunteer'] . '<br>
						  <a href="edit.php?id=' . $row['id'] . '" data-role="button" data-inline="true" data-theme="b" rel="external"><span class="mrt_label">Edit Voter Info</span></a></td>
					  </div>
				  </div>
			  </div>
		  </div>';
        } 

        // close table>
        echo "</table>";
?>
<br>
<br>
<a href="http://kinetiktek.com/nelsonelite/logout.php" data-role="button" data-inline="true" rel="external">Logout</a>
<a href="new.php" data-role="button" data-inline="true" data-theme="b" rel="external">Add</a>
<br><br>
</div><!-- /page -->
</center>
</body>
</html>
