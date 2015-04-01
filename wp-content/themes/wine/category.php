<?php get_header(); ?>

<div id="fake-head">
</div>

<section id="cat">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 lettre">
				<h1 class="titrelettre">
				<?php          
				foreach((get_the_category()) as $category) {
					echo $category->cat_name . ' '; 
				}
				?>

				</h1>
				<img class="img-responsive pub-cat" src="<?php bloginfo('template_directory'); ?>/img/calque2.png"></a>

			</div>



			<div class=" col-sm-3 col-sm-offset-2 list-cat">
			    
			     
				<?php
				while ( have_posts() ) : the_post();
				
				?>

				<div id="titre-cat">
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

				</div>

				<?php
				endwhile;

				wp_reset_query();

				?>


			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>