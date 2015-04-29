	<?php get_header(); ?>

	<div id="home">
		<h1>Vous cherchez une définition </br>sur le vin et la dégustation ?</h1>

		<div class="container containmargintop">
			<div class="row">
				<div class="col-md-11 col-md-offset-0 col-xs-offset-1 col-xs-9">
					<!--<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">-->
					<form class="search-form" action="<?php bloginfo('home'); ?>" method="get" role="search">
						<input class="boxsearch" type="search" title="Rechercher :" id="s" name="s" value="" placeholder="Recherche…">
						<!--<input type="text" name="s" id="s" class="boxsearch" onfocus="doClear(this)" value="<?php _e('Search'); ?>"/>-->
				</div>
				<div class="col-md-1 col-xs-1">
					<span class="input-group-btn">
						<button type="submit" id="searchsubmit" class="btn btn-primary buttonsearch glyphicon glyphicon-search" />	
					</span>
				</div>
					</form>
				</div>
			</div>

		</div>

</div>

<?php get_footer(); ?>