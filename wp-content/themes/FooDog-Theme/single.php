<?php get_header(); ?>
<!-- content single post -->
<div class="container single-post">
	<div class="row">
		<div class="col-8">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<?php the_category(); ?>
				</div>
				<h2 class="col-12 d-flex justify-content-center">
					<?php the_title(); ?>
				</h2>
				<div class="col-12 d-flex justify-content-center">
					<?php the_post_thumbnail('Hero-one'); ?>
				</div>
				<div class="col-12 d-flex flex-column align-items-center">
					<?php echo wpautop($post->post_content); ?> 
				</div>
			</div>
		</div>
		<div class="col-4">
			<!-- Sidebar -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>