<html><head><title>Birthdays Create Table</title></head>
<body>
<?
/* Change next two lines */

$db="db390469035";
$link = mysql_connect("db390469035.db.1and1.com", "dbo390469035", "c15c0p1x");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Select DB Error: ".mysql_error());
/* create table */
mysql_query(
"CREATE TABLE birthdays(
id SMALLINT(4) NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
firstname VARCHAR(30),
lastname  VARCHAR(30),
birthday VARCHAR(20))") or die(mysql_error());
mysql_close($link);
?>


</body>
</html>







