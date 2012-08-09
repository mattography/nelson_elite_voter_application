<html><head><title>Birthdays Delete Form</title>
<style type="text/css">
th, td {font-family: tahoma, arial, verdana; font-size: 10pt; font-weight: 500 }
</style>

<link rel="stylesheet"  href="//code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" /> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
</head>
<body>
<?
/* Change next two lines if using online*/
$db="newdb";
$link = mysql_connect('localhost', 'root', '');
if (! $link)
die(mysql_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
$result = mysql_query( "SELECT * FROM birthdays" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
print "There are $num_rows records.<br><br>";
print "<table width=600 border=1>";
print "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Birth Date</th></tr>";
while ($get_info = mysql_fetch_row($result)){ 
print "<tr>";
foreach ($get_info as $field) 
print "<td>$field</td>";
print "</tr>";
}
print "</table>";
mysql_close($link);
?>
<br>
<form method="POST" action="birthdays_delete_record.php">
<pre>
Enter Id Number to Delete: <input type="text" name="id" size="5">
<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</body>
</html>






