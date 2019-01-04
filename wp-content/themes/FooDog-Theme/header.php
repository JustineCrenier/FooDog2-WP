<!DOCTYPE html>
<html lang="en">
<head>q
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Foodog</title>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<header>
		<h1><?php echo get_bloginfo( 'name' ); ?></h1>
		<div class="nav">
			<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
		</div>
	</header>