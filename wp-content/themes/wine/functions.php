<?php

function add_js_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/autocomplete.js', array('jquery'), '1.0', true );

    // pass Ajax Url to script.js
    wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action('wp_enqueue_scripts', 'add_js_scripts');


add_action( 'wp_ajax_search', 'search' );
add_action( 'wp_ajax_nopriv_search', 'search' );

function search() {
    // récupération du mot tapé dans la recherche
    $keyword = $_POST['keyword'];

    $args = array(
        's' => $keyword
    );

    $ajax_query = new WP_Query($args);

    if ( $ajax_query->have_posts() ) : while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
        get_template_part( 'article' );
    endwhile;
    endif;

    die();
}

?>