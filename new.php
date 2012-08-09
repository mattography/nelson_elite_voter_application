<?php
	require_once('auth.php');
?>
<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($first, $last, $street, $error)
 {
 ?>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
<title>Voter App</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />

<link href="mrt_base_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div data-role="header" data-position="inline">
	<a href="index.html" data-rel="back">Back</a>
	<h3>Add Voter</h3>
</div>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <div>
 <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $first; ?>" /><br/>
 <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $last; ?>" /><br/>
 <strong>Street Number: *</strong> <input type="text" name="addr_num" value="<?php echo $addr_str; ?>" /><br/>
 <strong>Street Name: *</strong> <input type="text" name="addr_num" value="<?php echo $addr_num; ?>" /><br/>
 <strong>Endorse: *</strong> 
 <select>
  <option value="selected"><?php echo $endorse; ?></option>
  <option>Yes</option>
  <option>No</option>
</select><br/>
 <strong>contribution: *</strong> <select>
  <option value="selected"><?php echo $contribution; ?></option>
  <option>Yes</option>
  <option>No</option>
</select><br/>
 <strong>Yardsign: *</strong> <select>
  <option value="selected"><?php echo $yardsign; ?></option>
  <option>Yes</option>
  <option>No</option>
</select><br/>
 <strong>Volunteer: *</strong> <select>
  <option value="selected"><?php echo $volunteer; ?></option>
  <option>Yes</option>
  <option>No</option>
</select><br/>
 <p>* required</p>
 <input type="submit" name="submit" value="Submit" data-role="button" data-inline="true" data-theme="b" rel="external">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('connect-db.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $firstname = mysql_real_escape_string(htmlspecialchars($_POST['FIRSTNAME']));
 $lastname = mysql_real_escape_string(htmlspecialchars($_POST['LASTNAME']));
 $addr_num = mysql_real_escape_string(htmlspecialchars($_POST['ADDR_NUM']));
 $addr_str = mysql_real_escape_string(htmlspecialchars($_POST['ADDR_STR']));
 $endorse = mysql_real_escape_string(htmlspecialchars($_POST['Endorse']));
 $contribution = mysql_real_escape_string(htmlspecialchars($_POST['Contribution']));
 $yardsign = mysql_real_escape_string(htmlspecialchars($_POST['YardSign']));
 $volunteer = mysql_real_escape_string(htmlspecialchars($_POST['Volunteer']));
 // check to make sure both fields are entered
 if ($firstname == '' || $lastname == '' || $street == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($firstname, $lastname, $street, $contribution, $yardsign, $volunteer, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT information SET FIRSTNAME='$firstname', LASTNAME='$lastname', ADDR_NUM='$addr_str', ADDR_STR='$addr_str', Contribution='$contribution', YardSign='$yardsign', Volunteer='$volunteer'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','');
 }
?> 