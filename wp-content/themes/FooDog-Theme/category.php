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