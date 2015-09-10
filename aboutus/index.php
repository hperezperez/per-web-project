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
						<h2><?php echo _("About Us"); ?></h2>
						<p><?php echo _("We had been on business for twenty years. We started with a simple idea serve our customers with the products and services that big retailers did not have it.First we specialize in the Mexican Market. Then, we have to adjust to the changes of the market. Now, We offer the best cellular phones,finantial services, cellular services,and we still offer the best mexican products. Now, we had been founded Kronos Web Design company with the same philosophy of twenty years ago."); ?></p>
					</div>
				</div>
				<hr>
				<!--i created a page with all the product items here-->
				<div class="products-wrapper">
					<!-- ====================== -->

					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3><?php echo _("Mexican Products");?> </h3>
					<div class="row row-flex row-flex-wrap">
						<div class="col-xs-12 col-md-4">
							<div class="thumbnail item-horiz">
								<img src="../images/mazapanes.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php echo _("Mexican Products");?></h4>
									<p><?php echo _("The best mexican candies. Always fresh.The best Prices. Wholesale and Retail. Visit us");?> </p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="thumbnail item-horiz">
								<img src="../images/logo-imgs.jpg" alt="product item" style="width:545px; heigth:1920px;"/>
								<div class="caption">
									<h4><?php echo _(" The best companies");?></h4>
									<p><?php echo _(" We work with the best companies in order to provide to our customers the best service and value.We always try to help our customers. We try to find the best wireless plan for ever customer. We understand that every customer is different.");?></p>
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
					<h3><?php echo _("About Arriba Mexico");?> </h3>
					<div class="row row-flex row-flex-wrap">
						<div class="col-xs-12 col-md-4">
							<div class="thumbnail item-horiz">
								<img src="../images/servicio.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php echo _("Service is our priority");?></h4>
									<p><?php echo _("For us the customer satisfaction is our priority.  We always want to give you the best value for your money. We guarantee the best exchange rate.");?></p>
								</div>
								<div class="clearfix"></div>
					 		</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="thumbnail item-horiz">
								<img src="../images/compliance.jpg" alt="product item" >
								<div class="caption">
									<h3><?php echo _("Compliance");?></h3>
									<p><?php echo _("Arriba Mexico is a Money Services Business that compliance with the anti-money laundering laws and regulations established by the Us Dept of Treasury.");?></p>
									<h2><?php echo _("Contact US"); ?></h2>
									<li><?php echo _("Arriba Mexico");?></li>
									<li><?php echo _("121 Old Coors SW ");?></li>
									<li><?php echo _("Alb,NM 87121");?></li>
									<h3><?php echo _("By fax");?></h3>
									<li><?php echo _("Tel- Fax (505) 8395391");?></li>
									<h3><?php echo _("By Phone");?></h3>
									<li><?php echo _("Cellular (505) 3042018");?></li>
									<li><?php echo _("Cellular (505) 4892104");?></li>
									<h3><?php echo _("By e-mail");?></h3>
									<li><?php echo _("ferdinero121312@gmail.com");?></li>
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