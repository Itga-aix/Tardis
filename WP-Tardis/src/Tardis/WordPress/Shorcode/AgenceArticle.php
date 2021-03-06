<?php
/**
 * Date: 15/06/2017
 * Time: 13:45
 */

namespace Tardis\WordPress\Shorcode;

class AgenceArticle {
    public function __construct()
    {
        add_shortcode('Article-Agence', array($this, 'shortcode'));
    }

    /**
     * @return string
     */
    public function shortcode()
    {
        ob_start();
global $post;
$args = array( 'post_type'=> 'Actualites','posts_per_page' => 6 );
$lastposts = get_posts( $args );
foreach ( $lastposts as $post ) :

    $contenu = get_field('contenu');
    $image = get_field('thumb');
    $image1 = get_field('thumb1');
    $image2 = get_field('thumb2');
    $image3 = get_field('thumb3');
    $image4 = get_field('thumb4');
    $image5 = get_field('thumb5');



    // vars
    $url = $image['url'];
    $title = $image['title'];
    $alt1 = $image1['alt'];
    $alt2 = $image2['alt'];
    $alt3 = $image3['alt'];
    $alt4 = $image4['alt'];
    $alt5 = $image5['alt'];

    $caption = $image['caption'];
    // thumbnail
    $size = 'thumbnail';
    $thumb = $image['sizes'][ $size ];
    $thumb1 = $image1['sizes'][ $size ];
    $thumb2 = $image2['sizes'][ $size ];
    $thumb3 = $image3['sizes'][ $size ];
    $thumb4 = $image4['sizes'][ $size ];
    $thumb5 = $image5['sizes'][ $size ];

  endforeach;


    ?>
    <style>/* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }</style>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <a href="<?php the_permalink() ?>" rel="bookmark"> </a>
       <?php echo $contenu ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thumbnail </h1>
            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <div  class="img-thumbnail"   >
                    <img id="myImg"  src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  />
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <a class="img-thumbnail"   href="#"   >
                    <img id="myImg2"  src="<?php echo $thumb1; ?>" alt="<?php echo $alt1; ?>"  />
                </a>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <a class="img-thumbnail"    href="#"   >
                    <img id="myImg3"  src="<?php echo $thumb2; ?>" alt="<?php echo $alt2; ?>"  />
                </a>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <a class="img-thumbnail"     href="#"   >
                    <img id="myImg4"  src="<?php echo $thumb3; ?>" alt="<?php echo $alt3; ?>"  />
                </a>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <a class="img-thumbnail"    href="#"   >
                    <img id="myImg5"  src="<?php echo $thumb4; ?>" alt="<?php echo $alt4; ?>"  />
                </a>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <a class="img-thumbnail"     href="#"   >
                    <img id="myImg6"  src="<?php echo $thumb5; ?>" alt="<?php echo $alt5; ?>"  />
                </a>
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <img class="modal-content" id="img02">
            <img class="modal-content" id="img03">
            <img class="modal-content" id="img04">
            <img class="modal-content" id="img05">
            <img class="modal-content" id="img06">
        </div>









    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
            img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }



        var img2 = document.getElementById('myImg2');
        var modalImg = document.getElementById("img02");
        img2.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var img3 = document.getElementById('myImg3');
        var modalImg = document.getElementById("img03");

        img3.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

<?php

            $myvariable = ob_get_clean();
            return $myvariable;
}


}