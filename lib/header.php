<div class="container">
	<nav class="navbar">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-collapse" aria-expanded="false">
				<span class="sr-only">Main Menu</span>
				<i class="fa fa-bars fa-lg"></i>
			</button>
			<a class="navbar-brand home-link" href="/">
				<span class="title"><img class="logo" src="../images/bandera.jpg" alt="Arriba Mexico Logo"/>Arriba Mexico</span>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="main-menu-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if($locale === "en_US") { ?>
					<li role="presentation"><a href="<?php echo $_SERVER["PHP_SELF"] . "?locale=es_MX"; ?>">Espa&ntilde;ol</a> </li>
				<?php } else { ?>
					<li role="presentation"><a href="<?php echo $_SERVER["PHP_SELF"] . "?locale=en_US"; ?>">English</a> </li>
				<?php } ?>
				<li role="presentation"><a href="/">Home</a> </li>
				<li role="presentation"><a href="/services">Services</a></li>
				<li role="presentation"><a href="/products">Products</a></li>
				<li role="presentation"><a href="/revista">Revista</a></li>
				<li role="presentation"><a href="/aboutus">About Arriba Mexico</a></li>
			</ul>
		</div>
	</nav>
</div>