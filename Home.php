<!Doctype html>

<html>
	<head>
	<style>


p.date {
    text-align: right;
}

p.topic {
    text-align: left;
}
</style>
	<//table border=1>
      <tr>
		<div class="topnav" id="myTopnav">
			<td><a href="home">Home</a></td>
			<td><a href="About_us.php">About us</a></td>
			<td><a href="Shop.php">Shop</a></td>
			<td><a href="Support Us.php">Support us</a></td>
			<td><a href="Contact Us.php">Contact us</a></td>
			<td><a href="login_page.php">Login/Sign up</a></td>
		
			</tr>
		</div>  
		
		<form>
	<///table>
	<a href="https://www.google.com/search" ><p class="date"><input type="search" name="googlesearch" value="What are you looking for?">
  <input type="submit"></p></a>
		<title> Online Food System</title> 
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="framework.css">
	</head>  
	<body>
	<?php
		
			
			if (isset($_POST["submit"]))
			{
				echo "Welcome &nbsp" . $_POST["namevalue"];
			}
			else
			{
				echo ($_SERVER["PHP_SELF"]);
			}
		?>
	<div class="content">
		<img src="Logo1.jpg" height="200" width="200" align="left">
			<h1>HIMALAYAN CARAVAN</h1>

		</div>
	<//image slider>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!--<h2 class="w3-center">Manual Slideshow</h2>!-->

<div class="w3-content w3-display-container">
  <img class="mySlides" src="mangoes.jpg" style="width:100%">
  <img class="mySlides" src="potatoes.jpg" style="width:100%">
  <img class="mySlides" src="carrots.jpg" style="width:100%">
  <!img class="mySlides" src="img_forest.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
		<!-- <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="mangoes.jpg" style="width:100%">
    <div class="text">Mangoes</div>
  </div> 
   <div class="mySlies fade">
    <div class="numbertext">2 / 3</div>
    <img src="potatoes.jpg" style="width:100%">
    <div class="text">Potatoes</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="carrots.jpg" style="width:100%">
    <div class="text">Carrots</div>
  </div>

  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> !-->
  		<//image slider
>	</form>
		
		
		
		</body>
</html>