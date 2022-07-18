<?php

/* Template Name: Modèle page d'accueil */

get_header() ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<div class="content">

<h1 >Hello, tu es sur la page <?php the_title() ?></h1>

<p> <?php the_content() ?> </p>

</div>

<div class="img-book container bg-info">
  <div class="row  text-center text-lg-start mb-4">
    <div class="col ">
    <img src="<?php get_template_directory_uri(the_field('image_1'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col">
    <img src="<?php get_template_directory_uri(the_field('image_2'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col d-none d-lg-block">
    <img src="<?php get_template_directory_uri(the_field('image_3'))  ?>" alt="image du book de charles cantin">
    </div>
  </div>
  <div class="row text-center text-lg-end mt-4">
    <div class="col">
    <img src="<?php get_template_directory_uri(the_field('image_4'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col">
    <img src="<?php get_template_directory_uri(the_field('image_5'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col d-none d-lg-block">
    <img src="<?php get_template_directory_uri(the_field('image_6'))  ?>" alt="image du book de charles cantin">
    </div>
  </div>
</div>



<?php endwhile; endif; ?>

<?php get_footer() ?>





