<?php 
include 'config.php';
?>
<!doctype html>
<html class="no-js" lang="<% if (isFR) { %>fr<% } else { %>en<% } %>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $titreSite ?></title>
	<meta name="description" content="<?= $description ?>">
	<meta name="author" content="<?= $author ?>"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="author" href="humans.txt" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->
	<% if (includeSlider) { %>
	<link rel="stylesheet" href="<?= $cssPath ?>vendor/swiper.css">
	<% } %>
	<link rel="stylesheet" href="<?= $cssPath ?>vendor/jquery-ui.min.css">
	<% if (includeGallery) { %>
	<link rel="stylesheet" href="<?= $cssPath ?>vendor/jquery.fancybox.css">	
	<% } %>
	<link rel="stylesheet" href="<?= $cssPath ?>main.css">
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
</head>
<body class="<?= (isset($page_style) ? $page_style : ''). ' ' .($headertopbar ?  'has-header-top-bar' : ''); ?>">
