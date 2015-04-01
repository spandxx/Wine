<?php get_header(); ?>

	<div id="home">
			<h1>Vous cherchez une définition </br>sur le vin et la dégustation ?</h1>

	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<input type="text" name="s"  class="boxsearch" id="s"/>
		<span class="input-group-btn">
			<button type="submit" id="searchsubmit" class="btn btn-primary buttonsearch glyphicon glyphicon-search" />	
		</span>
	</form>

	</div>

<?php get_footer(); ?>