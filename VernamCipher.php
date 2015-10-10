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

<h1> Vernam Cipher </h1>

<form>
<table width="100%">
<tr><td>Name:<td><input type = "text" name = 'username' onkeydown="return alphaOnly(event);"><br>
<td>Key: <td><input type = "text" name = 'key' onkeydown="return alphaOnly(event);"><br>
</table>
<input type = 'submit' name = 'submit' value = 'Encrypt'>
<br>
<input type = 'submit' name = 'submit2' value = 'Decrypt'>
</form>
 
</body>
</html>
 
<?php

    function getValue($letter) {
        if ($letter == 'a') {
            $number = 0;
        }
        if ($letter == 'b') {
            $number = 1;
        }
        if ($letter == 'c') {
            $number = 2;
        }
        if ($letter == 'd') {
            $number = 3;
        }
        if ($letter == 'e') {
            $number = 4;
        }
        if ($letter == 'f') {
            $number = 5;
        }
        if ($letter == 'g') {
            $number = 6;
        }
        if ($letter == 'h') {
            $number = 7;
        }
        if ($letter == 'i') {
            $number = 8;
        }
        if ($letter == 'j') {
            $number = 9;
        }
        if ($letter == 'k') {
            $number = 10;
        }
        if ($letter == 'l') {
            $number = 11;
        }
        if ($letter == 'm') {
            $number = 12;
        }
        if ($letter == 'n') {
            $number = 13;
        }
        if ($letter == 'o') {
            $number = 14;
        }
        if ($letter == 'p') {
            $number = 15;
        }
        if ($letter == 'q') {
            $number = 16;
        }
        if ($letter == 'r') {
            $number = 17;
        }
        if ($letter == 's') {
            $number = 18;
        }
        if ($letter == 't') {
            $number = 19;
        }
        if ($letter == 'u') {
            $number = 20;
        }
        if ($letter == 'v') {
            $number = 21;
        }
        if ($letter == 'w') {
            $number = 22;
        }
        if ($letter == 'x') {
            $number = 23;
        }
        if ($letter == 'y') {
            $number = 24;
        }
        if ($letter == 'z') {
            $number = 25;
        }
        return $number;
    }
     
    function getLetter($number) {
        if ($number == 0) {
            $letter = "a";
        }
        if ($number == 1) {
            $letter = "b";
        }
        if ($number == 2) {
            $letter = "c";
        }
        if ($number == 3) {
            $letter = "d";
        }
        if ($number == 4) {
            $letter = "e";
        }
        if ($number == 5) {
            $letter = "f";
        }
        if ($number == 6) {
            $letter = "g";
        }
        if ($number == 7) {
            $letter = "h";
        }
        if ($number == 8) {
            $letter = "i";
        }
        if ($number == 9) {
            $letter = "j";
        }
        if ($number == 10) {
            $letter = "k";
        }
        if ($number == 11) {
            $letter = "l";
        }
        if ($number == 12) {
            $letter = "m";
        }
        if ($number == 13) {
            $letter = "n";
        }
        if ($number == 14) {
            $letter = "o";
        }
        if ($number == 15) {
            $letter = "p";
        }
        if ($number == 16) {
            $letter = "q";
        }
        if ($number == 17) {
            $letter = "r";
        }
        if ($number == 18) {
            $letter = "s";
        }
        if ($number == 19) {
            $letter = "t";
        }
        if ($number == 20) {
            $letter = "u";
        }
        if ($number == 21) {
            $letter = "v";
        }
        if ($number == 22) {
            $letter = "w";
        }
        if ($number == 23) {
            $letter = "x";
        }
        if ($number == 24) {
            $letter = "y";
        }
        if ($number == 25) {
            $letter = "z";
        }
        return $letter;
     
    }
     
     
    $newword = "";
     
         
    if (isset($_GET['submit'])) {
        $username = $_GET['username'];
        $key = $_GET['key'];
        $username = str_replace(' ', '', $username);
        $key = str_replace(' ', '', $key);
        $userEncrypt = str_split($username);
         
        //key
        $userLength = strlen($username);
        $keyLength = strlen($key);
        $newKey = $key;
        if ($userLength > $keyLength) {
             
            for ($x = $keyLength; $x <= $userLength; $x += $keyLength) {
                $newKey .= $key;
            }
         
        }
        $keyEncrypt = str_split($newKey);
 
        foreach ($userEncrypt as $looper => $userLetter) {
            $userValue = getValue(strtolower($userLetter));
            $keyLetter = $keyEncrypt[$looper];
            $keyValue = getValue(strtolower($keyLetter));
             
            $temp1[$looper] = $userValue + $keyValue;
             
            if ($temp1[$looper] > 25) {
                $temp1[$looper] -= 26;
            }
         
            $final = getLetter($temp1[$looper]);
             
             
            $newword .= $final;
        }
        echo "<b>The Encrypted Word is: </b>" . strtoupper($newword);
    }
     
 
 
 
 
 
 
    if (isset($_GET['submit2'])) {
        $username = $_GET['username'];
        $key = $_GET['key'];
        $username = str_replace(' ', '', $username);
        $key = str_replace(' ', '', $key);
        $userEncrypt = str_split($username);
         
        //key
        $userLength = strlen($username);
        $keyLength = strlen($key);
        $newKey = $key;
        if ($userLength > $keyLength) {
             
            for ($x = $keyLength; $x <= $userLength; $x += $keyLength) {
                $newKey .= $key;
            }
         
        }
        $keyEncrypt = str_split($newKey);
         
        foreach ($userEncrypt as $looper => $userLetter) {
            $userValue = getValue(strtolower($userLetter));
            $keyLetter = $keyEncrypt[$looper];
            $keyValue = getValue(strtolower($keyLetter));
             
            $temp1[$looper] = $userValue + $keyValue;
             
            if ($temp1[$looper] > 25) {
                $temp1[$looper] -= 26;
            }
         
            $final = getLetter($temp1[$looper]);
             
             
            if ($userValue > $keyValue) {
                $temp2[$looper] = $userValue - $keyValue;
            }
            else if ($keyValue > $userValue )
            {
                $temp2[$looper] = $keyValue - $userValue ;
                $temp2[$looper] = 26 - $temp2[$looper];
            }
            else
            {
                $temp2[$looper] = 0;
            }
             
            $decrypt = getLetter($temp2[$looper]);
            $newword .= $decrypt;
             
             
        }
        echo "<b>The Decrypted Word is: </b>" . strtoupper($newword);
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


