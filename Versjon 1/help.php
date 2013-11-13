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
	<div id="tekst"><h1> FAQ</h1>
	<h4>How to find a product and see others meanings about the product.</h4>
First you need to select the right category in the vertical menu. The menu is a “pop-out-menu”, so when you held the mouse over a category, some alternatives will pop out. Then it’s just to click on the alternative you like, and there you will find others meaning about the product. 
<br><br><h4>How to rate/comment your experiences and recommendations about a product?</h4>
If you want to rate/comment about a product, you will first have to find the right product by using the vertical “pop-out-menu”. When you have selected category, there will be a box where you can leave a comment and also your name. 
<br><br>
<h4>How to contact us with questions/feedback on our site.</h4>
If you have any questions about the site or the products, you can go to the ”Help” category which is located at the bottom on the right side. There you will find a comment field where you can write your own e-mail-address, title and a message of what you are wondering about. When you are finished, this will be sent to our e-mail address, where we will answer your question in a short time. You can find our e-mail address on the bottom of the site.
 <br><br><h4>How to find links with professional reviews?</h4>
First you need to choose a category, for example TV. Then you need to choose one of the subcategories, for example Smart-TV. And here you will find different reviews.
</div><br><br><br>


<div id="help" style="text-align:center;">
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
</div>

<div id="footer"><span class="kontaktinfo"> Posted by: Team Rocket  <br>
  Contact information: teamrocket.g15@gmail.com </span>
</div>


</div>

</body>
</html>