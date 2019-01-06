<?php get_header(); ?>
	<!-- content index -->
	<!-- Hero section -->
	<div class="container hero">
		<div class="row">
			<!-- hero one -->
			<?php
				$args = array(
    				'tag' => 'Hero-one',
    				'posts_per_page' => 1
				);
				$query = new WP_Query( $args );
			?>
			<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-6 hero-one d-flex justify-content-center flex-column align-items-center">
					<?php the_post_thumbnail('Hero-one'); ?>
					<h4 class="d-flex"><?php the_category(); ?></h4>
					<a href="<?php the_permalink(); ?>"class="link-title"><h3><?php the_title(); ?></h3></a>
				</div>	
			<?php endwhile; endif; ?>
			<div class="col-6 hero-post">
				<div class="row">
					<!-- hero -->
					<?php
						$args = array(
    						'tag' => 'Hero',
    						'posts_per_page' => 4
						);
						$query = new WP_Query( $args );
					?>
					<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-6">
							<?php the_post_thumbnail('Hero-post'); ?>
							<a href="<?php the_permalink(); ?>" class="link-title"><h3><?php the_title(); ?></h3></a>
						</div>	
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured and latest container -->
	<div class="container">
		<div class="row">
			<div class="col-8 wrapper-content">
				<!-- Featured post -->
				<div class="container featured-post">
					<div class="row">
						<h2 class="col-12 accueil">
							Featured Post
						</h2>
					</div>
					<div class="row">
						<?php
							$args = array(
    							'tag' => 'featured',
    							'posts_per_page' => 3
							);
							$query = new WP_Query( $args );
						?>
						<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-12">
								<div class="row">
									<div class="col-6">
										<?php the_post_thumbnail('single-post'); ?>
									</div>
									<div class="col-6">
										<h4 class="d-flex">Featured <?php the_category(); ?> <span>|</span></h4>
										<a href="<?php the_permalink(); ?>" class="link-title"><h3><?php the_title(); ?></h3></a>
										<p><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>	
						<?php endwhile; endif; ?>
					</div>
				</div>
				<!-- Latest Post -->
				<div class="container latest-post">
					<div class="row">
						<h2 class="col-12 accueil">
							Latest Post
						</h2>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<div class="col-6">
										<?php the_post_thumbnail('single-post'); ?>
										<h4 class="d-flex justify-content-center"><?php the_category(); ?></h4>
										<a href="<?php the_permalink(); ?>" class="link-title"><h3 class="text-center"><?php the_title(); ?></h3></a>
										<p class="text-center"><?php the_excerpt(); ?></p>
									</div>
								<?php endwhile; endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<!-- Mettre la sidebar ici -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>