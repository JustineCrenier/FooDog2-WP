<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Foodog</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<header>
		<?php if (is_single()) : ?>
			<div class="container nav-single">
				<div class="row navbar-light nav-row">
					<div class="col-4 d-flex">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
    					</button>
						<a href="<?php bloginfo( 'url' ); ?>" class="h1-title"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
					</div>
					<div class="col-4 d-flex justify-content-center align-items-center">Newsletter</div>
					<div class="col-4 d-flex justify-content-end align-items-center">
						<button type="button" class="button-search" data-toggle="modal" data-target="#search">
							<i class="fas fa-search"></i>
						</button>
						<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Que cherchez-vous ?</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<?php
								if( is_active_sidebar( 'zone-widgets-2' ) ):
								dynamic_sidebar( 'zone-widgets-2' );
								endif;
								?>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="collapse" id="navbarToggleExternalContent">
					<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
				</div>
			</div>
		<?php else :?>
			<div class="container social-wrapper">
				<div class="row">
					<div class="col-10">
						<?php wp_nav_menu(array('theme_location' => 'social')); ?>
					</div>
					<div class="col-2">
						<button type="button" class="button-search" data-toggle="modal" data-target="#searchmain">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
				<div class="modal fade" id="searchmain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						    <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Que cherchez-vous ?</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          	<span aria-hidden="true">&times;</span>
						        </button>
						    </div>
						    <div class="modal-body">
						      	<?php
								if( is_active_sidebar( 'zone-widgets-2' ) ):
								dynamic_sidebar( 'zone-widgets-2' );
								endif;
								?>
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						    </div>
						</div>
					</div>
				</div>	
			</div>
			<div class="site-title container">
				<div class="row d-flex justify-content-center">
					<a href="<?php bloginfo( 'url' ); ?>" class="h1-title"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
				</div>
			</div>
			<div class="nav container">
				<div class="row d-flex justify-content-center">
					<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
				</div>
			</div>
		<?php endif; ?>
	</header>