<html><head><title>Birthdays Insert Record</title></head>
<body>
<?
/* Change db and connect values if using online */
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$birthday=$_POST['birthday'];
$db="db390469035";
$link = mysql_connect("db390469035.db.1and1.com", "dbo390469035", "c15c0p1x");
if (! $link)
die(mysql_error());
mysql_select_db($db , $link) or die("Select Error: ".mysql_error());
$result=mysql_query("INSERT INTO birthdays (firstname, lastname, birthday) VALUES (
'$firstname',
'$lastname', 
'$birthday')") or die("Insert Error: ".mysql_error());
mysql_close($link);
print "Record added";
?>
<form method="POST" action="birthdays_insert_form.php">
<input type="submit" value="Insert Another Record">
</form>
<br>

<form method="POST" action="birthdays_dbase_interface.php">
<input type="submit" value="Dbase Interface">
</form>



</body>
</html>






