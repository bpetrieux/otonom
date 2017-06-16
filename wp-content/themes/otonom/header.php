<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


	<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<script src="https://use.fontawesome.com/0c86c2489b.js"></script>
	<script src="https://use.typekit.net/bra2wnv.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
