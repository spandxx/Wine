<?php get_header(); ?>

<div id="fake-head">
	
</div>

		<?php if ( have_posts() ) : ?>

			<?php

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
