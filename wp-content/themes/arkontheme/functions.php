<?php

function add_css_js(){
    //CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    //JS
}
add_action('wp_enqueue_scripts', 'add_css_js');