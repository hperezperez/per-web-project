
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>

		<!-- Font Awesome http://fontawesome.github.io/Font-Awesome/ -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>

		<!-- Custom CSS @author:rlewis37@cnm.edu -->
		<link type="text/css" href="lib/css/style.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!-- Custom JavaScript @author:rlewis37@cnm.edu -->
		<script type="text/javascript" src="lib/js/scripts.js"></script>

		<!-- Page Title -->
		<title>About Arriba Mexico</title>
	</head>
	<body class="site">
		<div class="site-content">
			<!--include the <head> tag-->

			<!--include <header> tag-->
			<header>
				<div class="container">
					<nav class="navbar">

						<!-- logo and mobile toggle button get grouped together for better mobile display -->
						<div class="navbar-header">

							<!-- this is the mobile menu button -->
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">main menu</span>
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</button>

							<a class="navbar-brand" href="#">TianguisMexico.com</a>
						</div>

						<!-- here are your main nav links, grouped for toggling -->
						<div class="collapse navbar-collapse" id="main-menu">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Home</a></li>
								<li><a href="#">Products</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">About Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<div class="container">
				<!--I put the welcome message on top - full width-->
				<div class="row welcome-msg">
					<div class="col-xs-12">
						<h2>About Us</h2>
						<p>We offer the best cellular phones at the best price. Craft beer +1 selvage, artisan occupy Etsy health goth mumblecore YOLO heirloom wayfarers slow-carb chambray fingerstache. Health goth synth viral messenger bag Pinterest, artisan YOLO selfies pug ugh. Tote bag selvage skateboard kale chips. Skateboard polaroid typewriter, cold-pressed Helvetica tousled roof party retro butcher crucifix pop-up salvia. Brooklyn cold-pressed whatever sartorial, butcher skateboard deep v pug typewriter four dollar toast actually flexitarian beard heirloom organic. Health goth wolf wayfarers, quinoa cornhole Vice tattooed Carles selvage.</p>
						<p>See <a href="http://getbootstrap.com/components/#thumbnails-custom-content" target="_blank">Bootstrap Images Custom Content</a> documentation for reference on this layout.</p>
					</div>
				</div>
				<hr>
				<!--i created a page with all the product items here-->
				<div class="products-wrapper">
					<!-- ====================== -->
					<!-- begin layout example 1 -->
					<!-- ====================== -->
					<h3>Item Layout Example v1</h3>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/galaxy5.jpg" alt="product item"  style="width:210px; height:245px;"/>
								<div class="caption">
									<h4>Samsung Galaxy 5</h4>
									<p>We offer the best price. Unlock phone. our price 449.00. Available colors white,blu and blac.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/galaxy4.jpg" alt="product item"/>
								<div class="caption">
									<h4>Samsung Galaxy 4</h4>
									<p> Limited time only. Free month of service for Simple mobile. Our price 299.00.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/galaxy4.jpg" alt="product item"/>
								<div class="caption">
									<h4>Samsung Galaxy 4</h4>
									<p>limited time only. Free month of service with Boost Mobile. Our price 289.00.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/I-phone4.jpg" alt="product item"/>
								<div class="caption">
									<h4>I-Phone 4</h4>
									<p> The best deal ever. 32 GB. Our lowest price 149.00. One month of service with Page Plus.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- ====================== -->
					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3>Mexican Products </h3>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/mexcandies.jpg" alt="product item"/>
								<div class="caption">
									<h4>Authentic Mexican Products</h4>
									<p>The best Mexican candies. Always fresh.The best Prices. Whole Sale and Retail.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/mural-jarritos.jpg" alt="product item" style="width:545px; heigth:720px;"/>
								<div class="caption">
									<h4> Refrescos Mexicanos</h4>
									<p> The Mexican refresco is the best in the world. Made with real suger.We sell Manzanita Sol, Sidral Mundet, Fresca,Jarritos, Coconut water and more.
										Our price 22.00 dollars case.Special prices for restaurnts and mobile food vendors. Call in advance to prepare your order</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


				</div><!--.products-wrapper-->	</div><!--.container-->
		</div><!--.site-content-->

		<!--footer include-->
		<footer class="footer">
			<div class="container">
				Footer Here
			</div>
		</footer>
	</body>
</html>