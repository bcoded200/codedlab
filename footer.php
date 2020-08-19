<?php

?>

<div class="brochure">
		<div class="center">
			<h1>Choose Your Exercise And Start Your Training With Us.</h1>
			<a href="contact.php"><button>Book Now</button></a>
		</div>
	</div>
</section>

<footer id="footer">
	<div class="center">
		<div class="footer_section about">
			<!--<a href="#"><img src="img/logo.png" alt="logo"></a>-->
			<p>Codedlab Simple Fitness Website Using Php , Css, Javascript.</p>

			<ul>
				<li><i class="fas fa-map-marker-alt"></i>Hire Me!</li>
				<li><i class="fas fa-envelope"></i>dakingeorge58@gmail.com</li>
				<li><i class="fas fa-mobile"></i>+234 8162791926</li>
			</ul>
		</div>

		<div class="footer_section newsletter">
			<h1>Newsletter</h1>
			<p>Sign up to get the latest offers</p>
			<form>
				<input type="text" name="s" placeholder="Enter email...">
				<input type="submit" value="Sign Up">
			</form>
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
			</ul>
		</div>

		<div class="footer_section latest_posts">
			<h1>Latest Posts</h1>
			<ul>
				<li>
					<a href="page.php"><img src="img/img1.jpg"></a>
					<a href="#">
						<h3>Lorem ipsum dolor sit amet, ei ubique fastidii vim</h3>
					</a>
				</li>
				<li>
					<a href="#"><img src="img/img2.jpg"></a>
					<a href="#">
						<h3>Elitr feugait complectitur eu pro, sea audire</h3>
					</a>
				</li>
				<li>
					<a href="#"><img src="img/img3.jpg"></a>
					<a href="#">
						<h3>Lorem ipsum dolor sit amet, ei ubique fastidii vim</h3>
					</a>
				</li>
			</ul>
		</div>

		<div class="footer_section opening_hours">
			<h1>Opening Hours</h1>
			<ul>
				<li>
					<h3>Monday</h3><span>08:00 AM - 18:00 PM</span>
				</li>
				<li>
					<h3>Tuesday</h3><span>08:00 AM - 18:00 PM</span>
				</li>
				<li>
					<h3>Wednesday</h3><span>08:00 AM - 18:00 PM</span>
				</li>
				<li>
					<h3>Thursday</h3><span>08:00 AM - 18:00 PM</span>
				</li>
				<li>
					<h3>Friday</h3><span>08:00 AM - 18:00 PM</span>
				</li>
				<li>
					<h3>Saturday</h3><span>08:00 AM - 18:00 PM</span>
				</li>
			</ul>
		</div>
	</div>

	<div class="instagram">
		<div class="center">
			<div class="instagram_header"><span></span>
				<h1>&copy codedlab</h1><span></span>
			</div>
		</div>
	</div>



	<div class="copyright">
		<div class="center">
			<p>&copy 2018 stayfit</p></p>
			<p>Designed By <a href="codedhub.xyz">&copy Codedlab</a></p>
		</div>
	</div>
</footer>

</div>
<script src="js/swiper.min.js"></script>
<script>
	var swiper = new Swiper('.home_slider .swiper-container', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
		}
	});

	var swiper = new Swiper('.workout .swiper-container', {
		slidesPerView: 3,
		spaceBetween: 0,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			640: {
				slidesPerView: 1,
				spaceBetween: 20,
			}
		}
	});

	var swiper = new Swiper('.instagram_photos .swiper-container', {
		slidesPerView: 5,
		spaceBetween: 0,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
			},
			320: {
				slidesPerView: 1,
			}
		}
	});
</script>
</body>

</html>