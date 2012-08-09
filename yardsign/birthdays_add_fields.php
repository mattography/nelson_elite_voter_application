<HTML><BODY>

<?php
/* Use this script to add new fields or columns to your database.
    *To change script change names to the fields you want to add
    *You can also change VARCHAR to the type you need and add the size.
    *DO NOT Preview this script unless you want to add these fields
    *or make changes and then run it
    *If you use AFTER specify where you want the field to fall
    */
$db="test";
$link = mysql_connect('localhost', '', '');
if (! $link)
die(mysql_error());
mysql_select_db($db , $link) or die("Select Error: ".mysql_error());

$result=mysql_query("ALTER TABLE birthdays
ADD street VARCHAR(30) AFTER birthday,
Add city VARCHAR(30) AFTER street,
ADD state VARCHAR(4) AFTER city,
ADD zipcode VARCHAR(20) AFTER state,
ADD phone VARCHAR(20) AFTER zipcode") or die("Alter Error: ".mysql_error());
mysql_close($link);
print "Field added";
?>
<form method="POST" action="birthdays_insert_form.php">
<input type="submit" value="Insert Another Record">
</form>
<br>

<form method="POST" action="birthdays_dbase_interface.php">
<input type="submit" value="Dbase Interface">
</form>


</BODY>
</HTML>

