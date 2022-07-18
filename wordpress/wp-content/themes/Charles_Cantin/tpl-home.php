<?php

/* Template Name: Modèle page d'accueil */

get_header() ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<div class="content container">

<h1 class="mt-4">Hello, tu es sur la page <?php the_title() ?></h1>

<div class="w-lg-50 mt-4 mb-5"> <?php the_content() ?> </div>

</div>

<div class="img-book container">
  <div class="row  text-center text-lg-start mb-4 mb-lg-5">
    <div class="col ">
    <img src="<?php get_template_directory_uri(the_field('image_1'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col mt-4 mt-lg-0">
    <img src="<?php get_template_directory_uri(the_field('image_2'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col d-none d-lg-block">
    <img src="<?php get_template_directory_uri(the_field('image_3'))  ?>" alt="image du book de charles cantin">
    </div>
  </div>
  <div class="row text-center text-lg-end mt-4 mt-lg-5">
    <div class="col">
    <img src="<?php get_template_directory_uri(the_field('image_4'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col mt-4 mt-lg-0">
    <img src="<?php get_template_directory_uri(the_field('image_5'))  ?>" alt="image du book de charles cantin">
    </div>
    <div class="col d-none d-lg-block">
    <img src="<?php get_template_directory_uri(the_field('image_6'))  ?>" alt="image du book de charles cantin">
    </div>
  </div>
</div>



<?php endwhile; endif; ?>

<?php get_footer() ?>





