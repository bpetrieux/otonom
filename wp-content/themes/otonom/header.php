<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


	<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>

</script>

</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="header_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/otonom_solution_logo.png" alt="otonom solution logo"></div>
	<div class="header_bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/iStock-477158904_couleur.jpg');">
	<div class="header_container container">
		<h1 class="header_title">FACILITEZ VOTRE COLLECTE<br>DES FRAIS DE CONDO ET DE LOYER</h1>
		<h3 class="header_subtitle">ÉCONOMISEZ DES HEURES EN OPTIMISANT LA GESTION DE VOS PAIEMENTS.<br>UNE SOLUTION SIMPLE RAPIDE ET EFFICACE!</h3>
		<div class="header_btn"><a href="#">ESSAYEZ DÈS AUJOURD’HUI!</a></div>
	</div>
	</div>
</header> 
