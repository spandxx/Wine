<?php

function add_js_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/autocomplete.js', array('jquery'), '1.0', true );

    // pass Ajax Url to script.js
    wp_localize_script('script', 'ajaxurl', admin_url('admin-ajax.php') );
}
add_action('wp_enqueue_scripts', 'add_js_scripts');


?>