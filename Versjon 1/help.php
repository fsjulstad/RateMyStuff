<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="test/css" href="design.css"/>
	<link rel="stylesheet" type="test/css" href="navbar.css"/>
	<title>RateMyStuff</title>
</head>
<body>


<div id="container">

<div id="header"><span id="logo"><img src="rate my stuff2.png" alt="logo"></span></div>



<div id="leftnav">

<!-- Navigasjonsbar -->
<nav>
    <ul>
        <li><a href="index.html"><span></span>Home</a></li>
        <li> <a href="forlopig.html"><span></span>Cameras</a>
            <ul>
                <li><a href="forlopig.html">System</a></li>
                <li><a href="forlopig.html">Compact</a></li>
                <li><a href="forlopig.html">Action</a></li>
                <li><a href="forlopig.html">Video</a></li>
                <li><a href="forlopig.html">Accessories</a></li>
            </ul>
        </li>
          <li> <a href="forlopig.html"><span></span>Phones</a>
            <ul>
                <li><a href="forlopig.html">Touch</a></li>
        		<li><a href="forlopig.html">Traditional</a></li> 
            </ul>
        </li>
        </li>
          <li> <a href="forlopig.html"><span></span>Sound</a>
            <ul>
                <li><a href="forlopig.html">Dockingstation</a></li>
        		<li><a href="forlopig.html">Speakers</a></li>
        		<li><a href="forlopig.html">Receivers</a></li>
        		<li><a href="forlopig.html">Accessories</a></li> 
            </ul>
        </li>
        </li>
          <li> <a href="forlopig.html"><span></span>TV</a>
            <ul>
                <li><a href="forlopig.html">3D</a></li>
        		<li><a href="forlopig.html">LCD</a></li>
        		<li><a href="forlopig.html">LED</a></li>
        		<li><a href="forlopig.html">Plasma</a></li>
        		<li><a href="forlopig.html">Smart-TV</a></li>
            </ul>
        </li>
        <li> <a href="forlopig.html"><span></span>Other</a>
        <li> <a href="about.html"><span></span>About</a>
        <li> <a href="help.php"><span></span>Help</a>
    </ul>
</nav>

</div>
<div id="rightnav"></div>

<div id="center">
	<span id="tekst">Her vil det være nyheter og oppdateringer med siden</span><br>
	
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
  
</div>

<div id="footer"><span class="kontaktinfo"> Posted by: Team Rocket  <br>
  Contact information: teamrocket.g15@gmail.com </span>
</div>


</div>

</body>
</html>