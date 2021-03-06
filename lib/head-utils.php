<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/header.php FarmToYou Header
 **/
require_once(dirname(__DIR__) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);

if(empty($_GET["locale"]) === false) {
	$locale = filter_input(INPUT_GET, "locale", FILTER_SANITIZE_STRING);
} else if(empty($_SESSION["locale"]) === false) {
	$locale = filter_input(INPUT_SESSION, "locale", FILTER_SANITIZE_STRING);
} else {
	$locale = "es";
}
$locale = strtolower(substr($locale, 0, 2));
if($locale === "en") {
	$locale = "en_US";
} else {
	$locale = "es_MX";
}
setcookie("locale", $locale, time() + 2592000, "/");

putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);
$domain = "tianguis";
bindtextdomain($domain, "$ROOT_PATH/locale");
bind_textdomain_codeset($domain, "UTF-8");
textdomain($domain);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>

		<!-- Custom CSS -->
		<link type="text/css" href="<?php echo $PREFIX;?>css/style.css" rel="stylesheet"/>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Google WebFonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!--custom javascript file-->
		<script type="text/javascript" src="<?php echo $PREFIX;?>js/javascript.js"></script>

		<!-- favicon generated using GIMP, improved by SR -->
		<link type="image/ico" href="../../favicon.ico" rel="shortcut icon"/>

		<title><?php echo $PAGE_TITLE; ?></title>
	</head>