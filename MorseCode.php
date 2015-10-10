<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="design4.css">

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




	<h2> Morse Code </h2>
	
	<form action=MorseCode.php method=post><table border = 0>
<table>
<tr>
<td>Enter Text to Encrypt:<td></center><input name=user>
</tr>
<tr>
<td colspan=2><center><input type=submit value=Enter name=enter>
</tr>
</table>






<br><br><br>
<table>
<tr>
<td>Enter Text to Decrypt:<td></center><input name=userb>
</tr>
<tr>
<td colspan=2><center><input type=submit value=Enter name=enterasd>
</tr>
<tr>
<td colspan=2>
</tr>
</table>



<br><br><br>
</form>


<?php
if ((isset($_POST['enter'])))
{
$a=$_POST['user'];
if(trim($a)!=''){
print "Your Message was: $a";
print"<br><br><br>";
$a = strtolower($a);
$x = str_replace(" ","/___/","$a");
$x = str_replace("b","/ -... /","$x");
$x = str_replace("a","/ .- /","$x");
$x = str_replace("c","/ -.-. /","$x");
$x = str_replace("d","/ -.. /","$x");
$x = str_replace("e","/ . /","$x");
$x = str_replace("f","/ ..-. /","$x");
$x = str_replace("g","/ --. /","$x");
$x = str_replace("h","/ .... /","$x");
$x = str_replace("i","/ .. /","$x");
$x = str_replace("j","/ .--- /","$x");
$x = str_replace("k","/ -.- /","$x");
$x = str_replace("l","/ .-.. /","$x");
$x = str_replace("m","/ -- /","$x");
$x = str_replace("n","/ -. /","$x");
$x = str_replace("o","/ --- /","$x");
$x = str_replace("p","/ .--. /","$x");
$x = str_replace("q","/ --.- /","$x");
$x = str_replace("r","/ .-. /","$x");
$x = str_replace("s","/ ... /","$x");
$x = str_replace("t","/ - /","$x");
$x = str_replace("u","/ ..- /","$x");
$x = str_replace("v","/ ...- /","$x");
$x = str_replace("w","/ .-- /","$x");
$x = str_replace("x","/ -..- /","$x");
$x = str_replace("y","/ -.-- /","$x");
$x = str_replace("z","/ --.. /","$x");

//final display
print"Result: ";
print $x;

}
else{
print "<script language=javascript>
	alert('Empty field on Morse encrypt!');
	</script>";
}
}

?>


<?php
if (isset($_POST['enterasd']))
{
$b=$_POST['userb'];
if(trim($b)!=''){
print "Your Message was: $b";
print"<br><br><br>";
$b = strtolower($b);

$x = str_replace("/___/"," ","$b");
$x = str_replace("/ .- /","a","$x");
$x = str_replace("/ -.-. /","c","$x");
$x = str_replace("/ -.. /","d","$x");
$x = str_replace("/ . /","e","$x");
$x = str_replace("/ ..-. /","f","$x");
$x = str_replace("/ --. /","g","$x");
$x = str_replace("/ .... /","h","$x");
$x = str_replace("/ .. /","i","$x");
$x = str_replace("/ .--- /","j","$x");
$x = str_replace("/ -.- /","k","$x");
$x = str_replace("/ .-.. /","l","$x");
$x = str_replace("/ -- /","m","$x");
$x = str_replace("/ -. /","n","$x");
$x = str_replace("/ --- /","o","$x");
$x = str_replace("/ .--. /","p","$x");
$x = str_replace("/ --.- /","q","$x");
$x = str_replace("/ .-. /","r","$x");
$x = str_replace("/ ... /","s","$x");
$x = str_replace("/ - /","t","$x");
$x = str_replace("/ ..- /","u","$x");
$x = str_replace("/ ...- /","v","$x");
$x = str_replace("/ .-- /","w","$x");
$x = str_replace("/ -..- /","x","$x");
$x = str_replace("/ -.-- /","y","$x");
$x = str_replace("/ --.. /","z","$x");

//final display
print"Result: ";
echo str_replace("/ -... /","b","$x");

}
else{
print "<script language=javascript>
	alert('Empty field on Morse Decrypt 2!');
	</script>";
}
}
?>

	

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


