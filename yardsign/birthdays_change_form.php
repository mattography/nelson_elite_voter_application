<html><head><title>Change Record form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>


</head>
<body>
<?
$id=$_POST['id'];
$db="db390469035";
$link = mysql_connect("db390469035.db.1and1.com", "dbo390469035", "c15c0p1x");
if (! $link) die("Couldn't connect to MySQL");

mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

$query=" SELECT * FROM yardsign WHERE id='$id'";
$result=mysql_query($query);
$num=mysql_num_rows($result);

$i=0;
while ($i < $num) {
$firstname=mysql_result($result,$i,"firstname");
$lastname=mysql_result($result,$i,"lastname");
$birthday=mysql_result($result,$i,"birthday");
?>
<table width="300" cellpadding="5" cellspacing="0" border="1">
<tr align="center" valign="top">
<td align="center" colspan="1" rowspan="1" bgcolor="#64b1ff">
<h3>Edit and Submit</h3>
<form action="birthdays_change_record.php" method="post">
<input type="hidden" name="ud_id" value="<? echo "$id" ?>">
FirstName:    <input type="text" name="ud_firstname" value="<? echo "$firstname"?>"><br>
LastName:    <input type="text" name="ud_lastname" value="<? echo "$lastname"?>"><br>
Yard Sign:    
<select name="ud_birthday">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  <option value="Maybe">Maybe</option>
</select>

<!--<input type="text" name="ud_birthday" value="<? echo "$birthday"?>"><br>-->
<input type="Submit" value="Update">
</form>
</td></tr></table>

<?
++$i;
}
?>
</body>
</html>






