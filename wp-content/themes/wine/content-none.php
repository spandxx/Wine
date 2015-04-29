<?php get_header(); ?>


<div class="container-fluid">
	<div class="row">

		<div class="col-xs-12 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-2">

			<?php $my_query = new WP_Query(array('post_type' => 'publicite')); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<a href="<?php the_field('link_up_left_cat'); ?>" target="_blank">
				<img class="img-responsive marginpubcat" src="<?php the_field('image_up_left_cat');?>"/>
				</a>

				<a class="displaynone" href="<?php the_field('link_middle_left_cat'); ?>" target="_blank">
				<img class="img-responsive marginpubcat" src="<?php the_field('image_middle_left_cat');?>"/>
				</a>

				<a class="displaynone" href="<?php the_field('link_down_left_cat'); ?>" target="_blank">
				<img class="img-responsive marginpubcat" src="<?php the_field('image_down_left_cat');?>"/>
				</a>

			<?php wp_reset_query(); ?>
			<?php endwhile; ?>

		</div>

		<h1 class="mauvaiserecherche col-md-6">
			Oops ! Mauvaise recherche
		</h1>

		<div class="col-md-offset-0 col-md-2 ">
			<?php $my_query = new WP_Query(array('post_type' => 'publicite')); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

			<a href="<?php the_field('link_right_cat'); ?>" target="_blank"><img class="img-responsive" src="<?php the_field('image_right_cat');?>"></a>

			<?php wp_reset_query(); ?>
			<?php endwhile; ?>

		</div>

	</div>
</div>


<?php get_footer(); ?>