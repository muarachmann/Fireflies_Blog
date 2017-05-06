<?php get_header(); ?>

	 <div id="mainContent">
		  
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
	                         
	                           	
							<div id="slider-wrapper">
								    <div class="mySlides">
									<div class="numbertext">1 / 3</div>
									<img id="1" src="Blogimages/wood.jpg" style="width: 500px; height:350px;"/>
									<div class="text">Caption Text hello mua
									</div>
									
								    </div>
								  
								    <div class="mySlides">
									<div class="numbertext">2 / 3</div>
									<img id="2" src="Blogimages/2.jpg" style="width: 500px; height:350px;"/>
									<div class="text">Caption Two</div>
								    </div>

								    <div class="mySlides">
									<div class="numbertext">3 / 3</div>
									<img id="3" src="Blogimages/1.jpg" style="width: 500px; height:350px;"/>
									<div class="text">Caption Three</div>
								    </div>

								      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
					   		
							</div><!-- slider-wrapper-->
									<div id="dotContainer">
						  <span class="dot" onclick="currentSlide(1)"></span>
						  <span class="dot" onclick="currentSlide(2)"></span>
						  <span class="dot" onclick="currentSlide(3)"></span>
									</div>
									
							        <br><hr style="width:500px;margin:0 auto;"><br>
									
									<fieldset>
									<legend>Quote Of The Day</legend>
									
								     <blockquote id="mainquote">
										For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close 
										to 5 million globally.
										 <br>
										 <cite style="float:right;"> - Mua Rachmann Dupond</cite>
									 </blockquote>
									
									</fieldset>
			</div><!-- mainContent -->
			
<?php get_sidebar(); ?>

<?php get_footer(); ?>