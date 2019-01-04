<?php get_header(); ?>
	<!-- content -->
	<div class="container">
		<div class="row">
			<div class="col-8 wrapper-content">
				<!-- Featured post -->
				<div class="container featured-post">
					<div class="row">
						<h2 class="col-12">
							Featured Post
						</h2>
					</div>
					<div class="row">
						<?php
							$args = array(
    							'tag' => 'featured'
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
										<h3><?php the_title(); ?></h3>
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
						<h2 class="col-12">
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
										<h3 class="text-center"><?php the_title(); ?></h3>
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