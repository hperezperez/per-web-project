<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Anuncios clasificados";

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
				<h2><?php echo _("Anuncios CLasificados");?></h2>
				<p><?php echo _("The best businesses in New Mexico. ");?></p>
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
						<img src="../images/cafemaria.jpg" alt="product item"  style="width:240px; height:250px;"/>
						<div class="caption">
							<h4><?php echo _("COFFE SHOP");?></h4>
							<p><?php echo _("LilyMarie's COFFE COMPANY is the first roaster and specialty coffe company in the South Valley");?> </p>

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
			<h3><?php echo _("Services of Furniture for You");?></h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/muebles.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("Furniture For You");?></h4>
							<p><?php echo _("Furniture For You is a new store .We have twenty years experi.We are registered with The Finantial Crimes
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


			</d<h3><?php echo _("Services of Arriba Mexico");?></h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/zumba.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("Fitness Services");?></h4>
							<p><?php echo _("Arriba Mexico provides Zumba and RIPPED classes Business.We just start to offers this service. We have certified instructors for Zumba and RIPPED
										Classes every day from 6 to 7 pm and 7 to 8 pm. If you need a personal trainer call us to make an apoitment .");?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/kickboxing.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("With our personalized program of kickboxing  and RIPPED we guaranted amazing results");?></h4>
							<p><?php echo _("Con el programa personalizado de Kickboxing y RIPPED le garantizamos una figura fenomenal");?></p>
							<h3><?php echo _("YOU CAN DO IT");?></h3>
							<h2><?php echo _(" FREE CLASS.");?></h2>
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