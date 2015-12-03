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
				<h2><?php echo _("Anuncios Clasificados");?></h2>
				<p><?php echo _("The best businesses in New Mexico. ");?></p>
				<p><?php echo _("See");?> <a href="http://Afexamoneytranfers.com" target="_blank"><?php echo _("RIA Money transfers");?></a> <?php echo _("for more details and current exchange rate.");?></p>
			</div>
		</div>
		<hr>
		<!--i created a page with all the product items here-->
		<div class="products-wrapper">
			<!-- ====================== -->
			<!-- begin layout example 1 -->
			<!-- ====================== -->
			<h3><?php echo _(" Services");?> </h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/cafemaria.jpg" alt="product item"  style="width:240px; height:250px;"/>
						<div class="caption">
							<h4><?php echo _("Coffee Shop");?></h4>
							<p><?php echo _("Lily Marie's Company is the first roaster and specialty coffee company in
							                 in the South Valley.");?> </p>
							<p><?php echo _("Visit us at 640 Old Coors SW B ALB. NM. 87105");?></p>
							<p><?php echo _("Call us at (505) 585-5622");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/tortugaleria.jpg" alt="product item"  style="width:180px; height:250px;"/>
						<div class="caption">
							<h4><?php echo  _("Tortuga Gallery");?></h4>
							<p><?php echo _("A space for Community Art  & Performance.");?></p>
							<p><?php echo _("901 Edith Blvd SE . Alb. NM> 87102");?></p>
							<p><?php echo _("Call us  at (505) 506-0820 ");?></p>
							<p><?php echo _("tortuga.gallery.abq@gmail.com");?></p>
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
						<img src="../images/terrenoriorancho.jpg" alt="product item" style="width:220px; height:270px;" />
						<div class="caption">
							<h4><?php echo _("Land for Sale");?></h4>
							<p><?php echo _("We sale  one piece of land in Rio Rancho NM. Life time opportunity.");?></p>
							<p><?php echo _("Call us at (505) 304-2018");?></p>
						</div>
					</div>
				</div>
			</div>
			<h3><?php echo _("Solar  Works Energy");?></h3>
		  	<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/solar.jpg" alt="product item"/>
						<div class="caption">
							<h1><?php echo _("Solar Works Energy");?></h1>
							<h3><?php echo _("La compania Solar Works Energy  instala paneles solares
							                 en su casa. Empieze a  ahorrar dinero desde el primer dia y no pague nada
							                 para ponerlos en su techo. Contacte a Ryan Wallace at (505) 4156172 or  e-mail
							                 ryan.wallace@solarworksenergy.com
										");?></h3>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/house_before_after.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("A Reliable Roof, LLC");?></h4>
							<p><?php echo _(" Lic# 350432");?></p>
							<h3><?php echo _(" TPO Specialists and Modified Bitumen");?></h3>
							<h2><?php echo _(" Metal Propanel, Shingles,Title, EPDM.");?></h2>
							<h2><?php echo _("Phone(505) 250-2171  Owner Ramiro Flores");?></h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


			<h3><?php echo _("Services of Arriba Mexico");?></h3>
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
  </div>	<!--.site-content-->

	<!--footer include-->
	<?php require_once(dirname(__DIR__) . "/lib/footer.php"); ?>
</body>
</html>