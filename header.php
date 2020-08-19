<?php
include_once("header.php");
require_once("function.php");
require_once("db.php");
require_once("session.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Codedlab Fitness HUb</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="custom.css" />

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>

<!--pay with pay stack starts here -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
	<script src="app.js"></script>
<!--pay with paystack ends here -->

<!--rating library starts here-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--ends here-->
</head>
<body>

	<div id="wrapper">

		<header id="header">
			<div class="center">
				<div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"></a></div>
				<div class="search_btn"><img src="img/search.svg" alt="Search Button"></div>
				<div class="menu_btn"><img src="img/bars.svg" alt="Menu Button"></div>
				<form class="main_search" action="#" method="GET">
					<input type="text" name="s" placeholder="Search...">
					<input type="submit" value="Search">
				</form>
				<nav class="main_menu">
					<ul>
						<li class="menu_active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="page.php">Page</a></li>
						<li><a href="contact.php">Contact</a></li>
                        <li><a href="<?php echo 'register.php' ?>">Signup</a></li>
                       <?php if(isset( $_SESSION['user_id'])){ ?>
                       <li><a href="<?php echo 'logout.php' ?>">Logout</a><li><?php }else{?>
                       <li><a href="<?php echo 'login.php' ?>">Login</a></li><?php }?>
					</ul>
				</nav>
				
			</div>
		</header>