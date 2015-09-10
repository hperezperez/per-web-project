<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Services";

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
						<h2><?php echo _("Services");?></h2>
						<p><?php echo _("We offer money transfers, bill payment and check cashing. We are agents of Enramex, Afex and Orlandi Valuta. We receive money from all around the world. We use RIA agents network in 150 countries around the world.We accept  bill payments for all the companies, PNM, New Mexico gas, Comcast.");?></p>
						<p><?php echo _("See");?> <a href="http://Riamoneytranfers.com" target="_blank"><?php echo _("RIA Money transfers");?></a> <?php echo _("for more details and current exchange rate.");?></p>
					</div>
				</div>
				<hr>
				<!--i created a page with all the product items here-->
				<div class="products-wrapper">
					<!-- ====================== -->
					<!-- begin layout example 1 -->
					<!-- ====================== -->
					<h3><?php echo _("Financial Services");?> </h3>
					<div class="row row-flex row-flex-wrap">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/moneygram.jpg" alt="product item"  style="width:240px; height:250px;"/>
								<div class="caption">
									<h4><?php echo _("Money Transfers Services");?></h4>
									<p><?php echo _("Arriba Mexico offers money transfers services worldwide. We are approved by the State Department.");?> </p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/ria.jpg" alt="product item"  style="width:180px; height:250px;"/>
								<div class="caption">
									<h4><?php echo  _("Cashing checks");?></h4>
									<p><?php echo _("We cash payroll and taxes checks at 2%.You need a valid type of ID with picture, phone number and address. To get a complete list of valid types of Ids contact us.");?></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/t-mobile-logo.jpg" alt="product item" style="width:210px; height:270px;"/>
								<div class="caption">
								<h4><?php echo _("Wireless Services");?></h4>
									<p><?php echo _("We offer the best services plans for cellulars, unlimited talk and texts with 4G LTE for $40.00.");?></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/verizon-wireless-logo.jpg" alt="product item" style="width:220px; height:270px;" />
								<div class="caption">
									<h4><?php echo _("Wireless Service");?></h4>
									<p><?php echo _("We offer the best network in US,4G LTE unlimited  talk and text for  40 dlls with Page Plus.");?></p>
								</div>
							</div>
						</div>
					</div>

					<!-- ====================== -->
					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3><?php echo _("Services of Arriba Mexico");?></h3>
						<div class="row row-flex row-flex-wrap">
							<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/moneytranfers.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php echo _("Financial Services");?></h4>
									<p><?php echo _("Arriba Mexico provides Money Services Business.We have twenty years experience.We are registered with The Finantial Crimes
										Enforcement Network of IRS. And, we are approved by the US Department of Treasury.");?></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/promotioncell.jpg" alt="product item"/>
								<div class="caption">
									<h4><?php echo _("Change service to one of our carriers");?></h4>
									<p><?php echo _("We have the best prepaid plans. No contract. The Best prices  and plans.");?></p>
									<h3><?php echo _("YOU CAN USE YOUR SAME DEVICE");?></h3>
									<h2><?php echo _(" FREE PHONE.");?></h2>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


				</div><!--.products-wrapper-->
			</div><!--.container-->
		</div><!--.site-content-->

		<!--footer include-->
				<?php require_once(dirname(__DIR__) . "/lib/footer.php"); ?>
	</body>
</html>