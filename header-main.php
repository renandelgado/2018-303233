<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<?php wp_head(); ?>	
		<?php framework_styles(); ?>
	</head>
	<body>
		<?php get_template_part('template-parts/parts-of-template/navigation/navbar', 'main'); ?>
