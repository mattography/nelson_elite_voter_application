<html><head><title>Birthdays Insert Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>
</head>
<body>
<table width="300" cellpadding="5" cellspacing="0" border="2">
<tr align="center" valign="top">
<td align="left" colspan="1" rowspan="1" bgcolor="64b1ff">
<h3>Insert Record</h3>
<form method="POST" action="birthdays_insert_record.php">
<?
print "Enter Firstname: <input type=text name=firstname size=30><br>";
print "Enter Lastname: <input type=text name=lastname size=30><br>";
print "Yard Sign? (1=Yes, 0=No): <input type=text name=birthday size=20><br>";
print "<br>";
print "<input type=submit value=Submit><input type=reset>";
?>
</form>
</td></tr></table>
</body>
</html>






