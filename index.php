<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Arriba Mexico";
require_once("lib/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">
		<header>
			<?php require_once("lib/header.php"); ?>
	   </header>
			<div class="main-text">
				<div class="container">
					<div class="row">
					 <div class="col-md-12">
						<h1 class="search-main-h1">The Best Mexican Products.</h1>
					 </div>
				 </div>
				<div class="row">
					<div class="col-md-12">
						<script>
							(function() {
								var cx = '016536405296670082994:9a9knhmqzcc';
								var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
									'//cse.google.com/cse.js?cx=' + cx;
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(gcse, s);
							})();
						</script>
						<gcse:search></gcse:search>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php require_once("lib/footer.php"); ?>
	</footer>
</body>
</html>