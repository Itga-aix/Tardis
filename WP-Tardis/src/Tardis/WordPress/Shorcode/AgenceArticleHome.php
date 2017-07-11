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
        $content ='

<div class="row">
   <div class="col-lg-4">
   
<article  class="card">

	<div class=" card__thumb">
		<img src="http://lorempicsum.com/futurama/378/235/2">
	</div>

	<div class=" card__date">
		<span class=" card__date__day">12</span>
		<span class=" card__date__month">Mai</span>
	</div>
	<div class=" card__body">
	
		<div class=" card__category"> Photo, livre</div>

		<h2 class=" card__title"> Bender Should Not be Allowed on TV</h2>
		<p class=" card__description"> Si vous pensez que le ticket ne doit pas être fermé ou si le ticket n\'a pas été résolu, merci de vous connecter à texte .</p>
	    <a  class=" card__liens" href="#" > Lire la suite ></a></a>
	</div>
</article>
  </div>


<div class="col-lg-4">
   
<article  class="card">

	<div class=" card__thumb">
		<img src="http://lorempicsum.com/futurama/378/235/2">
	</div>

	<div class=" card__date">
		<span class=" card__date__day">12</span>
		<span class=" card__date__month">Mai</span>
	</div>
	<div class=" card__body">
	
		<div class=" card__category"> Photo, livre</div>

		<h2 class=" card__title"> Bender Should Not be Allowed on TV</h2>
		<p class=" card__description"> Comment donner de l\'importance à certains mots de son texte .</p>
	    <a  class=" card__liens" href="#" > Lire la suite ></a></a>
	</div>
</article>
 </div>

<div class="col-lg-4">
 <article  class="card">
	<div class=" card__thumb">
		<img src="http://lorempicsum.com/futurama/378/235/2">
	</div>
	<div class=" card__date">
		<span class=" card__date__day">12</span>
		<span class=" card__date__month">Mai</span>
	</div>
	<div class=" card__body">
		<div class=" card__category"> Photo, livre</div>
		<h2 class=" card__title"> Bender Should Not be Allowed on TV</h2>
		<p class=" card__description"></p>
	    <a  class=" card__liens" href="#" > Lire la suite ></a></a>
	</div>
</article>
</div>

 </div>

';

        return $content;
    }

}