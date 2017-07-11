<?php

namespace Tardis\WordPress\CustomPostType;

class CPT{
	
	Public function __construct(){
		
		add_action( 'init', array ($this, 'Itga_custom_init') );
	}

  Public function Itga_custom_init() {
        $args = array(
            'public' => true,
            'label'  => __( 'Actualités des Agences', 'textdomain' ),
            'menu_icon' => 'dashicons-book',
            'supports' => array('title',  'revisions',   'excerpt',  'thumbnail' ),
        );
        register_post_type( 'Actualites', $args );
    }



}