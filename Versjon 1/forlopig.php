<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="test/css" href="design.css"/>
	<link rel="stylesheet" type="test/css" href="navbar.css"/>
	<title>RateMyStuff</title>
	
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	
</head>
<body>


<div id="container">

<div id="header"><span id="logo"><a href="index.html"><img src="rate my stuff2.png" alt="logo"></a></span></div>



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

<br>
Linker til profesjonelle anmeldelser: <a href="http://www.amobil.no/tester/" target="_blank">Amobil</a>

<br>
<br>
Dine kommentarer/anmeldelser går her

<form method="post" action="forlopig.php" name="databasetest">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<br>
  <br>
&nbsp;<br>
  <table style="text-align: left; width: 50px; height: 150px;" border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td>Name:</td>
        <td><input size="30" name="Navn"></td>
      </tr>
      <tr>
        <td>Comment:</td>
        <td><textarea class="input textarea" name="Tekst" id="Tekst"></textarea></td>
    </tbody>
  </table>
  <br>
  <input value="Post" name="lagre" type="submit">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input name="hente" value="Show comments" type="submit"> &nbsp; &nbsp; &nbsp; &nbsp;<input name="reset" value="Blank ut feltene" type="reset">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</form>

<!--må finne en måte/kode for å skrive ut resultatet på samme side som inn-feltet-->

<?PHP  
include 'database.php'; 


$Navn = $_POST['Navn']; 
$Tekst = $_POST['Tekst'];
$hente = $_POST['hente'];
$lagre = $_POST['lagre'];

   
if ($lagre)   
    {  
        $result = mysql_query("INSERT INTO Kommentarer (Navn,Tekst) VALUES ('$Navn','$Tekst')"); 
        
        if ($result) 
            {    include "svar.php"; 
                mysql_close($result); 
            } 
        else    { include "feil.php"; } 
    }  

else if ($hente) 
    {    $query="SELECT * FROM Kommentarer"; 
        $result=mysql_query($query);  

        $num=mysql_numrows($result);    
        mysql_close();                    
        echo "<b><center>Database Output</center></b><br><br>"; 
        $i=0; 

        echo "<tr><td>Navn</td>" . "<td>Tekst</td>" . "</tr><br>"; 
   
		while ($i < $num)  
        { 
            $Navn=mysql_result($result,$i,"Navn"); 
            $Tekst=mysql_result($result,$i,"Tekst"); 
            echo "<tr><td>$Navn</td>" . "<td>$Tekst </td>" . "</tr><br>"; 
            $i++; 
        }  
} 
 ?> 

</div>
	
<div id="footer"><span class="kontaktinfo"> Posted by: Team Rocket  <br>
  Contact information: teamrocket.g15@gmail.com </span>
</div>


</div>

</body>
</html>