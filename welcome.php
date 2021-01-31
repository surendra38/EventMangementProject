<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HOME PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">

<header>
<h1 style="color:red; text-align:center; padding:4%"><I>WELCOME TO IICA EVENT MANAGEMENT SYSTEM<I></h1>
<!-- <img src="image/ER.PNG" class="img" alt="Girl in a jacket"> -->
</header>

<!-- <header>
<img src="image/ER.PNG" class="img" alt="Girl in a jacket">
<img src="image/logo.jpg" class="image" alt="Girl in a jacket">
</header> -->
<nav>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="aboutus.php">AboutUs</a></li>
  <li><a href="contact.php">ContactUs</a></li>
  <li><a href="view.php">ViewEvent</a></li>
  
  <li><a href="student.php">Student</a></li>
  <li><a href="result.php">Result</a></li>
  <li><a href="logout.php">logout</a></li>
</ul>

</nav>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
/*.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;*/
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slider">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/4.jpg" alt="khjgh" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/5.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/6.jpg" style="width:100%">
  
</div>



<div style="text-align:right">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<section>
<form action="s.php" method="POST">
<table width="50%" style="margin: 0 auto; border:1px solid red; background-color:#80ffbf; border-spacing:15px";>
<style>
table,th,td{
	border:1px solid black;
	border-collapse: collapse;
	ce
}
#bt
{
	background-color:green;
}
#btn
{
	background-color:green;
}
</style>

<tr>
<th colspan="2">POST EVENT</th>
</tr>
<tr>
  <td>Collage</td>
  <td>
    <select name="collage" id="collage">
      <option> Select</option>
      <option>Invertis</option>
    </select>
  </td>
</tr>
<tr>
<td>Event Name</td>
<td><input type="text" name="ename" placeholder="Enter event name" size="30" required></td>
</tr>

<tr>
<td>Organiser</td>
<td><input type="text" name="organiser" placeholder="Organised By" size="30" required></td>
</tr>
<tr>

<td>Starting Date</td>
<td><input type="date" name="sdate" placeholder="Enter Starting date" size="30" required></td>
</tr>

<tr>
<td>Conduct Timing</td>
<td><input type="time" name="ctiming" placeholder="Enter conduct timing" size="30" ></td>
</tr>
<tr>
<td>Last Date</td>
<td><input type="date" name="ldate" placeholder="Enter last date" size="30" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" id="bt">
<input type="reset" name="reset" id="btn"></td>
</tr>
</table>
<a  style="color:red; font-size:20px; margin-left:20px;position:relative"href="updateevent.php"><b>Update event</b></a><br>
<a  style="color:red; font-size:20px; margin-left:20px;padding-top:20px;position:absolute;"href="delete.php"><b>delete event<b></a>


</section>
<footer>
<h2 style="text-align:center;color:white;padding-top:20px;">copyright @ 2020-21</h2>

</footer>
</div>









</body>
</html>


 