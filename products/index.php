<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Products";

require_once(dirname(__DIR__) . "/lib/head-utils.php");
?>
	<body class="site">
			<!--include the <head> tag-->

    			<!--include <header> tag-->
			<header>
				<?php require_once("../lib/header.php"); ?>
			</header>
			<div class="container">
				<!--I put the welcome message on top - full width-->
				<div class="row welcome-msg">
					<div class="col-xs-12">
						<h2><?php _("Products");?></h2>
						<p><?php _("We offer the best cellphones at the best price. Also, we offer a great variety of mexican products, candies, pinatas, herbs, mexican arts and crafts.");?> </p>
						<p><?php _("See");?> <a href="http://t-mobile.com" target="_blank"><?php _("T-mobile web page");?> </a><?php _("to find plans and prices");?></p>
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
									<h4><?php _("Galaxy 5"); ?></h4>
			 						<p><?php _("We offer the best price. Unlock phone. Our price $449.00. Available colors white,blue and black.");?></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/galaxy4.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php _("Samsung Galaxy");?>Samsung Galaxy 4</h4>
									<p><?php _("Limited time offer. Free month of service for Simple mobile. Our price $299.00.");?></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/galaxy4.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php _("Galaxy 4");?></h4>
									<p><?php _("Limited time offer. Free month of service with Boost Mobile. Our price $289.00.");?></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/I-phone4.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php _("I-Phone 4");?></h4>
									<p><?php _("The best deal ever. 32 GB. Our lowest price 149.00. Free month of service with Page Plus.");?></p>
								</div>
							</div>
						</div>
					</div>

					<!-- ====================== -->
					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3><?php _("Mexican Products");?></h3>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/mexcandies.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php _("Authentic Mexican Products");?></h4>
									<p><?php _("The best Mexican candies. Always fresh.The best Prices. Wholesale and retail.");?></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/mural-jarritos.jpg" alt="product item" style="width:545px; heigth:720px;"/>
								<div class="caption">
									<h4><?php _("Refrescos Mexicanos");?></h4>
									<p><?php _("The Mexican soft drink is the best in the world. Made with real sugar.We sell Manzanita Sol, Sidral Mundet, Fresca,Jarritos, Coconut water and more.
									 Our price is $22.00 dollars per case.Special prices for restaurants and mobile food vendors. Call in advance to prepare your order");?></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div><!--.products-wrapper-->	</div><!--.container-->
		</div><!--.site-content-->
		<!--footer include-->
					<?php require_once(dirname(__DIR__) . "/lib/footer.php"); ?>
	</body>
</html>