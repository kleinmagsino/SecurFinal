<!DOCTYPE html>
<html>
	<head>
		<title> Registration Form </title>
		<link rel="stylesheet" type="text/css" href="design2.css">
	
	</head>
<body>
<!----------------REGISTER---------------->	
<?php
session_start();
?>

<div class="header">
	<img src="Easylock.png" style="max-height: 250px; max-width: 250px; float:left;" />
	<p style="vertical-align:top;"><a href="Login.php"> Sign in </a></p>
</div>



<div class="Form2">	
<form action="Register.php" method="POST"> <br><br>
<fieldset class="field_set">
<b><font size="6" color="black">Sign up Form:</font></b><br><br><br>
				
		<table border = 0 cellspacing = 0>
		<tr><td>Username: <td><input type="text" name="userid"  placeholder="Enter your Username" required><br>
		<tr><td>Password: <td><input type="password" name="password" placeholder="Enter your Password" required><br>
		<tr><td>Last Name:<td><input type="text" name="lastname" placeholder="Enter your Last Name" required ><br>
		<tr><td>First Name: <td><input type="text" name="firstname" placeholder="Enter your Last Name" required><br>
		<tr><td>Middle Name: <td><input type="text" name="middlename" placeholder="Enter your Last Name" required><br>

		</table><br><br>
	
		
		<div style="f">
				I agree to the  <span style="color: #198FFF;"> WebEncryption Terms</span>  and <span style="color: #198FFF;">Privacy</span>.
		</div><br>
		
		<input type="submit" name="submit" value="Register"><br><br>
		

		
		<a href="Login.php"><center><font color="red">Login</font></center></a>
</fieldset>
</form> 
</div>
</body>

<?php
if(isset($_POST['submit']))
{
include("dbconnect.php");

$a=$_POST['userid'];
$b=$_POST['password'];
$c=$_POST['lastname'];
$d=$_POST['firstname'];
$e=$_POST['middlename'];

$k="select * from tblregister where userid='$a'";
$res=mysql_query($k) or die ("Error in query");
$bilang=mysql_num_rows($res);
if($bilang==0){

$insert="insert into tblregister values('$a','$b','$c','$d','$e')";
mysql_query($insert);

print "Account created!";

}

else
print " <font color=red>$a already exist!</font>";
}

?>

<!----------------REGISTER---------------->



<div class="footer">
	    Copyright © 2015 Klein Magsino Encryption. All rights reserved.<br>
		Terms of Use | Privacy Policy<br>
		Supply Chain Transparency
</div>


</body>
<html>