<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="design4.css">

<?php
session_start();
?>


<script>
	function alphaOnly(event) {
		var key = event.keyCode;
		return ((key >= 65 && key <= 90) || key == 8);
								};
	</script>	
	
	
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
<h1> Rot1 </h1>
<form Action=Rot1.php Method="POST">
<table>
	<table>
		<tr>
		<td>Enter word to Encrypt:<td></center><input name=user required>
		</tr>
		
	<tr><td colspan=2><center><input type=submit name=Encrypt value=Decipher ></center></tr>
		
</table>
</form>


<?php
if (isset($_POST['Encrypt']))
{
$a=$_POST['user'];
$alp=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
print "<b>Encryption Word Inputed is:</b> $a";
print"<br><br>";
print"<b>Decrypt Word is: </b>";
$arr1 = str_split($a);
$arrlength=count($arr1);
$arrlength2=count($alp);
$u=0;
$x = "";

for($x=0;$x<$arrlength;$x++)
  {
	for($i=0;$i<$arrlength2;$i++)
	{
		if ($arr1[$x] == $alp[$i] && $arr1[$x] != "z")
		{
		$u = $i + 1;
		$encrypt[]=$alp[$u];
		print"$alp[$u]";			
		}
		else if ($arr1[$x] == "z")
		{
		$encrypt[]=$alp[0];
		print"$alp[0]";
		break;
		}
		else if ($arr1[$x] == " ")
		{
		print" ";
		break;
		}
		$u == 0;
	}
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


