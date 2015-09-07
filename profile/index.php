 <?php
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
$locale = "es_MX";
if(empty($_GET["locale"]) === false) {
	$locale = filter_input(INPUT_GET, "locale", FILTER_SANITIZE_STRING);
}
putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);
$domain = "gatos";
bindtextdomain($domain, "locale");
bind_textdomain_codeset($domain, "UTF-8");
textdomain($domain);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title><?php echo _("Welcome to Humberto's House of Cats"); ?></title>
	</head>
	<body>
		<main class="container">
			<h1><?php echo _("Cats Available"); ?></h1>
			<figure>
				<img class="img-responsive" src="images/arlo.jpg" alt="Arlo" />
				<figcaption><?php echo _("Arlo"); ?></figcaption>
			</figure>
			<p><?php echo _("Face it. Nobody is cuter than Arlo. Period!"); ?></p>
		</main>
	</body>
</html>
 <?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "pruebat";
require_once("../lib/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">
		<header>
			<?php require_once("../lib/header.php"); ?>
		</header>

		<div class="container">
			<!--I put the welcome message on top - full width-->
			<div class="row welcome-msg">
				<div class="col-xs-12">
					<h2>Products</h2>
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
				<h3>Cellular Products</h3>
				<div class="row row-flex row-flex-wrap">
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


			</div><!--.products-wrapper-->
		</div><!--.container-->
	</div><!--.site-content-->












	</div>
	<footer>
		<?php require_once("../lib/footer.php"); ?>
	</footer>
</body>
</html>