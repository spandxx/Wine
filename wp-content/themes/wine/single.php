<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?> 
  <section id="definition">
    <div class="container">
      <div class="row">
       <div class="col-sm-7 blog-main">

        <h1 class="titredef">
          <a class="big"><?php the_title(); ?></a>
          <a class="revenir" href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><img src="<?php bloginfo('template_directory');?>/img/fleche.png">Retour à la liste des mots</a></h1> 

          <p class="contentdef"><?php the_content(); ?> </p>

          <h2>Définitions similaires</h2>

          <?php $my_query = new WP_Query(array('post_type' => 'post', 'orderby' => 'rand', 'order' => 'ASC', 'posts_per_page' => '2')); ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          
          <ul> 
            <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a></li> 
          </ul> 

          <?php wp_reset_query(); ?>
          <?php endwhile; ?>

        </div>


      <?php endwhile; ?> 

    </div>
  </div>
</section>


<?php get_footer(); ?> 