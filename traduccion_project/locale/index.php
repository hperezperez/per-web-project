<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
$locale = "es_MX";
if(empty($_GET["locale"]) === false) {
	$locale = filter_input(INPUT_GET, "locale", FILTER_SANITIZE_STRING);
}
putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);
$domain = "gatos";
bindtextdomain($domain, "locale");
bind_textdomain_codeset($domain, "UTF-8");
textdomain($domain);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title><?php echo _("Welcome to Humberto's House of Cats"); ?></title>
	</head>
	<body>
		<main class="container">
			<h1><?php echo _("Cats Available"); ?></h1>
			<figure>
				<img class="img-responsive" src="images/arlo.jpg" alt="Arlo" />
				<figcaption><?php echo _("Arlo"); ?></figcaption>
			</figure>
			<p><?php echo _("Face it. Nobody is cuter than Arlo. Period!"); ?></p>
			echo "<p> <a href="index.php?lang='es'>".CAMBIOIDIOMAES."</a>";
		</main>
	</body>
</html>
<?php
