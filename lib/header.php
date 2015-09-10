<div class="container">
	<div class="row">
		<div class="col-md-3">
			<a class="home-link" href=".">
				<span class=" title">
				<img class="logo" src="../images/bandera.jpg" alt="Arriba Mexico Logo"/>
				Arriba Mexico
				</span>
			</a>
		</div>
		<div class="col-md-3">

		</div>
		<div class="col-md-6">
			<ul class="nav nav-pills pull-right">
				<?php if($locale === "en_US") { ?>
				<li role="presentation"><a href="<?php echo $_SERVER["PHP_SELF"] . "?locale=es_MX"; ?>">Espa&ntilde;ol</a> </li>
				<?php } else { ?>
				<li role="presentation"><a href="<?php echo $_SERVER["PHP_SELF"] . "?locale=en_US"; ?>">English</a> </li>
				<?php } ?>
				<li role="presentation"><a href="/services">Services</a></li>
				<li role="presentation"><a href="/products">Products</a></li>
				<li role="presentation"><a href="/aboutus">About Arriba Mexico</a></li>
			</ul>
		</div>
	</div>
</div>