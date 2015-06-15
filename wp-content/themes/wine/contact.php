<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>

	<div id="fake-head">
		
	</div>

	<div class="container">

			<h1 class="text-center contact">Vous souhaitez réserver un espace publicité sur notre site, ou si vous avez une autre question, n'hésitez pas à nous contacter grâce au formulaire ci-dessous.</h1>
			<div id="contactcontain">
				<?php echo do_shortcode( '[contact-form-7 id="435" title="Formulaire de contact"]' ); ?>
			</div>
	</div>

<?php get_footer(); ?>