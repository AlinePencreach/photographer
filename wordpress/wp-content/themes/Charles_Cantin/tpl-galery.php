<?php

/* Template Name: Modèle page galerie */

get_header() ?>

<h1>Hello, tu es sur la page <?php the_title() ?></h1>

<h1 class="display-2">C'est la galerie</h1>

<div class="container">
<?php the_content() ?>
</div>


<?php get_footer() ?>