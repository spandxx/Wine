<footer>
	
	<!--<h2><b>2014</b> LE DICO DU VIN</h2>-->

	<!-- AFFICHER LES CATEGORIES -->
	<ul class="categories">
	<?php
		$args = array(
			'title_li' => ''
			);
		wp_list_categories($args);
	?>
	</ul>
</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/jquery-ui.js"></script>-->
		<script src="<?php bloginfo('template_directory');?>/js/alert.js"></script>
	
	<!--<script>
		(function(){
			var searchBar = $('#recherche');
			if (searchBar.length) {
				searchBar.autocomplete({
					<?php	$my_query = new WP_Query('post_type=post');
					$array = [];
					$i = 0;
			if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

				array_push($array, get_the_title());
				$i;
			endwhile;
				echo 'source :' . json_encode($array) . ',';
			 endif; ?>
					minLength : 1
				});
			}
		})();
	</script>-->


</body>
</html>