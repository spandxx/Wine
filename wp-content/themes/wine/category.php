<?php get_header(); ?>

<div id="test">
</div>
<!-- POUR AFFICHER LES NOMS DES ARTICLES DANS LA CATEGORIE -->
<section id="cat">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 lettre">
				<h1 class="titrelettre">
				<?php          
				foreach((get_the_category()) as $category) {
					echo $category->cat_name . ' '; 
				}
				?>
				</h1>
				<img class="img-responsive pub" src="<?php bloginfo('template_directory'); ?> /img/calque2.png"></a>

			</div>



			<div class="col-sm-2 col-sm-offset-2 blog-sidebar">     	
				<?php

				while ( have_posts() ) : the_post();

				echo '<li>';
				the_title();
				echo '</li>';
				endwhile;

				wp_reset_query();

				?>
			</div>
		</div>
	</div>
<<<<<<< HEAD
</section>
=======
	<!-- POUR AFFICHER LES NOMS DES ARTICLES DANS LA CATEGORIE -->
	<?php

		while ( have_posts() ) : the_post();
			echo '<li>';
			the_title();
			echo '</li>';
		endwhile;
 
		wp_reset_query();
		 
	?>
>>>>>>> bad67c5ec2c39791de6f3c46c47e432dd18415f1

<?php get_footer(); ?>