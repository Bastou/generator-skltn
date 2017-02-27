<?php

// Global informations
$titreSite = '<%= appname %>';
$author = '<%= authorname %>';
$description = '<%= description %>';
$siteUrl = '<%= appurl  %>';
<% if (includeMap) { %>
$googleMapApiKey = 'AIzaSyB5a1Eoh5oPPjUBkKDypuYSpurMrLKbVVE'; // Change key https://developers.google.com/maps/documentation/javascript/get-api-key?hl=fr
<% } %>

// Paths
$path  = '';
$imgPath = $path . 'images/';
$jsPath = $path . 'js/';
$cssPath = $path . 'css/';

// Parameters
$fullwidth = <%= isFullwidth %>;
$headertopbar = <%= hasHeaderTopBar %>;
$leftVerticalMenu = <%= hasVerticalMenu %>;

// Classes on tag <body>
$page_style = isset($page_style) ? $page_style : '';
$page_style .= $fullwidth ? '' : ' boxed';
$page_style .= $headertopbar ? ' has-header-top-bar' : '';
$page_style .= $leftVerticalMenu ? ' left-vertical-menu' : '';
 ?>
