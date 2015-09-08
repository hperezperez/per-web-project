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
						<h2>Services</h2>
						<p>We offer Money transfer, Bill Pay and Cashing checeks services. We are agents of Enramex, AFEX, Orlandi Valuta. We received money from all around the world. We use the network of RIA agents  in 150 countries around the work.  we accept payments for all the companies and services . PNM. New mexico gas, Comcast, Credit cards payments.</p>
						<p>See <a href="http://Riamoneytranfers.com" target="_blank">RIA Money transfers</a> for more details and current exchange rate.</p>
					</div>
				</div>
				<hr>
				<!--i created a page with all the product items here-->
				<div class="products-wrapper">
					<!-- ====================== -->
					<!-- begin layout example 1 -->
					<!-- ====================== -->
					<h3>Finantial Services </h3>
					<div class="row row-flex row-flex-wrap">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/moneygram.jpg" alt="product item"  style="width:240px; height:250px;"/>
								<div class="caption">
									<h4>Money Transfers Services</h4>
									<p>Arriba Mexico offers money transfer services worlwide incluing US and Mexico. We are approved by the State Deparment. </p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/ria.jpg" alt="product item"  style="width:180px; height:250px;"/>
								<div class="caption">
									<h4>Cashing checks</h4>
									<p> We cash payroll checks and taxes checks, at 2%.You need valid ID with picture, phone number and address. to see a complet list of valid  Id accepted contact us.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/t-mobile-logo.jpg" alt="product item" style="width:210px; height:270px;"/>
								<div class="caption">
								<h4>Cellular Services</h4>
									<p>We offer cellular services with the best plans. 50  dlls plan with Unlimited talk and texts.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="../images/verizon-wireless-logo.jpg" alt="product item" style="width:220px; height:270px;" />
								<div class="caption">
									<h4>Cellular Services</h4>
									<p>We offer the best network in US.4G LTE unlimited  talk and tex for  40 dlls throug Page Plus.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- ====================== -->
					<!-- begin layout example 2 -->
					<!-- uses custom classes    -->
					<!-- ====================== -->
					<h3>Services of Arriba Mexico</h3>
						<div class="row row-flex row-flex-wrap">
							<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/moneytranfers.jpg" alt="product item"/>
								<div class="caption">
									<h4>Finantial services</h4>
									<p>Arriba Mexico provides Money Bussiness Services.We have 20 twenty years experience.We are register with FINCEN,Finantial crime
										enforment network of IRS.And we are approved by the State Department.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="thumbnail item-horiz">
								<img src="../images/promotioncell.jpg" alt="product item"/>
								<div class="caption">
									<h4>Change service to one of our carriers</h4>
									<p> We have the best prepaid plans. No contract. The Best prices  and Plans.</p>
									<h3> YOU CAN USE YOUR SAME DEVICE</h3>
									<h2> Even more FREE PHONE.</h2>
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