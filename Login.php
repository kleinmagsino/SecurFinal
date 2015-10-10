<html>
	<head>
		<title> Ciphering </title>
		<link rel="stylesheet" type="text/css" href="design.css">
	
	</head>

<body bgcolor="black">




<!-----------------------------------LOGIN ------------------------------->	

<?php
session_start();
?>

<div class="header">
	<img src="Easylock.png" style="max-height: 250px; max-width: 250px; float:left;" />
	<p style="vertical-align:top;"><a href="Login.php"> Sign in </a></p>
</div>



<div class="Form">
	<form action="Login.php" method="POST">
		<fieldset class="field_set">
			<img src="Easylock.png" style="max-height: 250px; max-width: 250px;" />
			<center><p style="float:left; font-size:20px; color:red; font-family:Arial;"> Sign in to your account </p></center>
		
	<table border = 0 cellspacing =0>
		<tr><td  colspan="2"><input type="text" name="userid"  placeholder="Enter your Username" ><br>
		<tr><td> <input type="password" name="password"placeholder="Enter your Password" ><br><br>
		<tr><td> <center><input type="submit" name="submit" value="Sign In"></center>
		<br><br><br><br>
		
		<tr><td> <a href="register.php"><center><font color="#198fff"><font size="4px">Sign up for a new account</font></a> </td></tr>
	</table>
		<br><br><br>
		
		</fieldset>	
	</form>
</div>


<!-----------------------------------PHP LOGIN ------------------------------->	

<?php
if(isset($_POST['submit'])){
$_SESSION['userid']=$_POST['userid'];
include("dbconnect.php");

$a=$_POST['userid'];
$b=$_POST['password'];

$query="select * from tblregister where userid='$a' and password='$b'";
$res=mysql_query($query) or die ("Error in query");
$bilang=mysql_num_rows($res);

if($bilang==0)
{
	    print "<script>
		alert('Your Username or Password is Incorrect!');
		</script>";
}

else
{
        session_start(); $_SESSION['userid']=$_POST['userid'];
		print "<script language=javascript> 
	    window.location='Home.php';
	    </script>";
}}
?>



<!----------------------------------- PHP LOGIN ------------------------------->	

<div class="footer">
	    Copyright © 2015 Klein Magsino Encryption. All rights reserved.<br>
		Terms of Use | Privacy Policy<br>
		Supply Chain Transparency
</div>


</body>
<html>