	<footer class="container-fluid footer">
		<div class="row main-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 d-flex flex-column first-col">
						<h4 class="titre-footer">Categories</h4>
						<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
					</div>
					<div class="col-lg-4 col-m-8 d-flex flex-column second-col">
						<h4 class="titre-footer">
							Popular posts
						</h4>
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
										<div class="col-4">
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('footer-post'); ?>
											</a>
										</div>
										<div class="col-8">
											<a href="<?php the_permalink(); ?>">
												<h3><?php the_title(); ?></h3>
											</a>
										</div>
									</div>
								</div>	
							<?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-4 d-flex flex-column">
						<h4 class="titre-footer">
							Instagram
						</h4>
						<!-- InstaWidget -->
						<a href="https://instawidget.net/v/tag/animauxdroles" id="link-ca731a9b0baf219e286ae73a9ab88120b275698bbce51c31a0b928682d973777">#animauxdroles</a>
						<script src="https://instawidget.net/js/instawidget.js?u=ca731a9b0baf219e286ae73a9ab88120b275698bbce51c31a0b928682d973777&width=300px"></script>
					</div>
					<a href="#" class="back-to-top"><i class="fas fa-caret-up"></i></a>
				</div>
			</div>
		</div>
		<div class="row social">
			<!-- Mettre les réseaux ici -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-end">
						<?php wp_nav_menu(array('theme_location' => 'social')); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<?php wp_footer();?>
</body>
</html>