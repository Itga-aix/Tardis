<?php
/**
 * Created by PhpStorm.
 * User: mzb
 * Date: 29/06/2017
 * Time: 15:06
 */

namespace Tardis\WordPress\Shorcode;


class AgenceArticleHome
{
    public function __construct()
    {
        add_shortcode('Agence-Home', array($this, 'Cybermen'));

    }

    public function Cybermen()
    {

        ob_start();
        global $post;
        $args = array( 'post_type'=> 'Actualites', 'posts_per_page' => 3, 'order' => 'DESC','taxonomy' => 'categorie', );
        $lastposts = get_posts( $args );
      foreach ( $lastposts as $post ) : setup_postdata( $post );

      // variable générale pour la boucle
          $categories =  get_the_terms( $id, 'catégorie' );
          $image = get_field('thumb');

                // vars Image
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];
                $caption = $image['caption'];

                // thumbnail
                $size = 'medium_large';
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];



                ?>




<article  class="card">

    <div class="row">
        <div class="col-lg-12">
            <div class=" card__date">


                <span class=" card__date__month"><?php echo get_the_date(); ?></span>

            </div>
	        <div class=" card__thumb">
        <a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        </a>
	</div>


	<div class=" card__body">
          <?php
          if (is_array($categories))
          {
           foreach( $categories  as $cat) {
          ?>
		<div class=" card__category"> <?php echo $cat->name; ?> </div>
    <?php }}else
          { ?>
              <div class=" card__category"> Pas de catégorie </div>
         <?php }?>
		<h2 class=" card__title">  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		<p class=" card__description"> <?php

          $contenu =  get_field('contenu');
            //substr — Retourne un segment de chaîne, dans ce cas 150 caractères.
           echo substr( $contenu, 0,150 );
            ?> </p>
	    <a  class=" card__liens" href="<?php the_permalink(); ?>" > Lire la suite <span class="fa fa-chevron-right"></a></a>

	</div>

        </div>
    </div>


</article>

<?php


       endforeach;
        $myvariable = ob_get_clean();
        return $myvariable;
    }

}