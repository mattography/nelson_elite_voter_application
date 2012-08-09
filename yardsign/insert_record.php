<html><head><title>Insert Record</title>
<meta name="apple-mobile-web-app-status-bar-style" content="black-transparent" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>
<?
/* Change db and connect values if using online */
$firstname=$_POST['FIRSTNAME'];
$lastname=$_POST['LASTNAME'];
$street_number=$_POST['ADDR_STR'];
$street_name=$_POST['ADDR_NUM'];
$birthday=$_POST['yardsignplaced'];
$db="db390469035";
$link = mysql_connect("db390469035.db.1and1.com", "dbo390469035", "c15c0p1x");
if (! $link)
die(mysql_error());
mysql_select_db($db , $link) or die("Select Error: ".mysql_error());
$result=mysql_query("INSERT INTO information (FIRSTNAME, LASTNAME, ADDR_NUM, ADDR_STR, yardsignplaced) VALUES (
'$firstname',
'$lastname', 
'$street_num',
'$street_name',
'$birthday')") or die("Insert Error: ".mysql_error());
mysql_close($link);
print "Record added";
?>
<form method="POST" action="insert_form.php">
<input type="submit" value="Insert Another Record">
</form>
<br>

<form method="POST" action="dbase_interface.php">
<input type="submit" value="Dbase Interface">
</form>



</body>
</html>






