<html><head><title>Insert Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />

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
<table width="300" cellpadding="5" cellspacing="0" border="2">
<tr align="center" valign="top">
<td align="left" colspan="1" rowspan="1" bgcolor="64b1ff">
<h3>Insert Record</h3>
<form method="POST" action="insert_record.php">

Firstname: <input type="text" name="firstname" size=30><br>
Lastname: <input type="text" name="lastname" size=30><br>
Street Number: <input type="text" name="street_number" size=30><br>
Street Name: <input type=text name="street_name" size=30><br>
Yard Sign?    
<select name="ud_birthday">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  <option value="Maybe">Maybe</option>
</select><br>
<input type=submit value=Submit><input type=reset>
</form>
</td></tr></table>
</body>
</html>






