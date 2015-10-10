<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
<?php
session_start();
?>
	<title>Home</title>
	</head>

<body style="margin: 0px; padding: 0px; font-family: 'Trebuchet MS',verdana;">



<table border="1" width="100%" style="height: 100%;" cellpadding="10" cellspacing="0" border="0">
<tr>



<!-- ============ HEADER SECTION ============== -->
<td colspan="3" style="height:50px;" bgcolor="#f0f0f0"><h1>

<div class="header">
	<img src="Easylock.png" style="max-height: 250px; max-width: 250px; float:left;" />
</div>

<div style="float:right;"

<?php
if (isset($_SESSION['userid']))
{
print "<h4>Welcome to WebEncryption, " . $_SESSION['userid']."</h4>";
}else
print "print<script language=javascript>
alert('Please Log In First.');
	window.location='Login.php';
	</script>";
?>

</div>

</h1></td></tr>


<!-- ============ NAVIGATION BAR SECTION ============== -->

<tr><td colspan="3" valign="middle" height="1%" bgcolor="#222222">

<style>
   #nav {
      width: 100%;
      float: left;
      margin: 0;
      padding: 0;
      list-style: none;
      background-color: #f2f2f2;
      border-bottom: 1px solid #ccc; 
      border-top: 1px solid #ccc; }
   #nav li {
      float: left; }
   #nav li a {
      display: block;
      padding: 8px 15px;
      text-decoration: none;
      font-weight: bold;
      color: #069;
      border-right: 1px solid #ccc; }
   #nav li a:hover {
      color: #c00;
      background-color: #fff; }

</style>

   <ul id="nav">
      <li><a href="Home.php">Home</a></li>
      <li><a href="Aboutus.php">About Us</a></li>
      <li><a href="Record.php">Records</a></li>
      <li><a href="Contact.php">Contact</a></li>
      <li><a href="Logout.php">Logout</a></li>
   </ul>


</td></tr>

<tr>
<!-- ============ LEFT COLUMN (MENU) ============== -->
<td width="20%" valign="top" bgcolor="#f0f0f0">
<ul>
<li><a href="Rot1.php">Rot1</a></li><br>
<li><a href="CaesarCipher.php">Caesar Cipher</a></li><br>
<li><a href="VernamCipher.php">Vernam Cipher</a></li><br>
<li><a href="MorseCode.php">Morse Code</a></li><br>
</td>

<!-- ============ MIDDLE COLUMN (CONTENT) ============== -->
<td width="55%" valign="top" bgcolor="#d2d8c7">




<center><h2>Acount Information</h2>
<table border=1>
<tr>
<td>Username:
<td>Password
<td>Last Name:
<td>First Name:
<td>Middle Name:
</tr>

<?php
if (isset($_SESSION['userid']))
include("dbconnect.php");
$query="select * from tblregister ";
$result=mysql_query($query);
$bilang=mysql_num_rows($result);
if ($bilang==0)
print "no Record/s";
else
{
while ($rec=mysql_fetch_array($result))
{
$a=$rec['userid'];
$b=$rec['password'];
$c=$rec['lastname'];
$d=$rec['firstname'];
$e=$rec['middlename'];

print "<tr><td>$a<td>$b<td>$c<td>$d<td>$e";
}
print "</table><p>$bilang records";
}
?>





</td>

<td width="25%" valign="top" bgcolor="#999f8e">&nbsp;</td>

</tr>

<!-- ============ FOOTER SECTION ============== -->
<tr><td colspan="3" align="center" height="5" bgcolor="#777d6a" style="bottom:0; padding:5px 0; margin-left:-0.5%; height:20px; width:100%; background:#222222; font-size:0.5em; color:#f0f0f0; ">

	    Copyright © 2015 Klein Magsino Encryption. All rights reserved.<br>
		Terms of Use | Privacy Policy<br>
		Supply Chain Transparency
</td></tr>

</table>
</body>

<html>


