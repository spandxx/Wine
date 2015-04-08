<?php
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title(); ?>
	</header>

			<?php if ( have_posts() ) : the_post(); ?>

				<?php the_content(); 
				
			endif; ?>

</article>
