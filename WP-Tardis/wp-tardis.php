<?php

/**
 * Plugin Name: WP Tardis
 * Description: Gestion des articles créer par les agences d'ITGA
 * Version: 1.0.0
 * Author: <a href="https://www.linkedin.com/in/mohammed-bensaad-17264ab8/" target="_blank">Mohammed Bensaad</a>
 */

require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
require_once( dirname( __FILE__ ) . '/src/Tardis/WordPress/Asset/TardisStyle.php');

/**
 * Loads the stylesheet for the plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


use Tardis\Interfaces;
use Tardis\WordPress\Shorcode\ArticleHome;
use Tardis\WordPress\Shorcode\AgenceArticle;
use Tardis\WordPress\Shorcode\AgenceArticleHome;
use Tardis\WordPress\CustomPostType\CPT;

$actions =
  [
  new AgenceArticle(),
  new AgenceArticleHome(),
  new CPT(),

  ];

$Tardis = new Interfaces($actions);
$Tardis->execute();