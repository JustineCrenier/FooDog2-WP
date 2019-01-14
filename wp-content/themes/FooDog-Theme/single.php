<?php get_header(); ?>
<!-- content single post -->
<div class="container single-post">
	<div class="row">
		<div class="col-9">
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
				<div class="col-12 d-flex flex-column align-items-start content-single">
					<?php echo wpautop($post->post_content); ?> 
				</div>
				<div class="newsletter col-12">
					<h4 class="text-center">Subscribe To The Digest Newsletter</h4>
					<p class="text-center">Get health and wellness tips about your dog delivered to your inbox</p>
					<form action="#" class="d-flex justify-content-center">
						<input type="email" placeholder="Your email">
						<input type="submit" value="SIGN UP">
					</form>
				</div>
				<div class="col-12 previous-next d-flex justify-content-between">
					<?php previous_post_link('%link', '<< PREVIOUS ARTICLE'); ?>
					<?php next_post_link('%link', 'NEXT ARTICLE >>'); ?>
				</div>
				<div class="col-12 pub">
					<div class="row">
						<div class="col-3">
							<div class="circle d-flex align-items-center justify-content-center text-center">
								The <br> Farmer <br> dog
							</div>
						</div>
						<div class="col-9">
							<div class="row">
								<h3 class="col-12">The Farmer's Dog</h3>
								<p class="col-12">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestias molestiae facilis, perferendis, minus voluptate. Voluptatem doloremque magnam quo, est incidunt enim quam vel, non fugit nostrum saepe. Ex, hic.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 might-like">
					<h2 class="text-left">You also might like</h2>
				</div>
				<div class="col-12 might-like-content d-flex justify-content-center">
					<?php
						$args = array(
		    				'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
					?>
					<div class="row d-flex justify-content-center">
						<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-4">
								<?php the_post_thumbnail('Hero-post'); ?>
								<a href="<?php the_permalink(); ?>"class="link-title"><h3><?php the_title(); ?></h3></a>
							</div>	
						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="col-12 comment-zone">
					<?php comment_form(); ?>
				</div>
			</div>
		</div>
		<div class="col-3">
			<!-- Sidebar -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>