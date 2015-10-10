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

<h2>-Cipher</h2>

In cryptography, a cipher (or cypher) is an algorithm for performing encryption or decryption—a series of well-defined steps that can be followed as a procedure. An alternative, less common term is encipherment. To encipher or encode is to convert information into cipher or code. In non-technical usage, a 'cipher' is the same thing as a 'code'; however, the concepts are distinct in cryptography. In classical cryptography, ciphers were distinguished from codes.
Codes generally substitute different length strings of characters in the output, while ciphers generally substitute the same number of characters as are input. There are exceptions and some cipher systems may use slightly more, or fewer, characters when output versus the number that were input.
Codes operated by substituting according to a large codebook which linked a random string of characters or numbers to a word or phrase. For example, "UQJHSE" could be the code for "Proceed to the following coordinates." When using a cipher the original information is known as plaintext, and the encrypted form as ciphertext. The ciphertext message contains all the information of the plaintext message, but is not in a format readable by a human or computer without the proper mechanism to decrypt it. <br>
<br>

The operation of a cipher usually depends on a piece of auxiliary information, called a key (or, in traditional NSA parlance, a cryptovariable). The encrypting procedure is varied depending on the key, which changes the detailed operation of the algorithm. A key must be selected before using a cipher to encrypt a message. Without knowledge of the key, it should be extremely difficult, if not impossible, to decrypt the resulting ciphertext into readable plaintext.<br>
<br>

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


