<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?> 
  <section id="definition">
    <div class="container">
      <div class="row">
       <div class="col-sm-7 blog-main">

        <h1 class="titredef">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          <!-- AFFICHER LA CATEGORIE
            <?php
              foreach((get_the_category()) as $category) {
              echo $category->cat_name . ' ';
              }
            ?> 
          -->
          <small a href="#">Retour à la liste des mots</small></h1> 

          <p class="contentdef"><?php the_content(); ?> </p>

          <h2>Définitions similaires</h2>

          <ul> 
            <li> Cryo-extraction (vinification) </li> 
            <li> Macération (vinification) </li> 
          </ul> 

        </div>


      <?php endwhile; ?> 

      <div class="col-sm-2 col-sm-offset-2 blog-sidebar">

        <img class="img-responsive pub" src="<?php bloginfo('template_directory');?>/img/calque2.png"></a>

      </div>

    </div>
  </div>
</div>
</section>


<?php get_footer(); ?> 