<!DOCTYPE html>
<html>
	<head>
 		<?php wp_head();?>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h1>
		<nav>
			<?php wp_page_menu('show_home=1') ?>
		</nav>
	</header>
