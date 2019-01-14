<?php get_header(); ?>
<!-- content search -->

<?php if ( have_posts() ) : ?>

	<div class="page-header container">
		<div class="row">
			<h1 class="page-title col-4">
				<?php _e( 'Résultat de la recherche pour:', 'FooDog-Theme' ); ?>
			</h1>
			<div class="page-description col-8"><?php echo get_search_query(); ?></div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-4">
					<?php the_post_thumbnail('single-post'); ?>
					<?php the_category(); ?>
					<?php the_title(); ?>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php	else : ?>
	<div class="container">
		<div class="row">
			<p>Nothing found</p>
		</div>
	</div>
<?php endif; ?>


<?php get_footer(); ?>
