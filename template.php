<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $title; ?></title>
		<link rel="Stylesheet" type="text/css" href="Stylesheet.css"/>
	</head>
	<body>
		<div id="wrapper">
			<div id="banner">
				<h1>Urbane Nails</h1>
				<h2>345 Curry Hollow Rd, 
				Pittsburgh PA 15236</h2>
				<h3>(412) 653-6335</h3>
			</div>
			
			<nav id="nagivation">
				<ul id="nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="promo.php">Gifts and Promotions</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
			</nav>
			
			<div id="content_area">
				<?php echo $content; ?>
			</div>
			
			<div id="sidebar">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="numbertext">1 / 7</div>
						<img src="Images/nails/nails4.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">
						<div class="numbertext">2 / 7</div>
						<img src="Images/nails/nails5.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">
						<div class="numbertext">3 / 7</div>
						<img src="Images/nails/nails6.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">4 / 7</div>
						<img src="Images/nails/nails7.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">5 / 7</div>
						<img src="Images/nails/nails8.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">6 / 7</div>
						<img src="Images/nails/nails9.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">7 / 7</div>
						<img src="Images/nails/nails10.jpg" style="width:100%">
					</div>

				</div>
				
				<script type="text/javascript">
					var slideIndex = 0;
					showSlides();
					
					//Slideshow function
					function showSlides() {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none"; 
						}
						slideIndex++;
						if (slideIndex> slides.length) {slideIndex = 1} 
						slides[slideIndex-1].style.display = "block"; 
						setTimeout(showSlides, 3000); // Change image every 3 seconds
					}
				</script>
			</div>
			
			<footer>
				<p>All rights reserved</p>
			</footer>
		</div>
	</body>
</html>
	
	