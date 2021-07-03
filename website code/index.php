<!DOCTYPE html>
<html>
<title>Phototherapy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Phototherapy Machine</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    
      
      
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

<?php

	include("dbconnect.php"); 	
	
	
	
	$result = mysqli_query($conn,"SELECT * FROM  `photo` ORDER BY `time_date` DESC LIMIT 0,500");

?>

 <?php 
		  if($result!==FALSE){
			  $row1 = mysqli_fetch_row($result);
			  $var0=$row1[0]; 
		    $var1=$row1[1];
		    $var2=$row1[2];
		    $var3=$row1[3];
		    $var4=$row1[4];
		    
		    
		    echo "success";
		    
		     mysqli_free_result($result);
		     mysqli_close($conn);
		  }
		  
      ?>



<br />
<br />
<br />
<br />
<br />

<img align="right" src="design.jpg" width="400" height="400" >  




  
<?php
  
  
echo "<p align='left'> <font color=black size='5pt'> Heart Rate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;$row1[1]&nbsp;&nbsp;BPM</font></p>";
echo "<p align='left'> <font color=black size='5pt'> Spo2 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;$row1[2]</font></p>";
echo "<p align='left'> <font color=black size='5pt'> Weight &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;$row1[3]&nbsp&nbspg</font></p>";
echo "<p align='left'> <font color=black size='5pt'> Temperature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;$row1[4]&nbsp&nbspC</font></p>";

					 
  
  
  
  
  
?>  
 

  
  
  
  
