<?php get_header(); ?>
<!-- content category -->
<div class="container-fluid cat-header">
	<h2><?php the_category(); ?></h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-12 cat-content">
						<div class="row">
							<div class="col-6">
								<?php the_post_thumbnail('single-post'); ?>
							</div>
							<div class="col-6">
								<h4 class="d-flex"><?php the_category(); ?> <span>|</span></h4>
								<a href="<?php the_permalink(); ?>" class="link-title"><h3><?php the_title(); ?></h3></a>
								<p><?php the_excerpt(); ?></p>
								<button class="i-share" data-toggle="modal" data-target="#sharePost"><i class="fas fa-share"></i></button>
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
		<div class="col-4">
			<!-- sidebar -->
			<?php get_sidebar(); ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>