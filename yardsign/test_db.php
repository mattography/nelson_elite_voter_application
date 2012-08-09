<?php
/* Change next  line */
$link = mysql_connect('supremecenter107:3306', 'calban_newdb', 'grape101');
if
(!$link) {
die(mysql_error());
}
echo
'Successful connection';
mysql_close($link);
?>


