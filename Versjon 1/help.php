<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="test/css" href="design.css"/>
	<meta charset="UTF-8">
	<title>RateMyStuff</title>
	<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="test/css" href="design.css"/>
	<title>Rate My Stuff</title>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="test/css" href="design.css"/>
	<title>Rate My Stuff</title>
</head>
<body>
<div id="container">

<ul>
<li><a href="cameras.html">Cameras</a></li>
<li><a href="computers.html">Computers</a></li>
<li><a href="phones.html">Phones</a></li>
<li><a href="sound.html">Sound</a></li>
<li><a href="tv.html">TV</a></li>
<li><a href="other.html">Other</a></li>
<li><a href="about.html">About</a></li>
<li><a href="help.html">Help</a></li>
</ul>


<div id="header"></div>

<div id="leftnav"></div>

<div id="rightnav"></div>

<?php

if (isset($_REQUEST['email']))
  {
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("teamrocket.g15@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Your mail was successfully sent!";
  }
else
  {
  echo "<form method='post' action='help.php'>
  Email: <input name='email' type='text'><br>
  Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br>
  <input type='submit' value='Send'>
  </form>";
  }
 
?>

<div id="body"></div>

<div id="footer"><span class="kontaktinfo"> Posted by: Team Rocket  <br>
  Contact information: teamrocket@hotmail.com </span>
</div>

<span class="logo"><img src="rate my stuff2.png" alt="logo" style="height:150px; width:400px;"></span>

</div>

</body
</html>