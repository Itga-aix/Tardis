<?php
/**
  * Date: 28/06/2017
 * Time: 13:12
 */


// register jquery and style on initialization
add_action('init', 'register_script');
function register_script() {
    wp_register_script( 'article_jquery', plugin_dir_url( __FILE__ ) .'/js/article.js', array('jquery'), '2.5.1' );
    wp_register_script( 'ModaleImages', plugin_dir_url( __FILE__ ) .'/js/Modal_Images.js', array('jquery'), '2' );
    wp_register_style( 'article_style', plugin_dir_url( __FILE__ )  .'/css/article.css', false, '1.0.0', 'all');
    wp_register_style( 'articleHome_style', plugin_dir_url( __FILE__ )  .'/css/ArticleHome.css', false, '1.0.0', 'all');

}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style');

function enqueue_style(){
    wp_enqueue_script('article_jquery');
    wp_enqueue_script('ModaleImages');

    wp_enqueue_style( 'article_style' );
    wp_enqueue_style( 'articleHome_style' );

}