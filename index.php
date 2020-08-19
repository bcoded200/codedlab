<?php 
include_once("header.php");
require_once("function.php");
require_once("db.php");
require_once("session.php");

?>
<style>
 .checked {
    color: orange;
  }
	</style>
<section class="content">
	<div class="home_slider">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="img/cover1.png"></div>
				<div class="swiper-slide"><img src="img/cover2.png"></div>
				<div class="swiper-slide"><img src="img/cover3.png"></div>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
	</div>

	<div class="center">
		<div class="features">
			<div class="feature">
				<div class="feature_details">
				<b onclick="payWithPaystack1()"><img src="img/img1.jpg"></b>
					<h3>Bodybuilding</h3>
					<p>Lorem ipsum dolor sit amet, ei veritus consetetur repudiandae eam, duo ne homero nostro
						moderatius.</p>
						<h5 style="color:red; font-family:Times;">
						<b>Warning::</b>         Pro Workout's, Only Paid Members Can Have Access To This Post.!
</h5>
						<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star"></span>
</a>
				</div>
			</div>
			<div class="feature">
				<div class="feature_details">
					<a href="page2.php"><img src="img/img2.jpg">
					<h3>Fitness</h3>
					<p>Lorem ipsum dolor sit amet, ei veritus consetetur repudiandae eam, duo ne homero nostro
						moderatius.</p>
</a>
				</div>
			</div>
			<div class="feature">
				<div class="feature_details">
				<b onclick="payWithPaystack3()"><img src="img/img3.jpg"></b>
					<h3>Wight Lifting</h3>
					<p>Lorem ipsum dolor sit amet, ei veritus consetetur repudiandae eam, duo ne homero nostro
						moderatius.</p>
						<h5 style="color:red; font-family:Times;">
						<b>Warning::</b>         Pro Workout's, Only Paid Members Can Have Access To This Post.!
</h5>
						<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked"></span>
</a>
				</div>
			</div>
		</div>
	</div>
	<div class="center">
		<div class="join">
			<div class="join_left"><img src="img/img4.jpg"></div>
			<div class="join_right">
				<h1>Joined Today Get The Best</h1>
				<h2>MEMBERSHIP OFFER OF THE YEAR</h2>
				<p>Decore quidam bonorum vis eu, omnium instructior disputationi pro ei. An decore omittam duo, sed
					noluisse petentium instructior ad, pro no vidit error maiestatis. Ut qui errem quidam feugiat, ea
					eum vero mutat aliquip, ne erat postulant argumentum vim. Aliquip</p>
				<a href="register.php"><button>SIGN UP</button></a>
			</div>
		</div>
	</div>

	<div class="workout">
		<h1>Workout Classes</h1>
		<h2>Physical Activity Or Exercise Can Improve Your Health</h2></p>
		<button>
			<a href="page4.php">Readmore</a>
</button>
		<div class="swiper-container">
			

				</div>
			</div>
			
		</div>
	</div>

	<div class="center">
		<div class="price_table">
			<div class="price">
				<div class="price_header quaterly">
					<h1>Quaterly</h1>
					<h2>NGN: 500</h2>
					<span>Per month</span>
				</div>
				<ul class="price_content">
					<li>3 Days of the week</li>
					<li>Personal Trainer</li>
					<li>Body building</li>
					<li>Cross Fit</li>
					<li>Fitness</li>
					<li>Boxing</li>
				</ul>
				<button onclick="payWithPaystack1()" >Buy Now</button>
			</div>
			
	
			<div class="price">
				<div class="price_header halfyear">
					<h1>Half Year</h1>
					<h2>NGN 1000.00</h2>
					<span>Per month</span>
				</div>
				<ul class="price_content">
					<li>4 Days of the week</li>
					<li>Personal Trainer</li>
					<li>Body building</li>
					<li>Cross Fit</li>
					<li>Fitness</li>
					<li>Boxing</li>
				</ul>
				<button onclick="payWithPaystack2()">Buy Now</button>
			</div>

			<div class="price">
				<div class="price_header fullyear">
					<h1>Year</h1>
					<h2>NGN 2000.00</h2>
					<span>Per  2 month</span>
				</div>
				<ul class="price_content">
					<li>5 Days of the week</li>
					<li>Personal Trainer</li>
					<li>Body building</li>
					<li>Cross Fit</li>
					<li>Fitness</li>
					<li>Boxing</li>
				</ul>
				<button onclick="payWithPaystack3()">Buy Now</button>
			</div>
		</div>
	</div>
	<?php require_once("footer.php")?>