
<?php if ( !is_home() ){ ?>
	<footer>

		<!-- AFFICHER LES CATEGORIES -->
		<ul class="categories">
		<?php
			$args = array(
				'title_li' => ''
				);
			wp_list_categories($args);
		?>
		</ul>
	
		<h2 class="text-center">&copy; Les Mots du Vin - Tous droits réservés - Attention l'abus d'alcool est dangereux pour la santé.</h2>
		<a href="http://www.abcdegustation.fr/index.cfm"><h2 class="text-center">Cours d'oenologie dans plus de 12 villes en France.</h2></a>

	</footer>
<?php } ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/jquery-ui.js"></script>-->
	<script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

<?php wp_footer();?>

</body>
</html>