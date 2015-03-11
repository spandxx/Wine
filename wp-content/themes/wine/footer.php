<footer>
	
	<h2><b>2014</b> LE DICO DU VIN</h2>


</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory'); ?> /js/jquery.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory'); ?> /js/bootstrap.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<!--<script src="<?php bloginfo('template_directory'); ?> /js/jquery-ui.js"></script>-->
	
	<script>
		(function(){
			var searchBar = $('#recherche');
			if (searchBar.length) {
				searchBar.autocomplete({
					source: [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ],
					minLength : 3
				});
			}
		})();
	</script>

</body>
</html>