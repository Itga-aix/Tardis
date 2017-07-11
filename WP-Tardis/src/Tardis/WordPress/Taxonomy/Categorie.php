<?php
/**
 * Created by PhpStorm.
 * User: mzb
 * Date: 11/07/2017
 * Time: 16:44
 */

namespace Tardis\WordPress\Taxonomy;


class Categorie
{

    Public function __construct()
    {
        add_action('init',array($this,'Agence_CPT_taxonomy' ));

    }

// Register Custom Taxonomy
   Public function Agence_CPT_taxonomy() {

        $labels = array(
            'name'                       => _x( 'catégories', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'catégorie', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Catégorie', 'text_domain' ),
            'all_items'                  => __( 'Toutes les catégories', 'text_domain' ),
            'parent_item'                => __( 'Parent Item', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
            'new_item_name'              => __( 'Nouvelles catégorie', 'text_domain' ),
            'add_new_item'               => __( 'Ajouté une catégorie', 'text_domain' ),
            'edit_item'                  => __( 'Editer une catégorie', 'text_domain' ),
            'update_item'                => __( 'mise à jour', 'text_domain' ),
            'view_item'                  => __( 'Voir', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
            'popular_items'              => __( 'Popular Items', 'text_domain' ),
            'search_items'               => __( 'Search Items', 'text_domain' ),
            'not_found'                  => __( 'Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No items', 'text_domain' ),
            'items_list'                 => __( 'Items list', 'text_domain' ),
            'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'catégorie', array( 'actualites' ), $args );

    }



}