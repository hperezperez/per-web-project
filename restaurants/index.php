<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "TruFork - Restaurant";
require_once("../lib/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">
		<header>
			<?php require_once("../lib/header.php"); ?>
			<?php require_once("../lib/celulares.php"); ?>
		</header>
		<?php require_once("../lib/prod.php"); ?>
		<p> celulares</p>
		<?php require_once("../lib/celulares.php"); ?>
	</div>
	<footer>
		<?php require_once("../lib/footer.php"); ?>
	</footer>
</body>
</html>