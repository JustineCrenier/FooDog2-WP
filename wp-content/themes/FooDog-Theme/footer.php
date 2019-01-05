	<footer class="container-fluid footer">
		<div class="row main-footer">
			<div class="container">
				<div class="row">
					<div class="col-4 d-flex flex-column align-items-center">
						<p class="titre-footer">Catégories</p>
						<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
					</div>
					<div class="col-4 d-flex flex-column align-items-center">
						deux
					</div>
					<div class="col-4 d-flex flex-column align-items-center">
						trois
					</div>
				</div>
			</div>
		</div>
		<div class="row social">
			<!-- Mettre les réseaux ici -->
			<div class="container">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						facebook Twitter Instagram
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