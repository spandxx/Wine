<?php

/* CUSTOM */

if(function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
}

function cpt_init() {

    $labels = array(
        'name' => 'Publicite',
        'singular_name' => 'publicite',
        'add_new' => 'Ajouter une publicité',
        'add_new_item' => 'Ajouter une publicité',
        'edit_item' => 'Editer une publicité',
        'new_item' => 'Nouvelle publicité',
        'all_items' => 'Toutes les publicités',
        'view_item' => 'Voir les publicités',
        'search_items' => 'Chercher une publicité',
        'not_found' =>  'Aucune publicité trouvée',
        'not_found_in_trash' => 'Aucune publicité trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Publicité'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'publicité' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    );

    register_post_type('publicite', $args );
}

add_action('init', 'cpt_init');

add_action('template_redirect', 'single_result');
function single_result() {
    if (is_search()) {
        global $wp_query;
        if ($wp_query->post_count == 1) {
            wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
        }
    }
}


add_filter( 'search_autocomplete_modify_results', 'saModifyResults' );

function saModifyResults( $results ) {
  $newResults = array();
  foreach( $results as $result ) {
    $newResults[] = array(
      'title' => $result['title'],
      'url' => $result['url']
    );
  }
  return $newResults;
}

add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }


?>