<?php get_header(); ?>
	<!-- content -->

	<!-- Latest Post -->
	<div class="container latest-post">
		<div class="row">
			<h2 class="col-12">
				Latest Post
			</h2>
		</div>
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-6">
					<?php the_post_thumbnail('single-post'); ?>
					<h4><?php the_category(); ?></h4>
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php get_footer(); ?>