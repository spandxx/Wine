<?php get_header(); ?>

 	<div id="test">
	</div>
	<!-- POUR AFFICHER LES NOMS DES ARTICLES DANS LA CATEGORIE -->
	<?php

		while ( have_posts() ) : the_post();
			echo '<li>';
			the_title();
			echo '</li>';
		endwhile;
 
		wp_reset_query();
		 
	?>

<?php get_footer(); ?>