<?php get_header(); ?>

	<div id="home">
		<h1>Vous cherchez une définition </br>sur le vin et la dégustation ?</h1>

		<div class="container containmargintop">
			<div class="row">
				<div class="col-md-11 col-md-offset-0 col-xs-offset-1 col-xs-9 nopadding">
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
						<input type="text" name="s"  class="boxsearch" id="s"/>
				</div>
				<div class="col-md-1 col-xs-1 nopadding">
					<span class="input-group-btn">
						<button type="submit" id="searchsubmit" class="btn btn-primary buttonsearch glyphicon glyphicon-search" />	
					</span>
				</div>
					</form>
				</div>
			</div>

		</div>

		<section class="home">
		
			<ul class="categories">
				<?php
					$args = array(
						'title_li' => ''
						);
					wp_list_categories($args);
				?>
			</ul>

		</section>
	
	</div>

	<div id="homenext">

		<nav class="navbar navbar-default colornavbarheader">
		    <div class="container">
		      <div class="navbar-header">
		        <a href="<?php echo home_url(); ?>">
			        <img class="img-responsive imglogo" src="<?php bloginfo('template_directory');?>/img/logo.png"/>
		        </a>
		      </div>
		    </div>
		</nav>

		<?php include('category.php'); ?>	

	</div>



<?php get_footer(); ?>