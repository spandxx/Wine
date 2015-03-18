<?php get_header(); ?>

 	<div id="test">
	</div>
	<!-- POUR AFFICHER LES NOMS DES ARTICLES DANS LA CATEGORIE -->
	<section id="definition">
    <div class="container">
      <div class="row">
       <div class="col-sm-7 blog-main">


            
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
        </section>

<?php get_footer(); ?>