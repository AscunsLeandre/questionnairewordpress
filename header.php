<!DOCTYPE html>
<html>
	<head>
 		<?php wp_head();?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
		<title><?php bloginfo('name');?><?php bloginfo('description'); ?></title>
	</head>
	<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2 class="sous_titre"><?php bloginfo('description'); ?></h1>
		<nav>
			<?php wp_page_menu('show_home=1') ?>
		</nav>
	</header>
