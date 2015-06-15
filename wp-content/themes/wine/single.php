<?php get_header(); ?>

  <?php if ( !is_home() ){ ?>
    <div id="fake-head">
    </div>
  <?php } ?>

<?php while ( have_posts() ) : the_post(); ?> 

  <section id="definition">
    <div class="container">

      <h2 class="text-center">TOUS LES MOTS DU VIN POUR AMELIORER SA CULTURE</h2>
        
      <div id="traitfin">
          
      </div>
        
      <div class="row">
        <div class="col-md-9">
  
          <h1><?php the_title(); ?></h1>
            
            <div id="revenir">
              <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                <img src="<?php bloginfo('template_directory');?>/img/fleche.png">Retour à la liste des mots
              </a>
            </div>            
          
          <p><?php the_content(); ?></p>
            
          
          <div class="row padtop">
            <div class="col-md-6">
            <h3>Mots du Vin similaires</h3>
            <ul>
              <?php $my_query = new WP_Query(array('post_type' => 'post', 'orderby' => 'rand', 'order' => 'ASC', 'posts_per_page' => '5')); ?>
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <h4>
                      <?php the_title(); ?>
                    </h4>
                  </a>
                </li>
                <?php wp_reset_query(); ?>
              <?php endwhile; ?> 
            </ul>
            </div>
              <div class="col-md-6">
                <h3>Mots clés du Vin</h3>
                  <?php
                    $posttags = get_the_tags();
                    $count = 0;
                      if ($posttags) { 
                      foreach($posttags as $tag) { 
                        $count++;
                          if ($count > 1){ ?>
                          <button type="button" class="btn btn-danger margtop">
                            <h4>
                               <?php echo $tag->name . ' ';?>
                            </h4>
                          </button>
                          <?php
                          }
                        }
                      }?>
            </div>
          </div> 

        <?php endwhile; ?> 
        <?php wp_reset_query(); ?>
      </div>

      <div class="col-md-3">

        <?php $my_query = new WP_Query(array('post_type' => 'publicite')); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?> 

        <a href="<?php the_field('lien_article'); ?>">
          <img class="img-responsive dispnone" src="<?php the_field('image_article'); ?>" alt="pub-abdegustation">
        </a>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

      </div>

      </div>
    </div>

  </section>


<?php get_footer(); ?> 