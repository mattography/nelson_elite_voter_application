<html><head><title>Change Record</title></head>
<body>
<?
$ud_id=$_POST['ud_id'];
$ud_firstname=$_POST['ud_firstname'];
$ud_lastname=$_POST['ud_lastname'];
$ud_birthday=$_POST['ud_birthday'];
/* Change next two lines if using online*/
$db="db390469035";
$link = mysql_connect("db390469035.db.1and1.com", "dbo390469035", "c15c0p1x");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
mysql_query(" UPDATE yardsign  SET
firstname='$ud_firstname' ,
lastname='$ud_lastname' ,
birthday='$ud_birthday' WHERE id='$ud_id'");
echo "Record Updated";
mysql_close($link);
?>
<form method="POST" action="birthdays_update_form.php">
<input type="submit" value="Change Another">
</form><br>

<form method="POST" action="birthdays_dbase_interface.php">
<input type="submit" value="Dbase Interface">
</form>

</body>
</html>






