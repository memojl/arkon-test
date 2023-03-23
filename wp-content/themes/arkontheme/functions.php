<?php

function add_css_js(){
    //CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    //JS
    wp_enqueue_script('popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery'), '2.11', true);
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array('popper'), '5.2', true);

}
add_action('wp_enqueue_scripts', 'add_css_js');
