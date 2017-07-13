<?php
/**
 * Created by PhpStorm.
 * User: mzb
 * Date: 12/07/2017
 * Time: 13:13
 */

namespace Tardis\WordPress\MetaBox;


class metabox
{
function __construct()
{
    add_filter( 'rwmb_meta_boxes',array($this,'Daleks') );
}

    function Daleks( $meta_boxes ) {
    $prefix = 'Itga-';

    $meta_boxes[] = array(
        'id' => 'untitled',
        'title' => esc_html__( 'Actualités', 'metabox-Tardis' ),
        'post_types' => array( 'post' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'titre',
                'type' => 'text',
                'name' => esc_html__( 'Text', 'metabox-Tardis' ),
                'desc' => esc_html__( "Merci d'introduire le tire de votre article', 'metabox-Tardis" ),
				'placeholder' => esc_html__( 'Titre de votre acticle', 'metabox-Tardis' ),
				'size' => 250,
			),
			array(
				'id' => $prefix . 'contenu',
				'name' => esc_html__( 'WYSIWYG', 'metabox-Tardis' ),
				'type' => 'wysiwyg',
				'desc' => esc_html__( 'Contenu de votre article', 'metabox-Tardis' ),
				'attributes' => array(),
				'js_options' => array(),
			),
			array(
				'id' => $prefix . 'datetime',
				'type' => 'datetime',
				'name' => esc_html__( 'Date Time Picker', 'metabox-Tardis' ),
			),
			array(
				'id' => $prefix . 'taxo',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Taxonomy', 'metabox-Tardis' ),
				'taxonomy' => 'category',
				'field_type' => 'select',
			),
			array(
				'id' => $prefix . 'image_advanced_5',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Image Advanced', 'metabox-Tardis' ),
			),
			array(
				'id' => $prefix . 'oembed_6',
				'type' => 'oembed',
				'name' => esc_html__( 'oEmbed', 'metabox-Tardis' ),
				'desc' => esc_html__( 'oEmbed description', 'metabox-Tardis' ),
			),
		),
	);

	return $meta_boxes;
}




}