<?php get_header(); ?>

<?php if ( !is_home() ){ ?>
	<div id="fake-head">
	</div>
<?php } ?>

<section id="cat">

	<div class="container">
		<div class="row">

			<h2 class="text-center">TOUS LES MOTS DU VIN POUR AMELIORER SA CULTURE</h2>
				
				<div id="traitfin">
					
				</div>
	
			<div class="col-xs-12 col-sm-offset-0 col-sm-8 col-md-2 lettre">
				<h2 class="titrelettre">
					<?php the_category(); ?>
				</h2>
			</div>

			<div class="col-md-7">

					<div class="row">
						<div class="col-md-12">
							<?php 
							global $post;
							$category = get_the_category($post->ID);
							$category = $category[0]->cat_ID;
							$my_query = new WP_Query(array('post_type' => 'post', 'cat' => $category, 'posts_per_page' => '1000')); 
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<div class="col-md-6">
								<div class="category-definition">
								  	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="category-definition-item">
								    	<h4 class="category-definition-heading">
								    		<?php the_title(); ?>
								    	</h4>

								    	<p>	
											<?php the_content(); ?>
										</p>
									</a>
								</div>
							</div>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>

				
				</div>
			</div>

			<div class="col-md-3">

					<?php $my_query = new WP_Query(array('post_type' => 'publicite'));
					while ($my_query->have_posts()) : $my_query->the_post(); ?> 
				<a href="<?php the_field('lien_category'); ?>">
					<img class="img-responsive dispnone" src="<?php the_field('image_category'); ?>" alt="pub-abcdegustation">
				</a>
				<?php endwhile; ?>
				<?php wp_reset_query();?>
				

			</div>
		</div>
	</div>

</section>

	<?php if ( is_home() ){ ?>

	<section class="footerhome text-center">

		<div class="container">

			<h3>&copy; Les Mots du Vin - Tous droits réservés - Attention l'abus d'alcool est dangereux pour la santé.</h3>
			<a href="/contact/"><h2>Réservez de la publicité sur le site</h2></a>

		</div>

	</section>
	<?php } ?>

<?php get_footer(); ?>