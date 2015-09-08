<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "About US";

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
						<h2><?php _("About Us"); ?></h2>
						<p><?php _("We had been on bussiness for twenty years. We star with a simple idea \"serve our customers with the products and services that big retailers did not have it.\"First we specialice in the Mexican Market. Then We have to adjust to the changes with the time. Now, We offer the best cellular phones at the best price,finantial services, cellular services,and we still offer the best mexican products. Now as one branch of our business we had been founded Kronos web design company with the same philosophy of twenty years ago. \"serve our customer with the customize services that big companies do not provide\""); ?></p>
					</div>
				</div>
				<hr>
				<!--i created a page with all the product items here-->
				<div class="products-wrapper">
					<!-- ====================== -->

					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3>Mexican Products </h3>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/mazapanes.jpg" alt="product item"/>
								<div class="caption">
									<h4>Authentic Mexican Products</h4>
									<p>The best Mexican candies. Always fresh.The best Prices. Whole Sale and Retail. visit us </p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/logo-imgs.jpg" alt="product item" style="width:545px; heigth:1920px;"/>
								<div class="caption">
									<h4> Best companies</h4>
									<p> We work with the best companies in order to provide to our customer the best service and value.We always try to help our customers. We try to find the best pla for every
										customer because we understant that every customer is diferent.Call in advance to prepare your order</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
							<!-- ====================== -->
					<!-- begin layout example 1 -->
					<!-- ====================== --
					<!-- ====================== -->
					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3>About Arriba Mexico </h3>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/servicio.jpg" alt="product item"/>
								<div class="caption">
									<h4>Customer service is our priority</h4>
									<p>For us the customer satisfaction is our priority.  We want always to give the best value for your money. Always the best exchange rate.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/compliance.jpg" alt="product item" style="width:545px; heigth:2020px;"/>
								<div class="caption">
									<h3> Compliance</h3>
									<p>Arriba Mexico is a Money service Bussinees that compliance with the anti-money laurenry aw and all the
										laws reallted to the businee operation</p>
									<h2> Contact Us</h2>
									<li> Arriba Mexico</li>
									<li> 121 Old Coors SW</li>
									<li> ABL NM 87121</li>
									<h3> By Fax</h3>
									<li> Tel- Fax (505) 8395391</li>
									<h3> By Phone</h3>
									<li> Cellular (505) 3042018</li>
									<li> cellular (505) 4892104</li>
									<h3> By e-mail</h3>
									<li> ferdinero1212@gmail.com</li>
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