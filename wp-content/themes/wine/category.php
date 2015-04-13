	<?php get_header(); ?>

<div id="fake-head">
</div>

<section id="cat">

	<div class="container-fluid">
		<div class="row">

			<div class="col-xs-12 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-2">
					<?php $my_query = new WP_Query(array('post_type' => 'publicite')); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<a href="<?php the_field('link_up_left'); ?>" target="_blank">
							<img class="img-responsive marginpubcat" src="<?php the_field('image_up_left');?>"/>
						</a>

						<a class="displaynone" href="<?php the_field('link_middle_left'); ?>" target="_blank">
							<img class="img-responsive marginpubcat" src="<?php the_field('image_middle_left');?>"/>
						</a>

						<a class="displaynone" href="<?php the_field('link_down_left'); ?>" target="_blank">
							<img class="img-responsive marginpubcat" src="<?php the_field('image_down_left');?>"/>
						</a>

					<?php wp_reset_query(); ?>
					<?php endwhile; ?>
			</div>

			<div class="col-xs-12 col-sm-offset-1 col-sm-6 col-md-offset-1 col-md-1 lettre">
				<h1 class="titrelettre">
					<?php          
						foreach((get_the_category()) as $category) {
							echo $category->cat_name . ' '; 
							}
					?>
				</h1>
			</div>



			<div class="col-xs-12 col-sm-offset-1 col-sm-6 col-md-4 list-cat">
				
				<?php
					$categories = get_the_category();
					$cat_id = $categories[0]->cat_ID;
 
					$args = array(
						'posts_per_page'   	=> '20',
						'category'         	=> $cat_id,
						'order' 			=> 'ASC',
						'orderby'           => 'rand',
						'post_type'        	=> 'post',
					);

					$posts_array = get_posts( $args );

					foreach ($posts_array as $post) : ?>

						<div id="titre-cat" class="col-xs-6 col-md-4">
					
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

						</div>

					<?php endforeach; ?>

			</div>

			<div class="col-md-offset-1 col-md-1 displaynonee">
				<?php $my_query = new WP_Query(array('post_type' => 'publicite')); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<a href="<?php the_field('link_right'); ?>" target="_blank"><img class="img-responsive" src="<?php the_field('image_right');?>"></a>

				<?php wp_reset_query(); ?>
				<?php endwhile; ?>

			</div>

		</div>
	</div>

</section>

<?php get_footer(); ?>