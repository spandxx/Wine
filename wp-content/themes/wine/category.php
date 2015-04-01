	<?php get_header(); ?>

<div id="fake-head">
</div>

<section id="cat">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-3 lettre">
				<h1 class="titrelettre">
				<?php          
				foreach((get_the_category()) as $category) {
					echo $category->cat_name . ' '; 
				}
				?>

				</h1>
				<img class="img-responsive pub-cat" src="<?php bloginfo('template_directory'); ?>/img/calque2.png"></a>

			</div>



			<div class=" col-sm-2 col-md-8 list-cat">
				
				<?php
					$categories = get_the_category();
					$cat_id = $categories[0]->cat_ID;
 
					$args = array(
						'posts_per_page'   	=> '20',
						'category'         	=> $cat_id,
						'order' 			=> 'ASC',
						'orderby'           => 'title',
						'post_type'        	=> 'post',
					);

					$posts_array = get_posts( $args );

					foreach ($posts_array as $post) : ?>

						<div id="titre-cat" class="col-md-4">
					
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

						</div>

					<?php endforeach; ?>

			</div>

			</div>
		</div>

</section>

<?php get_footer(); ?>