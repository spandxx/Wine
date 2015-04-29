
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
	</footer>
<?php } ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/jquery-ui.js"></script>-->
	<script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

<<<<<<< HEAD

=======
				array_push($array, get_the_title());
				$i;
			endwhile;
				echo 'source :' . json_encode($array) . ',';
			 endif; ?>
					minLength : 1
				});
			}
		})();
	</script>*/?>
<?php wp_footer();?>
>>>>>>> 5375b0a082301de4d7969199618ab22937e6399f
</body>
</html>