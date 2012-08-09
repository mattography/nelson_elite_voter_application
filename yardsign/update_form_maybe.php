<html><head><title>Update Form</title>
<style type="text/css">
th, td {font-family: tahoma, arial, verdana; font-size: 10pt; font-weight: 500 }
</style>

<meta name="apple-mobile-web-app-status-bar-style" content="black-transparent" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>
<div data-role="page">
<div data-role="header" data-position="inline">
	<a href="dbase_interface.php" data-rel="back">Back</a>
	<h3>Yard Sign</h3>
</div>
<?
/* Change next two lines if using online*/
$db="db390469035";
$link = mysql_connect("db390469035.db.1and1.com", "dbo390469035", "c15c0p1x");
if (! $link)
die(mysql_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
$result = mysql_query( "SELECT id, FIRSTNAME, LASTNAME, ADDR_NUM, ADDR_STR, yardsignplaced FROM information WHERE yardsignplaced='Maybe'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
print "There are $num_rows records.<br><br>";
print "<table width=300 border=1>";
print "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Street #</th><th>Street</th><th>Yard Sign</th></tr>";
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
<form method="POST" action="change_form.php">
<pre>
Enter Id Number to Edit: <input type="text" name="id" size="5">
<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</body>
</html>







