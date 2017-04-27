<!Doctype>
	<html>
		<head>
			<title>Myfirst Blog</title>
			<link href="Blogcss/blogmain.css" rel="stylesheet" type="text/css">
			<meta charset="utf-8"/>
		</head>
	
		<body>
		<div id="outerdiv">
			<div id="header">
					<div id="logo">
					<img src="Blogimages/logo.png" alt="logo" height="150" width="150"/>
					
					</div>	<!-- LogoImage-->														  
					<div id="n">
					<h1>Thoughts Of An Angry Woman.</h1>
					<p class="moto">Bridging the digital gender divide.</p>
					</div>
					<div id="searchBar">
					<table style="color:white;padding:10px;">
					<tr>
						<td>Search :
						<td><input class="searchBox" type="text" name="s" width="50" placeholder="Search"/>
					</tr>
					</table>
					</div><!-- SearchBar -->
					 <div id="Navmenu">
						<ul>
							<li class="home" ><a href="blog_home.php">Home</a></li>
							<li class="event"><a href="welcome.php">Events</a></li>
							<li class="about"><a href="about.php">About Us</a></li>
							<li class="contact"><a href="contact.php">Contact</a></li>
							<li class="recommended"><a href="recommended.php">Recommended Texts</a></li>
						
						</ul>
	  	           </div><!-- Navmenu -->
					
				
			</div><!-- header -->
	
			<div id="notice">
			Website under construction
			</div>
			<div id="mainContent">
			<span class="Caption">The Women's Blog</span>
						
<p class="clear">


			 <div id="sideBar">
            <u><h3>Recent Posts</h3></u>
            <p>
            Josh Cambria pens this month's surfer journal. Check out his month-long surfing experience as he surfs up the
            coast from San Diego up to Ventura. Along the way he meets several celebrities and finds a new favorite board.
            <a href="lifestyle.html">Check it out</a>.
            </p>
            <img src="Blogimages/tiger.jpg" width="200" height="250" alt="surf board" />
              <p>
            Late July saw some of the best surfing the world has ever seen. The water temperature and currents brought
            perfect conditions for the Maui Invitational and the field wasted no time in shredding last year's 
            </p>

            <img class="photo" src="Blogimages/art-groenlund.jpg" width="200" height="160" alt="colours" />
            <h3>Photos anyone?</h3>
            <p>
            Care to check out this month's featured photo gallery? Todd Crampton almost gets run over by wind surfers
            in Ventura and we are there!
            </p>

        </div> <!-- sideBar -->
		
		
			<div id="dotContainer">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
            </div>	

			 <div class="slideshow-container">
		 
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Blogimages/wood.jpg" style="width: 550px; height:400px;"/>
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Blogimages/2.jpg" style="width: 550px; height:400px;"/>
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Blogimages/1.jpg" style="width: 550px; height:400px;"/>
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


			<script src="Blogjs/jquery.js"></script>
			<script>
			var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
   
}
			</script>

Chronicles 15 vs 2:
Here, we have taken a covenant with the lord to follow him henceforth. His word says that if we follow him he will be with us but also that if we forsake him he too will forsake us.
PRAYER: Oh God give me the grace to follow and maintain this covenant this I pray in the mighty name of Jesus. Father without ur we can’t do anything on our own we pray may u give u the grace
Strengthens 
			
<p class="clear">
			</div><!-- mainContent -->
			
			</div><!-- outerdiv-->
	 
	
		
		</body>
	
	</html>