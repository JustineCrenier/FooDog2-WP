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
				<div class="col-lg-6 col-md-12 hero-one d-flex justify-content-center flex-column align-items-center">
					<?php the_post_thumbnail('Hero-one'); ?>
					<h4 class="d-flex"><?php the_category(); ?></h4>
					<a href="<?php the_permalink(); ?>"class="link-title"><h3><?php the_title(); ?></h3></a>
				</div>	
			<?php endwhile; endif; ?>
			<div class="col-lg-6 col-md-12 hero-post">
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
			<div class="col-lg-8 wrapper-content">
				<!-- Featured post -->
				<div class="container featured-post">
					<div class="row hero-content">
						<h2 class="col-lg-12 accueil">
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
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<?php the_post_thumbnail('single-post'); ?>
									</div>
									<div class="col-lg-6 col-md-12">
										<h4 class="d-flex">Featured <?php the_category(); ?> <span>|</span></h4>
										<a href="<?php the_permalink(); ?>" class="link-title"><h3><?php the_title(); ?></h3></a>
										<p><?php the_excerpt(); ?></p>
										<div class="row d-flex align-items-center btnShare">
											<button class="i-share" data-toggle="modal" data-target="#sharePost"><i class="fas fa-share"></i></button><p class="share">Share</p>
										</div>
										<div class="modal fade" id="sharePost" tabindex="-1" role="dialog" aria-labelledby="sharePost" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Share this post</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <?php
												if( is_active_sidebar( 'zone-widgets-3' ) ):
												dynamic_sidebar( 'zone-widgets-3' );
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
								<?php
									$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
									$args = array(
									  'posts_per_page' => 6,
									  'paged'          => $paged
									);
									$query = new WP_Query( $args );
								?>
								<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
									<div class="col-lg-6">
										<?php the_post_thumbnail('single-post'); ?>
										<h4 class="d-flex justify-content-center"><?php the_category(); ?></h4>
										<a href="<?php the_permalink(); ?>" class="link-title"><h3 class="text-center"><?php the_title(); ?></h3></a>
										<p class="text-center"><?php the_excerpt(); ?></p>
									</div>
								<?php endwhile; endif; ?>
								<?php 
									$pageArg = array(
										'prev_text' => __('<'),
										'next_text' => __('>'),
									);
								?>
								<div class="col-12 d-flex justify-content-center last-page">
									<?php echo paginate_links($pageArg); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>